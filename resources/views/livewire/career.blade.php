<?php

use function Livewire\Volt\{state, rules, on};

use App\Mail\Career;
use Illuminate\Support\Facades\Mail;
use App\Mail\Inquery;
use Illuminate\Support\Facades\Storage;

state(['name', 'email', 'contact', 'file', 'comment']);

rules(['name' => 'required|min:3', 'email' => 'required|email', 'contact' => 'required', 'comment' => 'required']);

$sendMail = function () {
    $this->validate();
    Mail::to('kedarenishant11111@gmail.com')->send(new Inquery($this->name, $this->email, $this->contact, $this->country, $this->comment));
    $this->dispatch('show-toastr', message: 'Message Sent');
    $this->reset();
};

on(['handle-career-file' => function ($validationKey, $validationMessage, $fileName, $filePath) {

    $this->resetValidation();

    if ((!$this->name || !$this->email || !$this->contact || !$this->comment) || ($validationKey && $validationKey['file'])) {
        $this->dispatch('career-submit-loader', value: false);

        if ($validationKey && $validationKey['file']) {
            $this->addError('file', $validationMessage['file']);
        }

        if (!$this->name) {
            $this->addError('name', 'The name field is required.');
        }

        if (!$this->email) {
            $this->addError('email', 'The email field is required.');
        }

        if (!$this->contact) {
            $this->addError('contact', 'The contact field is required.');
        }

        if (!$this->comment) {
            $this->addError('comment', 'The comment field is required.');
        }
        $this->dispatch('career-submit-loader', value: false);
    } else {
        Mail::to('kedarenishant11111@gmail.com')->send(new Career($this->name, $this->email, $this->contact, $this->comment, $filePath));
        Storage::disk('public')->deleteDirectory('resumefiles');
        $this->dispatch('show-toastr', message: 'Message Sent');
        $this->reset();
    }

    $this->dispatch('career-submit-loader', value: false);
}]);

?>

<div>
    <div class="relative h-96 xl:mt-24 uppercase text-white text-xl sm:text-4xl font-light tracking-wide" style="background-image: url('{{ asset('images/pexels-hillaryfox-1595385.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-black/50 flex justify-center items-center">Career</div>
    </div>
    <div class="text-center px-4 md:px-12 lg:px-20 xl:px-28 py-20 h-min text-gray-800 grid grid-cols-1 gap-1">
        <div class="text-xl sm:text-3xl font-semibold">Work with Patrisen!</div>
        <div class="text-base sm:text-xl">Looking for growth & new job, start with Patrisen</div>
    </div>
    <div class="max-lg:h-min max-lg:grid max-lg:grid-cols-1 max-lg:gap-12 lg:flex lg:justify-between lg:gap-8 px-4 md:px-12 lg:px-20 xl:px-28 max-sm:pb-12 sm:py-20">
        <div class="lg:w-4/5 grid-cols-1 gap-2">
            <div class="transition-colors group duration-500 hover:text-white text-gray-800 uppercase hover:bg-sky-400 py-5 px-4 sm:px-8 shadow-lg flex justify-between items-center">
                <div>Business Development</div>
                <div>
                    <svg class="w-6 h-6 transition-colors duration-500 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="lg:w-1/5 text-gray-800">
            <div class="text-lg sm:text-2xl mb-5">Apply for Position</div>
            <div class="grid grid-cols-1 gap-4">
                <div class="grid grid-cols-1 gap-2">
                    <div>Your Name*</div>
                    <div>
                        <input wire:model="name" placeholder="Your Name" class="bg-gray-100 max-sm:text-sm p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent">
                        <div class="text-red-500 text-sm">@error('name') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Your Email*</div>
                    <div>
                        <input wire:model="email" placeholder="Your Email" class="bg-gray-100 max-sm:text-sm p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent">
                        <div class="text-red-500 text-sm">@error('email') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Contact Number*</div>
                    <div>
                        <input type="number" wire:model="contact" placeholder="Contact Number" class="bg-gray-100 max-sm:text-sm p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent">
                        <div class="text-red-500 text-sm">@error('contact') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Comment*</div>
                    <div>
                        <textarea wire:model="comment" rows="4" class="block text-gray-800 text-sm bg-gray-100 max-sm:text-sm p-4 w-full outline-none transition-colors transition-shadow duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Comment"></textarea>
                        <div class="text-red-500 font-normal text-sm">@error('comment') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Submit your CV</div>
                    <div>
                        <input x-ref="file" type="file" placeholder="Contact Number" class="bg-gray-100 max-sm:text-sm p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" accept=".pdf">
                        <div class="text-red-500 font-normal text-sm">@error('file') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div x-data="{showLoader:false}" x-on:career-submit-loader.window="showLoader = $event.detail.value;console.log($event.detail.value)">
                    <div :class="showLoader && 'pointer-events-none'" wire:click="$dispatch('upload-file', { file: $refs.file, fileSizeLimit:1, callbackDispatch:'handle-career-file', callbackLoaderDispatch:'career-submit-loader'})" class="text-center my-4 text-white uppercase text-sm rounded-sm bg-sky-400 whitespace-nowrap py-3 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">
                        <div x-show="!showLoader">Submit</div>
                        <svg x-show="showLoader" aria-hidden="true" class="w-6 h-6 mx-3 text-sky-400 animate-spin fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>