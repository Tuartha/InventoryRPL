<x-headerfooter>
    @if (Session::has('fail'))
        <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
                <strong>{{ Session::get('fail') }}</strong>
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            </button>
        </div>
    @endif

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
        <li class="mb-1 group active">
            <a href="/index"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="mr-2 text-xl ph ph-sidebar"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group">
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
        <li class="mb-1 group">
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
        <div class="sticky top-0 left-0 z-30 flex items-center px-6 py-4 bg-white shadow-md shadow-black/5">
            <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                <i class="ph ph-list"></i>
            </button>
            <ul class="flex  items-center ml-4 text-base">
                <li class="mr-2">
                    <a href="#" class="font-medium text-gray-400 hover:text-gray-600">DASHBOARD</a>
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
        <div class="container px-7 ">
            <div class="mt-10 mb-10 ml-8">
                <p class="text-white">Selamat Datang di,</p>
                <h1 class="text-2xl font-bold text-white md:text-3xl">
                    Inventori Barang di Laboratorium RPL SMKN 1 Denpasar
                </h1>
            </div>
            <div
                class="container relative flex flex-col justify-center gap-4 md:flex-row md:gap-6 lg:gap-24 top-10">
                <div
                    class="flex flex-col items-start justify-start w-full h-40 py-5 px-6 bg-white rounded-xl drop-shadow-md md:w-[26%] hover:scale-105 hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                    <div class="flex w-full items-center justify-between">
                        <p class="text-black/80">Total Barang</p>
                        <i class="text-5xl px-2 py-1 text-[#00ADB5] bg-[#00ADB5] bg-opacity-20 text-black/90 ph ph-toolbox md:text-2xl"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-black/80 md:text-4xl">20</span>
                    </div>
                </div>
                <div
                    class="flex flex-col items-start justify-start w-full h-40 py-5 px-6 bg-white rounded-xl drop-shadow-md md:w-[26%] hover:scale-105 hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                    <div class="flex w-full items-center justify-between">
                        <p class="text-black/80">Barang di Pinjam</p>
                        <i class="text-5xl px-2 py-1 text-[#00ADB5] bg-[#00ADB5] bg-opacity-20 text-black/90 ph ph-hand-arrow-down md:text-2xl"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-black/80 md:text-4xl">20</span>
                    </div>
                </div>
                <div
                    class="flex flex-col items-start justify-start w-full h-40 py-5 px-6 bg-white rounded-xl drop-shadow-md md:w-[26%] hover:scale-105 hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                    <div class="flex w-full items-center justify-between">
                        <p class="text-black/80">Barang di Kembalikan</p>
                        <i class="text-5xl px-2 py-1 text-[#00ADB5] bg-[#00ADB5] bg-opacity-20 text-black/90 ph ph-hand-arrow-up md:text-2xl"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-black/80 md:text-4xl">20</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="relative flex justify-center mt-20 overflow-x-auto  ">
            <table class="text-sm text-left text-gray-500 w-[89%] rtl:text-right ">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white rtl:text-right ">
                    Barang dipinjam
                    <p class="mt-1 text-sm font-normal text-gray-500 ">Data peminjaman barang laboratorium RPL per hari ini.</p>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            PEMINJAM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            BARANG
                        </th>
                        <th scope="col" class="px-6 py-3">
                            JUMLAH
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-100 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>

                    </tr>

                </tbody>
            </table>


        </div>
        <div class="relative flex justify-center top-5">
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

        </div>

    </div>
</main>
</x-headerfooter>