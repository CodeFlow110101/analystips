<?php

use App\Models\Blog;
use function Livewire\Volt\{state, with, usesPagination, mount};

usesPagination();

state(['services']);

with(fn() => [
    'blogs' => Blog::orderBy('created_at', 'desc')->get()->take(3)
]);

mount(function () {
    $this->services = [
        'technology-scouting' => [
            'image' => "humanoid-8722271_1280.webp",
            'description' => "Technology Scouting is a systematic search for new and emerging technologies that can enhance or complement a company’s existing product portfolio or business operations. It is a proactive process used to identify innovative solutions, potential partnerships, or acquisition opportunities.",
        ],
        'white-space-analysis' => [
            'image' => "pexels-olia-danilevich-5088017.jpg",
            'description' => 'White Space Analysis is a strategic tool used to identify gaps in the market or technology landscape where no or few patents exist. These "white spaces" represent opportunities for innovation, new product development, or patent filings.'
        ],
        'technology-landscape' => [
            'image' => "pexels-pixabay-459728.jpg",
            'description' => 'Technology Landscape analysis provides a comprehensive overview of the existing technologies in a specific field. It is used to understand the current state of technology, key players, and development trends.'
        ],
        'invalidity-contentions' => [
            'image' => "pexels-cytonn-955405.jpg",
            'description' => "Invalidity Contentions involve challenging the validity of a patent by identifying prior art or other grounds that could render the patent invalid. This is commonly used in patent litigation or as a defense strategy against infringement claims."
        ],
        'state-of-the-art-search' => [
            'image' => "pexels-artempodrez-5726835.jpg",
            'description' => "A State of the Art search provides a comprehensive overview of the most advanced technologies, methods, and developments in a particular field at a given time. It is used to establish what is already known and what remains to be discovered."
        ],
        'patent-valuation' => [
            'image' => "pexels-hillaryfox-1595385.jpg",
            'description' => "Patent Valuation is the process of determining the financial value of a patent or a patent portfolio. This valuation is crucial for licensing negotiations, mergers and acquisitions, investment decisions, and litigation."
        ],
        'market-report' => [
            'image' => "pexels-goumbik-669621.jpg",
            'description' => "Market Reports provide detailed analysis of a specific market, including size, growth trends, key players, and competitive dynamics. These reports are crucial for understanding market opportunities and risks.",
        ],
        'competitive-analysis' => [
            'image' => "pexels-shkrabaanthony-5816291.jpg",
            'description' => "Competitive Analysis involves evaluating the strengths and weaknesses of current and potential competitors. It helps companies understand their competitive environment and develop strategies to gain a competitive edge.",
        ],
    ];
});

?>

