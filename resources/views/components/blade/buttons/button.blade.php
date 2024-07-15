@props([
    'type' => '',
    'size' => '',
    'href' => '',
    'disabled' => false,
    'extraClasses' => '',
])

@php
    // Validation with fallback values
    $type = in_array($type, ['primary','secondary','tertiary','link']) ? $type : 'primary';
    $size = in_array($type, ['sm','md','lg','xl','2xl']) ? $type : 'sm';
@endphp

@if ($href)
    <a
        href="{!! $href !!}"
        class="{{ dsgClasses(['dsg.buttons.default','dsg.buttons.sizes.' . $size, 'dsg.buttons.'. $type .'.disabled.' . ($disabled ? 'on' : 'off')], $extraClasses) }}"
    >
        {!! $slot !!}
    </a>
@else
    <button
        class="{{ dsgClasses(['dsg.buttons.default','dsg.buttons.sizes.' . $size, 'dsg.buttons.'. $type .'.disabled.' . ($disabled ? 'on' : 'off')], $extraClasses) }}"
    >
        {!! $slot !!}
    </button>
@endif
