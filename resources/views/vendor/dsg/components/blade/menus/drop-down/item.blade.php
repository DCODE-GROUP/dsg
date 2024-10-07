@props([
    'href' => '',
    'icon' => '',
    'extraClasses' => [],
])

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => dsgClasses('drop_down.menu.item', $extraClasses)]) }}>
        @if($icon)
            @svg($icon, dsgClasses('drop_down.menu.icon'))
        @endif
        <span class="flex-1">
            {{ $slot }}
        </span>
    </a>
@else
    <button {{ $attributes->merge(['class' => dsgClasses('drop_down.menu.item', $extraClasses)]) }}>
        @if($icon)
            @svg($icon, dsgClasses('drop_down.menu.icon'))
        @endif
        <span class="flex-1">
            {{ $slot }}
        </span>
    </button>
@endif
