@props([
    'name' => '',
    'color' => '#2563EB',
    'errors' => '',
    'showErrors' => true,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'label' => '',
    'help' => '',
    'placeholder' => '',
    'binding' => 'wire:model',
    'class' => '',
])

<x-dsg-field
    name="{{ $name }}"
    :errors="$errors"
    :show-errors="$showErrors"
    :required="$required"
    class="{{ $class }}"
    help="{{ $help }}"
>
    <x-slot name="label">{{ $label }}</x-slot>

    <div x-data="{ {{ $name }}: '{{ $color }}' }"
         class="flex space-x-1 relative"
    >
        <label for="{{ $name }}"
               x-bind:style="'background-color: ' + {{ $name }}"
               {{ $attributes->merge(['class' => config('dsg.forms.color')]) }}
        ></label>

        <x-dsg-input
            type="color"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            model="{{ $name }}"
            :required="$required"
            :disabled="$disabled"
            :readonly="$readonly"
            :binding="$binding"
            extraClasses="absolute top-0 left-0 opacity-0"
        />

        <x-dsg-input
            type="text"
            placeholder="{{ $placeholder }}"
            model="{{ $name }}"
            :disabled="$disabled"
            :readonly="$readonly"
        />
    </div>
</x-dsg-field>
