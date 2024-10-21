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

        <a href="{{ route('user.create') }}" class="bg-gradient-to-r from-purple-400 to-blue-400 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
            Tambah Pengguna Baru 
        </a>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md mt-8">
                <thead>
                    <tr class="bg-gradient-to-br from-blue-50 to-blue-100 font-bold">
                        <th class="px-6 py-3 text-center text-xl uppercase border border-grey-500">ID</th>
                        <th class="px-6 py-3 text-center text-xl uppercase border border-grey-500">Nama</th>
                        <th class="px-6 py-3 text-center text-xl uppercase border border-grey-500">NPM</th>
                        <th class="px-6 py-3 text-center text-xl uppercase border border-grey-50">Kelas</th>
                        <th class="px-6 py-3 text-center text-xl uppercase border border-grey-50">Foto</th>
                        <th class="px-6 py-3 text-center text-xl uppercase border border-grey-500">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  @if(!empty($user) && $user->count())
                      @foreach ($user as $users)
                          <tr>
                              <td class="px-6 py-4 text-center border border-grey-500">{{ $users['id'] }}</td>
                              <td class="px-6 py-4 text-center border border-grey-500">{{ $users['nama'] }}</td>
                              <td class="px-6 py-4 text-center border border-grey-500">{{ $users['npm'] }}</td>
                              <td class="px-6 py-4 text-center border border-grey-500">{{ $users['nama_kelas'] }}</td>
                              <!-- <td class="px-6 py-4 border border-grey-500">{{ $users['foto'] }}</td> -->
                              <td class="py-4 px-6 border border-grey-500">
                                <img class="h-12 w-12 rounded-full object-cover mx-auto" src="{{ asset($users->foto ?? 'assets/img/default.jpeg') }}" alt="User Photo">
                              </td>

                              <!-- <td class="px-6 py-4 border border-grey-500"> -->
                              <td class="py-4 px-6 flex justify-center">
                                <button class="mr-2 bg-green-500 text-white py-1 px-3 rounded hover:bg-green-700"><a href="{{ route('user.show', $users->id) }}">View</a></button>
                                <button class="mr-2 bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-700"><a href="{{ route('user.edit', $users->id) }}" class="">Edit</a></button>
                                <form action="{{ route('user.destroy', $users->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mr-2 bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                              </form>
                              </td>
                          </tr>
                      @endforeach
                    @else
                      <tr>
                          <td colspan="5" class="text-center py-4">Tidak ada pengguna yang ditemukan</td>
                      </tr>
                  @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
