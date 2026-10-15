<?php

class Buku
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM buku ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM buku WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $result = $stmt->fetch();
        return $result ?: null;
    }

    public function insert(array $data): bool
    {
        $stmt = $this->db->prepare(
            "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, stok) 
             VALUES (:judul, :penulis, :penerbit, :tahun_terbit, :stok)"
        );
        return $stmt->execute([
            ':judul'        => $data['judul'],
            ':penulis'      => $data['penulis'],
            ':penerbit'     => $data['penerbit'],
            ':tahun_terbit' => $data['tahun_terbit'],
            ':stok'         => $data['stok'],
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $stmt = $this->db->prepare(
            "UPDATE buku 
             SET judul = :judul, penulis = :penulis, penerbit = :penerbit, tahun_terbit = :tahun_terbit, stok = :stok 
             WHERE id = :id"
        );
        return $stmt->execute([
            ':id'           => $id,
            ':judul'        => $data['judul'],
            ':penulis'      => $data['penulis'],
            ':penerbit'     => $data['penerbit'],
            ':tahun_terbit' => $data['tahun_terbit'],
            ':stok'         => $data['stok'],
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare("DELETE FROM buku WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}