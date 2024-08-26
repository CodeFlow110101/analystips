<?php

use function Livewire\Volt\{state};

//

?>

<div class="fixed top-0 left-0 w-full bg-white z-10 py-6 px-16 flex justify-between items-center">
    <a href="/" wire:navigate class="flex justify-between gap-4 items-center">
        <div>
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-12" alt="Flowbite Logo" />
        </div>
        <div class="text-2xl font-semibold text-gray-600">Gumble</div>
    </a>
    <div class="flex justify-between gap-10 text-gray-800 font-semibold">
        <a href="/" wire:navigate class="hover:text-sky-400">HOME</a>
        <div class="flex justify-between items-center group/navbar cursor-pointer gap-2 relative">
            <div class="group-hover/navbar:text-blue-500">
                ABOUT
            </div>
            <div>
                <svg class="w-4 h-4 text-gray-800 transition-transform duration-200 group-hover/navbar:rotate-180 group-hover/navbar:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m19 9-7 7-7-7" />
                </svg>
            </div>
            <div class="absolute transition-transform duration-200 scale-y-0 group-hover/navbar:scale-100 w-full top-6 pt-2 origin-top">
                <div class="bg-white shadow-md shadow-black -mx-12 text-gray-800">
                    <a href="/about" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Who we are</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/about" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>What we do</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center group/navbar cursor-pointer gap-2 relative">
            <div class="group-hover/navbar:text-blue-500">SOLUTIONS</div>
            <div>
                <svg class="w-4 h-4 text-gray-800 transition-transform duration-200 group-hover/navbar:rotate-180 group-hover/navbar:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m19 9-7 7-7-7" />
                </svg>
            </div>
            <div class="absolute transition-transform duration-200 scale-y-0 group-hover/navbar:scale-100  w-full top-6 pt-2 origin-top">
                <div class="bg-white shadow-md shadow-black -mx-12 text-gray-800">
                    <a href="/technology-scouting" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Technology Scouting</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/white-space-analysis" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>White Space Analysis</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/technology-landscape" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Technology Landscape</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/invalidity-contentions" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Invalidity Contentions</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/state-of-art" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>State of Art</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/patent-infringement" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Patent Infringement</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/evidence-of-use" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Evidence of Use</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/patent-valuation" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Patent Valuation</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/market-report" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Market Report</div>
                        </div>
                    </a>
                    <div class="border-t border-gray-800"></div>
                    <a href="/competitive-analysis" wire:navigate class="text-sm cursor-pointer group hover:text-blue-500">
                        <div class="p-1.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Competitive Analysis</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <a href="/practice-domain" wire:navigate class="hover:text-sky-400">PRACTICE DOMAIN</a>
        <div class="flex justify-between items-center group/navbar cursor-pointer gap-2 relative">
            <div class="group-hover/navbar:text-blue-500">
                INSIGHT
            </div>
            <div>
                <svg class="w-4 h-4 text-gray-800 transition-transform duration-200 group-hover/navbar:rotate-180 group-hover/navbar:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m19 9-7 7-7-7" />
                </svg>
            </div>
            <div class="absolute transition-transform duration-200 scale-y-0 group-hover/navbar:scale-100 w-full top-6 pt-2 origin-top">
                <div class="bg-white shadow-md shadow-black -mx-12 text-gray-800">
                    <div class="p-1.5 text-sm cursor-pointer group hover:text-blue-500">
                        <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>Blogs</div>
                        </div>
                    </div>
                    <div class="border-t border-gray-800"></div>
                    <div class="p-1.5 text-sm cursor-pointer group hover:text-blue-500">
                        <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>News</div>
                        </div>
                    </div>
                    <div class="border-t border-gray-800"></div>
                    <div class="p-1.5 text-sm cursor-pointer group hover:text-blue-500">
                        <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                            <div>
                                <svg class="w-3 h-3 text-gray-800 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                                </svg>
                            </div>
                            <div>CSR</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="/career" wire:navigate class="hover:text-sky-400">CAREER</a>
        <div>CONTACT</div>
    </div>
</div>