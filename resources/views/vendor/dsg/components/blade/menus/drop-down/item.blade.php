@props([
    'href' => '',
    'icon' => '',
    'extraClasses' => [],
])

<a @if($href) href="{{ $href }}" @endif
    class="{{ dsgClasses('drop_down.menu.item', $extraClasses) }}"
>
    @if($icon)
        @svg($icon, dsgClasses('drop_down.menu.icon'))
    @endif
    <span class="flex-1">
        {{ $slot }}
    </span>
</a>
