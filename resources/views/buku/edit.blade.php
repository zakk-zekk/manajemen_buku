<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>

<h1>Edit Buku</h1>
<a href="{{ route('buku.index') }}">Kembali</a>

<form method="POST" action="{{ route('buku.update', $buku->id) }}">
    @csrf
    @method('PUT')

    <label>Judul:</label><br>
    <input type="text" name="judul" value="{{ $buku->judul }}" required><br><br>

    <label>Penulis:</label><br>
    <input type="text" name="penulis" value="{{ $buku->penulis }}" required><br><br>

    <label>Penerbit:</label><br>
    <input type="text" name="penerbit" value="{{ $buku->penerbit }}" required><br><br>

    <label>Tahun Terbit:</label><br>
    <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
