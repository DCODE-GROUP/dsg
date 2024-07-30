@props([
    'title' => '',
    'extraClasses' => '',
])

<span {{ $attributes->merge(['class' => config('dsg.tag') . ' default.blade.php' . $extraClasses])}}>
    {!! $title !!}
</span>
