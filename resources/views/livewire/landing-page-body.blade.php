<?php

use App\Models\Blog;
use function Livewire\Volt\{state, with, usesPagination, mount};

usesPagination();

state(['services', 'testinomials']);

with(fn() => [
    'blogs' => Blog::orderBy('created_at', 'desc')->get()->take(3)
]);

mount(function () {
    $this->services = [
        'technology-scouting' => [
            'image' => "technologyscouting.jpeg",
            'description' => "Technology Scouting is a systematic search for new and emerging technologies that can enhance or complement a company’s existing product portfolio or business operations. It is a proactive process used to identify innovative solutions, potential partnerships, or acquisition opportunities.",
            'lg-id' => '1'
        ],
        'white-space-analysis' => [
            'image' => "whitespaceanalysis.jpeg",
            'description' => 'White Space Analysis is a strategic tool used to identify gaps in the market or technology landscape where no or few patents exist. These "white spaces" represent opportunities for innovation, new product development, or patent filings.',
            'lg-id' => null
        ],
        'technology-landscape' => [
            'image' => "technologylandscape.jpeg",
            'description' => 'Technology Landscape analysis provides a comprehensive overview of the existing technologies in a specific field. It is used to understand the current state of technology, key players, and development trends.',
            'lg-id' => null
        ],
        'invalidity-contentions' => [
            'image' => "invaliditycontentions.jpeg",
            'description' => "Invalidity Contentions involve challenging the validity of a patent by identifying prior art or other grounds that could render the patent invalid. This is commonly used in patent litigation or as a defense strategy against infringement claims.",
            'lg-id' => '2'
        ],
        'state-of-the-art-search' => [
            'image' => "stateoftheartsearch.jpeg",
            'description' => "A State of the Art search provides a comprehensive overview of the most advanced technologies, methods, and developments in a particular field at a given time. It is used to establish what is already known and what remains to be discovered.",
            'lg-id' => null
        ],
        'patent-valuation' => [
            'image' => "patentvaluation.jpeg",
            'description' => "Patent Valuation is the process of determining the financial value of a patent or a patent portfolio. This valuation is crucial for licensing negotiations, mergers and acquisitions, investment decisions, and litigation.",
            'lg-id' => null
        ],
        'market-report' => [
            'image' => "marketreport.jpeg",
            'description' => "Market Reports provide detailed analysis of a specific market, including size, growth trends, key players, and competitive dynamics. These reports are crucial for understanding market opportunities and risks.",
            'lg-id' => '3'
        ],
        'competitive-analysis' => [
            'image' => "competitiveanalysis.jpeg",
            'description' => "Competitive Analysis involves evaluating the strengths and weaknesses of current and potential competitors. It helps companies understand their competitive environment and develop strategies to gain a competitive edge.",
            'lg-id' => null
        ],
    ];

    $this->testinomials = [
        [
            'name' => 'Harper Williams',
            'statement' => 'Site has revolutionized the way our entire team operates, ensuring everyone is aligned and moving forwart at an accelerated pace. With Site, Pagedone staff seamlessly function as a unified taam regaritless of time zones or functions.',
            'company' => 'Appbot',
        ],
        [
            'name' => 'Benjamin Evans',
            'statement' => 'Our company experiences rapid growth, the ease of adopting new solutions becomes paramount. Sata stands out as a friendly and wasily adoptable platform, facilitating seamless integration into our workflow.its user-friendly interface',
            'company' => 'Teamwork.',
        ],
        [
            'name' => 'Sophia Rodriguez',
            'statement' => 'Our team has expanded rapidly over the past year, spanning across different offices, Site has played a vital role er supporting our growth trajectory. With its structured platform, Slite provides a centralized hut whors team members can easily.',
            'company' => 'Pitch',
        ]
    ];
});

?>

