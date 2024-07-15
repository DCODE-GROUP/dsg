@props([
    'type' => 'link',
    'href' => '',
    'disabled' => false,
    'extraClasses' => '',
    'target' => '',
    'wireNavigate' => true,
])

@if ($type === 'link')
    <a
        @if($href)
            href="{!! $href !!}"
            @if($wireNavigate) wire:navigate @endif
            @if($target) target="{{ $target }}" @endif
        @endif
        {{ $attributes->merge(['class' => config('dsg.buttons.link-tertiary.default') . ' ' .
                                                  config('dsg.buttons.link-tertiary.disabled.' . ($disabled ? 'on' : 'off')) . ' ' .
                                                  $extraClasses
                              ])
        }}
    >
        {!! $slot !!}
    </a>
@else
    <button
        type="button"
        {{ $attributes->merge(['class' => config('dsg.buttons.link-tertiary.default') . ' ' .
                                                  config('dsg.buttons.link-tertiary.disabled.' . ($disabled ? 'on' : 'off')) . ' ' .
                                                  $extraClasses
                              ])
        }}
    >
        {!! $slot !!}
    </button>
@endif
