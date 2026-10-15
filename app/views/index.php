<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Data Buku</title>
</head>
<body>
    <h1>Daftar Buku Perpustakaan</h1>

    <?php if (!empty($message)): ?>
        <p style="color: green;"><strong><?= htmlspecialchars($message) ?></strong></p>
    <?php endif; ?>

    <p><a href="index.php?page=buku&action=create">Tambah Data Buku</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($buku)): ?>
                <tr>
                    <td colspan="7" align="center">Belum ada data buku.</td>
                </tr>
            <?php else: ?>
                <?php $no = 1; foreach ($buku as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($row['judul']) ?></td>
                        <td><?= htmlspecialchars($row['penulis']) ?></td>
                        <td><?= htmlspecialchars($row['penerbit']) ?></td>
                        <td><?= htmlspecialchars((string) $row['tahun_terbit']) ?></td>
                        <td><?= htmlspecialchars((string) $row['stok']) ?></td>
                        <td>
                            <a href="index.php?page=buku&action=edit&id=<?= (int) $row['id'] ?>">Edit</a>
                            <form action="index.php?page=buku&action=delete" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                                <input type="hidden" name="id" value="<?= (int) $row['id'] ?>">
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>