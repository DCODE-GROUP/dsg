@props([
    'errors' => '',
    'options' => [],
    'placeholder' => '',
    'disabled' => false,
    'required' => false,
    'readonly' => false,
    'extraClasses' => '',
    'minDate' => '',
])

@php
    $options = array_merge([
        'dateFormat' => 'Y-m-d',
        'enableTime' => false,
        'altFormat' =>  'j F Y',
        'altInput' => true,
        'minDate' => $minDate,
    ], $options);
@endphp

<div wire:ignore>
    <input
            x-data="{
                value: '',
                instance: undefined,
                init() {
                    $watch('value', value => this.instance.setDate(value, false));
                    this.instance = flatpickr(this.$refs.input, {{ json_encode((object)$options) }});
                }
            }"
            x-ref="input"
            x-bind:value="value"
            type="text"
            placeholder="{{ $placeholder }}"
            @if(!empty($model)) x-model="{{ $model }}" @endif
            @if($disabled) disabled @endif
            @if($required) required @endif
            @if($readonly) readonly @endif
            {{ $attributes->merge([
                 'class' => config('dsg.forms.input.default') . ' ' . config('dsg.forms.input.readonly.' . ($readonly ? 'on' : 'off')) . ' ' . $extraClasses
            ])}}
    />
</div>
