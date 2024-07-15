@props([
    'errors' => '',
    'name' => '',
    'options' => [],
    'placeholder' => '',
    'disabled' => false,
    'readonly' => false,
    'binding' => 'wire:model',
    'extraClasses' => '',
    'value' => null,
])

<select name="{{ $name }}"
        :wired="true"
        @if($disabled) disabled @endif
        {{ $attributes->merge(['class' => config('dsg.forms.input.default') . ' ' . config('dsg.forms.input.readonly.' . ($readonly ? 'on' : 'off')) . ' ' . $extraClasses]) }}
        {{ $binding }}="{{ $name }}"
>
    @if ($placeholder)
        <option value="">{{ $placeholder }}</option>
    @endif


    @foreach($options as $option)
        <option wire:key="{{ $option->get('key') }}"
                value="{{ $option->get('value') }}"
                @if($option->get('disabled')) disabled @endif
                @if($option->get('selected')) selected @endif
        >
            {{ $option->get('label') }}
        </option>
    @endforeach
</select>
