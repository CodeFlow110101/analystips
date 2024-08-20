<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'landing-page')->name('home');
Volt::route('/about', 'landing-page')->name('about');
