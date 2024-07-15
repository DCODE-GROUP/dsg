@props([
    'name' => '',
    'errors' => '',
    'showErrors' => true,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'hidden' => true,
    'label' => '',
    'help' => '',
    'placeholder' => '',
    'binding' => 'wire:model',
    'class' => '',
    'labelClasses' => '',
])

<x-dsg-field
    :errors="$errors"
    :show-errors="$showErrors"
    :required="$required"
    class="{{ $class }}"
    help="{{ $help }}"
>
    <x-slot name="label">{{ $label }}</x-slot>

    <label for="{{ $name }}" class="inline-block">
        <div {{ $attributes->merge(['class' => config('dsg.forms.file.default') . ' ' .
                                               (empty($preview) ? config('dsg.forms.file.preview.off') : config('dsg.forms.file.preview.on')) . ' ' .
                                               $labelClasses
                                   ])
             }}
        >
            @if(($preview ?? false) && $preview->isNotEmpty())
                {{ $preview }}
            @else
                <x-heroicon-s-building-office class="w-8 h-8 fill-slate-200 group-hover:fill-slate-300"/>
            @endif
        </div>
    </label>

    <x-dsg-input
        type="file"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        :required="$required"
        :disabled="$disabled"
        :readonly="$readonly"
        :hidden="$hidden"
        binding="{{ $binding }}"
    />
</x-dsg-field>
