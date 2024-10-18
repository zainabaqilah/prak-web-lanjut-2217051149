<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: linear-gradient(to right, #667eea, #764ba2);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex items-center justify-center"> -->



@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex items-center justify-center">
    <div class="my-10 mx-96 w-full max-w-md bg-white rounded-lg shadow-xl p-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Form User</h1>

        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <!-- Input Nama -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <img src="https://img.icons8.com/ios/24/000000/user--v1.png" alt="Nama Icon" class="mr-2" /> Nama:
                </label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan nama"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300" />
                    @foreach($errors->get('nama') as $error)
                        <p class="mt-1 text-base text-white bg-gradient-to-r from-red-500 to-red-700 border border-red-600 rounded-xl p-2 shadow-md font-semibold">{{ $error }}</p>
                    @endforeach
            </div>

            <!-- Input NPM -->
            <div>
                <label for="npm" class="block text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <img src="https://img.icons8.com/ios/24/000000/id-verified.png" alt="NPM Icon" class="mr-2" /> NPM:
                </label>
                <input type="text" name="npm" id="npm" placeholder="Masukkan NPM"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300" />
                @foreach($errors->get('nama') as $error)
                    <p class="mt-1 text-base text-white bg-gradient-to-r from-red-500 to-red-700 border border-red-600 rounded-xl p-3 shadow-md font-semibold">{{ $error }}</p>
                @endforeach
            </div>

            <!-- Input Kelas -->
            <div>
                <label for="kelas" class="block text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <img src="https://img.icons8.com/ios/24/000000/class.png" alt="Kelas Icon" class="mr-2" /> Kelas:
                </label>
                <select type="text" name="kelas_id" id="kelas_id" placeholder="Masukkan kelas" class="w-full border border-gray-300 rounded-lg px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300">
                    <option value="" disabled selected>Pilih kelas</option>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
                @foreach($errors->get('nama') as $error)
                    <p class="mt-1 text-base text-white bg-gradient-to-r from-red-500 to-red-700 border border-red-600 rounded-xl p-3 shadow-md font-semibold">{{ $error }}</p>
                @endforeach
            </div>

            <div>
                <label for="foto" class="block text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <img src="https://img.icons8.com/ios/24/000000/id-verified.png" alt="NPM Icon" class="mr-2" /> NPM:
                </label>
                <input type="file" name="foto" id="foto" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300" />
                @foreach($errors->get('nama') as $error)
                    <p class="mt-1 text-base text-white bg-gradient-to-r from-red-500 to-red-700 border border-red-600 rounded-xl p-3 shadow-md font-semibold">{{ $error }}</p>
                @endforeach
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-purple-500 to-indigo-500 text-white font-semibold py-3 rounded-lg shadow-lg hover:from-indigo-500 hover:to-purple-500 transition duration-500 ease-in-out transform hover:scale-105 flex justify-center items-center">
                    <img src="https://img.icons8.com/ios/24/ffffff/submit-progress.png" alt="Submit Icon" class="mr-2" />
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
<!-- </body>

</html> -->