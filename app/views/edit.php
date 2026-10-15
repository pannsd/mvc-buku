<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Data Buku</h1>
    <p><a href="index.php?page=buku">Kembali ke Daftar</a></p>

    <form action="index.php?page=buku&action=update" method="POST">
        <input type="hidden" name="id" value="<?= (int) $buku['id'] ?>">

        <p>
            <label>Judul Buku:</label><br>
            <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required style="width: 300px;">
        </p>
        <p>
            <label>Penulis:</label><br>
            <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required style="width: 300px;">
        </p>
        <p>
            <label>Penerbit:</label><br>
            <input type="text" name="penerbit" value="<?= htmlspecialchars($buku['penerbit']) ?>" required style="width: 300px;">
        </p>
        <p>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="tahun_terbit" value="<?= htmlspecialchars((string) $buku['tahun_terbit']) ?>" required style="width: 150px;">
        </p>
        <p>
            <label>Jumlah Stok:</label><br>
            <input type="number" name="stok" value="<?= htmlspecialchars((string) $buku['stok']) ?>" required min="0" style="width: 150px;">
        </p>
        <button type="submit">Perbarui</button>
    </form>
</body>
</html>