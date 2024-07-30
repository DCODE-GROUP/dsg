@props([
    'name' => '',
    'id' => '',
    'errors' => '',
    'showErrors' => true,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'hidden' => false,
    'label' => '',
    'help' => '',
    'placeholder' => '',
    'binding' => 'wire:model',
    'model' => '',
    'preventSubmitWithEnter' => true,
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

    <x-dsg-search
        name="{{ $name }}"
        id="{{ $id ?: $name }}"
        placeholder="{{ $placeholder }}"
        :required="$required"
        :disabled="$disabled"
        :readonly="$readonly"
        :hidden="$hidden"
        binding="{{ $binding }}"
        model="{{ $model }}"
        :prevent-submit-with-enter="$preventSubmitWithEnter"
    />
</x-dsg-field>
