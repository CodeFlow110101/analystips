<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="h-96 bg-gray-800 py-28 px-48 text-white text-4xl font-semibold flex items-end">
        Contact Us
    </div>
    <div class="px-40 py-20">
        <div class="bg-gray-800 grid grid-cols-3 gap-12 p-8 text-white">
            <div class="flex justify-between items-center gap-4">
                <div>
                    <svg class="w-14 h-14 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                    </svg>
                </div>
                <div class="grid grid-cols-1 gap-3 h-min">
                    <div class="text-lg font-semibold uppercase">Address</div>
                    <div class="text-sm leading-tight">R&D Department Address : 7901 4th ST N, STE 300, ST. Petersburg FL33702, United States of America</div>
                    <div class="text-sm leading-tight">Marketing Division Address.: BO1-A-09,Menara2 KL Eco City, 3jln Bangsar, 59200 Kuala Lumpur WP Malaysia</div>
                </div>
            </div>
            <div class="flex justify-between items-center gap-4 w-min whitespace-nowrap">
                <div>
                    <svg class="w-14 h-14 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 15h12M6 6h12m-6 12h.01M7 21h10a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1Z" />
                    </svg>
                </div>
                <div class="grid grid-cols-1 gap-2 h-min">
                    <div class="text-lg font-semibold uppercase">PHONE</div>
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
                    <div class="text-lg font-semibold uppercase">EMAIL</div>
                    <div class="">info@patrisen.com</div>
                </div>
            </div>
        </div>
        <div class="py-20 px-40 grid grid-cols-1 gap-2 h-min text-center">
            <div class="font-semibold">let's work together</div>
            <div class="text-4xl font-medium hover:text-sky-400">SEND US A MESSAGE</div>
            <div class="text-xl font-medium text-gray-600">It would be great to hear from you! If you have any question, please do not hesitate to send us a message. We are looking forward to hearing from you!</div>
        </div>
        <div class="py-20 grid grid-cols-1 gap-4 h-min">
            <div class="grid grid-cols-4 gap-2 font-medium text-gray-800 text-sm">
                <input class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Name*">
                <input class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Email Id*">
                <input class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Contact no*">
                <input class="bg-gray-100 p-4 w-full outline-none transition-all duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Country*">
            </div>
            <div>
                <textarea id="message" rows="4" class="block font-medium text-gray-800 text-sm bg-gray-100 p-4 w-full outline-none transition-colors transition-shadow duration-500 focus:shadow-lg focus:bg-transparent" placeholder="Comment"></textarea>
            </div>
            <div class="flex justify-center">
                <div class="text-center font-medium group flex justify-between items-center gap-4 text-white uppercase rounded-sm bg-sky-400 whitespace-nowrap py-2 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">
                    <div>Send Message</div>
                    <div>
                        <svg class="w-5 h-5 transition-colors duration-500 text-white group-hover:text-sky-400 rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 18-7 3 7-18 7 18-7-3Zm0 0v-5" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>