<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Livewire\Volt\{layout, state, mount};

layout('components.layouts.app');

state(['path', 'blog_id', 'blogUrls']);

mount(function () {
    $this->path = request()->path();

    if (in_array($this->path, ['login', 'admin-blogs'])) {
        if (in_array($this->path, ['admin-blogs', 'add-blog']) && !Auth::check()) {
            return $this->redirectRoute('login', navigate: true);
        } elseif ($this->path == 'login' && Auth::check()) {
            return $this->redirectRoute('admin-blogs', navigate: true);
        }
    }

    $this->blogUrls = Blog::get()->pluck('url')->toArray();

    if (in_array($this->path, $this->blogUrls)) {
        $this->blog_id = Blog::where('url', $this->path)->first()->id;
    }
});
?>

<div>
    @if(in_array($path,['login','admin-blogs','add-blog']))

    @if($path == 'login')
    <livewire:admin.login />
    @elseif(in_array($path , ['admin-blogs' , 'add-blog']))
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
    @elseif($path == 'testimonial')
    <livewire:testimonial />
    @elseif($path == 'blog')
    <livewire:blog :id="$blog_id" />
    @elseif(in_array($this->path, $this->blogUrls))
    <livewire:blog :id="$blog_id" />
    @else
    {{abort(404)}}
    @endif
    <livewire:footer />
    @endif

    <livewire:modals.modals />
</div>