<x-app-layout>
    <div class="container px-4 md:px-10">
        <div class="mt-16 mb-10 ">
            <h1 class="text-3xl font-bold text-white">Data Pengguna yang terdaftar</h1>
        </div>
        <form class="max-w-full mx-auto">
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

        <div class="relative z-10 flex justify-center overflow-x-auto top-5">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Kelas
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            NIS
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Tipe
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">

                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            <span class="sr-only">Aksi</span>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $user)
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->kelas }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->nis }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->user_type }}
                            </td>

                            <td class="px-6 py-4 text-right ">
                                <a href="#" class="flex items-center font-medium text-blue-600 hover:text-blue-800"
                                    data-modal-target="crud-edit" data-modal-toggle="crud-edit"
                                    data-id="{{ $user->id }}"
                                    data-name="{{ $user->name }}"
                                    data-email="{{ $user->email }}"
                                    data-kelas="{{ $user->kelas }}"
                                    data-nis="{{ $user->nis }}"
                                    data-user_type="{{ $user->user_type }}">
                                    <i class="mr-2 text-xl ph ph-pencil-simple "></i>
                                    Edit</a>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="flex items-center font-medium text-red-600 hover:text-red-800"
                                    data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    data-id="{{ $user->id }}">
                                    <i class="mr-2 text-xl ph ph-trash"></i>Hapus
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- <div class="relative flex justify-center mt-10">
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
    </div> --}}
</x-app-layout>