<?php

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use function Livewire\Volt\{on, with, usesPagination};

usesPagination();

with(fn() => ['blogs' => Blog::paginate(10)]);

on(['reset-blog-page' => function () {
    $this->resetPage();
}]);

$deleteBlog = function ($id) {
    Storage::disk('public')->delete(Blog::find($id)->image);
    Blog::where('id', $id)->delete();
};
?>

<div>
    <div class="h-min grid grid-cols-2 gap-4">
        @foreach($blogs as $blog)
        <div class="p-4 shadow shadow-black/30 rounded-lg h-min grid grid-cols-1 gap-4 text-gray-800 font-semibold">
            <div class="flex justify-center"><img src="{{asset('storage/'.$blog->image)}}" class="w-auto h-64 rounded-lg"></div>
            <div>
                {{$blog->title}}
            </div>
            <div>
                {{$blog->heading}}
            </div>
            <div class="overflow-y-auto max-h-56">{!!$blog->description!!}</div>
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
    <div class="py-10"> {{ $blogs->links() }} </div>
</div>