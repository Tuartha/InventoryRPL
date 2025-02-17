<x-app-layout>
    <div class="container px-4 md:px-10 ">
        <div class="mt-16 mb-10 ">
            <h1 class="text-3xl font-bold text-white">Data Pengguna yang Perlu Verifikasi </h1>
        </div>
        <form class="max-w-full mx-auto">
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
        </form>
        <div class="relative z-10 flex justify-center mb-10 overflow-x-auto drop-shadow-md top-5 ">

            <table class="w-full text-sm text-left text-gray-500 bg-white rtl:text-right drop-shadow-md">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            NAMA 
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            EMAIL
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            VERIFIKASI
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userVerif as $user)
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
                            <td class="px-6 py-4 text-center ">
                                <a href="#" class="font-medium hover:text-green-600 verifikasiU" data-modal-target="verifUser"
                                    data-modal-toggle="verifUser"
                                    data-id="{{ $user->id }}">
                                    <i class="text-3xl ph ph-seal-check"></i></a>
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
    </div>  --}}
    @include('components.alerts')

    <div id="verifUser" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                    data-modal-hide="verifUser">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5">
                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="text-lg font-bold text-black ">Apakah yakin ingin verifikasi akun ini?</h3>
                    <p class="text-[14px] text-black/80 text-center flex justify-center pt-1"></p>Verifikasi akun ini</p>
                    <div class="flex justify-center pt-5">
                        <button data-modal-hide="verifUser" type="button"
                            class="verifikasi text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-7 py-2.5 text-center"
                            data-modal-target="messageModal"
                            data-modal-toggle="messageModal">
                            Verifikasi
                        </button>
                        <button data-modal-hide="verifUser" type="button"
                            class="py-2.5 px-7 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
                            data-modal-target="messageModal"
                            data-modal-toggle="messageModal">Batal</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            let id; // Variabel untuk menyimpan slug barang
            $(document).on('click', '.verifikasiU', function(e) {
                e.preventDefault();
                id = $(this).data('id'); // Ambil slug dari tombol yang diklik
            });
            $('.verifikasi').on('click', function(e) {
                e.preventDefault();
                console.log(id);

                $.ajax({
                    url: "{{ route('verif') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        showModal(response.message, response.status); // Tampilkan notifikasi
                        // location.reload();
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
    </script>
</x-app-layout>