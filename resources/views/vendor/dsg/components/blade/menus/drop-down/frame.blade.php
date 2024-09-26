@props(['extraClasses' => []])

<div x-data="{ isOpen: false }" class="relative" x-cloak>
    <button type="button"
            class="{{ dsgClasses('drop_down.button', $extraClasses) }}"
            aria-expanded="false"
            aria-haspopup="true"
            x-on:click="isOpen = !isOpen"
            x-on:click.away="isOpen = false"
    >
        @if(isset($button) && $button->isNotEmpty())
            {{ $button }}
        @else
            <x-heroicon-o-ellipsis-horizontal class="{{ dsgClasses('drop_down.icon', $extraClasses) }}" />
        @endif
    </button>

    <div x-show="isOpen" class="{{ dsgClasses('drop_down.menu.wrapper', $extraClasses) }}">
        {{ $slot }}
    </div>
</div>
