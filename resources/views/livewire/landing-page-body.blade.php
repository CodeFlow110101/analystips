<?php

use App\Models\Blog;
use function Livewire\Volt\{with, usesPagination};

usesPagination();

with(fn() => [
    'blogs' => Blog::orderBy('created_at', 'desc')->get()->take(3)
]);

?>

<div>
    <div class="flex items-center w-full h-dvh bg-gray-300">
        <div class="rounded-full bg-pink-500/80 aspect-square text-white flex justify-center items-center p-6">
            <div class="grid grid-cols-1 gap-10 text-balance max-w-md text-center">
                <div class="text-4xl font-semibold">INVESTMENT <span class="text-gray-800">CENTER</span></div>
                <div class="text-xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, qui?</div>
                <div class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eveniet aliquid dolore perferendis vero tenetur sint neque molestiae. Impedit facere quasi repudiandae beatae</div>
                <div class="flex justify-center items-center">
                    <div class="border w-min whitespace-nowrap uppercase border-white py-2 px-8 flex justify-between items-center gap-4">
                        <div>Price Plans</div>
                        <div>
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 flex justify-between items-center px-40">
        <div class="w-3/5">
            <div class="grid grid-cols-1 gap-4 -translate-y-20 bg-white p-12">
                <div class="tracking-widest text-sky-400 text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
                <div class="text-2xl tracking-wider uppercase font-bold">what we offer as reliable company</div>
                <div class="text-xs leading-6">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum.</div>
                <div>
                    <a href="/contact-us" wire:navigate class="text-center text-white uppercase text-base bg-sky-400 whitespace-nowrap py-2 px-8 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">Contact us</a>
                </div>
            </div>
        </div>
        <div class="text-start w-2/5 px-20">
            <div class="grid grid-cols-1 gap-8">
                <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-8 h-8 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-gray-500">Tempor invidunt ut labore et dolore magna.</div>
                </div>
                <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-8 h-8 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-gray-500">Lorem ipsum dolor sit amet consetetur sadipscing.</div>
                </div>
                <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-8 h-8 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-gray-500">Stet clita kasd gubergren no sea unroumis.</div>
                </div>
                <div class="flex justify-between items-center gap-2 w-min whitespace-nowrap">
                    <div>
                        <svg class="w-8 h-8 text-sky-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="text-gray-500">Sed diam nonumy eirmod tempor invidunt ut labore.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-40 py-20 grid grid-cols-1 gap-4">
        <div class="text-sky-400 text-center uppercase">accusam et justo duo dolores et ea rebum. Stet clita no sea</div>
        <div class="font-bold text-2xl text-gray-800 tracking-wider text-center uppercase">Our Service</div>
        <div class="grid grid-cols-3 gap-12 mt-8">
            <div class="grid grid-cols-1 gap-2">
                <div class="flex items-center justify-center w-full h-56 bg-gray-300 rounded sm:w-96">
                    <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                    </svg>
                </div>
                <div class="font-light text-lg hover:text-sky-400">Stet clita ea et gubergren, kasd magna</div>
                <div class="text-sky-400">Jonathan Doe <span class="text-gray-600 font-light">/ 12 Jan. 2015</span></div>
                <div class="text-sm leading-6 font-light text-gray-800">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit ame.</div>
                <div class="pt-4">
                    <div class="text-center text-white uppercase text-xs rounded-sm bg-sky-400 whitespace-nowrap py-2 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">Read more</div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-2">
                <div class="flex items-center justify-center w-full h-56 bg-gray-300 rounded sm:w-96">
                    <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                    </svg>
                </div>
                <div class="font-light text-lg hover:text-sky-400">Stet clita ea et gubergren, kasd magna</div>
                <div class="text-sky-400">Jonathan Doe <span class="text-gray-600 font-light">/ 12 Jan. 2015</span></div>
                <div class="text-sm leading-6 font-light text-gray-800">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit ame.</div>
                <div class="pt-4">
                    <div class="text-center text-white uppercase text-xs rounded-sm bg-sky-400 whitespace-nowrap py-2 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">Read more</div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-2">
                <div class="flex items-center justify-center w-full h-56 bg-gray-300 rounded sm:w-96">
                    <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                    </svg>
                </div>
                <div class="font-light text-lg hover:text-sky-400">Stet clita ea et gubergren, kasd magna</div>
                <div class="text-sky-400">Jonathan Doe <span class="text-gray-600 font-light">/ 12 Jan. 2015</span></div>
                <div class="text-sm leading-6 font-light text-gray-800">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit ame.</div>
                <div class="pt-4">
                    <div class="text-center text-white uppercase text-xs rounded-sm bg-sky-400 whitespace-nowrap py-2 px-6 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">Read more</div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-8 px-40 pt-20 pb-8">
        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="text-gray-600 uppercase font-bold text-lg">Our History</div>
            <div class="text-sm leading-6 font-light text-gray-800">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, magni. Quod nemo exercitationem similique ipsa iusto eum delectus culpa recusandae. Officia possimus illum alias asperiores. Quos velit reprehenderit maiores labore! Dicta cupiditate, temporibus eos facilis rerum numquam nulla obcaecati impedit sit iste sapiente, quaerat illum officiis possimus perspiciatis dolorum, reiciendis ea modi! Nisi, veritatis quo voluptate reiciendis soluta ipsa odit ullam officiis nam minus dolorum sequi iusto hic asperiores odio expedita non doloribus voluptates pariatur provident aspernatur nostrum excepturi harum! In amet, sint adipisci perferendis necessitatibus assumenda, ducimus qui tempora excepturi reprehenderit minima sunt aperiam obcaecati accusamus aliquid sapiente debitis.</div>
        </div>
        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="text-gray-600 uppercase font-bold text-lg">What we Offer</div>
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
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 88%" class="flex justify-between">
                            <div class="text-sm text-gray-500 uppercase">Website Analysis</div>
                            <div class="bg-gray-400 w-min text-white text-xs font-medium px-3 py-1 rounded">88%
                            </div>
                        </div>
                        <div class="bg-sky-400 h-1.5 rounded-full" style="width: 88%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-40 py-20 flex justify-center">
        <div class="grid grid-cols-4 gap-4">
            <div class="grid grid-cols-1 group gap-6 text-center">
                <div class="flex justify-center items-center">
                    <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-sky-400">
                        <div class="bg-gradient-to-tr from-sky-400 to-sky-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                            <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-gray-500 font-normal uppercase">Financial Process</div>
                <div class="text-xs leading-6 text-gray-800">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</div>
            </div>
            <div class="grid grid-cols-1 group gap-6 text-center">
                <div class="flex justify-center items-center">
                    <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-sky-400">
                        <div class="bg-gradient-to-tr from-sky-400 to-sky-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                            <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M7.926 10.898 15 7.727m-7.074 5.39L15 16.29M8 12a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm12 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm0-11a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-gray-500 font-normal uppercase">Social Media</div>
                <div class="text-xs leading-6 text-gray-800">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</div>
            </div>
            <div class="grid grid-cols-1 group gap-6 text-center">
                <div class="flex justify-center items-center">
                    <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-sky-400">
                        <div class="bg-gradient-to-tr from-sky-400 to-sky-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                            <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-gray-500 font-normal uppercase">Strategy Analysis</div>
                <div class="text-xs leading-6 text-gray-800">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</div>
            </div>
            <div class="grid grid-cols-1 group gap-6 text-center">
                <div class="flex justify-center items-center">
                    <div class="w-min rounded-full border-4 transition-colors border-white group-hover:border-sky-400">
                        <div class="bg-gradient-to-tr from-sky-400 to-sky-300 rounded-full transition-transform duration-500 group-hover:scale-90 p-6">
                            <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-gray-500 font-normal uppercase">Ecommerce</div>
                <div class="text-xs leading-6 text-gray-800">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</div>
            </div>
        </div>
    </div>

    <div class="px-40 py-20 flex justify-center">
        <div class="grid grid-cols-1 text-center gap-4">
            <div class="text-sm text-black font-semibold uppercase">Our clients</div>
            <div class="text-2xl font-semibold uppercase text-gray-800">Trusted Companies</div>
            <div class="flex justify-center">
                <div class="border-2 rounded-full h-min w-20 border-sky-400"></div>
            </div>
            <div class="text-xl px-48 text-gray-500">Our Company is a trusted service provider of high quality Patent search, commited for transparency, ethics and work on client satisfaction.</div>
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
    </div>

    <div class="px-40 py-20 grid grid-cols-1 gap-4">
        <div class="text-sky-400 text-center uppercase">accusam et justo duo dolores et ea rebum. Stet clita no sea</div>
        <div class="font-bold text-2xl text-gray-800 tracking-wider text-center uppercase">Latest news from blog</div>
        <div class="grid grid-cols-3 gap-12 mt-8">
            @foreach($blogs as $blog)
            <div class="grid grid-cols-1 gap-2">
                <div class="flex justify-center">
                    <img src="{{asset('storage/'.$blog->image)}}" class="w-auto h-64">
                </div>
                <a href="/blog?id={{$blog->id}}" wire:navigate class="hover:text-sky-400 text-xl cursor-pointer">
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
                    <a href="/blog?id={{$blog->id}}" wire:navigate class="text-center font-light text-white text-sm uppercase bg-sky-400 whitespace-nowrap py-2 px-8 w-min cursor-pointer transition-colors duration-500 border hover:border-sky-400 hover:bg-white hover:text-sky-400">Read more</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="px-40 py-12 grid grid-cols-1 gap-24">
        <div class="text-center grid grid-cols-1 gap-4">
            <div class="text-sky-400 text-center uppercase">accusam et justo duo dolores et ea rebum. Stet clita no sea</div>
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
</div>