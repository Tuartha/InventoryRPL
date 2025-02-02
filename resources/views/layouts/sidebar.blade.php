<div
    class="fixed top-0 left-0 z-50 flex flex-col justify-between w-64 h-full p-4 transition-transform bg-gray-900 sidebar-menu">
    <!-- Profil User -->
    <a href="#" class="flex flex-col items-start justify-center pb-4 border-b border-b-gray-500">
        <img src="{{ asset('img/userimage.jpg') }}" alt="" class="flex object-cover ml-2 rounded-full h-14 w-14">
        <span class="mt-1 font-bold text-white text-md">{{ Auth::user()->name }}</span>
        <p class="text-xs text-white">{{ Auth::user()->email }}</p>
    </a>
    <!-- Menu Utama -->
    <ul class="flex-grow mt-4">
        <li class="mb-1 group {{ request()->routeIs('index') ? 'active' : '' }}">
            <a href="{{ route('index') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md
                 group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="mr-2 text-xl ph ph-sidebar"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group {{ request()->routeIs('inventori') ? 'active' : '' }}">
            <a href="{{ route('inventori') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md
                 group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                <i class="mr-2 text-xl ph ph-archive"></i>
                <span class="text-sm">Inventori</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
        </li>
        <li class="mb-1 group {{ request()->routeIs('peminjaman') ? 'active' : '' }}">
            <a href="{{ route('peminjaman') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md
                 group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                <i class="mr-2 text-xl ph ph-hand-arrow-down"></i>
                <span class="text-sm">Peminjaman</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
        </li>
        <li class="mb-1 group {{ request()->routeIs('pengembalian') ? 'active' : '' }}">
            <a href="{{ route('pengembalian') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md
                 group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                <i class="mr-2 text-lg ph ph-hand-arrow-up"></i>
                <span class="text-sm">Pengembalian</span>
            </a>
        </li>
        <li class="mb-1 group {{ request()->routeIs('laporan') ? 'active' : '' }}">
            <a href="{{ route('laporan') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md
                 group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                <i class="mr-2 text-lg ph ph-notepad"></i>
                <span class="text-sm">Laporan</span>
            </a>
        </li>
    </ul>
    <div class="mt-auto">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md
                 group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 w-full text-left">
                <i class="mr-2 text-lg ph ph-sign-out"></i>
                <span class="text-sm">Log out</span>
            </button>
        </form>
    </div>
</div>
<div class="fixed top-0 left-0 z-40 w-full h-full bg-black/50 md:hidden sidebar-overlay"></div>