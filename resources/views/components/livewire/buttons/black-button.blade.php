@props([
    'type' => 'button',
    'href' => '',
])

@if ($type === 'link')
    <a {{ $attributes->only('class')->merge(['class' => config('dsg.buttons.black')]) }} href="{{ $href }}"  wire:navigate>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->only('class')->merge(['class' => config('dsg.buttons.black')]) }} type="{{ $type }}">
        {{ $slot }}
    </button>
@endif
