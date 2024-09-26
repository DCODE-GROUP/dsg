@props([
    'type' => 'text',
    'name' => '',
    'errors' => '',
    'placeholder' => '',
    'showErrors' => true,
    'required' => false,
    'disabled' => false,
    'hidden' => false,
    'label' => '',
    'help' => '',
    'hint' => '',
    'prefix' => '',
    'suffix' => '',
    'binding' => 'wire:model',
    'class' => '',
    'mask' => '',
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

    @if($type === 'price')
        <div x-data="{ {{ $name }}: @entangle($name) }" class="relative flex">
            <span class="border border-r-0 border-slate-300 rounded-l-lg flex items-center px-2 bg-slate-50 min-w-9 justify-center">
                $
             </span>
            <input type="text"
                   class="{{ config('dsg.forms.input.default') }} !rounded-l-none"
                   x-model="{{ $name }}"
                   x-mask:dynamic="$money($input)"
                   name="{{ $name }}"
                   placeholder="{{ $placeholder }}"
                   :required="$required"
                   :disabled="$disabled"
                   :hidden="$hidden"
            >
        </div>
    @elseif($type === 'password')
        <div x-data="{ passwordVisible: false }" class="relative">
            <x-dsg-input
                x-bind:type="passwordVisible ? 'text' : 'password'"
                name="{{ $name }}"
                placeholder="{{ $placeholder }}"
                :required="$required"
                :disabled="$disabled"
                :readonly="$readonly"
                :hidden="$hidden"
                binding="{{ $binding }}"
            />

            @if($hint)
                <x-dsg-hint extraClasses="absolute right-3 top-1/2 -translate-y-1/2"
                            message="{{ $hint }}"
                />
            @else
                <button x-on:click="passwordVisible = !passwordVisible" type="button" class="absolute right-3 top-1/2 -translate-y-1/2">
                    <x-heroicon-o-eye x-show="passwordVisible" class="text-slate-400 hover:text-slate-500 w-4 h-4"/>
                    <x-heroicon-o-eye-slash x-show="!passwordVisible" class="text-slate-400 hover:text-slate-500 w-4 h-4"/>
                </button>
            @endif
        </div>
    @elseif($type === 'card')
        <div class="relative">
            <x-dsg-input
                type="number"
                name="{{ $name }}"
                placeholder="{{ $placeholder }}"
                :required="$required"
                :disabled="$disabled"
                :readonly="$readonly"
                :hidden="$hidden"
                binding="{{ $binding }}"
            />

            <x-heroicon-s-credit-card class="w-7 h-7 absolute right-3 top-1/2 -translate-y-1/2 text-neutral-200 bg-white"/>
        </div>
    @else
        <div class="relative flex">
            @if($prefix)
                <span class="border border-r-0 border-slate-300 rounded-l-lg flex items-center px-2 bg-slate-50 min-w-9 justify-center">
                    {!! $prefix !!}
                </span>
            @endif

            <x-dsg-input
                mask="{{ $mask }}"
                type="{{ $type }}"
                name="{{ $name }}"
                placeholder="{{ $placeholder }}"
                :required="$required"
                :disabled="$disabled"
                :readonly="$readonly"
                :hidden="$hidden"
                binding="{{ $binding }}"
                extraClasses="{{ $prefix ? '!rounded-l-none' : '' }} {{ $suffix ? '!rounded-r-none' : '' }}"
            />

            @if($suffix)
                <span class="border border-l-0 border-slate-300 rounded-r-lg flex items-center px-2 bg-slate-50 min-w-9 justify-center">
                    {!! $suffix !!}
                </span>
            @endif

            @if($hint)
                <x-dsg-hint extraClasses="absolute right-3 top-1/2 -translate-y-1/2"
                            message="{{ $hint }}"
                />
            @endif
        </div>
    @endif
</x-dsg-field>
