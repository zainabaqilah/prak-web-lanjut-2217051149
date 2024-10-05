@extends('layouts.app')

@section('content')

<nav class="bg-gradient-to-r from-purple-400 to-blue-400">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0">
          <a href="#" class="text-2xl font-bold text-white">₊˚ ☁️⋅♡</a>
        </div>
        <div class="hidden sm:block sm:ml-6">
        </div>
      </div>
    </div>
  </div>
</nav>

    <div class="container mx-auto mt-8">
        <h1 class="text-4xl font-bold mb-4">List User</h1>
        <p class="text-gray-500 mb-6">Berisi data yang telah tersimpan di database</p>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gradient-to-br from-blue-50 to-blue-100 font-bold">
                        <th class="px-6 py-3 text-left text-xl uppercase border border-grey-500">ID</th>
                        <th class="px-6 py-3 text-left text-xl uppercase border border-grey-500">Nama</th>
                        <th class="px-6 py-3 text-left text-xl uppercase border border-grey-500">NPM</th>
                        <th class="px-6 py-3 text-left text-xl uppercase border border-grey-50">Kelas</th>
                        <th class="px-6 py-3 text-left text-xl uppercase border border-grey-500">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($user as $users)
                        <tr>
                            <td class="px-6 py-4 border border-grey-500">{{ $users['id'] }}</td>
                            <td class="px-6 py-4 border border-grey-500">{{ $users['nama'] }}</td>
                            <td class="px-6 py-4 border border-grey-500">{{ $users['npm'] }}</td>
                            <td class="px-6 py-4 border border-grey-500">{{ $users['nama_kelas'] }}</td>
                            <td class="px-6 py-4 border border-grey-500">
                                <button class="bg-green-500 text-white py-1 px-3 rounded hover:bg-green-700">Edit</button>
                                <button class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-700 ml-2">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
