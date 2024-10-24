<?php

use function Livewire\Volt\{state, mount};

state(['testinomials']);

mount(function () {
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
    <div class="relative h-96 xl:mt-24 uppercase text-white text-xl sm:text-4xl font-light tracking-wide">
        <img class="w-full h-full" src="{{ asset('page-bg-images/practice-domain.jpeg') }}">
        <div class="absolute inset-0 bg-black/50 flex justify-center items-center">Testimonials</div>
    </div>
    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-28 h-min grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-24 lg:gap-44 text-center">
        @foreach($testinomials as $testinomial)
        <div class="grid grid-cols-1 gap-1 sm:gap-3 rounded-full border-4 border-amber-500 py-16 sm:py-10 px-8 group transition-colors duration-500 hover:bg-amber-500 hover:text-white text-gray-700 ">
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