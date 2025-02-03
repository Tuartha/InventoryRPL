<x-app-layout>
        <div class="container px-7">
            <div class="mt-10 mb-10 px-6">
                <p class="text-white">Selamat Datang {{ Auth::user()->name }} di,</p>
                <h1 class="text-2xl font-bold text-white md:text-3xl">
                    Inventori Barang di Laboratorium RPL SMKN 1 Denpasar
                </h1>
            </div>
            <div
                class="container relative flex flex-col justify-center gap-10 md:flex-row lg:gap-24 top-10">
                <div
                    class="flex flex-col items-start justify-start w-full h-40 py-5 px-6 bg-white rounded-xl drop-shadow-md md:w-[26%] hover:scale-105 hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                    <div class="flex w-full items-center justify-between">
                        <p class="text-black/80">Total Barang Tersedia</p>
                        <i class="text-5xl px-2 py-1 text-[#00ADB5] bg-[#00ADB5] bg-opacity-20 ph ph-toolbox md:text-2xl"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-black/80 md:text-4xl">{{ $totalBarang }}</span>
                    </div>
                </div>
                <div
                    class="flex flex-col items-start justify-start w-full h-40 py-5 px-6 bg-white rounded-xl drop-shadow-md md:w-[26%] hover:scale-105 hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                    <div class="flex w-full items-center justify-between">
                        <p class="text-black/80">Barang di Pinjam</p>
                        <i class="text-5xl px-2 py-1 text-[#00ADB5] bg-[#00ADB5] bg-opacity-20 ph ph-hand-arrow-down md:text-2xl"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-black/80 md:text-4xl">{{ $peminjaman }}</span>
                    </div>
                </div>
                <div
                    class="flex flex-col items-start justify-start w-full h-40 py-5 px-6 bg-white rounded-xl drop-shadow-md md:w-[26%] hover:scale-105 hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                    <div class="flex w-full items-center justify-between">
                        <p class="text-black/80">Barang di Kembalikan</p>
                        <i class="text-5xl px-2 py-1 text-[#00ADB5] bg-[#00ADB5] bg-opacity-20 ph ph-hand-arrow-up md:text-2xl"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-black/80 md:text-4xl">{{ $pengembalian }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative flex justify-center mt-20 overflow-x-auto  ">
            <table class="text-sm text-left text-gray-500 lg:w-[89%] w-[95%] rtl:text-right ">
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