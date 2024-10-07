@props(['extraClasses' => []])

<div x-data="{ isOpen: false }" class="relative" x-cloak>
    @if(isset($button) && $button->isNotEmpty())
        {{ $button }}
    @else
        <button type="button"
                class="{{ dsgClasses('drop_down.button', $extraClasses) }}"
                aria-expanded="false"
                aria-haspopup="true"
                x-on:click="isOpen = !isOpen"
                x-on:click.away="isOpen = false"
        >
            <x-heroicon-o-ellipsis-vertical class="{{ dsgClasses('drop_down.icon', $extraClasses) }}" />
        </button>
    @endif

    <div x-show="isOpen" class="{{ dsgClasses('drop_down.menu.wrapper', $extraClasses) }}">
        {{ $slot }}
    </div>
</div>
