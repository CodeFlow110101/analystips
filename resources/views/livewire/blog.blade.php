<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

use function Livewire\Volt\{state, with, mount, usesPagination};

usesPagination();

state(['search', 'id']);

with(fn() => [
    'blogs' => Blog::where('title', 'like', '%' . $this->search . '%')->when($this->id, function ($query) {
        return $query->where('id', $this->id);
    })->orderBy('created_at', 'desc')->simplePaginate(3),
    'recent_blogs' => Blog::orderBy('created_at', 'desc')->get()->take(5)
]);

$redirectToBlog = function ($id) {
    session()->flash('blogId', $id);
    return $this->redirectRoute('blog', navigate: true);
};

mount(function ($id) {
    if ($id) {
        $this->id = $id;
    }
});

?>

<div>
    <div class="relative h-96 xl:mt-24 uppercase text-white text-xl sm:text-4xl font-light tracking-wide">
        <img class="w-full h-full" src="{{ asset('page-bg-images/blog.jpeg') }}">
        <div class="absolute inset-0 bg-black/50 flex justify-center items-center">News & Blogs</div>
    </div>
    <div class="lg:flex lg:justify-between lg:gap-4 px-4 md:px-12 lg:px-20 xl:px-28 py-20">
        <div class="lg:w-4/5 h-min grid grid-cols-1 gap-12 sm:gap-8">
            @foreach($blogs as $blog)
            <div wire:key="{{$blog->id}}" class="h-min grid grid-cols-1 gap-4 text-gray-800 font-semibold">
                <div class="flex justify-center">
                    <img src="{{asset('storage/'.$blog->image)}}" class="w-auto h-64">
                </div>
                <div wire:click="redirectToBlog({{$blog->id}})" class="hover:text-amber-500 cursor-pointer">
                    {{$blog->title}}
                </div>
                <div class="text-sm text-gray-400 font-medium w-min whitespace-nowrap flex justify-center gap-2 items-center">
                    <div>
                        <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div>{{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }}</div>
                </div>
                <div class="leading-6 @if($id) text-base @else text-sm @endif font-medium">
                    @if($id)
                    {!!$blog->description!!}
                    @else
                    {{Str::limit($blog->heading, 400)}}
                    @endif
                </div>
                @if(!$this->id)
                <div>
                    <div wire:click="redirectToBlog({{$blog->id}})" class="text-center font-light text-white text-sm uppercase bg-amber-500 whitespace-nowrap py-2 px-8 w-min cursor-pointer transition-colors duration-500 border hover:border-amber-500 hover:bg-white hover:text-amber-500">Read more</div>
                </div>
                @endif
            </div>
            @endforeach
            <div class="py-12">
                {{ $blogs->links() }}
            </div>
        </div>
        <div class="lg:w-1/5 h-min grid grid-cols-1 gap-4">
            <div>
                <input wire:model.live="search" class="border border-gray-500 focus:border-amber-500 transition-colors duration-200 w-full px-4 py-2 outline-none" placeholder="Search">
            </div>
            <div>
                <div class="text-lg tracking-wide text-gray-800 font-semibold">Recent Posts</div>
            </div>
            <div class="flex justify-center">
                <div class="h-0 border border-amber-500 w-1/5"></div>
                <div class="h-0 border border-gray-200 w-4/5"></div>
            </div>
            <div class="h-min text-left grid grid-cols-1 gap-4">
                @foreach($recent_blogs as $blog)
                <div wire:click="redirectToBlog({{$blog->id}})" class="hover:text-amber-500 text-gray-800 font-semibold cursor-pointer">{{$blog->title}}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>