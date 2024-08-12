@props([
    'size' => '',
    'type' => '',
    'color' => 'gray',
    'extraClasses' => [],
])


@php
    // Validation with fallback values
    $type = in_array($type, ['pill_color']) ? $type : 'pill_color';
    $size = in_array($size, ['sm','md','lg']) ? $size : 'sm';
    $color = in_array($color, ['gray']) ? $color : 'sm';
@endphp

<span class="{{ dsgClasses(['badges.base',
                            'badges.types.'. $type,
                            'badges.sizes.'. $size,
                            'badges.colors.'. $color,
                           ], $extraClasses)
}}">
    {{ $slot }}
</span>
