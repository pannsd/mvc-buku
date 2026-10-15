<?php

class BukuController
{
    public function __construct(private Buku $model) {}

    public function index(): void
    {
        $buku = $this->model->getAll();
        $message = $_GET['message'] ?? null;
        require __DIR__ . '/../views/buku/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/buku/create.php';
    }

    public function store(): void
    {
        $data = $this->validateInput($_POST);
        $this->model->insert($data);
        header('Location: index.php?page=buku&message=Data buku berhasil ditambahkan');
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $buku = $this->model->findById($id);

        if (!$buku) {
            http_response_code(404);
            exit('Data buku tidak ditemukan.');
        }

        require __DIR__ . '/../views/buku/edit.php';
    }

    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $data = $this->validateInput($_POST);
        $this->model->update($id, $data);
        header('Location: index.php?page=buku&message=Data buku berhasil diperbarui');
        exit;
    }

    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $this->model->delete($id);
        header('Location: index.php?page=buku&message=Data buku berhasil dihapus');
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'judul'        => trim($input['judul'] ?? ''),
            'penulis'      => trim($input['penulis'] ?? ''),
            'penerbit'     => trim($input['penerbit'] ?? ''),
            'tahun_terbit' => (int) ($input['tahun_terbit'] ?? 0),
            'stok'         => (int) ($input['stok'] ?? 0),
        ];

        if ($data['judul'] === '' || $data['penulis'] === '' || $data['penerbit'] === '') {
            exit('Judul, penulis, dan penerbit wajib diisi.');
        }

        if ($data['tahun_terbit'] <= 0 || $data['stok'] < 0) {
            exit('Tahun terbit dan stok harus berupa angka yang valid.');
        }

        return $data;
    }
}