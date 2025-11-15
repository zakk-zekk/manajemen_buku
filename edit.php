<?php 
include 'koneksi.php'; 
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM buku WHERE id=$id"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>

<h2>Edit Data Buku</h2>
<a href="index.php">Kembali</a>
<br><br>

<form method="POST">
    Judul Buku: <br>
    <input type="text" name="judul" value="<?= $data['judul']; ?>" required><br><br>

    Penulis: <br>
    <input type="text" name="penulis" value="<?= $data['penulis']; ?>" required><br><br>

    Penerbit: <br>
    <input type="text" name="penerbit" value="<?= $data['penerbit']; ?>" required><br><br>

    Tahun Terbit: <br>
    <input type="number" name="tahun_terbit" value="<?= $data['tahun_terbit']; ?>" required><br><br>

    Harga: <br>
    <input type="number" step="0.01" name="harga" value="<?= $data['harga']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $judul        = $_POST['judul'];
    $penulis      = $_POST['penulis'];
    $penerbit     = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $harga        = $_POST['harga'];

    $query = mysqli_query($conn, "UPDATE buku SET 
        judul='$judul',
        penulis='$penulis',
        penerbit='$penerbit',
        tahun_terbit='$tahun_terbit',
        harga='$harga'
        WHERE id=$id
    ");

    if ($query) {
        echo "<script>alert('Data berhasil diupdate'); window.location='index.php';</script>";
    } else {
        echo "Gagal mengupdate data!";
    }
}
?>

</body>
</html>
