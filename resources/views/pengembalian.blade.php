    <x-app-layout>
        <div class="container px-7 md:px-10 lg:px-20">
            <div class="pt-16 pb-8 lg:px-0">
                <h1 class="text-3xl font-bold text-white">Data Pengembalian </h1>
            </div>
            <form class="max-w-full mx-auto lg:px-0 md:px-0">
                @csrf
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Content..." required />
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
            <div class="relative z-10 lg:ml-0 md:ml-0 flex lg:justify-center md:justify-start mb-10 overflow-x-auto drop-shadow-md top-5">
                <table class="md:w-full lg:w-[100%] text-sm text-left text-gray-500 bg-white rtl:text-right drop-shadow-md">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">NO</th>
                            <th scope="col" class="px-6 py-3 text-center">TANGGAL PINJAM</th>
                            <th scope="col" class="px-6 py-3 text-center">PEMINJAM</th>
                            <th scope="col" class="px-6 py-3 text-center">BARANG</th>
                            <th scope="col" class="px-6 py-3 text-center">MERK</th>
                            <th scope="col" class="px-6 py-3 text-center">JUMLAH</th>
                            <th scope="col" class="px-6 py-3 text-center">KEMBALIKAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengembalian as $key => $data)
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                {{ $key + 1 }}
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $data->tanggal_pinjam }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $data->user->kelas }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $data->barang->nama_barang }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $data->barang->merk }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $data->jumlah }}
                            </td>
                            <td class="px-6 py-4 text-center ">
                                <!-- Tombol kembalikan -->
                                <a href="#" class="font-medium hover:text-green-600" data-modal-target="popup-modal" data-modal-toggle="popup-modal" data-id="{{ $data->id }}">
                                    <i class="text-3xl ph ph-check-circle"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal kembalikan -->
        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full p-4">
                <div class="relative bg-white rounded-lg shadow ">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                    <div class="p-4 md:p-5">
                        <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="text-lg font-bold text-black ">Apakah Anda yakin ingin mengembalikan barang ini?</h3>
                        <div class="flex justify-center pt-5">
                            <button id="btn-kembalikan" data-modal-hide="popup-modal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-7 py-2.5 text-center">
                                Kembalikan
                            </button>
                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-7 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll("a[data-id]").forEach(button => {
                    button.addEventListener("click", function () {
                        const peminjamanId = this.getAttribute("data-id");
                        const modal = document.getElementById("popup-modal");
                        modal.classList.remove("hidden");
                        
                        // Set the confirmation button to use this ID for the fetch request
                        document.getElementById("btn-kembalikan").setAttribute("data-id", peminjamanId);
                    });
                });

                // Handle tombol "Kembalikan"
                document.getElementById("btn-kembalikan").addEventListener("click", function () {
                    const peminjamanId = this.getAttribute("data-id");
                    console.log("ID yang dikirim:", peminjamanId);

                    if (!peminjamanId) {
                        alert("Terjadi kesalahan: ID peminjaman tidak ditemukan.");
                        return;
                    }

                    fetch(`/admin/pengembalian/${peminjamanId}`, {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                            "Content-Type": "application/json",
                            "Accept": "application/json"
                        },
                        body: JSON.stringify({ id: peminjamanId })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log("Response dari server:", data);
                        alert(data.message);
                        location.reload();
                    })
                    .catch(error => {
                        console.error("Error fetch:", error);
                        alert("Terjadi kesalahan saat mengembalikan barang.");
                    });
                });
            });
        </script>
    </x-app-layout>
