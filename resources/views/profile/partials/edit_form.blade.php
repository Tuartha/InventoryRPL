<div id="crud-edit" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <!-- Modal content -->
     <div class="relative bg-white rounded-lg shadow">
         <!-- Modal header -->
         <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
             <h3 class="text-lg font-semibold text-gray-900">Edit Barang</h3>
             <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto" data-modal-toggle="crud-edit">
                 <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                 </svg>
                 <span class="sr-only">Close modal</span>
             </button>
         </div>
         <!-- Modal body -->
         <form class="p-4 md:p-5" id="editBarangForm" method="POST" action="{{ route("editBarang") }}">
             <input type="hidden" name="up_slug" id="up_slug">
             <div class="grid grid-cols-2 gap-4 mb-4">
                 <div class="col-span-2">
                     <label for="up_nama_barang" class="block mb-2 text-sm font-medium text-gray-900">Nama Barang</label>
                     <input type="text" name="up_nama_barang" id="up_nama_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan nama barang" required>
                 </div>
                 <div class="col-span-2">
                     <label for="up_merk" class="block mb-2 text-sm font-medium text-gray-900">Merk</label>
                     <input type="text" name="up_merk" id="up_merk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan merk barang" required>
                 </div>
                 <div class="col-span-2">
                     <label for="up_lokasi_id" class="block mb-2 text-sm font-medium text-gray-900">Lokasi Barang</label>
                     <select id="up_lokasi_id" name="up_lokasi_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                         <option value="">Pilih</option>
                         @foreach($lokasis as $lokasi)
                             <option value="{{ $lokasi->id }}">{{ $lokasi->nama_lokasi }}</option>
                         @endforeach
                     </select>
                 </div>
                 <div class="col-span-2 sm:col-span-1">
                     <label for="up_tahun_datang" class="block mb-2 text-sm font-medium text-gray-900">Tahun Masuk</label>
                     <select id="up_tahun_datang" name="up_tahun_datang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                         <option value="2023">2023</option>
                         <option value="2024">2024</option>
                         <option value="2025">2025</option>
                     </select>
                 </div>
                 <div class="col-span-2 sm:col-span-1">
                     <label for="up_stock" class="block mb-2 text-sm font-medium text-gray-900">Stok Barang</label>
                     <input type="text" name="up_stock" id="up_stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan stok barang" required>
                 </div>
             </div>
             <button type="submit" class="updateBarang text-white inline-flex items-center justify-center uppercase bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-green font-medium rounded-lg text-sm px-5 py-2.5 w-full text-center"
             data-modal-target="messageModal"
             data-modal-toggle="messageModal">
                 <i class="mr-1 text-lg ph ph-pencil-simple-line"></i>
                 Simpan
             </button>
         </form>
     </div>
</div>