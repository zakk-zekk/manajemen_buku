<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Buku</title>
</head>
<body>
<h2>Daftar Buku</h2>
<a href="tambah.php">Tambah Buku</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    $sql = mysqli_query($conn, "SELECT * FROM buku");
    while ($row = mysqli_fetch_assoc($sql)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['judul']; ?></td>
        <td><?= $row['penulis']; ?></td>
        <td><?= $row['penerbit']; ?></td>
        <td><?= $row['tahun_terbit']; ?></td>
        <td><?= $row['harga']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus buku ini?');">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
