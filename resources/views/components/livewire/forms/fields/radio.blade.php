@props([
    'name' => '',
    'required' => false,
    'errors' => '',
    'showErrors' => true,
    'label' => '',
    'fields' => [],
    'help' => '',
    'type' => 'text',
    'binding' => 'wire:model',
    'class' => '',
    'fieldClasses' => '',
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

    <div {{ $attributes->merge(['class' => config('dsg.forms.radio.field') . ' ' . $fieldClasses]) }}>
        @foreach($fields as $field)
            <x-dsg-radio
                id="{{ ($field['id'] ?? false) ?: $name . ($field['value'] ?? '') }}"
                label="{{ ($field['label'] ?? '') }}"
                value="{{ ($field['value'] ?? '') }}"
                name="{{ $name }}"
                binding="{{ $binding }}"
                :required="$required"
            />
        @endforeach
    </div>
</x-dsg-field>
