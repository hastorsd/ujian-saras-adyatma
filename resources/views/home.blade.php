@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat datang, Admin!') }}
                </div>

                <div class="card-body">
                    <a href="{{ route('pasiens.create') }}"  class="bg-gray-600 text-black px-4 py-2 rounded hover:bg-gray-700">Tambah Pasien</a>
                </div>

                <div class="flex justify-between mb-4">
                    <h3 class="text-lg font-bold">Daftar Pasien</h3>
                    {{-- <a href="{{ route('admin.pasien.create') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Pasien</a> --}}
                </div>

                <table class="min-w-full border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-2 text-left">#</th>
                            <th class="border p-2 text-left">Nama</th>
                            <th class="border p-2 text-left">Tempat, Tanggal lahir</th>
                            <th class="border p-2 text-left">Alamat</th>
                            <th class="border p-2 text-left">Pekerjaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pasiens as $p)
                            <tr>
                                <td class="border p-2">{{ $loop->iteration }}</td>
                                <td class="border p-2">{{ $p->nama }}</td>
                                <td class="border p-2">{{ $p->ttl }}</td>
                                <td class="border p-2">{{ $p->alamat }}</td>
                                <td class="border p-2">{{ $p->pekerjaan }}</td>
                                <td class="border p-2">
                                    <a href="{{ route('pasiens.show', $p->id) }}" class="text-blue-500 hover:underline">Detail</a> |
                                    <a href="{{ route('pasiens.edit', $p->id) }}" class="text-green-500 hover:underline">Edit</a> |
                                    <form action="{{ route('pasiens.destroy', $p->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Hapus pasien ini?')" class="text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="border p-2 text-center text-gray-500">Belum ada data pasien</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
