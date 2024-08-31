<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="bg-slate-700 px-40 py-12">
        <div class="grid grid-cols-4 gap-14">
            <div class="grid grid-cols-1 gap-4 h-min">
                <div class="grid grid-cols-1 gap-4 h-min">
                    <div class="text-white text-lg tracking-wider">About Us</div>
                    <div class="border-2 rounded-full border-sky-400 w-12 h-0"></div>
                </div>
                <div class="text-sm leading-6 font-light text-gray-400">Patrisen is established with the group of experienced attorneys with the vision to the provide best patent search reports preparation, assisting clients globally for their Research & Innovation, Infringement Analysis and commercialization of the paten.</div>
            </div>
            <div class=" grid grid-cols-1 gap-4 h-min">
                <div class="grid grid-cols-1 gap-4 h-min">
                    <div class="text-white text-lg tracking-wider">Navigation</div>
                    <div class="border-2 rounded-full border-sky-400 w-12 h-0"></div>
                </div>
                <div class="text-sm font-light text-gray-200 grid grid-cols-1 gap-2">
                    <a href="/" wire:navigate class="hover:text-sky-400 cursor-pointer">Home</a>
                    <a href="/practice-domain" wire:navigate class="hover:text-sky-400 cursor-pointer">Practice Domain</a>
                    <a href="/blog" wire:navigate class="hover:text-sky-400 cursor-pointer">Blogs</a>
                    <a href="/news" wire:navigate class="hover:text-sky-400 cursor-pointer">News</a>
                    <a href="/career" wire:navigate class="hover:text-sky-400 cursor-pointer">Career</a>
                    <a href="/contact-us" wire:navigate class="hover:text-sky-400 cursor-pointer">Contact</a>
                </div>
            </div>
            <div class=" grid grid-cols-1 gap-4 h-min">
                <div class="grid grid-cols-1 gap-4 h-min">
                    <div class="text-white text-lg tracking-wider">Useful Links</div>
                    <div class="border-2 rounded-full border-sky-400 w-12 h-0"></div>
                </div>
                <div class="text-sm font-light text-gray-200 grid grid-cols-1 gap-2 h-min">
                    <a href="/about" wire:navigate class="hover:text-sky-400 cursor-pointer">Who we are</a>
                    <a href="/terms-and-conditions" wire:navigate class="hover:text-sky-400 cursor-pointer">Terms and Conditions</a>
                    <a href="/privacy-policy" wire:navigate class="hover:text-sky-400 cursor-pointer">Privacy Policy</a>
                </div>
            </div>
            <div class=" grid grid-cols-1 gap-4 h-min">
                <div class="grid grid-cols-1 gap-4 h-min">
                    <div class="text-white text-lg tracking-wider">Contact Us</div>
                    <div class="border-2 rounded-full border-sky-400 w-12 h-0"></div>
                </div>
                <div class="text-sm font-light text-gray-200 grid grid-cols-1 gap-2 h-min">
                    <div class="text-xs leading-tight flex justify-between items-center gap-4">
                        <div>
                            <svg class="w-6 h-6 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>R&D Department Address : 7901 4th ST N, STE 300, ST. Petersburg FL33702, United States of America</div>
                    </div>
                    <div class="text-xs leading-tight flex justify-between items-center gap-4">
                        <div>
                            <svg class="w-6 h-6 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>Marketing Division Address.: BO1-A-09,Menara2 KL Eco City, 3jln Bangsar, 59200 Kuala Lumpur WP Malaysia</div>
                    </div>
                    <div class="text-xs leading-tight flex justify-between items-center gap-4 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-6 h-6 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                            </svg>
                        </div>
                        <div>307 241 4465</div>
                    </div>
                    <div class="text-xs leading-tight flex justify-between items-center gap-4 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-6 h-6 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                        </div>
                        <div>Email: info@patrisen.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-slate-800 px-40 py-4">
        <div class="text-gray-300 text-sm">Copyright 2016 © Gumble - Broker & Finance PSD Template | All Rights Reserved</div>
    </div>
</div>