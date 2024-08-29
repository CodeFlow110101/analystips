<?php

use App\Models\Blog;
use Illuminate\Support\Str;

use function Livewire\Volt\{state, with, mount, usesPagination};

usesPagination();

state(['search', 'id']);

with(fn() => [
    'blogs' => Blog::where('title', 'like', '%' . $this->search . '%')->when($this->id, function ($query) {
        return $query->where('id', $this->id);
    })->orderBy('created_at', 'desc')->paginate(3),
    'recent_blogs' => Blog::orderBy('created_at', 'desc')->get()->take(5)
]);

mount(function ($id) {
    if ($id) {
        $this->id = $id;
    }
});

?>

<div>
    <div class="h-96 bg-gray-800 pt-24 uppercase text-white text-4xl font-light tracking-wide flex justify-center items-center">
        Blogs
    </div>
    <div class="flex justify-between gap-4 px-48 py-20">
        <div class="w-4/5 h-min grid grid-cols-1 gap-8">
            @foreach($blogs as $blog)
            <div wire:key="{{$blog->id}}" class="h-min grid grid-cols-1 gap-4 text-gray-800 font-semibold">
                <div class="flex justify-center">
                    <img src="{{asset('storage/'.$blog->image)}}" class="w-auto h-64">
                </div>
                <a href="/blog?id={{$blog->id}}" wire:navigate class="hover:text-sky-400 cursor-pointer">
                    {{$blog->title}}
                </a>
                <div class="text-sm text-gray-400 font-medium w-min whitespace-nowrap flex justify-center gap-2 items-center">
                    <div>
                        <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div>{{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }}</div>
                </div>
                <div class="overflow-y-auto max-h-56 text-xs leading-6 font-medium">{{$id ? $blog->description : Str::limit($blog->description, 400)}}</div>
                @if(!$this->id)
                <div>
                    <a href="/blog?id={{$blog->id}}" wire:navigate class="text-center font-light text-white text-sm uppercase bg-sky-400 whitespace-nowrap py-2 px-8 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">Read more</a>
                </div>
                @endif
            </div>
            @endforeach
            {{ $blogs->links() }}
        </div>
        <div class="w-1/5 h-min grid grid-cols-1 gap-4">
            <div>
                <input wire:model.live="search" class="border border-gray-500 focus:border-sky-400 transition-colors duration-200 w-full px-4 py-2 outline-none" placeholder="Search">
            </div>
            <div>
                <div class="text-lg tracking-wide text-gray-800 font-semibold">Recent Posts</div>
            </div>
            <div class="flex justify-center">
                <div class="h-0 border border-sky-400 w-1/5"></div>
                <div class="h-0 border border-gray-200 w-4/5"></div>
            </div>
            <div class="h-min text-left grid grid-cols-1 gap-4">
                @foreach($recent_blogs as $blog)
                <a wire:key="{{$blog->id}}" href="/blog?id={{$blog->id}}" wire:navigate class="hover:text-sky-400 text-gray-800 font-semibold cursor-pointer">{{$blog->title}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>