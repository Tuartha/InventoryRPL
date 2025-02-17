<div id="crud-tambahU" tabindex="-1" aria-hidden="true"
    class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">
        <div class="relative w-full max-w-md p-4">
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">Tambah User</h3>
                    <button type="button" data-modal-toggle="crud-tambahU"
                        class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>

                <!-- Form -->
                <form id="addUserForm" class="p-4" method="POST" action="{{ route('addUser') }}">
                    @csrf
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" name="name" id="name" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Masukkan nama">
                        </div>

                        <div class="col-span-2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Masukkan email">
                        </div>

                        <div class="col-span-2">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Masukkan password">
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="user_type" class="block mb-2 text-sm font-medium text-gray-900">Type</label>
                            <select id="user_type" name="user_type" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option value="user">user</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                            <input type="text" name="kelas" id="kelas" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Masukkan kelas">
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="nis" class="block mb-2 text-sm font-medium text-gray-900">NIS</label>
                            <input type="text" name="nis" id="nis" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Masukkan nis">
                        </div>
                    </div>

                    <button type="submit"
                        class="addBarang text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 w-full">
                        Tambah User
                    </button>
                </form>
            </div>
        </div>
    </div>