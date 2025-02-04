<x-app-layout>
    <div class="container px-7 md:px-10 lg:px-20">
        <div class="pt-16 pb-8 lg:px-0">
            <h1 class="text-3xl font-bold text-white">Formulir Peminjaman Barang</h1>
        </div>
        <div class="bg-white rounded-md">
            <form class="p-4 md:p-5" action="{{ route('peminjaman.store') }}" method="POST">
                @csrf
                <caption class="p-5 text-left text-gray-900 bg-white rtl:text-right">
                    <h1 class="text-xl font-bold">Formulir Peminjaman</h1>
                    <p class="mt-1 text-sm font-normal text-gray-500">Silahkan isi data dengan benar, ingat kembalikan barang kalau sudah selesai pinjam ya!</p>
                </caption>
                <div class="grid grid-cols-3 gap-4 mt-5 mb-4">
                    {{-- Nama Peminjam --}}
                    <div class="col-span-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Nama Peminjam</label>
                        <input type="text" value="{{ $user->name }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" readonly>
                    </div>
                    {{-- Kelas Peminjam --}}
                    <div class="col-span-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Kelas Peminjam</label>
                        <input type="text" value="{{ $user->kelas }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" readonly>
                    </div>
                    {{-- Pilihan Barang --}}
                    <div class="col-span-3 sm:col-span-1">
                        <label for="barang" class="block mb-2 text-sm font-medium text-gray-900">Barang</label>
                        <select id="barang" name="barang_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                            <option selected disabled>Pilih Barang</option>
                            @php
                                $uniqueBarang = [];
                            @endphp
                            @foreach($barangs as $barang)
                                @if(!in_array($barang->nama_barang, $uniqueBarang))
                                    <option value="{{ $barang->id }}" data-nama="{{ $barang->nama_barang }}">{{ $barang->nama_barang }}</option>
                                    @php
                                        $uniqueBarang[] = $barang->nama_barang;
                                    @endphp
                                @endif
                            @endforeach
                        </select>
                    </div>
                    {{-- Pilihan Merk --}}
                    <div class="col-span-3 sm:col-span-1">
                        <label for="merk" class="block mb-2 text-sm font-medium text-gray-900">Merk</label>
                        <select id="merk" name="merk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                            <option selected disabled>Pilih Barang Terlebih Dahulu</option>
                        </select>
                    </div>
                    {{-- Jumlah --}}
                    <div class="col-span-3 sm:col-span-1">
                        <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" min="1" required>
                    </div>
                </div>
                {{-- Tombol Submit --}}
                <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-green font-medium rounded text-sm px-5 py-2.5 text-center w-full justify-center">
                    Tambah Data Peminjaman
                </button>
            </form>
        </div>
    </div>
    
    {{-- JavaScript untuk Dinamis Merk --}}
    <script>
        // Mapping barang_id ke merk
        let barangMerkMap = {};
        @foreach($barangs as $barang)
            if (!barangMerkMap.hasOwnProperty('{{ $barang->id }}')) {
                barangMerkMap['{{ $barang->id }}'] = [];
            }
            barangMerkMap['{{ $barang->id }}'].push('{{ $barang->merk }}');
        @endforeach

        document.getElementById('barang').addEventListener('change', function () {
            let selectedBarangId = this.value; // Ambil barang_id yang dipilih
            let merkSelect = document.getElementById('merk');

            // Bersihkan isi dropdown Merk
            merkSelect.innerHTML = '<option selected disabled>Pilih Merk</option>';

            // Jika barang ada di daftar, tambahkan merk-merk yang sesuai
            if (barangMerkMap[selectedBarangId]) {
                barangMerkMap[selectedBarangId].forEach(function (merk) {
                    let option = document.createElement('option');
                    option.value = merk;
                    option.textContent = merk;
                    merkSelect.appendChild(option);
                });
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
        const peminjamanUser = document.getElementById('peminjamanUser');

        if (peminjamanUser) {
            peminjamanUser.addEventListener('click', function(event) {
                var userKelas = @json(auth()->user()->kelas);
                
                if (!userKelas) {
                    event.preventDefault();
                    alert('Harap isi kelas terlebih dahulu di profil Anda.');
                    window.location.href = "{{ route('profile.update') }}";
                }
            });
        }
        });
    </script>
</x-app-layout>