<div>
    <div class="relative p-4 py-8 sm:p-12 lg:py-36 w-full bg-black/50 overflow-hidden">
        <video class="absolute inset-0 object-cover w-full h-full -z-10" autoplay muted loop>
            <source src="{{ asset('videos/home.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="h-full w-full font-medium flex justify-center items-center text-xl sm:text-3xl py-32 sm:py-48 text-white text-center leading-10">
            Patent Searches|Preparation <br> Comprehensive Patent Search and Research Reports Delivered
        </div>
    </div>

    <div class="bg-gray-100 max-lg:py-12 max-lg:grid max-lg:grid-cols-1 max-lg:gap-16 lg:flex lg:justify-between lg:gap-12 xl:gap-16 items-center px-4 md:px-12 lg:px-20 xl:px-28">
        <div class="lg:w-3/5">
            <div class="grid grid-cols-1 gap-4 lg:-translate-y-12 bg-white p-6 sm:p-12">
                <div class="sm:tracking-widest text-amber-500 font-semibold sm:text-lg">Patrisen: Your Trusted Partner in Patent Research and Innovation</div>
                <div class="text-lg sm:text-2xl tracking-wider uppercase font-bold">what we offer as reliable company</div>
                <div class="text-sm font-medium text-black sm:leading-6">Patrisen was founded by a team of experienced patent attorneys with a shared vision of providing unparalleled services in patent research and report preparation. Recognizing the need for a specialized platform that delivers high-quality patent search services, Patrisen was established to support Research & Development, Infringement Analysis, and Commercialization efforts for clients across the globe.</div>
                <div class="text-sm font-medium text-black sm:leading-6">Our attorneys bring decades of expertise across various technical domains, ensuring that each patent search and research report is meticulously crafted to meet the highest standards. Whether it's navigating the complexities of patent landscapes or providing crucial insights for commercialization, Patrisen is committed to empowering innovation through comprehensive and precise intellectual property services.</div>
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
                    <div class="text-black font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Experienced Attorneys: </span><span>Expertise in Mechanical, Life Sciences, and Engineering.</span></div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-2">
                    <div class="w-min">
                        <svg class="w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-black font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Comprehensive Solutions: </span><span>Full-spectrum patent services from search to commercialization.</span></div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-2">
                    <div class="w-min">
                        <svg class="w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-black font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Global Database Access: </span><span>Extensive global coverage for thorough and precise research.</span></div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-2">
                    <div class="w-min">
                        <svg class="w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-black font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Innovative Methodology: </span><span>Advanced research using non-patent literature, databases, and physical surveys.</span></div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-2">
                    <div class="w-min">
                        <svg class="w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-black font-semibold w-full text-sm flex justify-between items-center gap-2">
                        <div><span class="whitespace-nowrap">Client-Centered Approach: </span><span>Personalized services aligned with your specific needs.</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-20 grid-cols-1 gap-4">
        <div class="font-bold text-2xl text-black tracking-wider text-center uppercase">Our Services</div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
            @foreach($services as $key => $value)
            <div class="grid grid-cols-1 gap-2">
                <img class="w-full h-64" src="{{ asset('page-bg-images/'.$value['image']) }}">
                <div class="font-semibold text-lg text-amber-500 capitalize"> {{str_replace('-',' ',$key)}}</div>
                <div class="text-sm leading-6 font-light text-black">{{$value['description']}}</div>
                <a href="/{{$key}}" wire:navigate class="pt-4">
                    <div class="text-center text-white uppercase text-xs rounded-sm bg-amber-500 whitespace-nowrap py-2 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-amber-500 hover:bg-white hover:text-amber-500">Read more</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8 px-4 md:px-12 lg:px-20 xl:px-28 pt-20 pb-8">
        <div class="grid grid-cols-1 gap-6 h-min text-justify col-span-2">
            <div class="text-black uppercase font-bold text-lg">Our History</div>
            <div class="text-sm leading-normal font-normal text-black">Patrisen was born out of a need to bridge the gap between high-quality patent research and the growing demands of the global innovation ecosystem. The founding attorneys recognized that many organizations struggled to find a dedicated partner that could provide comprehensive, reliable, and cost-effective patent search services. Thus, Patrisen was established to fill this void.</div>
            <div class="text-sm leading-normal font-normal text-black">From its inception, Patrisen has been committed to delivering excellence in every project. Over the years, we have built a reputation for reliability and precision, becoming the trusted partner for companies, research institutions, and legal professionals seeking robust patent search and research support.</div>
            <div class="text-sm leading-normal font-normal text-black">Our journey continues as we expand our services, continually adapting to the evolving needs of our clients and the dynamic world of intellectual property. At Patrisen, we are more than just a service provider; we are your partner in innovation, dedicated to helping you navigate the patent landscape with confidence and clarity.</div>
        </div>
        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="text-black uppercase font-bold text-lg">Skills and Experiences</div>
            <div class="grid grid-cols-1 gap-8 h-min">
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 80%" class="flex justify-between">
                            <div class="text-sm text-black uppercase">Deep Technical Expertise</div>
                            <div class="bg-amber-500 w-min text-white text-xs font-medium px-3 py-1 h-min self-end rounded">80%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 90%" class="flex justify-between">
                            <div class="text-sm text-black uppercase">Advanced Global Research Capabilities</div>
                            <div class="bg-amber-500 w-min text-white text-xs font-medium px-3 py-1 h-min self-end rounded">90%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 60%" class="flex justify-between">
                            <div class="text-sm text-black uppercase">Global Compliance and Perspective</div>
                            <div class="bg-amber-500 w-min text-white text-xs font-medium px-3 py-1 h-min self-end rounded">60%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 88%" class="flex justify-between">
                            <div class="text-sm text-black uppercase">Industry-Specific Insights and Customization</div>
                            <div class="bg-amber-500 w-min text-white text-xs font-medium px-3 py-1 h-min self-end rounded">88%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 88%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-16 h-min grid grid-cols-1 gap-10">
        <div class="grid grid-cols-1 gap-4 h-min">
            <div class="text-2xl font-semibold uppercase text-black text-center">Our Process</div>
            <div class="flex justify-center">
                <div class="border-2 rounded-full h-min w-20 border-amber-500"></div>
            </div>
        </div>
        <div class="inline-flex items-center py-52 max-xl:hidden">
            <div class="relative rounded-full aspect-square h-12 font-semibold border-4 border-amber-500 text-amber-500 flex justify-center items-center">
                <div class="text-gray-500">1</div>
                <div class="absolute bottom-20 h-min grid grid-cols-1 gap-4 -mx-24">
                    <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                        <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-center text-gray-700">Initial Consultation and Assessment</div>
                </div>
            </div>
            <div class="w-full border-2 border-gray-500 h-0"></div>
            <div class="relative rounded-full aspect-square h-12 font-semibold border-4 border-amber-500 text-amber-500 flex justify-center items-center">
                <div class="text-gray-500">2</div>
                <div class="absolute top-20 h-min grid grid-cols-1 gap-4 -mx-24">
                    <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                        <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
                        </svg>
                    </div>
                    <div class="text-center text-gray-700">Scope Definition and Strategy Development</div>
                </div>
            </div>
            <div class="w-full border-2 border-gray-500 h-0"></div>
            <div class="relative rounded-full aspect-square h-12 font-semibold border-4 border-amber-500 text-amber-500 flex justify-center items-center">
                <div class="text-gray-500">3</div>
                <div class="absolute bottom-20 h-min grid grid-cols-1 gap-4 -mx-24">
                    <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                        <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-1 9a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Zm2-5a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm4 4a1 1 0 1 0-2 0v3a1 1 0 1 0 2 0v-3Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-center text-gray-700">Report Preparation</div>
                </div>
            </div>
            <div class="w-full border-2 border-gray-500 h-0"></div>
            <div class="relative rounded-full aspect-square h-12 font-semibold border-4 border-amber-500 text-amber-500 flex justify-center items-center">
                <div class="text-gray-500">4</div>
                <div class="absolute top-20 h-min grid grid-cols-1 gap-4 -mx-24">
                    <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                        <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                        </svg>
                    </div>
                    <div class="text-center text-gray-700">Client Review and Feedback</div>
                </div>
            </div>
            <div class="w-full border-2 border-gray-500 h-0"></div>
            <div class="relative rounded-full aspect-square h-12 font-semibold border-4 border-amber-500 text-amber-500 flex justify-center items-center">
                <div class="text-gray-500">5</div>
                <div class="absolute bottom-20 h-min grid grid-cols-1 gap-4 -mx-24">
                    <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                        <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-center text-gray-700">Revisions and Finalization</div>
                </div>
            </div>
            <div class="w-full border-2 border-gray-500 h-0"></div>
            <div class="relative rounded-full aspect-square h-12 font-semibold border-4 border-amber-500 text-amber-500 flex justify-center items-center">
                <div class="text-gray-500">6</div>
                <div class="absolute top-20 h-min grid grid-cols-1 gap-4 -mx-24">
                    <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                        <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.535a3.5 3.5 0 1 0 6.93 0h3.07a3.5 3.5 0 1 0 6.93 0H21a1 1 0 0 0 1-1v-4a.999.999 0 0 0-.106-.447l-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.192 11.59.016.02a1.5 1.5 0 1 1-.016-.021Zm-10 0 .016.02a1.5 1.5 0 1 1-.016-.021Zm5.806-5.572v-2.02h4.396l1 2.02h-5.396Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-center text-gray-700">Delivery and Ongoing Support</div>
                </div>
            </div>
            <div class="w-full border-2 border-gray-500 h-0"></div>
            <div class="relative rounded-full aspect-square h-12 font-semibold border-4 border-amber-500 text-amber-500 flex justify-center items-center">
                <div class="text-gray-500">7</div>
                <div class="absolute bottom-20 h-min grid grid-cols-1 gap-4 -mx-20">
                    <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                        <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v5h18V5a2 2 0 0 0-2-2H5ZM3 14v-2h18v2a2 2 0 0 1-2 2h-6v3h2a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2h2v-3H5a2 2 0 0 1-2-2Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-center text-gray-700">Delivery and Ongoing Support</div>
                </div>
            </div>
        </div>

        <div class="font-semibold xl:hidden">
            <div class="flex justify-between items-center">
                <div class="w-full flex justify-end items-center -my-20 pt-14">
                    <div class="h-min grid grid-cols-1 gap-4">
                        <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-center text-gray-700">Initial Consultation <br> and Assessment</div>
                    </div>
                </div>
                <div class="w-min">
                    <div class="rounded-full border-4 border-amber-500 flex justify-center items-center aspect-square h-12">
                        <div class="text-center text-gray-700">1</div>
                    </div>
                </div>
                <div class="w-full"></div>
            </div>
            <div class="w-0 border-2 border-gray-500 h-32 mx-auto"></div>
            <div class="flex justify-between items-center">
                <div class="w-full"></div>
                <div class="w-min">
                    <div class="rounded-full border-4 border-amber-500 flex justify-center items-center aspect-square h-12">
                        <div class="text-center text-gray-700">2</div>
                    </div>
                </div>
                <div class="w-full flex justify-start items-center -my-20 pt-14">
                    <div class="h-min grid grid-cols-1 gap-4">
                        <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
                            </svg>
                        </div>
                        <div class="text-center text-gray-700">Scope Definition <br> and Strategy Development</div>
                    </div>
                </div>
            </div>
            <div class="w-0 border-2 border-gray-500 h-32 mx-auto"></div>
            <div class="flex justify-between items-center">
                <div class="w-full flex justify-end items-center -my-20 pt-14">
                    <div class="h-min grid grid-cols-1 gap-4">
                        <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-1 9a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Zm2-5a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm4 4a1 1 0 1 0-2 0v3a1 1 0 1 0 2 0v-3Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-center text-gray-700">Report Preparation</div>
                    </div>
                </div>
                <div class="w-min">
                    <div class="rounded-full border-4 border-amber-500 flex justify-center items-center aspect-square h-12">
                        <div class="text-center text-gray-700">3</div>
                    </div>
                </div>
                <div class="w-full"></div>
            </div>
            <div class="w-0 border-2 border-gray-500 h-32 mx-auto"></div>
            <div class="flex justify-between items-center">
                <div class="w-full"></div>
                <div class="w-min">
                    <div class="rounded-full border-4 border-amber-500 flex justify-center items-center aspect-square h-12">
                        <div class="text-center text-gray-700">4</div>
                    </div>
                </div>
                <div class="w-full flex justify-start items-center -my-20 pt-14">
                    <div class="h-min grid grid-cols-1 gap-4">
                        <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                            </svg>
                        </div>
                        <div class="text-center text-gray-700">Client Review <br> and Feedback</div>
                    </div>
                </div>
            </div>
            <div class="w-0 border-2 border-gray-500 h-32 mx-auto"></div>
            <div class="flex justify-between items-center">
                <div class="w-full flex justify-end items-center -my-20 pt-14">
                    <div class="h-min grid grid-cols-1 gap-4">
                        <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-center text-gray-700">Revisions <br> and Finalization</div>
                    </div>
                </div>
                <div class="w-min">
                    <div class="rounded-full border-4 border-amber-500 flex justify-center items-center aspect-square h-12">
                        <div class="text-center text-gray-700">5</div>
                    </div>
                </div>
                <div class="w-full"></div>
            </div>
            <div class="w-0 border-2 border-gray-500 h-32 mx-auto"></div>
            <div class="flex justify-between items-center">
                <div class="w-full"></div>
                <div class="w-min">
                    <div class="rounded-full border-4 border-amber-500 flex justify-center items-center aspect-square h-12">
                        <div class="text-center text-gray-700">6</div>
                    </div>
                </div>
                <div class="w-full flex justify-start items-center -my-20 pt-14">
                    <div class="h-min grid grid-cols-1 gap-4">
                        <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.535a3.5 3.5 0 1 0 6.93 0h3.07a3.5 3.5 0 1 0 6.93 0H21a1 1 0 0 0 1-1v-4a.999.999 0 0 0-.106-.447l-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.192 11.59.016.02a1.5 1.5 0 1 1-.016-.021Zm-10 0 .016.02a1.5 1.5 0 1 1-.016-.021Zm5.806-5.572v-2.02h4.396l1 2.02h-5.396Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-center text-gray-700">Delivery <br> and Ongoing Support</div>
                    </div>
                </div>
            </div>
            <div class="w-0 border-2 border-gray-500 h-32 mx-auto"></div>
            <div class="flex justify-between items-center">
                <div class="w-full flex justify-end items-center -my-20 pt-14">
                    <div class="h-min grid grid-cols-1 gap-4">
                        <div class="bg-amber-500 aspect-square h-12 rounded-xl flex justify-center items-center mx-auto">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v5h18V5a2 2 0 0 0-2-2H5ZM3 14v-2h18v2a2 2 0 0 1-2 2h-6v3h2a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2h2v-3H5a2 2 0 0 1-2-2Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-center text-gray-700">Delivery <br> and Ongoing Support</div>
                    </div>
                </div>
                <div class="w-min">
                    <div class="rounded-full border-4 border-amber-500 flex justify-center items-center aspect-square h-12">
                        <div class="text-center text-gray-700">7</div>
                    </div>
                </div>
                <div class="w-full"></div>
            </div>
        </div>


    </div>
    <div class="px-4 md:px-12 lg:px-20 xl:px-28 pt-20 flex justify-center">
        <div class="grid grid-cols-1 text-center gap-4">
            <div class="text-sm text-black font-semibold uppercase">Our clients</div>
            <div class="text-2xl font-semibold uppercase text-black">Trusted Companies</div>
            <div class="flex justify-center">
                <div class="border-2 rounded-full h-min w-20 border-amber-500"></div>
            </div>
            <div class="text-xl text-black">Our Company is a trusted service provider of high quality Patent search, commited for transparency, ethics and work on client satisfaction.</div>
            <div class="grid grid-cols-1 gap-8 py-12 sm:py-16 pointer-events-none">
                <div x-data="companiesScroll" x-init="scroll()" class="w-full">
                    <div x-ref="sliderContainer" class="inline-flex overflow-x-auto hide-scrollbar items-center gap-4">
                        @for($i=1; $i
                        <=8; $i++)
                            <img class="sm:w-24 sm:h-40 md:w-40 xl:w-60" src="{{asset('images/trusted_companies_'.$i.'.png')}}" />
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 md:px-12 lg:px-20 xl:px-28 pt-20 flex justify-center hidden">
        <div class="grid grid-cols-1 text-center gap-4">
            <div class="text-sm text-black font-semibold uppercase">Our clients</div>
            <div class="text-2xl font-semibold uppercase text-black">Testinomials</div>
            <div class="flex justify-center">
                <div class="border-2 rounded-full h-min w-20 border-amber-500"></div>
            </div>
            <div class="py-24 h-min grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-24 lg:gap-44 text-center">
                @foreach($testinomials as $testinomial)
                <div class="grid grid-cols-1 gap-4 sm:gap-3 rounded-full border-4 border-amber-500 py-16 sm:py-10 px-8 group transition-colors duration-500 hover:bg-amber-500 hover:text-white text-gray-700 ">
                    <div class="flex justify-center">
                        <svg class="w-16 h-16 text-gray-800 group-hover:text-white transition-colors duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="font-semibold text-2xl">
                        {{$testinomial['name']}}
                    </div>
                    <div class="tracking-wider font-semibold text-sm">
                        {{$testinomial['statement']}}
                    </div>
                    <div class="font-bold text-xl pt-2">{{$testinomial['company']}}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="px-4 md:px-12 lg:px-20 xl:px-28 pt-20 flex justify-center">
        <div class="grid grid-cols-1 text-center gap-4 w-full">
            <div class="text-sm text-black font-semibold uppercase">Our clients</div>
            <div class="text-2xl font-semibold uppercase text-black">Testinomials</div>
            <div class="flex justify-center">
                <div class="border-2 rounded-full h-min w-20 border-amber-500"></div>
            </div>
            <div x-data="testinomialsScroll" x-ref="testinomailsSliderContainer" x-init='$watch(" index", value=> scroll());' class="py-24 flex h-min text-center w-full overflow-x-hidden">
                @foreach($testinomials as $testinomial)
                <div class="flex-shrink-0 max-lg:w-full lg:basis-1/3 px-10 lg:scale-90">
                    <div class="grid grid-cols-1 gap-4 sm:gap-3 rounded-full border-4 border-amber-500 py-8 sm:py-6 px-8 transition-colors duration-500 text-gray-700 ">
                        <div class="flex justify-center">
                            <svg class="w-16 h-16 text-gray-800 duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="font-semibold text-xl">
                            {{$testinomial['name']}}
                        </div>
                        <div class="tracking-wider font-semibold text-xs">
                            {{$testinomial['statement']}}
                        </div>
                        <div class="font-bold text-lg pt-2">{{$testinomial['company']}}</div>
                    </div>
                </div>
                @endforeach
                @foreach($testinomials as $testinomial)
                <div x-ref="div{{$loop->iteration}}" class="flex-shrink-0 max-lg:w-full lg:basis-1/3 px-10">
                    <div :class="(index + 1) == {{$loop->iteration}} ? 'lg:scale-125 lg:bg-amber-500 lg:text-white' : 'lg:scale-90 text-gray-700'" class="grid grid-cols-1 gap-4 sm:gap-3 rounded-full border-4 border-amber-500 py-8 sm:py-6 px-8 transition-colors transition-transform duration-500">
                        <div class="flex justify-center">
                            <svg :class="(index + 1) == {{$loop->iteration}} ? 'text-white' : 'text-gray-800'" class="w-16 h-16 transition-colors duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="font-semibold text-xl">
                            {{$testinomial['name']}}
                        </div>
                        <div class="tracking-wider font-semibold text-xs">
                            {{$testinomial['statement']}}
                        </div>
                        <div class="font-bold text-lg pt-2">{{$testinomial['company']}}</div>
                    </div>
                </div>
                @endforeach
                @foreach($testinomials as $testinomial)
                <div class="flex-shrink-0 max-lg:w-full lg:basis-1/3 px-10 lg:scale-90">
                    <div class="grid grid-cols-1 gap-4 sm:gap-3 rounded-full border-4 border-amber-500 py-8 sm:py-6 px-8 transition-colors duration-500 text-gray-700 ">
                        <div class="flex justify-center">
                            <svg class="w-16 h-16 text-gray-800 duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="font-semibold text-xl">
                            {{$testinomial['name']}}
                        </div>
                        <div class="tracking-wider font-semibold text-xs">
                            {{$testinomial['statement']}}
                        </div>
                        <div class="font-bold text-lg pt-2">{{$testinomial['company']}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-20 grid grid-cols-1 gap-4">
        <div class="font-bold text-2xl text-black tracking-wider text-center uppercase">Latest news from blog</div>
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
                <div class="text-sm leading-6 font-light text-black">{{Str::limit($blog->heading, 150)}}</div>
                <div class="pt-4">
                    <a href="/blog?id={{$blog->id}}" wire:navigate class="text-center font-light text-white text-sm uppercase bg-amber-500 whitespace-nowrap py-2 px-8 w-min cursor-pointer transition-colors duration-500 border hover:border-amber-500 hover:bg-white hover:text-amber-500">Read more</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>