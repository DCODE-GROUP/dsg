@props([
    'name' => '',
    'model' => '',
    'placeholder' => '',
    'options' => [],
    'value' => null,
    'eventListener' => 'change-select',
    'extraClasses' => [],
])

<select name="{{ $name }}"
        @if($model) x-model="{{ $model }}" @endif
        x-on:change="$dispatch('{{ $eventListener }}', {tab: $event.target.value})"
        {{ $attributes->merge(['class' => dsgClasses(['forms.input.default'], $extraClasses)]) }}
>
    @if ($placeholder)
        <option value="">{{ $placeholder }}</option>
    @endif


    @foreach($options as $option)
        <option value="{{ $option['value'] }}" @if($option['selected'] ?? false) selected @endif>
            {{ $option['label'] }}
        </option>
    @endforeach
</select>
