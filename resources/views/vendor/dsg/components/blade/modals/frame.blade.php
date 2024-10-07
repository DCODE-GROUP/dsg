{{--TODO: have to create a dsg modal component with header, footer and modal buttons. Use that in around this project--}}

@props([
    'eventListener' => 'open-modal',
    'extraClasses' => [],
])

<div class="{{ dsgClasses('modals.frame', $extraClasses) }}"
     aria-labelledby="modal-title"
     role="dialog" aria-modal="true"
     x-data="{ modalOpen: false }"
     x-init="
        document.addEventListener('{{ $eventListener }}', event => {
            modalOpen = event.detail.show !== undefined ? event.detail.show : true;
        });
     "
     x-show="modalOpen"
     x-cloak
>
    <div class="{{ dsgClasses('modals.background', $extraClasses) }}"
         x-cloak
         x-on:click="modalOpen = false"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
    ></div>

    <div {{ $attributes->merge(['class' => dsgClasses('modals.window', $extraClasses) ]) }}>
        {{ $slot }}
    </div>
</div>
