<?php

use function Livewire\Volt\{state, mount};

state(['movies', 'id', 'title', 'age', 'duration', 'language', 'description', 'image', 'link']);

$changeMovie = function ($id) {

    $this->id = $id;

    $this->title = $this->movies[$this->id]['title'];
    $this->age = $this->movies[$this->id]['age'];
    $this->duration = $this->movies[$this->id]['duration'];
    $this->language = $this->movies[$this->id]['language'];
    $this->description = $this->movies[$this->id]['description'];
    $this->image = $this->movies[$this->id]['image'];
    $this->link = $this->movies[$this->id]['link'];
};

mount(function () {
    $movies = [];

    $movies[] = [
        'id' => 0,
        'title' => '10 Steps Through the Sky Part 1: Astronomy',
        'age' => '8-14',
        'duration' => '24 min',
        'language' => 'English',
        'description' => 'It serves as an introduction to astronomy, discussing its fundamental concepts, historical context, and significant discoveries. The show covers educational topics like star locations, constellations, and the solar system. It also highlights the contributions of astronomers like Galileo and Copernicus. Furthermore, it explores the advancements enabled by the Hubble Space Telescope and offers insights into the James Webb Space Telescope.',
        'image' => 'images/Astronomy.png',
        'link' => 'https://www.dropbox.com/scl/fi/oahdy0scz7fdir0ikrsh0/10-STEPS-THROUGH-THE-SKY.mp4?rlkey=3s946i78v7ksb177ss7wbj7jm&e=1&st=98n74gom&dl=0',
    ];

    $movies[] = [
        'id' => 1,
        'title' => '8 Scoops of Milky Way',
        'age' => '7-12',
        'duration' => '20 min',
        'language' => 'English',
        'description' => 'In the side arm of the spiral galaxy Milky Way, we share a small home with a fascinating neighborhood of 8 wondrous Planets and a powerful Sun. These Planets are so different from each other that they hardly can be called from one family, yet they create a perfect harmony. From the burning Sun, Lava-ish surface of Venus to the huge stormy belts of Jupiter or the unimaginably beautiful eclipse of Saturn, 8 Scoops of Milky Way is full of never-seen footages meant for dome theaters that make you feel the uniqueness and beauty of our Solar system.',
        'image' => 'images/MilkyWay.png',
        'link' => 'https://www.dropbox.com/scl/fi/xtssclfgrvvzk7qhsvc3v/8-Scoops-of-Milky-Way.mp4?rlkey=bwzziww7k6nmgqlhj2ns9qyoh&dl=0',
    ];

    $movies[] = [
        'id' => 2,
        'title' => 'Astralis',
        'age' => '12-18',
        'duration' => '12 min',
        'language' => 'English',
        'description' => 'The show is about the life cycle of Stars. From the birth of a star in a stellar nursery to its journey towards a black hole or supernova, “Astralis” explains these phenomena in a very easy narrative. With eye-catching visuals and lovely music, the show works for all age groups, including a school audience.',
        'image' => 'images/Astralis.png',
        'link' => 'https://www.dropbox.com/scl/fi/mwkkgb6vj4uk3cz5zafbi/Astralis-LR.mp4?rlkey=soyx3o54qkctz8uzr646ye18t&dl=0'
    ];

    $this->id = 0;
    $this->title = $movies[0]['title'];
    $this->age = $movies[0]['age'];
    $this->duration = $movies[0]['duration'];
    $this->language = $movies[0]['language'];
    $this->description = $movies[0]['description'];
    $this->image = $movies[0]['image'];
    $this->link = $movies[0]['link'];

    $this->movies = $movies;
});
?>

