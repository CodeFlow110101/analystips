<?php

use App\Models\Blog;

use function Livewire\Volt\{state, with, usesPagination};

usesPagination();

with(fn() => ['blogs' => Blog::paginate(10)]);

?>

<div>
    <div class="h-96 bg-gray-800 pt-24 uppercase text-white text-4xl font-light tracking-wide flex justify-center items-center">
        Blogs
    </div>
    <div class="flex justify-between px-48 py-20">
        <div class="w-4/5 h-min grid grid-cols-1 gap-4">
            @foreach($blogs as $blog)
            <div class="p-4 h-min grid grid-cols-1 gap-4 text-gray-800 font-semibold">
                <div class="flex justify-center bg-slate-500"><img src="{{asset('storage/'.$blog->image)}}" class="w-auto h-64"></div>
                <div>
                    {{$blog->title}}
                </div>
                <div class="overflow-y-auto max-h-56">{{$blog->description}}</div>
            </div>
            @endforeach
        </div>
        <div class="w-1/5"></div>
    </div>
</div>