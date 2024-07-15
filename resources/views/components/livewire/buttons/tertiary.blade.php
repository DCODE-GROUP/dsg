@props([
    'type' => 'button',
    'href' => '',
    'disabled' => false,
    'extraClasses' => '',
    'target' => '',
    'wireNavigate' => true,
])

@if ($type === 'link')
    <a
        href="{!! $href !!}"
        {{ $attributes->merge(['class' => config('dsg.buttons.default') . ' ' .
                                          config('dsg.buttons.tertiary.disabled.' . ($disabled ? 'on' : 'off')) . ' ' .
                                          $extraClasses
                              ])
        }}
        @if($wireNavigate) wire:navigate @endif
        @if($target) target="{{ $target }}" @endif
    >
        {!! $slot !!}
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->merge(['class' => config('dsg.buttons.default') . ' ' .
                                          config('dsg.buttons.tertiary.disabled.' . ($disabled ? 'on' : 'off')) . ' ' .
                                          $extraClasses
                              ])
        }}
    >
        {!! $slot !!}
    </button>
@endif
