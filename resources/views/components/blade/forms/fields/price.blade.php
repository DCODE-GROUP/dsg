@props([
    'name' => '',
    'errors' => '',
    'showErrors' => true,
    'required' => true,
    'disabled' => false,
    'readonly' => false,
    'label' => '',
    'help' => '',
    'type' => 'text',
    'placeholder' => '',
    'class' => '',
])

<x-dsg-field
        name="{{ $name }}"
        :errors="$errors"
        :show-errors="$showErrors"
        :required="$required"
        class="{{ $class }}"
>
    <x-slot name="label">{{ $label }}</x-slot>

    <div class="relative mt-2 rounded-md shadow-sm">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <span class="text-gray-500 sm:text-sm">$</span>
        </div>

        <x-dsg-input
                class="pl-7 pr-12"
                type="{{ $type }}"
                name="{{ $name }}"
                placeholder="{{ $placeholder }}"
                :required="$required"
                :disabled="$disabled"
                :readonly="$readonly"
        />

        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
            <span class="text-gray-500 sm:text-sm" id="price-currency">AUD</span>
        </div>
    </div>

    <x-slot name="help">{{ $help }}</x-slot>
</x-dsg-field>
