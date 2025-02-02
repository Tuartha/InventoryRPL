<div class="sticky top-0 left-0 z-30 flex items-center px-6 py-4 bg-white shadow-md shadow-black/5">
    <button type="button" class="text-lg text-gray-600 sidebar-toggle">
        <i class="ph ph-list"></i>
    </button>
    <ul class="flex  items-center ml-4 text-base">
        <li class="mr-2">
            <a href="{{ route("index") }}" class="font-medium text-gray-400 hover:text-gray-600">DASHBOARD</a>
        </li>
    </ul>
    <ul class="flex items-center ml-auto">
        <li class="ml-3 dropdown">
            <button type="button" class="flex items-center dropdown-toggle">
                <img src="" alt="" class="block object-cover w-8 h-8 align-middle rounded">
            </button>
            <ul
                class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                <li>
                    <a href="{{ route("profile.update") }}"
                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                </li>
                <li>
                    <a href="{{ route("logout") }}"
                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</div>