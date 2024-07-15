@props([
    'title' => '',
    'extraClasses' => '',
])

<span {{ $attributes->merge(['class' => config('dsg.tag') . ' ' . $extraClasses])}}>
    {!! $title !!}
</span>
