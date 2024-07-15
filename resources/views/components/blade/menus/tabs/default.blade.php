@props([
    'tabs' => collect(),
    'direction' => '',
    'eventListener' => 'change-tab',
])
@php
    // Validation
    $direction = $direction === 'vertical' ? 'vertical' : 'horizontal';
@endphp

<div x-data="{ openedPage: '{{ $tabs->keys()->first() }}' }"
     x-init="
        document.addEventListener('{{ $eventListener }}', event => {
            if (event.detail.tab !== undefined) {
                openedPage =  event.detail.tab;
            }
        });
     "
>
    <div class="@if($direction === 'horizontal') inline-block @endif">
        <div class="{{ config('dsg.tab.frame.default') . ' ' . config('dsg.tab.frame.' . $direction) }} }}">
            <nav class="{{ config('dsg.tab.wrapper.default') . ' ' . config('dsg.tab.wrapper.' . $direction) }}" aria-label="Tabs">
                @foreach($tabs as $key => $tab)
                    <a @if($tab['href'] ?? false)
                           href="{{ $tab['href'] }}" wire:navigate
                           {{ $attributes->merge(['class' => config('dsg.tab.item.default') . ' ' .
                                                             config('dsg.tab.item.active.' . (($tab['active'] ?? false) ? 'on' : 'off') . '.' . $direction) . ' ' .
                                                             config('dsg.tab.item.disabled.' . (($tab['disabled'] ?? false) ? 'on' : 'off'))
                                                 ])
                            }}
                       @else
                           @click="$dispatch('tab-changed', {tab: '{{ $key }}'})"
                           x-on:click="openedPage = '{{ $key }}'"
                           x-bind:class="{ '{{ config('dsg.tab.item.active.on' . '.' . $direction) }}' : openedPage == '{{ $key }}',
                                           '{{ config('dsg.tab.item.active.off' . '.' . $direction) }}' : openedPage != '{{ $key }}'
                                         }"
                           class="{{ config('dsg.tab.item.default') . ' ' .
                                     config('dsg.tab.item.active.' . $direction) . ' ' .
                                     config('dsg.tab.item.disabled.' . (($tab['active'] ?? false) ? 'on' : 'off'))
                                   }}"
                       @endif
                       @if($tab['active'] ?? $loop->first) aria-current="page" @endif
                    >{{ $tab['name'] }}</a>
                @endforeach
            </nav>
        </div>
    </div>

    @if($slot->isNotEmpty())
        <div class="mt-6">
            {{ $slot }}
        </div>
    @endif
</div>
