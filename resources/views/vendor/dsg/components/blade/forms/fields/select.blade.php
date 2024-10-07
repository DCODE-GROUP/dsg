@props([
    'name' => '',
    'model' => '',
    'errors' => '',
    'showErrors' => true,
    'required' => true,
    'disabled' => false,
    'readonly' => false,
    'label' => '',
    'help' => '',
    'placeholder' => '',
    'binding' => 'wire:model',
    'options' => [],
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

    <x-dsg-select
            name="{{ $name }}"
            model="{{ $model }}"
            placeholder="{{ $placeholder }}"
            binding="{{ $binding }}"
            :required="$required"
            :disabled="$disabled"
            :readonly="$readonly"
            :options="$options"
    />

</x-dsg-field>
