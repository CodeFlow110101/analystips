<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="relative h-96 xl:mt-24 uppercase text-white text-xl sm:text-4xl font-light tracking-wide" style="background-image: url('{{ asset('page-bg-images/about.jpeg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-black/50 flex justify-center items-center">Practice Domain</div>
    </div>
    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-28 grid grid-cols-1 gap-36">
        <div class="grid grid-cols-1 gap-1 text-center">
            <div class="sm:text-xl font-semibold text-text-black">Technical Domain</div>
            <div class="text-2xl sm:text-4xl font-semibold text-text-black">Our Specilization</div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-12 gap-x-8">
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_1.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Mechanical</div>
                    <div class="text-text-black max-sm:text-sm">Txtiles, Construction, Mechanical Devices, Motor Vehicle etc</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_2.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Engineering</div>
                    <div class="text-text-black max-sm:text-sm">Engineering, Electrical, Mechanical, Computer Science etc</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_3.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Life Science</div>
                    <div class="text-text-black max-sm:text-sm">Drugs, Research Assay Tools, Medical Devices, Biofuels tc</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_4.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Biotechnology</div>
                    <div class="text-text-black max-sm:text-sm">New and Improvement on Machine, Manufacturing Process, Composition or Process.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_5.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Electrical</div>
                    <div class="text-text-black max-sm:text-sm">Electrical Motors, Power System, Signal Processing, Electronic Transaction Terminals and Networks</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_6.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Pharmaceutical</div>
                    <div class="text-text-black max-sm:text-sm">Drugs That Result from Generic Drug Competition.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_7.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Medical</div>
                    <div class="text-text-black max-sm:text-sm">Involved in Procurement of any Instrument, Apparatus, Machine, Implant & Reagent.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_8.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Automobiles</div>
                    <div class="text-text-black max-sm:text-sm">Innovating, Protecting and Enforcing it's Technology on Engines, Transmission and Shape</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_9.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Robotics</div>
                    <div class="text-text-black max-sm:text-sm">Aerospace, Medical, Military/Security, Telepresence, Robotics Patents with AI.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_10.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Computer Science</div>
                    <div class="text-text-black max-sm:text-sm">Identification and Coding, Barcode Generating and Printing Middleware, Barcode Encryption and Decryption, middleware.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_11.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Financial Institutions</div>
                    <div class="text-text-black max-sm:text-sm">Dynamic Convergence of Technology-Based Solutions and Financial Services</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_12.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-text-black">Entertainment</div>
                    <div class="text-text-black max-sm:text-sm">Innovating the Method of Entertainment are Challenging the Frontiers of Patent and IP Law in Unexpected</div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-10 py-20 flex justify-center">
        <div class="grid grid-cols-1 text-center gap-4">
            <div class="text-base sm:text-lg text-black font-semibold uppercase">Our clients</div>
            <div class="text-lg sm:text-4xl font-semibold uppercase text-text-black">Trusted Companies</div>
            <div class="flex justify-center">
                <div class="border-2 rounded-full h-min w-20 border-amber-500"></div>
            </div>
            <div class="text-base sm:text-xl px-4 md:px-12 lg:px-20 xl:px-28 text-text-black">Our Company is a trusted service provider of high quality Patent search, commited for transparency, ethics and work on client satisfaction.</div>
            <div class="grid grid-cols-1 gap-8 px-4 md:px-12 lg:px-20 xl:px-28 py-12 sm:py-16">
                <div class="flex items-center overflow-x-auto hide-scrollbar">
                    <div class="flex items-center space-x-4 animate-scroll animate-auto-scroll">
                        @for($i=1; $i<=8; $i++)
                            <img class="w-24 md:w-40 xl:w-60" src="{{asset('images/trusted_companies_'.$i.'.png')}}">
                            @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>