<div>
    <div class="flex items-center w-full p-4 py-8 sm:p-12 lg:py-36" style="background-image: url('{{ asset('images/pexels-julia-m-cameron-4145190.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="rounded-3xl lg:rounded-full bg-pink-500/80 lg:aspect-square text-white flex justify-center items-center max-sm:py-10 max-md:py-10 max-lg:py-32 p-4 sm:p-6">
            <div class="grid grid-cols-1 gap-6 sm:gap-10 text-balance w-full lg:max-w-md text-center">
                <div class="text-2xl sm:text-4xl font-semibold">Patent Searches <span class="text-gray-800">Preparation</span></div>
                <div class="text-lg sm:text-xl font-semibold">Comprehensive Patent Search and Research Reports Delivered</div>
                <div class="text-xs font-medium sm:text-sm">Exhaustive Patent Research Reports Prepared by an Experienced Team of Attorneys Specializing in Mechanical, Life Sciences, and Engineering Domains.</div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 max-lg:py-12 max-lg:grid max-lg:grid-cols-1 max-lg:gap-16 lg:flex lg:justify-between lg:gap-12 xl:gap-16 items-center px-4 md:px-12 lg:px-20 xl:px-28">
        <div class="lg:w-3/5">
            <div class="grid grid-cols-1 gap-4 lg:-translate-y-20 bg-white p-6 sm:p-12">
                <div class="sm:tracking-widest text-amber-500 font-semibold sm:text-lg">Patrisen: Your Trusted Partner in Patent Research and Innovation</div>
                <div class="text-lg sm:text-2xl tracking-wider uppercase font-bold">what we offer as reliable company</div>
                <div class="text-sm font-medium text-gray-800 sm:leading-6">Patrisen was founded by a team of experienced patent attorneys with a shared vision of providing unparalleled services in patent research and report preparation. Recognizing the need for a specialized platform that delivers high-quality patent search services, Patrisen was established to support Research & Development, Infringement Analysis, and Commercialization efforts for clients across the globe.</div>
                <div class="text-sm font-medium text-gray-800 sm:leading-6">Our attorneys bring decades of expertise across various technical domains, ensuring that each patent search and research report is meticulously crafted to meet the highest standards. Whether it's navigating the complexities of patent landscapes or providing crucial insights for commercialization, Patrisen is committed to empowering innovation through comprehensive and precise intellectual property services.</div>
                <div class="py-4">
                    <a href="/contact-us" wire:navigate class="text-center text-white uppercase text-sm sm:text-base bg-amber-500 whitespace-nowrap py-2 px-8 w-min cursor-pointer transition-colors duration-500 border hover:border-amber-500 hover:bg-white hover:text-amber-500">Contact us</a>
                </div>
            </div>
        </div>
        <div class="text-start lg:w-2/5">
            <div class="grid grid-cols-1 gap-8">
                <div class="flex justify-between items-center gap-2">
                    <div class="w-min">
                        <svg class="w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-gray-500 font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Experienced Attorneys: </span><span>Expertise in Mechanical, Life Sciences, and Engineering.</span></div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-2">
                    <div class="w-min">
                        <svg class="w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-gray-500 font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Comprehensive Solutions: </span><span>Full-spectrum patent services from search to commercialization.</span></div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-2">
                    <div class="w-min">
                        <svg class="w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-gray-500 font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Global Database Access: </span><span>Extensive global coverage for thorough and precise research.</span></div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-2">
                    <div class="w-min">
                        <svg class="w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-gray-500 font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Innovative Methodology: </span><span>Advanced research using non-patent literature, databases, and physical surveys.</span></div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-2">
                    <div class="w-min">
                        <svg class="w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-gray-500 font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Client-Centered Approach: </span><span>Personalized services aligned with your specific needs.</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-20 grid-cols-1 gap-4">
        <div class="font-bold text-2xl text-gray-800 tracking-wider text-center uppercase">Our Services</div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
            @foreach($services as $key => $value)
            <div class="grid grid-cols-1 gap-2">
                <img class="w-full h-64" src="{{ asset('images/'.$value['image']) }}">
                <div class="font-semibold text-lg text-amber-500 capitalize"> {{str_replace('-',' ',$key)}}</div>
                <div class="text-sm leading-6 font-light text-gray-800">{{$value['description']}}</div>
                <a href="/{{$key}}" wire:navigate class="pt-4">
                    <div class="text-center text-white uppercase text-xs rounded-sm bg-amber-500 whitespace-nowrap py-2 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-amber-500 hover:bg-white hover:text-amber-500">Read more</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8 px-4 md:px-12 lg:px-20 xl:px-28 pt-20 pb-8">
        <div class="grid grid-cols-1 gap-6 h-min text-justify">
            <div class="text-gray-600 uppercase font-bold text-lg">Our History</div>
            <div class="text-sm leading-normal font-normal text-gray-800">Patrisen was born out of a need to bridge the gap between high-quality patent research and the growing demands of the global innovation ecosystem. The founding attorneys recognized that many organizations struggled to find a dedicated partner that could provide comprehensive, reliable, and cost-effective patent search services. Thus, Patrisen was established to fill this void.</div>
            <div class="text-sm leading-normal font-normal text-gray-800">From its inception, Patrisen has been committed to delivering excellence in every project. Over the years, we have built a reputation for reliability and precision, becoming the trusted partner for companies, research institutions, and legal professionals seeking robust patent search and research support.</div>
            <div class="text-sm leading-normal font-normal text-gray-800">Our journey continues as we expand our services, continually adapting to the evolving needs of our clients and the dynamic world of intellectual property. At Patrisen, we are more than just a service provider; we are your partner in innovation, dedicated to helping you navigate the patent landscape with confidence and clarity.</div>
        </div>
        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="text-gray-600 uppercase font-bold text-lg">What we Offer</div>
            <div class="grid grid-cols-1 gap-8">
                <div x-data="{showDropdown : false}">
                    <div class="flex justify-between items-start gap-4">
                        <div @click="showDropdown = !showDropdown" :class="showDropdown ? 'bg-amber-500' : 'bg-gray-400'" class="w-min h-min rounded-full p-2 cursor-pointer">
                            <svg x-show="!showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                            </svg>
                            <svg x-show="showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
                            </svg>
                        </div>
                        <div class="text-md w-full font-thin text-gray-800 grid grid-cols-1 gap-4">
                            <div class="text-amber-500 font-semibold">Comprehensive Patent Search Services</div>
                            <div x-show="showDropdown">Exhaustive patent research and report preparation across diverse technical domains.</div>
                        </div>
                    </div>
                </div>
                <div x-data="{showDropdown : false}">
                    <div class="flex justify-between items-start gap-4">
                        <div @click="showDropdown = !showDropdown" :class="showDropdown ? 'bg-amber-500' : 'bg-gray-400'" class="w-min h-min rounded-full p-2 cursor-pointer">
                            <svg x-show="!showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                            </svg>
                            <svg x-show="showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
                            </svg>
                        </div>
                        <div class="text-md w-full font-thin text-gray-800 grid grid-cols-1 gap-4">
                            <div class="text-amber-500 font-semibold">Infringement Analysis</div>
                            <div x-show="showDropdown">Detailed assessments to identify potential patent infringements and protect your intellectual property.</div>
                        </div>
                    </div>
                </div>
                <div x-data="{showDropdown : false}">
                    <div class="flex justify-between items-start gap-4">
                        <div @click="showDropdown = !showDropdown" :class="showDropdown ? 'bg-amber-500' : 'bg-gray-400'" class="w-min h-min rounded-full p-2 cursor-pointer">
                            <svg x-show="!showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                            </svg>
                            <svg x-show="showDropdown" class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
                            </svg>
                        </div>
                        <div class="text-md w-full font-thin text-gray-800 grid grid-cols-1 gap-4">
                            <div class="text-amber-500 font-semibold">Commercialization Support</div>
                            <div x-show="showDropdown">Strategies and guidance to help you monetize your patents effectively.</div>
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
                            <div class="text-sm text-gray-500 uppercase">Deep Technical Expertise</div>
                            <div class="bg-gray-400 w-min text-white text-xs font-medium px-3 py-1 h-min self-end rounded">80%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 90%" class="flex justify-between">
                            <div class="text-sm text-gray-500 uppercase">Advanced Global Research Capabilities</div>
                            <div class="bg-gray-400 w-min text-white text-xs font-medium px-3 py-1 h-min self-end rounded">90%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 60%" class="flex justify-between">
                            <div class="text-sm text-gray-500 uppercase">Global Compliance and Perspective</div>
                            <div class="bg-gray-400 w-min text-white text-xs font-medium px-3 py-1 h-min self-end rounded">60%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 88%" class="flex justify-between">
                            <div class="text-sm text-gray-500 uppercase">Industry-Specific Insights and Customization</div>
                            <div class="bg-gray-400 w-min text-white text-xs font-medium px-3 py-1 h-min self-end rounded">88%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 88%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-20 h-min grid grid-cols-1 gap-10">
        <div class="grid grid-cols-1 gap-4 h-min">
            <div class="text-2xl font-semibold uppercase text-gray-800 text-center">Our Process</div>
            <div class="flex justify-center">
                <div class="border-2 rounded-full h-min w-20 border-amber-500"></div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12">
                <div class="grid grid-cols-1 group gap-6 text-center">
                    <div class="flex justify-center items-center">
                        <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-amber-500">
                            <div class="bg-gradient-to-tr from-amber-500 to-amber-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                                <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="text-gray-500 font-normal uppercase">Initial Consultation and Assessment</div>
                </div>
                <div class="grid grid-cols-1 group gap-6 text-center">
                    <div class="flex justify-center items-center">
                        <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-amber-500">
                            <div class="bg-gradient-to-tr from-amber-500 to-amber-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                                <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="text-gray-500 font-normal uppercase">Scope Definition and Strategy Development</div>
                </div>
                <div class="grid grid-cols-1 group gap-6 text-center">
                    <div class="flex justify-center items-center">
                        <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-amber-500">
                            <div class="bg-gradient-to-tr from-amber-500 to-amber-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                                <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 3v4a1 1 0 0 1-1 1H5m4 10v-2m3 2v-6m3 6v-3m4-11v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="text-gray-500 font-normal uppercase">Report Preparation</div>
                </div>
                <div class="grid grid-cols-1 group gap-6 text-center">
                    <div class="flex justify-center items-center">
                        <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-amber-500">
                            <div class="bg-gradient-to-tr from-amber-500 to-amber-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                                <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="text-gray-500 font-normal uppercase">Client Review and Feedback</div>
                </div>
                <div class="grid grid-cols-1 group gap-6 text-center">
                    <div class="flex justify-center items-center">
                        <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-amber-500">
                            <div class="bg-gradient-to-tr from-amber-500 to-amber-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                                <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="text-gray-500 font-normal uppercase">Revisions and Finalization</div>
                </div>
                <div class="grid grid-cols-1 group gap-6 text-center">
                    <div class="flex justify-center items-center">
                        <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-amber-500">
                            <div class="bg-gradient-to-tr from-amber-500 to-amber-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                                <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="text-gray-500 font-normal uppercase">Delivery and Ongoing Support</div>
                </div>
                <div class="grid grid-cols-1 group gap-6 text-center">
                    <div class="flex justify-center items-center">
                        <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-amber-500">
                            <div class="bg-gradient-to-tr from-amber-500 to-amber-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                                <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="text-gray-500 font-normal uppercase">Continuous Monitoring and Updates</div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-20 flex justify-center">
        <div class="grid grid-cols-1 text-center gap-4">
            <div class="text-sm text-black font-semibold uppercase">Our clients</div>
            <div class="text-2xl font-semibold uppercase text-gray-800">Trusted Companies</div>
            <div class="flex justify-center">
                <div class="border-2 rounded-full h-min w-20 border-amber-500"></div>
            </div>
            <div class="text-xl text-gray-500">Our Company is a trusted service provider of high quality Patent search, commited for transparency, ethics and work on client satisfaction.</div>
            <div class="grid grid-cols-1 gap-8 py-12 sm:py-16">
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

    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-20 grid grid-cols-1 gap-4">
        <div class="font-bold text-2xl text-gray-800 tracking-wider text-center uppercase">Latest news from blog</div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
            @foreach($blogs as $blog)
            <div class="grid grid-cols-1 gap-2">
                <div class="flex justify-center">
                    <img src="{{asset('storage/'.$blog->image)}}" class="w-auto h-64">
                </div>
                <a href="/blog?id={{$blog->id}}" wire:navigate class="hover:text-amber-500 text-xl cursor-pointer">
                    {{$blog->title}}
                </a>
                <div class="text-sm text-gray-400 font-medium w-min whitespace-nowrap flex justify-center gap-2 items-center">
                    <div>
                        <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div>{{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }}</div>
                </div>
                <div class="text-sm leading-6 font-light text-gray-800">{{Str::limit($blog->description, 150)}}</div>
                <div class="pt-4">
                    <a href="/blog?id={{$blog->id}}" wire:navigate class="text-center font-light text-white text-sm uppercase bg-amber-500 whitespace-nowrap py-2 px-8 w-min cursor-pointer transition-colors duration-500 border hover:border-amber-500 hover:bg-white hover:text-amber-500">Read more</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- <div class="px-40 py-12 grid grid-cols-1 gap-24">
        <div class="text-center grid grid-cols-1 gap-4">
            <div class="text-amber-500 text-center uppercase">accusam et justo duo dolores et ea rebum. Stet clita no sea</div>
            <div class="font-bold text-2xl text-gray-800 tracking-wider text-center uppercase">What are Clients Say</div>
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-3 gap-2 w-3/4">
                <div class="grid grid-cols-2 gap-1">
                    <div class="flex justify-center items-center">
                        <div class="bg-gray-300 rounded-full p-8 w-min h-min">
                            <svg class="w-6 h-6 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="bg-gray-300 rounded-full p-12 w-min h-min">
                            <svg class="w-6 h-6 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="bg-gray-300 rounded-full p-16 w-min h-min">
                        <svg class="w-6 h-6 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                        </svg>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-1">
                    <div class="flex justify-center items-center">
                        <div class="bg-gray-300 rounded-full p-12 w-min h-min">
                            <svg class="w-6 h-6 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="bg-gray-300 rounded-full p-8 w-min h-min">
                            <svg class="w-6 h-6 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center grid grid-cols-1 gap-4 -mt-12">
            <div class="flex justify-center">
                <div class="inline-flex">
                    <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                    </svg>
                    <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                    </svg>
                    <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                    </svg>
                    <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                    </svg>
                    <svg class="w-6 h-6 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                    </svg>
                </div>
            </div>
            <div class="text-2xl font-thin">Joseph Louis</div>
            <div class="text-gray-700 text-sm">Project Manager</div>
            <div class="text-sm font-thin px-36">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repudiandae sunt rerum earum porro optio, itaque nemo fugit magnam, aperiam ad enim saepe placeat distinctio quo modi recusandae consequatur sequi repellat! Possimus sequi ex, veritatis nulla velit modi, ipsum repellendus deleniti eligendi debitis odio nostrum fuga fugiat, atque quis sit!</div>
        </div>
    </div>
</div> -->