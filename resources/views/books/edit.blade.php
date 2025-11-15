@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-md w-2/3 mx-auto">

    <h1 class="text-2xl font-semibold mb-4">Edit Buku</h1>

    <form action="/books/{{ $book->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium">Judul Buku</label>
                <input type="text" name="judul" value="{{ $book->judul }}"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Penulis</label>
                <input type="text" name="penulis" value="{{ $book->penulis }}"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Tahun Terbit</label>
                <input type="number" name="tahun" value="{{ $book->tahun }}"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Penerbit</label>
                <input type="text" name="penerbit" value="{{ $book->penerbit }}"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Jumlah Buku</label>
                <input type="number" name="jumlah" value="{{ $book->jumlah }}"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Harga</label>
                <input type="number" name="harga" value="{{ $book->harga }}"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>
        </div>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
            Update
        </button>
    </form>

</div>
@endsection
