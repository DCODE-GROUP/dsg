@props([
    'type' => '',
    'size' => '',
    'color' => 'gray',
    'dot' => false,
    'extraClasses' => [],
])


@php
    // Validation with fallback values
    $type = in_array($type, ['pill_color','pill_outline','badge_color','badge_modern']) ? $type : 'pill_color';
    $size = in_array($size, ['sm','md','lg']) ? $size : 'sm';
    $color = in_array($color, ['gray', 'purple', 'blue', 'pink', 'orange', 'brand', 'success', 'warning']) ? $color : 'gray';
@endphp

<div class="{{ dsgClasses(['badges.base',
                            'badges.types.'. $type,
                            'badges.sizes.'. $size,
                            'badges.colors.'. $color .'.default',
                           ], $extraClasses)
}}">
    @if($dot)
        <span class="{{ dsgClasses(['badges.dot', 'badges.colors.'. $color .'.dot'], $extraClasses) }}"></span>
    @endif
    {{ $slot }}
</div>
