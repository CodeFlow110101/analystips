<?php

use function Livewire\Volt\{state};

state(['title', 'description']);

?>

<div class="w-1/2 bg-white rounded-lg p-6 h-min grid grid-cols-1 gap-12">
    <div class="text-xl flex justify-between items-center text-gray-800">
        <div class="font-semibold text-gray-800">Blog</div>
        <div wire:click="$dispatch('hide-modal')" class="group hover:bg-gray-500 p-1 rounded-full h-min">
            <svg class="w-6 h-6 text-gray-500 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
        </div>
    </div>
    <div class="text-gray-800 font-semibold h-min grid grid-cols-1 gap-6">
        <div class="grid grid-cols-1 gap-2 h-min">
            <div class="">Title</div>
            <input class="outline-none bg-gray-200 rounded-lg p-4 w-full" placeholder="Title">
        </div>
        <div class="grid grid-cols-1 gap-2 h-min">
            <div class="">Description</div>
            <textarea wire:model.live="description" rows="4" class="text-sm p-2.5 w-full bg-gray-200 rounded-lg outline-none" placeholder="Description"></textarea>
        </div>
    </div>
    <div class="flex justify-center"><button class="bg-sky-400 px-4 py-2 rounded-lg text-white">Submit</button></div>
</div>