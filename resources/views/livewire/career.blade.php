<?php

use function Livewire\Volt\{state, rules};
use Illuminate\Support\Facades\Mail;
use App\Mail\Inquery;

state(['name', 'email', 'contact', 'file', 'comment']);

rules(['name' => 'required|min:3', 'email' => 'required|email', 'contact' => 'required', 'file' => 'required', 'comment' => 'required']);

$sendMail = function () {
    $this->validate();
    Mail::to('kedarenishant11111@gmail.com')->send(new Inquery($this->name, $this->email, $this->contact, $this->country, $this->comment));
    $this->dispatch('show-toastr', message: 'Message Sent');
    $this->reset();
};

?>

<div>
    <div class="h-96 bg-gray-800 py-28 px-48 text-white text-4xl font-semibold flex items-end">
        Career
    </div>
    <div class="text-center px-40 py-20 h-min text-gray-800 grid grid-cols-1 gap-1">
        <div class="text-3xl font-semibold">Work with Patrisen!</div>
        <div class="text-xl">Looking for growth & new job, start with Patrisen</div>
    </div>
    <div class="flex justify-between gap-8 px-40 py-20">
        <div class="w-4/5 grid-cols-1 gap-2">
            <div class="transition-colors group duration-500 hover:text-white text-gray-800 uppercase hover:bg-sky-400 py-5 px-8 shadow-lg flex justify-between items-center">
                <div>Business Development</div>
                <div>
                    <svg class="w-6 h-6 transition-colors duration-500 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-1/5 text-gray-800">
            <div class="text-2xl mb-5">Apply for Position</div>
            <div class="grid grid-cols-1 gap-4">
                <div class="grid grid-cols-1 gap-2">
                    <div>Your Name*</div>
                    <div>
                        <input wire:model="name" placeholder="Your Name" class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent">
                        <div class="text-red-500 text-sm">@error('name') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Your Email*</div>
                    <div>
                        <input wire:model="email" placeholder="Your Email" class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent">
                        <div class="text-red-500 text-sm">@error('email') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Contact Number*</div>
                    <div>
                        <input wire:model="contact" placeholder="Contact Number" class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent">
                        <div class="text-red-500 text-sm">@error('contact') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Comment*</div>
                    <div>
                        <textarea wire:model="comment" rows="4" class="block font-medium text-gray-800 text-sm bg-gray-100 p-4 w-full outline-none transition-colors transition-shadow duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Comment"></textarea>
                        <div class="text-red-500 font-normal text-sm">@error('comment') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Submit your CV</div>
                    <div>
                        <input wire:model="file" type="file" placeholder="Contact Number" class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" accept=".pdf">
                        <div class="text-red-500 font-normal text-sm">@error('file') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div>
                    <div wire:click="sendMail" class="text-center my-4 text-white uppercase text-sm rounded-sm bg-sky-400 whitespace-nowrap py-3 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">Submit</div>
                </div>
            </div>
        </div>
    </div>