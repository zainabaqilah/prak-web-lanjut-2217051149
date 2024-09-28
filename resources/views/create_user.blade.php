<!DOCTYPE html>
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

<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-xl p-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Form User</h1>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Input Nama -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <img src="https://img.icons8.com/ios/24/000000/user--v1.png" alt="Nama Icon" class="mr-2" /> Nama:
                </label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan nama"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300" />
            </div>

            <!-- Input NPM -->
            <div>
                <label for="npm" class="block text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <img src="https://img.icons8.com/ios/24/000000/id-verified.png" alt="NPM Icon" class="mr-2" /> NPM:
                </label>
                <input type="text" name="npm" id="npm" placeholder="Masukkan NPM"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300" />
            </div>

            <!-- Input Kelas -->
            <div>
                <label for="kelas" class="block text-sm font-medium text-gray-600 mb-2 flex items-center">
                    <img src="https://img.icons8.com/ios/24/000000/class.png" alt="Kelas Icon" class="mr-2" /> Kelas:
                </label>
                <input type="text" name="kelas" id="kelas" placeholder="Masukkan kelas"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300" />
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
</body>

</html>