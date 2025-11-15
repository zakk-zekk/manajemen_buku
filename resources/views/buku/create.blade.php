<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h1>Tambah Buku</h1>
<a href="{{ route('buku.index') }}">Kembali</a>

<form method="POST" action="{{ route('buku.store') }}">
    @csrf

    <label>Judul:</label><br>
    <input type="text" name="judul" required><br><br>

    <label>Penulis:</label><br>
    <input type="text" name="penulis" required><br><br>

    <label>Penerbit:</label><br>
    <input type="text" name="penerbit" required><br><br>

    <label>Tahun Terbit:</label><br>
    <input type="number" name="tahun_terbit" required><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
