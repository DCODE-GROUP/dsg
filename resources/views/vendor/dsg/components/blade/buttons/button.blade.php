@props([
    'type' => '',
    'size' => '',
    'icon' => '',
    'iconPosition' => '',
    'href' => '',
    'disabled' => false,
    'buttonType' => 'button',
    'extraClasses' => [],
])

@php
    // Validation with fallback values
    $type = in_array($type, ['primary','secondary','tertiary','link','secondary_gray','tertiary_gray','link_gray']) ? $type : 'primary';
    $size = in_array($size, ['sm','md','lg','xl','2xl']) ? $size : 'sm';
    $iconPosition = in_array($iconPosition, ['left','right']) ? $iconPosition : 'left';

    $dsgClasses = dsgClasses([
        'buttons.default',
        'buttons.sizes.'. $size .'.'. (($icon && $slot->isEmpty()) ? 'with_icon' : (in_array($type, ['link','link_gray']) ? 'link' : 'default')),
        'buttons.'. $type .'.'. ($disabled ? 'disabled' : 'default')
    ], $extraClasses);

    $dsgIconClasses = dsgClasses('buttons.sizes.'. $size .'.icon', $extraClasses);
@endphp

@if ($href)
    <a href="{!! $href !!}" class="{{ $dsgClasses }}" {{ $attributes }}>
        @if($icon)
            @if($iconPosition === 'left') {{ svg($icon, $dsgIconClasses) }} @endif
            @if($slot->isNotEmpty()) <span>{!! $slot !!}</span> @endif
            @if($iconPosition === 'right') {{ svg($icon, $dsgIconClasses) }} @endif
        @else
            {!! $slot !!}
        @endif
    </a>
@else
    <button class="{{ $dsgClasses }}" type="{{ $buttonType }}" {{ $attributes }}>
        @if($icon)
            @if($iconPosition === 'left') {{ svg($icon, $dsgIconClasses) }} @endif
            @if($slot->isNotEmpty()) <span>{!! $slot !!}</span> @endif
            @if($iconPosition === 'right') {{ svg($icon, $dsgIconClasses) }} @endif
        @else
            {!! $slot !!}
        @endif
    </button>
@endif
