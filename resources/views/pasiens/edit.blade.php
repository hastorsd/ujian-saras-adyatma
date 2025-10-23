
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Edit Pasien
        </h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('pasiens.update', $pasien->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block mb-1">Nama:</label>
                    <input type="text" name="nama" value="{{ $pasien->nama }}" class="w-full border rounded p-2" >
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Tempat, Tanggal lahir:</label>
                    <input type="text" name="ttl" value="{{ $pasien->ttl }}" class="w-full border rounded p-2" >
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Alamat:</label>
                    <textarea name="alamat" class="w-full border rounded p-2" rows="3">{{ $pasien->alamat }} </textarea>
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Pekerjaan:</label>
                    <input type="text" name="pekerjaan" value="{{ $pasien->pekerjaan }}" class="w-full border rounded p-2" >
                </div>

                <button type="submit" class="bg-green-600 text-black px-4 py-2 rounded hover:bg-green-700">Update</button>
                <a href="{{ route('pasiens.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
            </form>
        </div>
    </div>
