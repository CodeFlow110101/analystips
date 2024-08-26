<?php

use function Livewire\Volt\{state, on};

state(['showModel' => false]);

on([
    'show-model' => function () {
        $this->showModel = true;
    },
    'hide-modal' => function () {
        $this->reset();
    },
]);

?>

<div>
    @if($showModel)
    <div class="fixed top-0 z-10 bg-black/50 w-full h-dvh flex justify-center items-center">
        <livewire:modals.modal-blog />
    </div>
    @endif
</div>