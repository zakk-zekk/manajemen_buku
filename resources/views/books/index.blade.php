@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-md">

    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-semibold">Daftar Buku</h1>

        <a href="/books/create" 
           class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
            + Tambah Buku
        </a>
    </div>

    <!-- SEARCH -->
    <form action="/books" method="GET" class="mb-4">
        <input type="text" name="search" placeholder="Cari judul atau penulis..."
            class="w-full border border-gray-300 p-2 rounded-md focus:ring-2 focus:ring-indigo-500">
    </form>

    <!-- TABLE -->
    <table class="w-full table-auto border-collapse">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-3 border">No</th>
                <th class="p-3 border">Judul</th>
                <th class="p-3 border">Penulis</th>
                <th class="p-3 border">Tahun</th>
                <th class="p-3 border">Penerbit</th>
                <th class="p-3 border">Harga</th>
                <th class="p-3 border">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($books as $book)
            <tr class="hover:bg-gray-100">
                <td class="p-3 border">{{ $loop->iteration }}</td>
                <td class="p-3 border">{{ $book->judul }}</td>
                <td class="p-3 border">{{ $book->penulis }}</td>
                <td class="p-3 border">{{ $book->tahun }}</td>
                <td class="p-3 border">{{ $book->penerbit }}</td>
                <td class="p-3 border">Rp {{ number_format($book->harga, 0, ',', '.') }}</td>

                <td class="p-3 border flex space-x-2">
                    <a href="/books/{{ $book->id }}/edit" 
                        class="text-blue-600 hover:underline">Edit</a>

                    <form action="/books/{{ $book->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline" 
                                onclick="return confirm('Hapus buku ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- PAGINATION -->
    <div class="mt-4">
        {{ $books->links() }}
    </div>

</div>
@endsection
