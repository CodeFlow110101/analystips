<?php

use function Livewire\Volt\{state};

//

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
                        <input placeholder="Your Name" class="bg-gray-100 px-4 py-3 text-sm w-full outline-none">
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Your Email*</div>
                    <div>
                        <input placeholder="Your Email" class="bg-gray-100 px-4 py-3 text-sm w-full outline-none">
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Contact Number*</div>
                    <div>
                        <input placeholder="Contact Number" class="bg-gray-100 px-4 py-3 text-sm w-full outline-none">
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Comment*</div>
                    <div>
                        <textarea rows="4" class="text-sm p-2.5 w-full bg-gray-100 outline-none" placeholder="Comment"></textarea>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div>Submit your CV</div>
                    <div>
                        <input type="file" placeholder="Contact Number" class="bg-gray-100 px-4 py-3 text-sm w-full outline-none">
                    </div>
                </div>
                <div>
                    <div class="text-center my-4 text-white uppercase text-sm rounded-sm bg-sky-400 whitespace-nowrap py-3 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">Submit</div>
                </div>
            </div>
        </div>
    </div>