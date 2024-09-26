@props([
    'name' => '',
    'errors' => '',
    'rows' => 5,
    'placeholder' => '',
    'showErrors' => true,
    'disabled' => false,
    'required' => false,
    'hidden' => false,
    'label' => '',
    'help' => '',
    'binding' => 'wire:model',
    'class' => '',
    'dynamicHeight' => false,
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

    <x-dsg-textarea
            rows="{{ $rows }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            :required="$required"
            :disabled="$disabled"
            :hidden="$hidden"
            binding="{{ $binding }}"
            :dynamic-height="$dynamicHeight"
    />

    <x-slot name="help">{{ $help }}</x-slot>
</x-dsg-field>
