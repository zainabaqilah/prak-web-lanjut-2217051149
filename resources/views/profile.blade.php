<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-3xl bg-white rounded-3xl shadow-xl overflow-hidden transition transform hover:scale-105 hover:shadow-2xl">
        <div class="ml-28 flex items-center">
            
           
                <div class="mr-10 bg-gradient-to-r from-purple-400 to-blue-400 w-48 h-48 rounded-full bg-white flex items-center justify-center border-4 border-white shadow-lg">
                    
                    <svg class="w-28 h-28 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>
          

            <!-- Labels -->
            <div class="flex-grow p-10">
                <h1 class="text-5xl font-bold text-gray-800 mb-2">Profile</h1>
                <p class="text-xl text-gray-600 mb-6">Pemrog. Web Lanjut</p>
                <div class="space-y-4">
                <div class="flex items-center bg-green-50 border-l-4 border-green-400 text-gray-700 text-xl font-semibold px-4 py-3 w-64 shadow-md hover:bg-green-100 rounded transition duration-300">
                        <svg class="w-6 h-6 mr-2 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                        {{ $nama }}
                    </div>
                    <div class="flex items-center bg-blue-50 border-l-4 border-blue-400 text-gray-700 text-xl font-semibold px-4 py-3 w-64 shadow-md hover:bg-blue-100 rounded transition duration-300">
                        <svg class="w-6 h-6 mr-2 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 4h16v2H4zm0 6h16v2H4zm0 6h16v2H4z"/>
                        </svg>
                        {{ $nama_kelas ?? 'Kelas Tidak Ditemukan' }}
                    </div>
                    <div class="flex items-center bg-yellow-50 border-l-4 border-yellow-400 text-gray-700 text-xl font-semibold px-4 py-3 w-64 shadow-md hover:bg-yellow-100 rounded transition duration-300">
                        <svg class="w-6 h-6 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 4h16v2H4zm0 6h16v2H4zm0 6h16v2H4z"/>
                        </svg>
                        {{ $npm }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
