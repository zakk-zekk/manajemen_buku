<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>

<h1>Daftar Buku</h1>
<a href="{{ route('buku.create') }}">Tambah Buku</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>

    @foreach($buku as $b)
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->penulis }}</td>
        <td>{{ $b->penerbit }}</td>
        <td>{{ $b->tahun_terbit }}</td>
        <td>
            <a href="{{ route('buku.edit', $b->id) }}">Edit</a>

            <form action="{{ route('buku.destroy', $b->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
