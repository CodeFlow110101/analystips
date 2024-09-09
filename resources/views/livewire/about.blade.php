<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="relative h-96 xl:mt-24 uppercase text-white text-xl sm:text-4xl font-light tracking-wide" style="background-image: url('{{ asset('images/pexels-hillaryfox-1595385.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-black/50 flex justify-center items-center">About us</div>
    </div>
    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-28 grid grid-cols-1 gap-36">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 h-min">
            <div>
                <img src="{{ asset('images/pexels-thisisengineering-3913031.jpg') }}">
            </div>
            <div class="grid grid-cols-1 gap-8">
                <div class="grid grid-cols-1 gap-2">
                    <div class="text-xl sm:text-3xl text-gray-800 font-semibold">Who we are and What we do</div>
                </div>
                <div class="text-sm grid grid-cols-1 gap-2">
                    <div>Patrisen was founded by a team of experienced patent attorneys with a shared vision of providing unparalleled services in patent research and report preparation. Recognizing the need for a specialized platform that delivers high-quality patent search services, Patrisen was established to support Research & Development, Infringement Analysis, and Commercialization efforts for clients across the globe.</div>
                    <div>Our attorneys bring decades of expertise across various technical domains, ensuring that each patent search and research report is meticulously crafted to meet the highest standards. Whether it's navigating the complexities of patent landscapes or providing crucial insights for commercialization, Patrisen is committed to empowering innovation through comprehensive and precise intellectual property services.</div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 uppercase">
                    <div class="flex justify-between items-center gap-1 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-5 h-5 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-500">technology scouting</div>
                    </div>
                    <div class="flex justify-between items-center gap-1 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-5 h-5 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-500">white space analysis</div>
                    </div>
                    <div class="flex justify-between items-center gap-1 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-5 h-5 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-500">technology landscape</div>
                    </div>
                    <div class="flex justify-between items-center gap-1 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-5 h-5 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-500">invalidity contentions</div>
                    </div>
                    <div class="flex justify-between items-center gap-1 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-5 h-5 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-500">state of the art search</div>
                    </div>
                    <div class="flex justify-between items-center gap-1 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-5 h-5 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-500">patent valuation</div>
                    </div>
                    <div class="flex justify-between items-center gap-1 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-5 h-5 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-500">market report</div>
                    </div>
                    <div class="flex justify-between items-center gap-1 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-5 h-5 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-500">competitive analysis</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 h-min">
            <div>
                <img src="{{ asset('images/satellites-152495_1280.webp') }}">
            </div>
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-1 gap-4">
                    <div class="text-xl sm:text-3xl text-gray-800 font-semibold">Our Vision</div>
                    <div>To be the global leader in delivering comprehensive and high-quality patent research and intellectual property services, empowering innovation and driving success for our clients across diverse industries.</div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 h-min">
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-1 gap-4">
                    <div class="text-xl sm:text-3xl text-gray-800 font-semibold">Our Mission</div>
                    <div>Our mission is to provide unparalleled patent research and report preparation services that meet the highest standards of accuracy and thoroughness. We are dedicated to supporting our clients in their Research & Development, Infringement Analysis, and Commercialization efforts by leveraging our deep expertise across technical domains. </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/pexels-pixabay-256379.jpg') }}">
            </div>
        </div>
    </div>
    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-28 grid grid-cols-1 gap-28">
        <div class="grid grid-cols-1 gap-1 text-center">
            <div class="sm:text-xl font-semibold text-gray-700">Technical Domain</div>
            <div class="text-2xl sm:text-4xl font-semibold text-gray-700">Our Specilization</div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-12 gap-x-8">
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_1.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Mechanical</div>
                    <div class="text-gray-600 max-sm:text-sm">Txtiles, Construction, Mechanical Devices, Motor Vehicle etc</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_2.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Engineering</div>
                    <div class="text-gray-600 max-sm:text-sm">Engineering, Electrical, Mechanical, Computer Science etc</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_3.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Life Science</div>
                    <div class="text-gray-600 max-sm:text-sm">Drugs, Research Assay Tools, Medical Devices, Biofuels tc</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_4.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Biotechnology</div>
                    <div class="text-gray-600 max-sm:text-sm">New and Improvement on Machine, Manufacturing Process, Composition or Process.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_5.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Electrical</div>
                    <div class="text-gray-600 max-sm:text-sm">Electrical Motors, Power System, Signal Processing, Electronic Transaction Terminals and Networks</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_6.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Pharmaceutical</div>
                    <div class="text-gray-600 max-sm:text-sm">Drugs That Result from Generic Drug Competition.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_7.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Medical</div>
                    <div class="text-gray-600 max-sm:text-sm">Involved in Procurement of any Instrument, Apparatus, Machine, Implant & Reagent.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_8.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Automobiles</div>
                    <div class="text-gray-600 max-sm:text-sm">Innovating, Protecting and Enforcing it's Technology on Engines, Transmission and Shape</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_9.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Robotics</div>
                    <div class="text-gray-600 max-sm:text-sm">Aerospace, Medical, Military/Security, Telepresence, Robotics Patents with AI.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_10.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Computer Science</div>
                    <div class="text-gray-600 max-sm:text-sm">Identification and Coding, Barcode Generating and Printing Middleware, Barcode Encryption and Decryption, middleware.</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_11.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Financial Institutions</div>
                    <div class="text-gray-600 max-sm:text-sm">Dynamic Convergence of Technology-Based Solutions and Financial Services</div>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <div>
                    <img class="w-16 sm:w-24" src="{{asset('images/about_page_image_12.png')}}">
                </div>
                <div>
                    <div class="font-semibold text-base sm:text-xl text-gray-800">Entertainment</div>
                    <div class="text-gray-600 max-sm:text-sm">Innovating the Method of Entertainment are Challenging the Frontiers of Patent and IP Law in Unexpected</div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-10 py-20 flex justify-center">
        <div class="grid grid-cols-1 text-center gap-4">
            <div class="text-base sm:text-lg text-black font-semibold uppercase">Our clients</div>
            <div class="text-lg sm:text-4xl font-semibold uppercase text-gray-800">Trusted Companies</div>
            <div class="flex justify-center">
                <div class="border-2 rounded-full h-min w-20 border-sky-400"></div>
            </div>
            <div class="text-base sm:text-xl px-4 md:px-12 lg:px-20 xl:px-28 text-gray-500">Our Company is a trusted service provider of high quality Patent search, commited for transparency, ethics and work on client satisfaction.</div>
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