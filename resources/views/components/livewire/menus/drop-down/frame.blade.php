@props([
    'extraButtonClasses' => '',
    'extraMenuClasses' => '',
    'extraMenuItemClasses' => '',
])

<div x-data="{ isOpen: false }" class="relative" x-cloak>
    <button type="button"
            {{ $attributes->merge([
                'class' => config('dsg.drop_down.button') . ' ' . $extraButtonClasses
            ])}}
            aria-expanded="false"
            aria-haspopup="true"
            x-on:click="isOpen = !isOpen"
            x-on:click.away="isOpen = false"
    >
        @if(isset($button)  && $button->isNotEmpty())
            {{ $button }}
        @else
            <x-heroicon-o-ellipsis-horizontal class="w-5 h-5" />
        @endif
    </button>

    <div {{ $attributes->merge([
                'class' => config('dsg.drop_down.menu.wrapper') . ' ' . $extraMenuClasses
         ]) }}
         x-show="isOpen"
    >
        {{ $slot }}
    </div>
</div>
