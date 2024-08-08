<?php

use function Livewire\Volt\{state};

//

?>

<div class="py-6 px-16 flex justify-between items-center">
    <div class="flex justify-between gap-4 items-center">
        <div>
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-12" alt="Flowbite Logo" />
        </div>
        <div class="text-2xl font-semibold text-gray-600">Gumble</div>
    </div>
    <div x-data="{showDropdown:false}" class="flex justify-between gap-20 text-gray-800 font-semibold">
        <div>HOME</div>
        <div class="flex justify-between items-center group/navbar gap-2 relative">
            <div>
                ABOUT
            </div>
            <div>
                <svg class="w-4 h-4 text-gray-800 transition-transform duration-200 group-hover/navbar:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m19 9-7 7-7-7" />
                </svg>
            </div>
            <div class="absolute transition-transform duration-200 scale-y-0 group-hover/navbar:scale-100  w-full top-6 pt-2 origin-top">
                <div class="bg-slate-700 -mx-12 text-white">
                    <div class="p-1.5 text-sm cursor-pointer group hover:text-blue-500">
                        <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-white group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Who we are</div>
                        </div>
                    </div>
                    <div class="border-t border-white"></div>
                    <div class="p-1.5 text-sm cursor-pointer group hover:text-blue-500">
                        <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-white group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Who we do</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center group/navbar gap-2 relative">
            <div>SOLUTIONS</div>
            <div>
                <svg class="w-4 h-4 text-gray-800 transition-transform duration-200 group-hover/navbar:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m19 9-7 7-7-7" />
                </svg>
            </div>
            <div class="absolute transition-transform duration-200 scale-y-0 group-hover/navbar:scale-100  w-full top-6 pt-2 origin-top">
                <div class="bg-slate-700 -mx-12 text-white">
                    <div class="p-1.5 text-sm cursor-pointer group hover:text-blue-500">
                        <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-white group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Who we are</div>
                        </div>
                    </div>
                    <div class="border-t border-white"></div>
                    <div class="p-1.5 text-sm cursor-pointer group hover:text-blue-500">
                        <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-white group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Who we do</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>PRACTICE DOMAIN</div>
        <div>INSIGHT</div>
        <div>CAREER</div>
        <div>CONTACT</div>
    </div>
</div>