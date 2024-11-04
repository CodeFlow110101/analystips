<?php

use Illuminate\Http\Request;

use function Livewire\Volt\{mount, on, state, with, usesPagination};

state(['path']);

mount(function (Request $request) {
    $this->path = $request->path();
});
?>

<div x-data="{ toggleSidebar: false }" class="p-6 flex lg:justify-between lg:gap-12 max-lg:justfy-center">
    <div class="fixed top-5 z-10 w-60 lg:w-1/5">
        <livewire:admin.sidebar />
    </div>
    <div class="lg:w-1/5 w-min">
    </div>
    <div class="lg:w-4/5 w-full grid grid-cols-1 gap-10">
        <div class="lg:flex lg:justify-end max-lg:grid max-lg:grid-cols-1 max-lg:gap-4">
            <div class="flex justify-between items-center gap-3">
                <button x-on:click="toggleSidebar = !toggleSidebar"
                    class="hover:bg-gray-100 hover:bg-opacity-20 rounded-full p-4 w-16 outline-none lg:hidden">
                    <div class="grid grid-cols-1 gap-2">
                        <div class="border-2 rounded-full border-white"></div>
                        <div class="border-2 h-0 rounded-full border-white"></div>
                        <div class="border-2 rounded-full border-white"></div>
                    </div>
                </button>
            </div>
        </div>
        <div>
            @if($path == 'admin-blogs')
            <livewire:admin.admin-blogs />
            @elseif($path == 'add-blog')
            <livewire:admin.add-blog />
            @endif
        </div>
    </div>
</div>