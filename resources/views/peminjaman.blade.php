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
            <li class="mb-1 group active">
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
            <div class="sticky top-0 left-0 z-30 flex items-center px-6 py-2 bg-white shadow-md shadow-black/5">
                <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                    <i class="ph ph-list"></i>
                </button>
                <ul class="flex items-center ml-4 text-sm">
                    <li class="mr-2">
                        <a href="#" class="font-medium text-gray-400 hover:text-gray-600">Peminjaman Barang</a>
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
                    <h1 class="text-3xl font-bold text-white">Formulir Peminjaman Barang</h1>
                </div>
                <div class="bg-white rounded-md">
                    
                    <form class="p-4 md:p-5">
                        <caption class="p-5 text-left text-gray-900 bg-white rtl:text-right ">
                            <h1 class="text-xl font-bold">
                                Formulir Peminjaman
                            </h1>
                            <p class="mt-1 text-sm font-normal text-gray-500 ">Silihakan isi data dengan benar, ingat kembalikan dan jaga kondisi barang!</p>
                        </caption>
                        <div class="grid grid-cols-3 gap-4 mt-5 mb-4">
                            <div class="col-span-3">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                    Peminjam</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                    placeholder="Masukan nama peminjam" required="">
                            </div>
                            <div class="col-span-3">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">Kelas
                                    Peminjam</label>
                                <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                                    <option selected="">Pilih</option>
                                    <option value="RPL1">Lab RPL 1</option>
                                    <option value="RPL2">Lab RPL 2</option>
                                    <option value="RPL3">Lab RPL 3</option>
                                    <option value="RGRPL">Ruang Guru RPL</option>
                                </select>
                            </div>
                            <div class="col-span-3 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">
                                    Barang</label>
                                <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                                    <option selected="">Pilih</option>
                                    <option value="baik">Baik</option>
                                    <option value="buruk">Buruk</option>
                                </select>
                            </div>
                            <div class="col-span-3 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">
                                    Merk</label>
                                <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                                    <option selected="">Pilih</option>
                                    <option value="baik">Asus</option>
                                    <option value="buruk">Lenovooo</option>
                                </select>
                            </div>
                            <div class="col-span-3 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">
                                    Jumlah</label>
                                <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                                    <option selected="">Pilih</option>
                                    <option value="baik">Asus</option>
                                    <option value="buruk">Lenovooo</option>
                                </select>
                            </div>

                       

                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-green font-medium rounded text-sm px-5 py-2.5 text-center w-full justify-center">
                            Tambah Data Peminjaman
                        </button>
                    </form>
                </div>
            </div>

        </div>

    </main>
</x-headerfooter>