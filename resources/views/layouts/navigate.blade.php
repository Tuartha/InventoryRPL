@php
    $currentRoute = Route::currentRouteName();
    // echo $currentRoute;
@endphp

<div class="sticky top-0 left-0 z-30 flex items-center px-6 py-4 bg-white shadow-md shadow-black/5">
    <div class="flex justify-center items-center gap-4">
        <button type="button" class="listBtn text-lg flex items-center text-black sidebar-toggle">
            <i class="ph ph-list"></i>
        </button>
            <a href="{{ route($currentRoute) }}" class="font-medium text-black capitalize hover:text-gray-600">{{ $currentRoute }}</a>
    </div>
    <ul class="flex items-center ml-auto">
        <li class="ml-3 dropdown">
            <a href="{{ route("profile.update") }}" class="flex items-center dropdown-toggle">
                <img src="" alt="profil" class="block object-cover w-8 h-8 align-middle rounded">
            </a>
        </li>
    </ul>
</div>