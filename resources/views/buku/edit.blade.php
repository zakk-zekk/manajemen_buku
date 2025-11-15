<h2>Edit Buku</h2>

<form action="{{ route('buku.update', $b->id) }}" method="POST">
    @csrf
    @method('PUT')
    Judul : <input type="text" name="judul" value="{{ $b->judul }}"><br>
    Penulis : <input type="text" name="penulis" value="{{ $b->penulis }}"><br>
    Penerbit : <input type="text" name="penerbit" value="{{ $b->penerbit }}"><br>
    Tahun : <input type="number" name="tahun" value="{{ $b->tahun }}"><br>
    <button type="submit">Update</button>
</form>
