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
    @endif
    <livewire:footer />
</div>