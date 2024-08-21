<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'landing-page')->name('home');
Volt::route('/about', 'landing-page')->name('about');
Volt::route('/technology-scouting', 'landing-page')->name('technology-scouting');
Volt::route('/white-space-analysis', 'landing-page')->name('white-space-analysis');
Volt::route('/technology-landscape', 'landing-page')->name('technology-landscape');
Volt::route('/invalidity-contentions', 'landing-page')->name('invalidity-contentions');
Volt::route('/state-of-art', 'landing-page')->name('state-of-art');
Volt::route('/patent-infringement', 'landing-page')->name('patent-infringement');
Volt::route('/evidence-of-use', 'landing-page')->name('evidence-of-use');
Volt::route('/patent-valuation', 'landing-page')->name('patent-valuation');
Volt::route('/market-report', 'landing-page')->name('market-report');
Volt::route('/competitive-analysis', 'landing-page')->name('competitive-analysis');
