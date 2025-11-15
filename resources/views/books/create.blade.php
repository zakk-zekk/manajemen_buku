@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-md w-2/3 mx-auto">

    <h1 class="text-2xl font-semibold mb-4">Tambah Buku</h1>

    <form action="/books" method="POST">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium">Judul Buku</label>
                <input type="text" name="judul" 
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Penulis</label>
                <input type="text" name="penulis" 
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Tahun Terbit</label>
                <input type="number" name="tahun"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Penerbit</label>
                <input type="text" name="penerbit"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Jumlah Buku</label>
                <input type="number" name="jumlah"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>

            <div>
                <label class="block font-medium">Harga</label>
                <input type="number" name="harga"
                    class="w-full border border-gray-300 p-2 rounded-md mb-3"
                    required>
            </div>
        </div>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
            Simpan
        </button>
    </form>
</div>
@endsection
