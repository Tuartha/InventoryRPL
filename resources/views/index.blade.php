<x-app-layout>
        <div class="container px-7">
            <div class="pt-14 lg:pb-4 md:pb-0 lg:px-9 md:px-3">
                <p class="text-white">Selamat Datang {{ Auth::user()->name }} di,</p>
                <h1 class="text-2xl font-bold text-white md:text-3xl">
                    Dashboard Inventori Laboratorium RPL SMKN 1 Denpasar
                </h1>
            </div>
            <div
                class="container relative flex flex-col justify-center gap-10 md:flex-row lg:gap-24 md:gap-2 top-10">
                <div
                    class="flex flex-col items-start justify-start md:gap-3 w-full h-40 py-5 px-6 bg-white rounded-xl drop-shadow-md lg:w-[26%] md:w-[31%] hover:scale-105 hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                    <div class="flex w-full lg:items-center lg:justify-between md:items-start">
                        <p class="text-black/80 lg:text-base md:text-sm">Total Barang Tersedia</p>
                        <i class="lg:text-2xl lg:px-2 lg:py-1 md:px-1 md:text-xl  text-[#00ADB5] bg-[#00ADB5] bg-opacity-20 ph ph-toolbox"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-black/80 md:text-4xl">{{ $totalBarang }}</span>
                    </div>
                </div>
                <div
                    class="flex flex-col items-start justify-start md:gap-3 w-full h-40 py-5 px-6 bg-white rounded-xl drop-shadow-md lg:w-[26%] md:w-[31%] hover:scale-105 hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                    <div class="flex w-full lg:items-center lg:justify-between md:items-start lg:gap-0 md:gap-[25%]">
                        <p class="text-black/80 lg:text-base lg:w-full md:w-1/2 md:text-sm">Barang Sedang Dipinjam</p>
                        <i class="lg:text-2xl lg:px-2 lg:py-1 md:px-1 md:text-xl  text-[#00ADB5] bg-[#00ADB5] bg-opacity-20 ph ph-hand-arrow-down"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-black/80 md:text-4xl">{{ $peminjaman }}</span>
                    </div>
                </div>
                <div
                    class="flex flex-col items-start justify-start md:gap-3 w-full h-40 py-5 px-6 bg-white rounded-xl drop-shadow-md lg:w-[26%] md:w-[31%] hover:scale-105 hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                    <div class="flex w-full lg:items-center lg:justify-between md:items-start lg:gap-0 md:gap-[25%]">
                        <p class="text-black/80 lg:text-base lg:w-full md:w-1/2 md:text-sm">Barang di Kembalikan</p>
                        <i class="lg:text-2xl lg:px-2 lg:py-1 md:px-1 md:text-xl  text-[#00ADB5] bg-[#00ADB5] bg-opacity-20 ph ph-hand-arrow-up"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-black/80 md:text-4xl">{{ $pengembalian }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative flex justify-center mt-20 md:overflow-x-auto">
            <table class="text-sm text-left text-gray-500 lg:w-[89%] md:w-[70%] rtl:text-right lg:overflow-x-hidden md:overflow-x-scroll ">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white rtl:text-right ">
                    Barang Dipinjam Hari Ini
                    <p class="mt-1 text-sm font-normal text-gray-500 ">Data peminjaman barang laboratorium RPL per hari ini.</p>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            KELAS PEMINJAM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            BARANG
                        </th>
                        <th scope="col" class="px-6 py-3">
                            MERK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            JUMLAH
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($totalPeminjaman as $pinjamToday)
                        <tr class="bg-white border-b hover:bg-gray-100 ">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pinjamToday->user->kelas }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pinjamToday->barang->nama_barang }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pinjamToday->barang->merk }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pinjamToday->jumlah }}
                            </td>
                        </tr>
                    @endforeach
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
</x-app-layout>