<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- NAVBAR -->
    <nav class="bg-indigo-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between">
            <a href="/" class="text-xl font-semibold">Manajemen Buku</a>

            <div class="space-x-4">
                <a href="/" class="hover:text-gray-300">Home</a>
                <a href="/books" class="hover:text-gray-300">Data Buku</a>
                <a href="/books/create" class="bg-white text-indigo-700 px-3 py-1 rounded-md font-semibold hover:bg-gray-200">
                    Tambah Buku
                </a>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container mx-auto mt-6">
        @yield('content')
    </div>

</body>
</html>
