
        <h2 class="font-semibold text-xl text-white leading-tight">
            Tambah Pasien
        </h2>

    <div class="py-6 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('pasiens.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block mb-1">Nama:</label>
                    <input type="text" name="nama" class="w-full border rounded p-2" >
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Tempat, Tanggal lahir:</label>
                    <input type="text" name="ttl" class="w-full border rounded p-2" >
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Alamat:</label>
                    <textarea name="alamat" class="w-full border rounded p-2" rows="3"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Pekerjaan:</label>
                    <input type="text" name="pekerjaan" class="w-full border rounded p-2" >
                </div>

                <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
                <a href="{{ route('home') }}" class="ml-2 text-gray-600 hover:underline">Kembali</a>
            </form>
        </div>
    </div>

