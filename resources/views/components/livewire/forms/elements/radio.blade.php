@props([
    'id' => '',
    'name' => '',
    'label' => '',
    'value' => '',
    'required' => false,
    'binding' => 'wire:model',
    'extraClasses' => '',
    'labelClasses' => '',
    'inputClasses' => '',
])

<div class="{{ config('dsg.forms.radio.wrapper') . ' ' . $extraClasses }}">
    <input id="{{ $id ?: $name.$value }}"
           name="{{ $name }}"
           type="radio"
           class="{{ config('dsg.forms.radio.input') . ' ' . $inputClasses }} }}"
           {{ $binding }}="{{ $name }}"
           value="{{ $value }}"
           @if($required) required @endif
    >
    @if($label)
        <label for="{{ $id ?: $name }}"
               class="{{ config('dsg.forms.radio.label') . ' ' . $labelClasses }}"
        >
            {!! $label !!}
        </label>
    @endif
</div>
