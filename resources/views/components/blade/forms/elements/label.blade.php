@props([
    'name',
])

<label {{ $attributes->merge(['class' => config('dsg.forms.label')]) }} for="{{ $name }}">
    {!! $slot !!}
</label>
