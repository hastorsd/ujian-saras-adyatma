
        <h2 class="font-semibold text-xl text-white leading-tight">
            Detail Pasien
        </h2>


    <div class="py-6 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">
            <h3 class="text-lg font-bold mb-4">{{ $pasien->nama }}</h3>

            <p><strong>Nama:</strong> {{ $pasien->nama }}</p>
            <p><strong>Tempat, Tanggal lahir:</strong> {{ $pasien->ttl }}</p>
            <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
            <p><strong>Pekerjaan:</strong> {{ $pasien->pekerjaan }}</p>

            <div class="mt-4">
                <a href="{{ route('pasiens.edit', $pasien->id) }}" class="bg-green-600 text-black px-3 py-1 rounded hover:bg-green-700">Edit</a>
                <a href="{{ route('home') }}" class="ml-2 text-gray-600 hover:underline">Kembali ke data pasien</a>
            </div>
        </div>
    </div>

