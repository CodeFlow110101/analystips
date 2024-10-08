<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Livewire\Volt\{layout, state, mount};

layout('components.layouts.app');

state(['path', 'blog_id']);

mount(function () {
    $this->path = request()->path();

    if (in_array($this->path, ['login', 'dashboard'])) {
        if ($this->path == 'dashboard' && !Auth::check()) {
            return $this->redirectRoute('login', navigate: true);
        } elseif ($this->path == 'login' && Auth::check()) {
            return $this->redirectRoute('dashboard', navigate: true);
        }
    }

    if ($this->path == 'blog' && request()->has('id')) {

        if (Blog::where('id', request('id'))->exists()) {
            $this->blog_id = request('id');
        } else {
            return $this->redirectRoute('blog', navigate: true);
        }
    }
});
?>

<div>
    @if(in_array($path,['login','dashboard']))

    @if($path == 'login')
    <livewire:admin.login />
    @elseif($path == 'dashboard')
    <livewire:admin.dashboard />
    @endif

    @else
    <livewire:navbar />
    @if($path == '/')
    <livewire:landing-page-body />
    @elseif($path == 'about')
    <livewire:about />
    @elseif($path == 'practice-domain')
    <livewire:practice-domain />
    @elseif(in_array($path,['technology-scouting','white-space-analysis','technology-landscape','invalidity-contentions','state-of-the-art-search','patent-valuation','evidence-of-use','patent-valuation','market-report','competitive-analysis']))
    <livewire:solution />
    @elseif($path == 'career')
    <livewire:career />
    @elseif($path == 'terms-and-conditions')
    <livewire:terms-and-conditions />
    @elseif($path == 'privacy-policy')
    <livewire:privacy-policy />
    @elseif($path == 'contact-us')
    <livewire:contact-us />
    @elseif($path == 'blog')
    <livewire:blog :id="$blog_id" />
    @elseif($path == 'testimonial')
    <livewire:testimonial />
    @endif
    <livewire:footer />
    @endif

    <livewire:modals.modals />
</div>