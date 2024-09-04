<?php

use App\Http\Controllers\FileUploads;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'landing-page')->name('home');
Volt::route('/about', 'landing-page')->name('about');
Volt::route('/practice-domain', 'landing-page')->name('practice-domain');
Volt::route('/career', 'landing-page')->name('career');
Volt::route('/login', 'landing-page')->name('login');
Volt::route('/dashboard', 'landing-page')->name('dashboard');
Volt::route('/blog', 'landing-page')->name('blog');
Volt::route('/terms-and-conditions', 'landing-page')->name('terms-and-conditions');
Volt::route('/privacy-policy', 'landing-page')->name('privacy-policy');
Volt::route('/contact-us', 'landing-page')->name('contact-us');

// Solutions Page
Volt::route('/technology-scouting', 'landing-page')->name('technology-scouting');
Volt::route('/white-space-analysis', 'landing-page')->name('white-space-analysis');
Volt::route('/technology-landscape', 'landing-page')->name('technology-landscape');
Volt::route('/invalidity-contentions', 'landing-page')->name('invalidity-contentions');
Volt::route('/state-of-the-art-search', 'landing-page')->name('state-of-the-art-search');
Volt::route('/patent-valuation', 'landing-page')->name('patent-valuation');
Volt::route('/evidence-of-use', 'landing-page')->name('evidence-of-use');
Volt::route('/patent-valuation', 'landing-page')->name('patent-valuation');
Volt::route('/market-report', 'landing-page')->name('market-report');
Volt::route('/competitive-analysis', 'landing-page')->name('competitive-analysis');

//File Uploads
Route::post('/upload-image', [FileUploads::class, 'storeImage']);
