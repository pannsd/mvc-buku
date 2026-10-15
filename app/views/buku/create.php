<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Data Buku</h1>
    <p><a href="index.php?page=buku">Kembali ke Daftar</a></p>

    <form action="index.php?page=buku&action=store" method="POST">
        <p>
            <label>Judul Buku:</label><br>
            <input type="text" name="judul" required style="width: 300px;">
        </p>
        <p>
            <label>Penulis:</label><br>
            <input type="text" name="penulis" required style="width: 300px;">
        </p>
        <p>
            <label>Penerbit:</label><br>
            <input type="text" name="penerbit" required style="width: 300px;">
        </p>
        <p>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="tahun_terbit" required style="width: 150px;">
        </p>
        <p>
            <label>Jumlah Stok:</label><br>
            <input type="number" name="stok" required min="0" style="width: 150px;">
        </p>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>