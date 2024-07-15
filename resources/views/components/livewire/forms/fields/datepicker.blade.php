@props([
    'name' => '',
    'errors' => '',
    'showErrors' => true,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'label' => '',
    'help' => '',
    'class' => '',
    'placeholder' => '',
    'labelRight' => false,
    'minDate' => '',
])

<x-dsg-field
        name="{{ $name }}"
        :errors="$errors"
        :show-errors="$showErrors"
        :required="$required"
        class="{{ $class }}"
        :label-right="$labelRight"
>
    <x-slot name="label">{{ $label }}</x-slot>

    <div class="relative">
        <x-dsg-datepicker name="{{  $name }}"
                          min-date="{{ $minDate }}"
                          class="pr-10"
                          :required="$required"
                          wire:model.live="{{ $name }}"
                          placeholder="{{ $placeholder }}"
        />

        <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
            <x-heroicon-s-calendar class="w-4 h-4 text-gray-400" />
        </div>
    </div>

    <x-slot name="help">{{ $help }}</x-slot>
</x-dsg-field>
