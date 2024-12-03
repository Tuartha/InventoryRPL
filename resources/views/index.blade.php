<x-headerfooter>
    <header>
        <h1>Inventory Laboratorium RPL</h1>
    </header>
        <div class="fixed top-0 left-0 z-50 w-64 h-full p-4 transition-transform bg-gray-900 sidebar-menu">
            <a href="#" class="flex items-center pb-4 border-b border-b-gray-500">
                <img src="{{ asset('assets/image.png') }}" alt="" class="object-cover w-10 h-10 rounded">
                <span class="ml-2 text-lg font-bold text-white">Rama Sigma</span>
            </a>
            <ul class="mt-4">
                <li class="mb-1 group active">
                    <a href="#"
                        class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                        <i class="mr-2 text-xl ph ph-list-dashes"></i>
                        <span class="text-sm">Dashboard</span>
                    </a>
                </li>
                <li class="mb-1 group">
                    <a href="#"
                        class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <i class="mr-2 text-xl ph ph-toolbox"></i>
                        <span class="text-sm">Data Alat</span>
                        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                    </a>
    
                </li>
                <li class="mb-1 group">
                    <a href="#"
                        class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <i class="mr-2 text-lg ph ph-hand-arrow-down"></i>
                        <span class="text-sm">Peminjaman & Pengembalian</span>
                    </a>
                </li>
    
            </ul>
        </div>
        <div class="fixed top-0 left-0 z-40 w-full h-full bg-black/50 md:hidden sidebar-overlay"></div>
    
        <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
            <div class="sticky top-0 left-0 z-30 flex items-center px-6 py-2 bg-white shadow-md shadow-black/5">
                <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                    <i class="ph ph-list"></i>
                </button>
                <ul class="flex items-center ml-4 text-sm">
                    <li class="mr-2">
                        <a href="#" class="font-medium text-gray-400 hover:text-gray-600">Dashboard</a>
                    </li>
                </ul>
                <ul class="flex items-center ml-auto">
                    <li class="mr-1 dropdown">
                        <button type="button"
                            class="flex items-center justify-center w-8 h-8 text-gray-400 rounded dropdown-toggle hover:bg-gray-50 hover:text-gray-600">
                            <i class="ph ph-magnifying-glass"></i>
                        </button>
                        <div
                            class="z-30 hidden w-full max-w-xs bg-white border border-gray-100 rounded-md shadow-md dropdown-menu shadow-black/5">
                            <form action="" class="p-4 border-b border-b-gray-100">
                                <div class="relative w-full">
                                    <input type="text"
                                        class="w-full py-2 pl-10 pr-4 text-sm border border-gray-100 rounded-md outline-none bg-gray-50 focus:border-blue-500"
                                        placeholder="Search...">
                                    <i class="absolute text-gray-400 -translate-y-1/2 ri-search-line top-1/2 left-4"></i>
                                </div>
                            </form>
    
                        </div>
                    </li>
    
                    <li class="ml-3 dropdown">
                        <button type="button" class="flex items-center dropdown-toggle">
                            <img src="{{ asset('assets/image.png') }}" alt=""
                                class="block object-cover w-8 h-8 align-middle rounded">
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
            <div class="container">
                <div class="mt-10 mb-10 ml-20">
                    <p>Selamat Datang di,</p>
                    <h1 class="text-3xl font-bold">Inventori Barang di Laboratorium RPL SMKN 1 Denpasar</h1>
                </div>
                <div class="container flex ml-20 ">
                    <div class="h-48 w-96 rounded-xl bg-slate-600">
                        <div class="mt-12 ml-10 ">
                            <p class="mb-4 text-white">Total Jenis Barang</p>
                            <div class="flex items-center">
                                <i class="text-6xl text-white ph ph-toolbox"></i>
                                <span class="ml-2 text-2xl text-white">20</span>
                            </div>
    
                        </div>
                    </div>
                    <div class="h-48 ml-10 w-96 rounded-xl bg-slate-600">
                        <div class="mt-12 ml-10 ">
                            <p class="mb-4 text-white">Total Jenis Barang</p>
                            <div class="flex items-center">
                                <i class="text-6xl text-white ph ph-toolbox"></i>
                                <span class="ml-2 text-2xl text-white">20</span>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
    
        </main>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="dist/js/script.js"></script>
</x-headerfooter>