@props([
    'href' => '',
    'icon' => '',
    'title' => '',
    'extraClass' => '',
])

<a @if($href) href="{{ $href }}" wire:navigate @endif
   {{ $attributes->merge([
        'class' => config('dsg.drop_down.menu.item') . ' ' . ($extraClass ?? '')
   ])}}
>
    @if($icon)
        @svg($icon, 'w-4 h-4')
    @endif
    <span class="flex-1">
        {{ $title }}
    </span>
</a>
