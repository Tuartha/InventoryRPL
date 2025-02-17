<x-app-layout>
    <div class="container px-4 md:px-10">
        <div class="mt-16 mb-10 ">
            <h1 class="text-3xl font-bold text-white">Data Pengguna yang terdaftar</h1>
        </div>
        {{-- <form class="max-w-full mx-auto">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Content..." required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form> --}}

        {{-- <button type="button" data-modal-target="crud-tambahU" data-modal-toggle="crud-tambahU"
                class="flex items-center justify-center gap-2 md:mx-[3rem] lg:mx-20 text-white bg-[#222831] hover:bg-opacity-85 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                <i class="font-bold ph ph-plus"></i> User Baru
        </button> --}}

        <div class="relative z-10 flex justify-center overflow-x-auto top-5">
            <table id="userTable" class="w-full text-sm text-left text-gray-500 rtl:text-right">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Kelas
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            NIS
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Tipe
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            <span class="sr-only">Aksi</span>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $user)
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->kelas }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->nis }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->user_type }}
                            </td>

                            <td class="px-6 py-4 text-right ">
                                <a href="#" class="updateUserForm flex items-center font-medium text-blue-600 hover:text-blue-800"
                                    data-modal-target="edit-user" data-modal-toggle="edit-user"
                                    data-id="{{ $user->id }}"
                                    data-name="{{ $user->name }}"
                                    data-email="{{ $user->email }}"
                                    data-password="{{ $user->password }}"
                                    data-kelas="{{ $user->kelas }}"
                                    data-nis="{{ $user->nis }}"
                                    data-user_type="{{ $user->user_type }}">
                                    <i class="mr-2 text-xl ph ph-pencil-simple "></i>
                                    Edit</a>
                                <a href="#" class="hapusUser items-center font-medium text-red-600 hover:text-red-800"
                                    data-modal-target="popup-modalU" data-modal-toggle="popup-modalU"
                                    data-id="{{ $user->id }}">
                                    <i class="mr-2 text-xl ph ph-trash"></i>Hapus
                                </a>
                            </td>
                        </tr>
                    @endforeach
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
    {{-- @include('profile.partials.user.add_form') --}}
    @include('profile.partials.user.edit_form')
    @include('profile.partials.user.delete_user')
    @include('components.alerts')
    <script>
        $(document).ready( function () {
                // $('#userTable').DataTable({
                //     "paging": true, // Mengaktifkan fitur pagination
                //     "searching": true, // Mengaktifkan fitur pencarian
                //     "ordering": true, // Mengaktifkan fitur sorting
                //     "info": true, // Menampilkan info jumlah data
                //     "lengthChange": true, // Menampilkan opsi jumlah data per halaman
                //     "columnDefs": [
                //         {
                //             "targets": -1, // Menargetkan kolom terakhir (Aksi)
                //             "orderable": false // Menonaktifkan fitur sorting di kolom Aksi
                //         }
                //     ],
                //     "language": {
                //         "lengthMenu": "Tampilkan _MENU_ data per halaman",
                //         "zeroRecords": "Data tidak ditemukan",
                //         "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
                //         "infoEmpty": "Tidak ada data yang tersedia",
                //         "infoFiltered": "(disaring dari _MAX_ total data)",
                //         "search": "Cari:",
                //     }
                // });
        
                // $(document).on('submit', '#addUserForm', function(e) {
                //     e.preventDefault();
                //     let name = $('#name').val();
                //     let email = $('#email').val();
                //     let kelas = $('#kelas').val();
                //     let password = $('#password').val();
                //     let nis = $('#nis').val();
                //     let user_type = $('#user_type').val();

                //     console.log(nis);
        
                //     $.ajax({
                //         url: "{{ route('addUser') }}",
                //         method: 'post',
                //         data: {
                //             name: name,
                //             email: email,
                //             kelas: kelas,
                //             password: password,
                //             nis: nis,
                //             user_type: user_type,
                //             _token: "{{ csrf_token() }}" // Jangan lupa menambahkan CSRF token
                //         },
                //         success: function(response) {
                //             if (response.status === 'success') {
                //                 showModal(response.message, response.status)
                //                 $('#addUserForm')[0].reset();
                //                 updateTable();
                //             } else {
                //                 showModal(response.message, response.status)
                //             }
                //         },
                //         error: function(xhr) {
                //             let errorMessage = xhr.responseJSON?.message || 'Terjadi kesalahan saat menambahkan user';
                //             showModal(errorMessage, 'fail')
                //         }
                //     });
                // });

                $(document).on('click', '.updateUserForm', function() {
                    let id = $(this).data('id');
                    let name = $(this).data('name');
                    let email = $(this).data('email');
                    let kelas = $(this).data('kelas');
                    let password = $(this).data('password');
                    let nis = $(this).data('nis');
                    let user_type = $(this).data('user_type');

                    console.log('ID:', $(this).data('id'));
                    console.log('Nama:', $(this).data('name'));
                    console.log('Email:', $(this).data('email'));
                    console.log('Kelas:', $(this).data('kelas'));
                    console.log('Password:', $(this).data('password'));
                    console.log('NIS:', $(this).data('nis'));
                    console.log('Tipe User:', $(this).data('user_type'));

                    $('#up_id').val(id);
                    $('#up_name').val(name);
                    $('#up_email').val(email);
                    $('#up_kelas').val(kelas);
                    $('#up_password').val(password);
                    $('#up_nis').val(nis);
                    $('#up_user_type').val(user_type);
                });

                $(document).on('click', '.updateUser', function(e) {
                    e.preventDefault();
                    let up_id = $('#up_id').val();
                    let up_name = $('#up_name').val();
                    let up_email = $('#up_email').val();
                    let up_kelas = $('#up_kelas').val();
                    let up_password = $('#up_password').val();
                    let up_nis = $('#up_nis').val();
                    let up_user_type = $('#up_user_type').val();
                    
                    $.ajax({
                        url: "{{ route('editUser') }}",
                        method: 'POST',
                        data: {
                            up_id: up_id,
                            up_name: up_name,
                            up_email: up_email,
                            up_kelas: up_kelas,
                            up_password: up_password,
                            up_nis: up_nis,
                            up_user_type: up_user_type,
                            _token: "{{ csrf_token() }}" 
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                showModal(response.message, response.status)
                                $('#editUserForm')[0].reset();
                                updateTable();
                            } else {
                                showModal(response.message, response.status)
                            }
                        },
                        error: function(xhr) {
                            let errorMessage = xhr.responseJSON?.message || 'Terjadi kesalahan saat mengubah user';
                            showModal(errorMessage, 'fail'); // Tampilkan pesan error
                        }
                    });
                });

                let id; // Variabel untuk menyimpan slug barang
                $(document).on('click', '.hapusUser', function(e) {
                    e.preventDefault();
                    id = $(this).data('id'); // Ambil slug dari tombol yang diklik
                });

                // // Saat tombol "Hapus" di modal diklik, lakukan AJAX request
                $('.hapusBtnU').on('click', function() {
                    $.ajax({
                        url: "{{ route('deleteUser') }}",
                        method: "POST",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}" 
                        },
                        success: function(response) {
                            showModal(response.message, response.status); // Tampilkan notifikasi
                            $('tr[data-id="'+id+'"]').remove(); // Hapus baris dari tabel
                        },
                        error: function(xhr) {
                            let errorMessage = xhr.responseJSON?.message || 'Terjadi kesalahan saat menghapus user';
                            showModal(errorMessage, 'fail');
                        }
                    });
                });
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            function updateTable() {
                $.ajax({
                    url: "{{ route('user') }}",
                    method: 'GET',
                    success: function(response) {
                        let tbody = $('#userTable tbody');
                        tbody.empty(); // Kosongkan isi tabel sebelum memperbarui

                        response.data.forEach(function(user, index) {
                            let row = `
                                <tr>
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                        ${index + 1}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        ${user.name}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        ${user.email}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        ${user.kelas}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        ${user.nis}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        ${user.user_type}
                                    </td>
                                    <td class="px-6 py-4 text-right ">
                                        <a href="#" class="flex items-center font-medium text-blue-600 hover:text-blue-800"
                                            data-modal-target="edit-user" data-modal-toggle="edit-user"
                                            data-id="${user.id}"
                                            data-name="${user.name}"
                                            data-email="${user.email}"
                                            data-password="${user.password}"
                                            data-kelas="${user.kelas}"
                                            data-nis="${user.nis}"
                                            data-user_type="${user.user_type}">
                                            <i class="mr-2 text-xl ph ph-pencil-simple "></i>
                                            Edit</a>
                                        <a href="#" class="flex items-center font-medium text-red-600 hover:text-red-800"
                                            data-modal-target="popup-modalU" data-modal-toggle="popup-modalU"
                                            data-id="${user.id}">
                                            <i class="mr-2 text-xl ph ph-trash"></i>Hapus
                                        </a>
                                    </td>
                                </tr>
                            `;
                            tbody.append(row);
                        });
                    },
                    error: function() {
                        showModal('Gagal mengambil data user.', 'fail');
                    }
                });
            }

            // Fungsi untuk memasang event listener pada modal
            // function attachModalListeners(e) {
            //     // Event listener untuk modal edit
            //     e.preventDefault
            //     $(document).on('click', '.updateBarangForm', function() {
            //         let slug = $(this).data('slug');
            //         let nama_barang = $(this).data('nama_barang');
            //         let merk = $(this).data('merk');
            //         let lokasi = $(this).data('lokasi');
            //         let tahun_datang = $(this).data('tahun_datang');
            //         let stock = $(this).data('stock');

            //         $('#up_slug').val(slug);
            //         $('#up_nama_barang').val(nama_barang);
            //         $('#up_merk').val(merk);
            //         $('#up_lokasi_id').val(lokasi);
            //         $('#up_tahun_datang').val(tahun_datang);
            //         $('#up_stock').val(stock);
            //     });

            //     // Event listener untuk modal hapus
            //     $(document).on('click', '.hapusBarang', function(e) {
            //         e.preventDefault();
            //         id = $(this).data('slug'); // Ambil slug dari tombol yang diklik
            //     });
            // }
    </script>
</x-app-layout>