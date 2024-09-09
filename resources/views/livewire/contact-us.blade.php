<?php

use function Livewire\Volt\{state, rules};

use App\Mail\Inquery;
use Illuminate\Support\Facades\Mail;

//
state(['name', 'email', 'contact', 'country', 'comment']);

rules(['name' => 'required|min:3', 'email' => 'required|email', 'contact' => 'required', 'country' => 'required', 'comment' => 'required']);

$sendMail = function () {
    $this->validate();
    Mail::to('kedarenishant11111@gmail.com')->send(new Inquery($this->name, $this->email, $this->contact, $this->country, $this->comment));
    $this->dispatch('show-toastr', message: 'Message Sent');
    $this->reset();
};

?>

<div>
    <div class="relative h-96 xl:mt-24 uppercase text-white text-xl sm:text-4xl font-light tracking-wide" style="background-image: url('{{ asset('images/pexels-hillaryfox-1595385.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-black/50 flex justify-center items-center">Contact Us</div>
    </div>
    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-20">
        <div class="text-white" style="background-image: url('{{ asset('images/pexels-lusaya-401107.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 p-8 bg-black/70">
                <div class="flex justify-between items-center gap-4">
                    <div>
                        <svg class="w-14 h-14 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                        </svg>
                    </div>
                    <div class="grid grid-cols-1 gap-3 h-min w-full">
                        <div class="sm:text-lg font-semibold uppercase">Address</div>
                        <div class="text-xs sm:text-sm leading-tight">R&D Department Address : 7901 4th ST N, STE 300, ST. Petersburg FL33702, United States of America</div>
                        <div class="text-xs sm:text-sm leading-tight">Marketing Division Address.: BO1-A-09,Menara2 KL Eco City, 3jln Bangsar, 59200 Kuala Lumpur WP Malaysia</div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-4 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-14 h-14 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 15h12M6 6h12m-6 12h.01M7 21h10a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1Z" />
                        </svg>
                    </div>
                    <div class="grid grid-cols-1 gap-2 h-min">
                        <div class="sm:text-lg font-semibold uppercase">PHONE</div>
                        <div class="">+1 307 241 4465</div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-4 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-14 h-14 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                    </div>
                    <div class="grid grid-cols-1 gap-2 h-min">
                        <div class="text-base sm:text-lg font-semibold uppercase">EMAIL</div>
                        <div class="">info@patrisen.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-20 px-4 md:px-12 lg:px-20 xl:px-28 grid grid-cols-1 gap-2 h-min text-center">
            <div class="font-semibold">let's work together</div>
            <div class="text-2xl sm:text-4xl transition-colors duration-500 font-medium hover:text-sky-400">SEND US A MESSAGE</div>
            <div class="text-sm sm:text-xl font-medium text-gray-600">It would be great to hear from you! If you have any question, please do not hesitate to send us a message. We are looking forward to hearing from you!</div>
        </div>
        <div class="sm:py-20 grid grid-cols-1 gap-4 h-min">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-2 font-medium text-gray-800 text-sm">
                <div>
                    <input wire:model="name" class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Name*">
                    <div class="text-red-500 text-sm">@error('name') {{ $message }} @enderror</div>
                </div>
                <div>
                    <input wire:model="email" class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Email Id*">
                    <div class="text-red-500 text-sm">@error('email') {{ $message }} @enderror</div>
                </div>
                <div>
                    <input wire:model="contact" type="number" class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Contact no*">
                    <div class="text-red-500 text-sm">@error('contact') {{ $message }} @enderror</div>
                </div>
                <div>
                    <input wire:model="country" class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Country*">
                    <div class="text-red-500 text-sm">@error('country') {{ $message }} @enderror</div>
                </div>
            </div>
            <div>
                <textarea wire:model="comment" rows="4" class="block font-medium text-gray-800 text-sm bg-gray-100 p-4 w-full outline-none transition-colors transition-shadow duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Comment"></textarea>
                <div class="text-red-500 font-normal text-sm">@error('comment') {{ $message }} @enderror</div>
            </div>
            <div class="flex justify-center">
                <div wire:loading.class="pointer-events-none" wire:target="sendMail" wire:click="sendMail" class="text-center font-medium group text-white uppercase rounded-sm bg-sky-400 whitespace-nowrap py-2 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">
                    <div wire:loading.class="hidden" wire:target="sendMail" class="flex justify-between items-center gap-4">
                        <div>Send Message</div>
                        <div>
                            <svg class="w-5 h-5 transition-colors duration-500 text-white group-hover:text-sky-400 rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 18-7 3 7-18 7 18-7-3Zm0 0v-5" />
                            </svg>
                        </div>
                    </div>
                    <svg wire:loading.class.remove="hidden" wire:target="sendMail" aria-hidden="true" class="w-6 h-6 hidden mx-16 text-sky-400 animate-spin fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>