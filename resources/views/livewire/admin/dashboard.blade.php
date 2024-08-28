<?php

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use function Livewire\Volt\{mount, on, state, with, usesPagination};

state(['path']);

usesPagination();

with(fn() => ['blogs' => Blog::paginate(10)]);

on(['reset-blog-page' => function () {
    $this->resetPage();
}]);

$deleteBlog = function ($id) {
    Storage::disk('public')->delete(Blog::find($id)->image);
    Blog::where('id', $id)->delete();
};

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
        <div class="lg:flex lg:justify-between max-lg:grid max-lg:grid-cols-1 max-lg:gap-4">
            <div>
                <div class="capitalize text-white w-min gap-2 flex tracking-tighter justify-between">
                    <div>Pages</div>
                    <div>/</div>
                    <div>{{ $path }}</div>
                </div>
                <div class="capitalize text-white font-bold tracking-wide">{{ $path }}</div>
            </div>
            <div class="flex justify-between items-center gap-3">
                <div class="relative">
                    <input class="p-3 max-lg:w-4/5 pl-10 text-sm rounded-lg bg-gray-200 outline-none"
                        placeholder="Type here...">
                    <svg class="w-5 h-5 absolute text-gray-500 top-3 left-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="3"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
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
        <div class="flex justify-end">
            <div wire:click="$dispatch('show-model')" class="bg-gray-200 px-4 py-2 cursor-pointer rounded-lg text-gray-800 font-semibold">Add Blog</div>
        </div>
        <div class="h-min grid grid-cols-2 gap-4">
            @foreach($blogs as $blog)
            <div class="p-4 bg-gray-200 rounded-lg h-min grid grid-cols-1 gap-4 text-gray-800 font-semibold">
                <div class="flex justify-center"><img src="{{asset('storage/'.$blog->image)}}" class="w-auto h-64 rounded-lg"></div>
                <div>
                    {{$blog->title}}
                </div>
                <div class="overflow-y-auto max-h-56">{{$blog->description}}</div>
                <div class="flex justify-center">
                    <div wire:click="deleteBlog({{$blog->id}})" class="rounded-full cursor-pointer p-4 group hover:bg-gray-500">
                        <svg class="w-6 h-6 text-gray-500 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div> {{ $blogs->links() }} </div>
    </div>
</div>