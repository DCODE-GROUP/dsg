@props([
    'colour' => 'gray',
])

<span {{ $attributes->merge(['class' => config('dsg.badges.base') . ' ' . config("dsg.badges.levels.$colour")]) }}>
    {{ $slot }}
</span>
