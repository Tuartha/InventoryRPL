<x-app-layout>
    <div class="container px-7 md:px-10 lg:px-20">
        <div class="pt-16 pb-8 lg:px-0">
            <h1 class="text-3xl font-bold text-white">Laporan Peminjaman dan Pengembalian</h1>

        </div>
        <form class="max-w-full mx-auto lg:px-0 md:px-0">
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
        <div class="relative z-10 flex lg:ml-0 md:ml-0 lg:justify-center md:justify-start  mb-10 overflow-x-auto drop-shadow-md top-5">
            <table class="md:w-full lg:w-[100%] text-sm text-left text-gray-500 bg-white rtl:text-right drop-shadow-md">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">NO</th>
                        <th scope="col" class="px-6 py-3 text-center">PEMINJAM</th>
                        <th scope="col" class="px-6 py-3 text-center">BARANG</th>
                        <th scope="col" class="px-6 py-3 text-center">MERK</th>
                        <th scope="col" class="px-6 py-3 text-center">LOKASI</th>
                        <th scope="col" class="px-6 py-3 text-center">TANGGAL PEMINJAMAN</th>
                        <th scope="col" class="px-6 py-3 text-center">TANGGAL PENGEMBALIAN</th>
                        <th scope="col" class="px-6 py-3 text-center">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporans as $key => $laporan)
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <th scope="row" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                            {{ $key + 1 }}
                        </th>
                        <td class="px-6 py-4 text-center">
                            {{ $laporan->user->name }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $laporan->barang->nama_barang }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $laporan->barang->merk }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $laporan->barang->lokasi->nama_lokasi }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $laporan->tanggal_pinjam }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $laporan->tanggal_kembali }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $laporan->status }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>