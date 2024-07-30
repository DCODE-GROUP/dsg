@props([
    'name' => '',
    'id' => '',
    'placeholder' => '',
    'disabled' => false,
    'required' => false,
    'readonly' => false,
    'hidden' => false,
    'binding' => 'wire:model',
    'model' => '',
    'preventSubmitWithEnter' => true,
    'extraClasses' => '',
])

<div class="relative group">
    <x-dsg-input
        name="{{ $name }}"
        id="{{ $id ?: $name }}"
        placeholder="{{ $placeholder }}"
        :required="$required"
        :disabled="$disabled"
        :readonly="$readonly"
        binding="{{ $binding }}"
        model="{{ $model }}"
        :prevent-submit-with-enter="$preventSubmitWithEnter"
        extra-classes="pl-8 {{ $extraClasses }}"
    />

    <x-heroicon-s-magnifying-glass
        {{ $attributes->merge(['class' => config('dsg.forms.search')]) }}
    />
</div>


