<?php

use function Livewire\Volt\{state, mount};

state(['path']);

mount(function () {
    $this->path = request()->path();
});

?>

<div>
    <div class="h-96 bg-gray-800 pt-24 uppercase text-white text-4xl font-light tracking-wide flex justify-center items-center">
        {{str_replace('-',' ',$path)}}
    </div>
    <div class="px-40 py-20 flex justify-between gap-4">
        <div class="w-4/5 grid grid-cols-1 gap-4 h-min">
            <div class="capitalize text-2xl tracking-wide text-gray-800 font-light">{{str_replace('-',' ',$path)}}</div>
            @if($path == 'technology-scouting')
            <livewire:solutions.technology-scouting />
            @elseif($path == 'white-space-analysis')
            <livewire:solutions.white-space-analysis />
            @elseif($path == 'technology-landscape')
            <livewire:solutions.technology-landscape />
            @elseif($path == 'invalidity-contentions')
            <livewire:solutions.invalidity-contentions />
            @elseif($path == 'state-of-art')
            <livewire:solutions.state-of-art />
            @elseif($path == 'patent-infringement')
            <livewire:solutions.patent-infringement />
            @elseif($path == 'evidence-of-use')
            <livewire:solutions.evidence-of-use />
            @elseif($path == 'patent-valuatione')
            <livewire:solutions.patent-valuation />
            @elseif($path == 'market-report')
            <livewire:solutions.market-report />
            @elseif($path == 'competitive-analysis')
            <livewire:solutions.competitive-analysis />
            @endif
        </div>
        <div class="w-1/5 h-min grid grid-cols-1 gap-2 font-medium">
            <a href="/technology-scouting" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'technology-scouting') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">Technology Scouting</div>
                </div>
            </a>
            <a href="/white-space-analysis" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'white-space-analysis') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">White Space Analysis</div>
                </div>
            </a>
            <a href="/technology-landscape" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'technology-landscape') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">Technology Landscape</div>
                </div>
            </a>
            <a href="/invalidity-contentions" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'invalidity-contentions') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">Invalidity Contentions</div>
                </div>
            </a>
            <a href="/state-of-art" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'state-of-art') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">State of Art</div>
                </div>
            </a>
            <a href="/patent-infringement" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'patent-infringement') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">Patent Infringement</div>
                </div>
            </a>
            <a href="/evidence-of-use" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'evidence-of-use') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">Evidence of Use</div>
                </div>
            </a>
            <a href="/patent-valuation" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'patent-valuation') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">Patent Valuation</div>
                </div>
            </a>
            <a href="/market-report" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'market-report') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">Market Report</div>
                </div>
            </a>
            <a href="/competitive-analysis" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 @if($path == 'competitive-analysis') bg-sky-400 @else hover:bg-sky-400 bg-slate-700 @endif">
                <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                        </svg>
                    </div>
                    <div class="text-white">Competitive Analysis</div>
                </div>
            </a>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-8 px-40 py-20">
        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="text-gray-600 uppercase font-bold text-lg">What we Do</div>
            <div class="grid grid-cols-1 gap-8">
                <div x-data="{showDropdown : false}">
                    <div class="flex justify-between gap-4">
                        <div @click="showDropdown = !showDropdown" :class="showDropdown ? 'bg-sky-400' : 'bg-gray-400'" class="w-min h-min rounded-full p-2 cursor-pointer">
                            <svg x-show="!showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                            </svg>
                            <svg x-show="showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
                            </svg>
                        </div>
                        <div class="text-md font-thin text-gray-800 grid grid-cols-1 gap-4">
                            <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, praesentium!</div>
                            <div x-show="showDropdown">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at voluptates assumenda vitae inventore quidem veritatis quam, praesentium architecto facere!</div>
                        </div>
                    </div>
                </div>
                <div x-data="{showDropdown : false}">
                    <div class="flex justify-between gap-4">
                        <div @click="showDropdown = !showDropdown" :class="showDropdown ? 'bg-sky-400' : 'bg-gray-400'" class="w-min h-min rounded-full p-2 cursor-pointer">
                            <svg x-show="!showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                            </svg>
                            <svg x-show="showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
                            </svg>
                        </div>
                        <div class="text-md font-thin text-gray-800 grid grid-cols-1 gap-4">
                            <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, praesentium!</div>
                            <div x-show="showDropdown">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at voluptates assumenda vitae inventore quidem veritatis quam, praesentium architecto facere!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="text-gray-600 uppercase font-bold text-lg">Skills and Experiences</div>
            <div class="grid grid-cols-1 gap-8 h-min">
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 80%" class="flex justify-between">
                            <div class="text-sm text-gray-500 uppercase">Social Marketing</div>
                            <div class="bg-gray-400 w-min text-white text-xs font-medium px-3 py-1 rounded">80%
                            </div>
                        </div>
                        <div class="bg-sky-400 h-1.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 90%" class="flex justify-between">
                            <div class="text-sm text-gray-500 uppercase">Branding</div>
                            <div class="bg-gray-400 w-min text-white text-xs font-medium px-3 py-1 rounded">90%
                            </div>
                        </div>
                        <div class="bg-sky-400 h-1.5 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 60%" class="flex justify-between">
                            <div class="text-sm text-gray-500 uppercase">Stratergy Planning</div>
                            <div class="bg-gray-400 w-min text-white text-xs font-medium px-3 py-1 rounded">60%
                            </div>
                        </div>
                        <div class="bg-sky-400 h-1.5 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-40 py-28 bg-sky-400 grid grid-cols-1 gap-4 text-center text-white font-thin">
        <div class="text-lg tracking-widest">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
        <div class="text-3xl">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
    </div>
    <div class="grid grid-cols-1 gap-8 px-40 py-16">
        <div class="inline-flex gap-4 pt-12">
            <div class="flex items-center justify-center w-full h-24 bg-gray-300 rounded">
                <svg class="w-8 h-8 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                </svg>
            </div>
            <div class="flex items-center justify-center w-full h-24 bg-gray-300 rounded">
                <svg class="w-8 h-8 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                </svg>
            </div>
            <div class="flex items-center justify-center w-full h-24 bg-gray-300 rounded">
                <svg class="w-8 h-8 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                </svg>
            </div>
            <div class="flex items-center justify-center w-full h-24 bg-gray-300 rounded">
                <svg class="w-8 h-8 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                </svg>
            </div>
            <div class="flex items-center justify-center w-full h-24 bg-gray-300 rounded">
                <svg class="w-8 h-8 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-8 px-40 py-16 text-gray-800">
        <div class="text-2xl font-semibold">Why choose us?</div>
        <div class="h-min grid grid-cols-1 gap-4 font-semibold">
            <div class="flex justify-between items-center w-min whitespace-nowrap gap-2">
                <div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                    </svg>
                </div>
                <div>
                    Adaptable approach for valuation of a patent in any technology
                </div>
            </div>
            <div class="flex justify-between items-center w-min whitespace-nowrap gap-2">
                <div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                    </svg>
                </div>
                <div>
                    Expertise in deciding the right value indicator based on subject patent technology
                </div>
            </div>
            <div class="flex justify-between items-center w-min whitespace-nowrap gap-2">
                <div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                    </svg>
                </div>
                <div>
                    Deriving a practical value based on highly researched facts
                </div>
            </div>
            <div class="flex justify-between items-center w-min whitespace-nowrap gap-2">
                <div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                    </svg>
                </div>
                <div>
                    Evaluation of the patents in technologies that are at early stages of development
                </div>
            </div>
            <div class="flex justify-between items-center w-min whitespace-nowrap gap-2">
                <div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                    </svg>
                </div>
                <div>
                    Quick, Accurate and Cost efficient – 1/5th standard market rates
                </div>
            </div>
            <div class="flex justify-between items-center w-min whitespace-nowrap gap-2">
                <div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                    </svg>
                </div>
                <div>
                    Valuation certificate
                </div>
            </div>
        </div>
    </div>
</div>