<?php

use function Livewire\Volt\{state};

//

?>

<div @click.away="showMobileDrpDwn=false" x-data="{showMobileDrpDwn: false}" class="xl:fixed max-xl:relative top-0 left-0 w-full bg-white z-10">
    <div class="flex justify-between items-center py-6 sm:py-6 px-4 md:px-4 lg:px-8 xl:px-16">
        <a href="/" wire:navigate class="flex justify-between gap-4 items-center">
            <div>
                <img src="{{asset('images/Patrisen_Logo_transparent.png')}}" class="h-8 sm:h-12" alt="Flowbite Logo" />
            </div>
        </a>
        <div class="max-xl:hidden text-sm flex justify-between gap-5 text-black font-semibold">
            <a href="/" wire:navigate class="hover:text-amber-500">HOME</a>
            <a href="/about" wire:navigate class="hover:text-amber-500">ABOUT</a>
            <div class="flex justify-between items-center group/navbar cursor-pointer gap-1 relative">
                <div class="group-hover/navbar:text-amber-500">OUR SERVICES</div>
                <div>
                    <svg class="w-4 h-4 text-gray-800 transition-transform duration-200 group-hover/navbar:rotate-180 group-hover/navbar:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m19 9-7 7-7-7" />
                    </svg>
                </div>
                <div class="absolute transition-transform duration-200 scale-y-0 group-hover/navbar:scale-100  w-full top-6 pt-2 origin-top">
                    <div class="bg-white shadow-md shadow-black -mx-12 text-gray-800">
                        <a href="/technology-scouting" wire:navigate class="text-sm cursor-pointer group hover:text-amber-500">
                            <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>Technology Scouting</div>
                            </div>
                        </a>
                        <div class="border-t border-gray-800"></div>
                        <a href="/white-space-analysis" wire:navigate class="text-sm cursor-pointer group hover:text-amber-500">
                            <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>White Space Analysis</div>
                            </div>
                        </a>
                        <div class="border-t border-gray-800"></div>
                        <a href="/technology-landscape" wire:navigate class="text-sm cursor-pointer group hover:text-amber-500">
                            <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>Technology Landscape</div>
                            </div>
                        </a>
                        <div class="border-t border-gray-800"></div>
                        <a href="/invalidity-contentions" wire:navigate class="text-sm cursor-pointer group hover:text-amber-500">
                            <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>Invalidity Contentions</div>
                            </div>
                        </a>
                        <div class="border-t border-gray-800"></div>
                        <a href="/state-of-the-art-search" wire:navigate class="text-sm cursor-pointer group hover:text-amber-500">
                            <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>State of Art Search</div>
                            </div>
                        </a>
                        <div class="border-t border-gray-800"></div>
                        <a href="/patent-valuation" wire:navigate class="text-sm cursor-pointer group hover:text-amber-500">
                            <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>Patent Valuation</div>
                            </div>
                        </a>
                        <div class="border-t border-gray-800"></div>
                        <a href="/market-report" wire:navigate class="text-sm cursor-pointer group hover:text-amber-500">
                            <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>Market Report</div>
                            </div>
                        </a>
                        <div class="border-t border-gray-800"></div>
                        <a href="/competitive-analysis" wire:navigate class="text-sm cursor-pointer group hover:text-amber-500">
                            <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>Competitive Analysis</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a href="/practice-domain" wire:navigate class="hover:text-amber-500">PRACTICE DOMAIN</a>
            <div class="flex justify-between items-center group/navbar cursor-pointer gap-1 relative">
                <div class="group-hover/navbar:text-amber-500">
                    INSIGHT
                </div>
                <div>
                    <svg class="w-4 h-4 text-gray-800 transition-transform duration-200 group-hover/navbar:rotate-180 group-hover/navbar:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m19 9-7 7-7-7" />
                    </svg>
                </div>
                <div class="absolute transition-transform duration-200 scale-y-0 group-hover/navbar:scale-100 w-full top-6 pt-2 origin-top">
                    <div class="bg-white shadow-md shadow-black -mx-12 text-gray-800">
                        <a href="/blog" wire:navigate class="text-sm cursor-pointer group hover:text-amber-500">
                            <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>News & Blogs</div>
                            </div>
                        </a>
                        <div class="border-t border-gray-800"></div>
                        <div class="p-1.5 text-sm cursor-pointer group hover:text-amber-500">
                            <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                                <div>
                                    <svg class="w-3 h-3 text-gray-800 group-hover:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                    </svg>
                                </div>
                                <div>CSR</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/career" wire:navigate class="hover:text-amber-500">CAREER</a>
            <a href="/contact-us" wire:navigate class="hover:text-amber-500">CONTACT</a>
        </div>
        <div @click="showMobileDrpDwn=!showMobileDrpDwn" class="xl:hidden border border-amber-500 hover:bg-amber-500 group p-2 rounded-lg">
            <div x-show="!showMobileDrpDwn" class="h-min grid grid-cols-1 gap-1">
                <div class="border border-amber-500 group-hover:border-white h-0 w-4"></div>
                <div class="border border-amber-500 group-hover:border-white h-0 w-4"></div>
                <div class="border border-amber-500 group-hover:border-white h-0 w-4"></div>
            </div>
            <div x-cloak x-show="showMobileDrpDwn">
                <svg class="w-4 h-4 text-amber-500 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>
            </div>
        </div>
    </div>
    <div x-cloak :class="showMobileDrpDwn?'scale-y-100':'scale-y-0'" class="absolute transition-transform duration-200 origin-top top-20 bg-white py-2 w-full px-2 xl:hidden h-min grid grid-cols-1 gap-2">
        <a href="/" wire:navigate>
            <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 text-sm text-center rounded-lg">Home</div>
        </a>
        <div @click.away="showDropdown=false" x-data="{showDropdown: false}" class="text-sm text-center h-min grid grid-cols-1 gap-2">
            <div @click="showDropdown=!showDropdown" class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">About</div>
            <div x-show="showDropdown" class="h-min grid grid-cols-1 gap-2">
                <a href="/about" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Who we are</div>
                </a>
                <a href="/terms-and-conditions" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Terms and Conditions</div>
                </a>
                <a href="/privacy-policy" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Privacy Policy</div>
                </a>
            </div>
        </div>
        <div @click.away="showDropdown=false" x-data="{showDropdown: false}" class="text-sm text-center h-min grid grid-cols-1 gap-2">
            <div @click="showDropdown=!showDropdown" class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Solutions</div>
            <div x-show="showDropdown" class="h-min grid grid-cols-1 gap-2">
                <a href="/technology-scouting" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Technology Scouting</div>
                </a>
                <a href="/white-space-analysis" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">White Space Analysis</div>
                </a>
                <a href="/technology-landscape" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Technology Landscape</div>
                </a>
                <a href="/invalidity-contentions" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Invalidity Contentions</div>
                </a>
                <a href="/state-of-the-art-search" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">State of Art Search</div>
                </a>
                <a href="/patent-valuation" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Patent Valuation</div>
                </a>
                <a href="/market-report" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Market Report</div>
                </a>
                <a href="/competitive-analysis" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">Competitive Analysis</div>
                </a>
            </div>
        </div>
        <a href="/practice-domain" wire:navigate>
            <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 text-sm text-center rounded-lg">PRACTICE DOMAIN</div>
        </a>
        <div @click.away="showDropdown=false" x-data="{showDropdown: false}" class="text-sm text-center h-min grid grid-cols-1 gap-2">
            <div @click="showDropdown=!showDropdown" class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">INSIGHT</div>
            <div x-show="showDropdown" class="h-min grid grid-cols-1 gap-2">
                <a href="/blog" wire:navigate>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">News & Blogs</div>
                </a>
                <div>
                    <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 rounded-lg">CSR</div>
                </div>
            </div>
        </div>
        <a href="/career" wire:navigate>
            <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 text-sm text-center rounded-lg">CAREER</div>
        </a>
        <a href="/contact-us" wire:navigate>
            <div class="border transition-colors hover:bg-amber-500 duration-500 hover:text-white border-amber-500 p-2 text-sm text-center rounded-lg">CONTACT</div>
        </a>
    </div>
</div>