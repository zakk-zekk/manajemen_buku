<h2>Daftar Buku</h2>

<form method="GET" action="{{ route('buku.index') }}">
    <input type="text" name="keyword" placeholder="Cari buku...">
    <button type="submit">Cari</button>
</form>

<a href="{{ route('buku.create') }}">Tambah Buku</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Aksi</th>
    </tr>

    @foreach($buku as $b)
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->penulis }}</td>
        <td>{{ $b->penerbit }}</td>
        <td>{{ $b->tahun }}</td>
        <td>
            <a href="{{ route('buku.edit', $b->id) }}">Edit</a>
            <form action="{{ route('buku.destroy', $b->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

{{ $buku->links() }}
