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
                'url' => strtolower(trim(str_replace(' ', '-', $this->title))),
            ]);
        } else {
            Blog::create([
                'title' => $this->title,
                'description' => $this->description,
                'heading' => $this->heading,
                'image' => $imagePath,
                'url' => strtolower(trim(str_replace(' ', '-', $this->title))),
            ]);
        }

        return $this->redirectRoute('admin-blogs', navigate: true);
    }
}]);

?>

<div class="w-full bg-white rounded-lg p-6 h-min grid grid-cols-1 gap-12">
    <div class="text-gray-800 font-semibold h-min grid grid-cols-1 gap-6">
        <div class="grid grid-cols-1 gap-2 h-min">
            <div class="">Title</div>
            <input wire:model="title" class="outline-none shadow shadow-black/30 rounded-lg p-4 w-full" placeholder="Title">
            <div class="text-red-500 text-semibold">@error('title'){{$message}}@enderror</div>
        </div>
        <div class="grid grid-cols-1 gap-2 h-min">
            <div class="">Heading</div>
            <textarea wire:model="heading" rows="4" class="text-sm p-2.5 w-full shadow shadow-black/30 rounded-lg outline-none" placeholder="Heading"></textarea>
            <div class="text-red-500 text-semibold">@error('heading'){{$message}}@enderror</div>
        </div>
        <div class="grid grid-cols-1 gap-2 h-min">
            <div class="">Description</div>
            <trix-editor x-on:trix-change="$wire.description = $event.target.value"></trix-editor>
            <div class="text-red-500 text-semibold">@error('description'){{$message}}@enderror</div>
        </div>
        <div class="grid grid-cols-1 gap-2 h-min">
            <div class="">Description</div>
            <input x-ref="image" type="file" class="outline-none shadow shadow-black/30 rounded-lg p-4 w-full" placeholder="Title" accept="image/*">
            <div class="text-red-500 text-semibold">@error('image'){{$message}}@enderror</div>
        </div>
    </div>
    <div class="flex justify-center" wire:click="$dispatch('upload-image', { image: $refs.image, imageSizeLimit:1, callbackDispatch:'blog-submit', callbackLoaderDispatch:'blog-modal-loader'})"><button class="bg-sky-400 px-4 py-2 rounded-lg text-white">Submit</button></div>
</div>