<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Livewire\Volt\{layout, state, mount};

layout('components.layouts.app');

state(['path']);

mount(function () {
    $this->path = request()->path();

    if (in_array($this->path, ['login', 'dashboard'])) {
        if ($this->path == 'dashboard' && !Auth::check()) {
            return $this->redirectRoute('login', navigate: true);
        } elseif ($this->path == 'login' && Auth::check()) {
            return $this->redirectRoute('dashboard', navigate: true);
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
    @elseif($path == 'about' || $path == 'practice-domain')
    <livewire:about />
    @elseif(in_array($path,['technology-scouting','white-space-analysis','technology-landscape','invalidity-contentions','state-of-art','patent-infringement','evidence-of-use','patent-valuation','market-report','competitive-analysis']))
    <livewire:solution />
    @elseif($path == 'career')
    <livewire:career />
    @endif
    <livewire:footer />
    @endif

    <livewire:modals.modals />
</div>