<div class="bg-slate-900 h-min px-12 py-8 grid grid-cols-1 gap-12">
    <div class="flex justify-between items-center bg-white/5 p-5 rounded-xl">
        <div>
            <div class="text-3xl font-bold text-white uppercase">Wathcher</div>
        </div>
        <div class="inline-flex gap-12 text-white">
            <div class="hover:text-amber-400 cursor-pointer">Current Sesseions</div>
            <div class="hover:text-amber-400 cursor-pointer">Coming Soon!</div>
            <div class="hover:text-amber-400 cursor-pointer">IMAX</div>
            <div class="hover:text-amber-400 cursor-pointer">3D</div>
        </div>
        <div class="inline-flex gap-8">
            <div class="inline-flex gap-2">
                <div>
                    <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="text-white">NY,Ocean Mall</div>
            </div>
            <div class="inline-flex gap-2 group cursor-pointer text-white">
                <div>
                    <svg class="w-6 h-6 text-white group-hover:text-amber-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="group-hover:text-amber-400">Log In</div>
            </div>
        </div>
    </div>

    <div class="flex justify-between gap-16">
        <div class="w-1/5">
            <img src="{{asset($image)}}" class="h-full w-full rounded-2xl shadow-2xl shadow-white/25">
        </div>
        <div class="w-4/5 flex justify-between ">
            <div class="w-4/5 h-min grid grid-cols-1 gap-12">
                <div class="text-white text-4xl font-semibold">{{$title}}</div>
                <div class="grid grid-cols-1 gap-4 h-min">
                    <div class="inline-flex gap-4">
                        <div class="py-2 px-4 rounded-full text-gray-300 bg-white/5">Astronomy</div>
                        <div class="py-2 px-4 rounded-full text-gray-300 bg-white/5">Sci Fi</div>
                    </div>
                    <div class="inline-flex gap-8 items-center text-white">
                        <div>
                            Age: {{$age}}
                        </div>
                        <div class="inline-flex items-center gap-2">
                            <div>
                                <svg class="w-4 h-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <div>{{$duration}}</div>
                        </div>
                        <div>
                            Language: {{$language}}
                        </div>
                    </div>
                </div>
                <div class="text-white">{{$description}}</div>
                <div class="inline-flex items-center gap-8">
                    <a href="{{$link}}" target="_blank" class="bg-amber-400 hover:text-amber-400 group transition-colors duration-500 cursor-pointer hover:bg-transparent border border-transparent hover:border-amber-400 w-min rounded-full py-2 px-4 uppercase font-medium text-lg tracking-wider inline-flex items-center gap-4">
                        <div>Watch</div>
                        <div>
                            <svg class="w-5 h-5 group-hover:text-amber-400 text-slate-800 transition-colors duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.6 5.2A1 1 0 0 0 7 6v12a1 1 0 0 0 1.6.8l8-6a1 1 0 0 0 0-1.6l-8-6Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </a>
                    <div class="text-amber-400 hover:text-slate-900 group text-lg py-2 px-4 transition-colors duration-500 hover:bg-amber-400 cursor-pointer font-medium rounded-full border hover:border-transparent border-amber-400 inline-flex items-center gap-4">
                        <div>Watch Later</div>
                        <div>
                            <svg class="w-5 h-5 text-amber-400 group-hover:text-slate-900 transition-colors duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/5 h-min grid grid-cols-1 pt-14 gap-20">
                <div class="h-min grid grid-cols-1">
                    <div class="border border-white/30"></div>
                    <div class="flex justify-between items-center">
                        <div class="h-min grid grid-cols-1 gap-2">
                            <div class="text-amber-400 text-lg">Director</div>
                            <div class="text-gray-300 text-xs">Rick Harrison</div>
                        </div>
                        <div>
                            <svg class="w-6 h-6 text-amber-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="h-min grid grid-cols-1">
                    <div class="border border-white/30"></div>
                    <div class="flex justify-between items-center">
                        <div class="h-min grid grid-cols-1 gap-2">
                            <div class="text-amber-400 text-lg">Writer</div>
                            <div class="text-gray-300 text-xs">Michael Anderson, Sarah Thompson</div>
                        </div>
                        <div>
                            <svg class="w-6 h-6 text-amber-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="h-min grid grid-cols-1">
                    <div class="border border-white/30"></div>
                    <div class="flex justify-between items-center">
                        <div class="h-min grid grid-cols-1 gap-2">
                            <div class="text-amber-400 text-lg">Cast</div>
                            <div class="text-gray-300 text-xs">David Garcia, Emily Rodriguez, Christopher Lee</div>
                        </div>
                        <div>
                            <svg class="w-6 h-6 text-amber-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-min grid grid-cols-1 gap-8 pt-4">
        <div class="text-2xl font-medium text-white">You may also like</div>
        <div class="inline-flex gap-4">
            @foreach($movies as $movie)
            @if($id != $movie['id'])
            <div wire:click="changeMovie({{$movie['id']}})" class="h-64 w-48 group relative cursor-pointer">
                <img src="{{asset($movie['image'])}}" class="h-full w-full rounded-2xl shadow-2xl shadow-white/25">
                <div class="absolute top-0 rounded-2xl opacity-0 group-hover:opacity-100 bg-black/60 h-full w-full flex justify-center items-center">
                    <div class="bg-amber-400 w-min rounded-full py-2 px-4 uppercase font-medium text-sm tracking-wider inline-flex items-center gap-4">
                        <div>Watch</div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>