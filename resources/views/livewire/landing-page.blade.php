<?php

use function Livewire\Volt\{layout, state, mount};

layout('components.layouts.app');

state(['path']);

mount(function () {
    $this->path = request()->path();
});
?>

<div>
    <livewire:navbar />
    @if($path == '/')
    <livewire:landing-page-body />
    @elseif($path == 'about')
    <livewire:about />
    @elseif(in_array($path,['technology-scouting','white-space-analysis','technology-landscape','invalidity-contentions','state-of-art','patent-infringement','evidence-of-use','patent-valuation','market-report','competitive-analysis']))
    <livewire:solution />
    @endif
    <livewire:footer />
</div>