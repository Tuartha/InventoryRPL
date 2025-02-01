<x-headerfooter>
    <div
        class="fixed top-0 left-0 z-50 flex flex-col justify-between w-64 h-full p-4 transition-transform bg-gray-900 sidebar-menu">
        <!-- Profil User -->
        <a href="#" class="flex flex-col items-start justify-center pb-4 border-b border-b-gray-500">
            <img src="img/userimage.jpg" alt="" class="flex object-cover ml-2 rounded-full h-14 w-14">
            <span class="mt-1 font-bold text-white text-md">Rama Sigma</span>
            <p class="text-xs text-white ">sigmaboy@gmail.com</p>
        </a>
        <!-- Menu Utama -->
        <ul class="flex-grow mt-4">
            <li class="mb-1 group ">
                <a href="/index"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="mr-2 text-xl ph ph-sidebar"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group ">
                <a href="/inventori"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                    <i class="mr-2 text-xl ph ph-archive"></i>
                    <span class="text-sm">Inventori</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>

            </li>
            <li class="mb-1 group">
                <a href="/peminjaman"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                    <i class="mr-2 text-xl ph ph-hand-arrow-down"></i>
                    <span class="text-sm">Peminjaman</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>

            </li>
            <li class="mb-1 group active">
                <a href="/pengembalian"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                    <i class="mr-2 text-lg ph ph-hand-arrow-up"></i>
                    <span class="text-sm">Pengembalian</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="/laporan.html"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                    <i class="mr-2 text-lg ph ph-notepad"></i>
                    <span class="text-sm">Laporan</span>
                </a>
            </li>
        </ul>
        <div class="mt-auto">
            <a href="/login.html"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="mr-2 text-lg ph ph-sign-out"></i>
                <span class="text-sm"> Log out</span>
            </a>
        </div>
    </div>
    <div class="fixed top-0 left-0 z-40 w-full h-full bg-black/50 md:hidden sidebar-overlay"></div>

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64  min-h-screen transition-all main">
        <div class="bg-[#00ADB5] h-[50vh]">
            <div class="sticky top-0 left-0 z-30 flex items-center px-6 py-2 bg-white shadow-md shadow-black/5">
                <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                    <i class="ph ph-list"></i>
                </button>
                <ul class="flex items-center ml-4 text-sm">
                    <li class="mr-2">
                        <a href="#" class="font-medium text-gray-400 hover:text-gray-600">Pengembalian Barang</a>
                    </li>
                </ul>
                <ul class="flex items-center ml-auto">
                    <li class="ml-3 dropdown">
                        <button type="button" class="flex items-center dropdown-toggle">
                            <img src="img/userimage.jpg" alt="" class="block object-cover w-8 h-8 align-middle rounded">
                        </button>
                        <ul
                            class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                            <li>
                                <a href="#"
                                    class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="container px-4 md:px-10 ">
                <div class="mt-16 mb-10 ">
                    <h1 class="text-3xl font-bold text-white">Data Pengembalian </h1>
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
                                    PEMINJAM
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    BARANG
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    JUMLAH
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    KEMBALIKAN
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                    1
                                </th>
                                <td class="px-6 py-4 text-center">
                                    XII RPL3
                                </td>
                                <td class="px-6 py-4 text-center">
                                    Laptop
                                </td>
                                <td class="px-6 py-4 text-center">
                                    3
                                </td>
                                <td class="px-6 py-4 text-center ">
                                    <a href="#" class="font-medium hover:text-green-600 data-modal-target=" popup-modal"
                                    data-modal-toggle="popup-modal"><i
                                            class="text-3xl ph ph-check-circle"></i></a>
                                </td>
                            </tr>

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

        </div>

    </main>
    <!-- Modal kembalikan -->
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                    data-modal-hide="popup-modal">
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
                    <h3 class="text-lg font-bold text-black ">Apakah Anda yakin ingin mengembalikan barang ini?</h3>
                    <p class="text-[14px] text-black/80 "></p>Data pengembalian akan masuk ke dalam sistem, pastikan kondisi barang masih bagus dan laporkan jika terjadi kerusakan</p>
                    <div class="flex justify-center pt-5">
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-7 py-2.5 text-center">
                            Kembalikan
                        </button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="py-2.5 px-7 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Batal</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-headerfooter>