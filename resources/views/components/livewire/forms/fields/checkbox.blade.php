@props([
    'name' => '',
    'value' => '',
    'label' => '',
    'fields' => [],
    'help' => '',
    'errors' => '',
    'showErrors' => true,
    'required' => false,
    'binding' => 'wire:model',
    'class' => '',
    'extraClasses' => '',
    'spacing' => 'mt-1 mb-4',
])

<x-dsg-field
    name="{{ $name }}"
    :errors="$errors"
    :show-errors="$showErrors"
    :required="$required"
    spacing="{{ $spacing }}"
    class="{{ $class }}"
    help="{{ $help }}"
>
    <x-slot name="label">{{ $label }}</x-slot>

    <div class="flex grid gap-y-4 {{ $extraClasses }}">
        @foreach($fields as $field)
            <div @isset($field['key']) wire:key="{{ $field['key'] }}" @endif
                 class="flex items-center"
            >
                <x-dsg-checkbox
                    id="{{ $field['key'] ?? $field['name'] ?? $name }}"
                    name="{{ $field['name'] ?? $name }}"
                    value="{{ $field['value'] ?? '' }}"
                    :readonly="$field['readonly'] ?? false"
                    extra-classes="{{ $field['extraClasses'] ?? '' }}"
                    :required="$required"
                    binding="{{ $binding }}"
                    value="{{ $field['value'] ?? '' }}"
                />
                <label for="{{ $field['key'] ?? $field['name'] ?? $name }}"
                       {{ $attributes->merge([
                            'class' => config('dsg.forms.checkbox.label.default') . ' ' . config('dsg.forms.checkbox.label.readonly.' . (($field['readonly'] ?? false) ? 'on' : 'off'))
                       ])}}
                >{{ $field['label'] }}@if ($field['required'] ?? false) *@endif</label>
            </div>
        @endforeach
    </div>
    <x-slot name="help">{{ $help }}</x-slot>
</x-dsg-field>
