<div id="edit-user" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative bg-white rounded-lg shadow">
         <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
             <h3 class="text-lg font-semibold text-gray-900">Edit User</h3>
             <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto" data-modal-toggle="edit-user">
                 <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                 </svg>
                 <span class="sr-only">Close modal</span>
             </button>
         </div>
         <form class="p-4 md:p-5" id="editUserForm" method="POST" action="{{ route("editUser") }}">
             <input type="hidden" name="up_id" id="up_id">
             <div class="grid grid-cols-2 gap-4 mb-4">
                 <div class="col-span-2">
                     <label for="up_name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                     <input type="text" name="up_name" id="up_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan nama" required>
                 </div>
                 <div class="col-span-2">
                     <label for="up_email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                     <input type="email" name="up_email" id="up_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan merk barang" required>
                </div>
                 <div class="col-span-2">
                     <label for="up_password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                     <input type="password" name="up_password" id="up_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan merk barang" required>
                </div>
                <div class="col-span-2">
                    <label for="up_nis" class="block mb-2 text-sm font-medium text-gray-900">NIS</label>
                    <input type="text" name="up_nis" id="up_nis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan nama" required>
                </div>
                <div class="col-span-2">
                    <label for="up_kelas" class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                    <input type="text" name="up_kelas" id="up_kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan nama" required>
                </div>
                 <div class="col-span-2">
                     <label for="up_user_type" class="block mb-2 text-sm font-medium text-gray-900">Tipe User</label>
                     <select id="up_user_type" name="up_user_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                         <option value="">Pilih</option>
                         @foreach($all as $user)
                             <option value="{{ $user->user_type }}">{{ $user->user_type }}</option>
                         @endforeach
                     </select>
                 </div>
             </div>
             <button type="submit" class="updateUser text-white inline-flex items-center justify-center uppercase bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-green font-medium rounded-lg text-sm px-5 py-2.5 w-full text-center"
             data-modal-target="messageModal"
             data-modal-toggle="messageModal">
                 <i class="mr-1 text-lg ph ph-pencil-simple-line"></i>
                 Simpan
             </button>
         </form>
     </div>
</div>