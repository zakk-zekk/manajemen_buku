<h2>Tambah Buku</h2>

<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    Judul : <input type="text" name="judul"><br>
    Penulis : <input type="text" name="penulis"><br>
    Penerbit : <input type="text" name="penerbit"><br>
    Tahun : <input type="number" name="tahun"><br>
    <button type="submit">Simpan</button>
</form>
