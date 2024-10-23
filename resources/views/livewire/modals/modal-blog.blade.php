<?php

use App\Models\Blog;

use function Livewire\Volt\{state, on, rules, mount};

state(['id', 'title', 'description', 'heading']);

rules(['title' => 'required|min:3', 'heading' => 'required|min:6', 'description' => 'required|min:6']);

on(['blog-submit' => function ($validationKey, $validationMessage, $imageName, $imagePath) {
    $this->resetValidation();

    if ($validationKey && $validationKey['image']) {

        if ($validationKey['image']) {
            $this->addError('image', $validationMessage['image']);
        }

        if (!$this->title) {
            $this->addError('title', 'The name field is required.');
        }

        if (!$this->description) {
            $this->addError('description', 'The description field is required.');
        }

        $this->dispatch('admin-panel-modal-programs-loader', value: false);
    } else {
        if ($this->id) {
            Blog::where('id', $this->id)->update([
                'title' => $this->title,
                'description' => $this->description,
                'heading' => $this->heading,
            ]);
        } else {
            Blog::create([
                'title' => $this->title,
                'description' => $this->description,
                'heading' => $this->heading,
                'image' => $imagePath,
            ]);
        }

        $this->dispatch('hide-modal');
        $this->dispatch('reset-blog-page');
    }
}]);

?>

<div class="w-1/2 bg-white rounded-lg max-h-screen overflow-y-auto p-6 h-min grid grid-cols-1 gap-12">
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
            <input wire:model="title" class="outline-none bg-gray-200 rounded-lg p-4 w-full" placeholder="Title">
            <div class="text-red-500 text-semibold">@error('title'){{$message}}@enderror</div>
        </div>
        <div class="grid grid-cols-1 gap-2 h-min">
            <div class="">Heading</div>
            <textarea wire:model="heading" rows="4" class="text-sm p-2.5 w-full bg-gray-200 rounded-lg outline-none" placeholder="Heading"></textarea>
            <div class="text-red-500 text-semibold">@error('heading'){{$message}}@enderror</div>
        </div>
        <div class="grid grid-cols-1 gap-2 h-min">
            <div class="">Description</div>
            <trix-editor x-on:trix-change="$wire.description = $event.target.value"></trix-editor>
            <div class="text-red-500 text-semibold">@error('description'){{$message}}@enderror</div>
        </div>
        <div class="grid grid-cols-1 gap-2 h-min">
            <div class="">Description</div>
            <input x-ref="image" type="file" class="outline-none bg-gray-200 rounded-lg p-4 w-full" placeholder="Title" accept="image/*">
            <div class="text-red-500 text-semibold">@error('image'){{$message}}@enderror</div>
        </div>
    </div>
    <div class="flex justify-center" wire:click="$dispatch('upload-image', { image: $refs.image, imageSizeLimit:1, callbackDispatch:'blog-submit', callbackLoaderDispatch:'blog-modal-loader'})"><button class="bg-sky-400 px-4 py-2 rounded-lg text-white">Submit</button></div>
</div>