@props([
    'id' => '',
    'name' => '',
    'value' => '',
    'size' => '',
    'required' => false,
    'extraClasses' => [],
])

@php
    // Validation with fallback values
    $size = in_array($size, ['sm','md']) ? $size : 'sm';
@endphp

<div class="{{ dsgClasses('forms.radio.wrapper', $extraClasses) }}">
    <input id="{{ $id ?: $name.$value }}"
           name="{{ $name }}"
           type="radio"
           class="{{ dsgClasses(['forms.radio.input.default', 'forms.radio.input.sizes.'. $size], $extraClasses) }}"
           value="{{ $value }}"
           @if($required) required @endif
    >
    @if($slot->isNotEmpty())
        <label for="{{ $id ?: $name.$value }}"
               class="{{ dsgClasses('forms.radio.label', $extraClasses) }}"
        >
            {{ $slot }}
        </label>
    @endif
</div>
