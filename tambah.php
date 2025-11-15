<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Buku Baru</h2>
<a href="index.php">Kembali</a>
<br><br>

<form method="POST">
    Judul Buku: <br>
    <input type="text" name="judul" required><br><br>

    Penulis: <br>
    <input type="text" name="penulis" required><br><br>

    Penerbit: <br>
    <input type="text" name="penerbit" required><br><br>

    Tahun Terbit: <br>
    <input type="number" name="tahun_terbit" required><br><br>

    Harga: <br>
    <input type="number" step="0.01" name="harga" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $judul        = $_POST['judul'];
    $penulis      = $_POST['penulis'];
    $penerbit     = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $harga        = $_POST['harga'];

    $query = mysqli_query($conn, "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, harga)
                                  VALUES ('$judul', '$penulis', '$penerbit', '$tahun_terbit', '$harga')");

    if ($query) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
    } else {
        echo "Gagal menambahkan data!";
    }
}
?>

</body>
</html>
