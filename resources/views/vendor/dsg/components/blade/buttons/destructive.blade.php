@props([
    'type' => '',
    'size' => '',
    'icon' => '',
    'iconPosition' => '',
    'href' => '',
    'disabled' => false,
    'extraClasses' => [],
])

@php
    $dsgClasses = dsgClasses([
        'buttons.default',
        'buttons.sizes.'. $size .'.'. (($icon && $slot->isEmpty()) ? 'icon' : 'default'),
        'buttons.destructive.'. $type .'.'. ($disabled ? 'disabled' : 'default')
    ], $extraClasses);

    // Validation with fallback values
    $type = in_array($type, ['primary','secondary','tertiary','link']) ? $type : 'primary';
    $size = in_array($size, ['sm','md','lg','xl','2xl']) ? $size : 'sm';
    $iconPosition = in_array($iconPosition, ['left','right']) ? $iconPosition : 'left';
@endphp

@if ($href)
    <a href="{!! $href !!}" class="{{ $dsgClasses }}" {{ $attributes }}>
        @if($icon)
            @if($iconPosition === 'left') {{ svg($icon, 'w-7 h-7') }} @endif
            @if($slot->isNotEmpty()) <span>{!! $slot !!}</span> @endif
            @if($iconPosition === 'right') {{ svg($icon, 'w-7 h-7') }} @endif
        @else
            {!! $slot !!}
        @endif
    </a>
@else
    <button class="{{ $dsgClasses }}" {{ $attributes }}>
        @if($icon)
            @if($iconPosition === 'left') {{ svg($icon, 'w-7 h-7') }} @endif
            @if($slot->isNotEmpty()) <span>{!! $slot !!}</span> @endif
            @if($iconPosition === 'right') {{ svg($icon, 'w-7 h-7') }} @endif
        @else
            {!! $slot !!}
        @endif
    </button>
@endif
