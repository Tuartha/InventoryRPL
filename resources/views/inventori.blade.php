<x-app-layout>
    <div class="container lg:w-[100%] md:w-[87%]">
        <div class="pt-16 pb-8 lg:px-20 md:px-[2.5rem]">
            <h1 class="text-3xl font-bold text-white">Inventori Barang di Laboratorium RPL SMKN 1 Denpasar</h1>
        </div>
    
        <!-- Tombol "Barang Baru" hanya untuk admin -->
        @if(auth()->user()->user_type == 'admin')
            <button type="button" data-modal-target="crud-tambah" data-modal-toggle="crud-tambah"
                class="flex items-center justify-center gap-2 md:mx-[2.5rem] lg:mx-20 text-white bg-[#222831] hover:bg-opacity-85 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                <i class="font-bold ph ph-plus"></i> Barang baru
            </button>
        @endif
    
        <div class="relative z-10 lg:ml-0 md:ml-10 flex lg:justify-center md:justify-start overflow-x-auto top-5">
            <table class="md:w-full lg:w-[87%] text-sm text-left text-gray-500 rtl:text-right">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Barang</th>
                        <th scope="col" class="px-6 py-3">Merk</th>
                        <th scope="col" class="px-6 py-3">Tahun Masuk</th>
                        <th scope="col" class="px-6 py-3">Lokasi</th>
                        <th scope="col" class="px-6 py-3">Stok</th>
                        <!-- Kolom "Aksi" hanya untuk admin -->
                        @if(auth()->user()->user_type == 'admin')
                            <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if (count($all) > 0)
                        @foreach ($all as $barang)
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">{{ $barang->nama_barang }}</td>
                                <td class="px-6 py-4">{{ $barang->merk }}</td>
                                <td class="px-6 py-4">{{ $barang->tahun_datang }}</td>
                                <td class="px-6 py-4">{{ $barang->lokasi->nama_lokasi }}</td>
                                <td class="px-6 py-4">{{ $barang->stock }}</td>
                                <!-- Kolom "Aksi" hanya untuk admin -->
                                @if(auth()->user()->user_type == 'admin')
                                    <td class="px-6 py-4 text-right flex lg:gap-10 md:gap-16 justify-center items-center">
                                        <a href="#" class="updateBarangForm font-medium text-blue-600 hover:underline flex items-center"
                                            data-modal-target="crud-edit"
                                            data-modal-toggle="crud-edit"
                                            data-slug="{{ $barang->slug }}"
                                            data-nama_barang="{{ $barang->nama_barang }}"
                                            data-merk="{{ $barang->merk }}"
                                            data-tahun_datang="{{ $barang->tahun_datang }}"
                                            data-lokasi="{{ $barang->lokasi->id }}"
                                            data-stock="{{ $barang->stock }}">
                                            <i class="mr-2 text-xl ph ph-pencil-simple"></i>Edit
                                        </a>
                                        <a href="#" class="hapusBarang font-medium text-red-600 hover:underline flex items-center"
                                            data-modal-target="popup-modal"
                                            data-modal-toggle="popup-modal"
                                            data-slug="{{ $barang->slug }}">
                                            <i class="mr-2 text-xl ph ph-trash"></i>Hapus
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td colspan="{{ auth()->user()->user_type == 'admin' ? 7 : 6 }}">No Data Found!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
                {{-- <div class="relative flex justify-center mt-10">
                    <nav aria-label="Page navigation example">
                        <ul class="flex items-center h-10 -space-x-px text-base">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center h-10 px-4 leading-tight text-gray-500 bg-white border border-gray-300 ms-0 border-e-0 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 ">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="z-10 flex items-center justify-center h-10 px-4 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center h-10 px-4 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center h-10 px-4 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center h-10 px-4 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center h-10 px-4 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center h-10 px-4 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 ">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
    
                </div> --}}
        @include('profile/partials/add_form')
        @include('profile/partials/edit_form')
        @include('profile/partials/delete_form')
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function() {
                // Mengambil nama lokasi berdasarkan lokasi_id yang dipilih
                $('#lokasi_id').on('change', function() {
                    let lokasi_id = $(this).val(); // Mendapatkan lokasi_id yang dipilih
                    // console.log('Lokasi ID:', lokasi_id);

                    if (!lokasi_id) {
                        alert('Silakan pilih lokasi terlebih dahulu');
                        return;
                    }
        
                    if (lokasi_id) {
                        $.ajax({
                            url: "{{ auth()->user()->user_type == 'admin' ? route('admin.getLokasiName') : route('user.getLokasiName') }}",
                            method: 'POST',
                            data: {
                                lokasi_id: lokasi_id,
                                _token: "{{ csrf_token() }}" // Pastikan untuk menambahkan token CSRF
                            },
                            success: function(response) {
                                if (response.nama_lokasi) {
                                    $('#nama_lokasi').val(response.nama_lokasi); // Menampilkan nama lokasi ke field input
                                } else {
                                    alert('Lokasi tidakk ditemukan');
                                }
                            },
                            error: function(xhr) {
                                alert('Terjadi kesalahan dalam mengambil data lokasi');
                            }
                        });
                    } 
                });
        
                $(document).on('submit', '#addBarangForm', function(e) {
                    e.preventDefault();
                    let nama_barang = $('#nama_barang').val();
                    let merk = $('#merk').val();
                    let lokasi_id = $('#lokasi_id').val();
                    let stock = $('#stock').val();
                    let tahun = $('#tahun_datang').val();
        
                    $.ajax({
                        url: "{{ route('addBarang') }}",
                        method: 'post',
                        data: {
                            nama_barang: nama_barang,
                            merk: merk,
                            lokasi_id: lokasi_id,
                            stock: stock,
                            tahun_datang: tahun,
                            _token: "{{ csrf_token() }}" // Jangan lupa menambahkan CSRF token
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                location.reload();
                                alert(response.message);
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function(xhr) {
                            let errorMessage = xhr.responseJSON?.message || 'Terjadi kesalahan saat menambahkan barang';
                            alert(errorMessage); 
                        }
                    });
                });

                $(document).on('click', '.updateBarangForm', function() {
                    let slug = $(this).data('slug');
                    let nama_barang = $(this).data('nama_barang');
                    let merk = $(this).data('merk');
                    let lokasi = $(this).data('lokasi');
                    let tahun_datang = $(this).data('tahun_datang');
                    let stock = $(this).data('stock');

                    $('#up_slug').val(slug);
                    $('#up_nama_barang').val(nama_barang);
                    $('#up_merk').val(merk);
                    $('#up_lokasi_id').val(lokasi);
                    $('#up_tahun_datang').val(tahun_datang);
                    $('#up_stock').val(stock);
                });

                $(document).on('click', '.updateBarang', function(e) {
                    e.preventDefault();
                    let up_slug = $('#up_slug').val();
                    let up_nama_barang = $('#up_nama_barang').val();
                    let up_merk = $('#up_merk').val();
                    let up_lokasi_id = $('#up_lokasi_id').val();
                    let up_stock = $('#up_stock').val();
                    let up_tahun = $('#up_tahun_datang').val();
        
                    $.ajax({
                        url: "{{ route('editBarang') }}",
                        method: 'post',
                        data: {
                            up_slug: up_slug,
                            up_nama_barang: up_nama_barang,
                            up_merk: up_merk,
                            up_lokasi_id: up_lokasi_id,
                            up_stock: up_stock,
                            up_tahun_datang: up_tahun,
                            _token: "{{ csrf_token() }}" 
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                location.reload();
                                alert(response.message);
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function(xhr) {
                            let errorMessage = xhr.responseJSON?.message || 'Terjadi kesalahan saat menambahkan barang';
                            alert(errorMessage); // Tampilkan pesan error
                        }
                    });
                });

                let barangSlug = ''; // Variabel untuk menyimpan slug barang
                $(document).on('click', '.hapusBarang', function(e) {
                    e.preventDefault();
                    barangSlug = $(this).data('slug'); // Ambil slug dari tombol yang diklik
                });

                // Saat tombol "Hapus" di modal diklik, lakukan AJAX request
                $('.hapusBtn').on('click', function() {
                    $.ajax({
                        url: "{{ route('deleteBarang') }}",
                        method: "POST",
                        data: {
                            barang_slug: barangSlug,
                            _token: "{{ csrf_token() }}" 
                        },
                        success: function(response) {
                            alert(response.message); // Tampilkan notifikasi
                            location.reload();
                            $('tr[data-slug="'+barangSlug+'"]').remove(); // Hapus baris dari tabel
                        },
                        error: function(xhr) {
                            let errorMessage = xhr.responseJSON?.message || 'Terjadi kesalahan saat menghapus barang';
                            alert(errorMessage);
                        }
                    });
                });
            });
        </script>        
</x-app-layout>