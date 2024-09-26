@props([
    'extraClasses' => [],
])

<div class="{{ dsgClasses('forms.help', $extraClasses) }}">
    {{ $slot }}
</div>
