@props([
    'size' => '',
    'tabs' => [],
    'eventListener' => 'change-tab',
    'extraClasses' => [],
])

@php
    $mobileTabs = [];

    // Validation with fallback values
    $size = in_array($size, ['sm','md']) ? $size : 'sm';
@endphp

<div x-data="{ openedPage: '{{ array_key_first($tabs) }}', tabs: {{ json_encode($tabs) }} }"
     x-init="
        document.addEventListener('{{ $eventListener }}', event => {
            const tab = tabs[event.detail.tab];
            if (tab !== undefined && tab.href !== undefined && tab.href) {
                window.location.href = tab.href;
                return;
            }

            if (event.detail.tab !== undefined) {
                openedPage =  event.detail.tab;
            }
        });
     "
>
    <div class="{{ dsgClasses(['tabs.frame.desktop', 'tabs.frame.horizontal'], $extraClasses) }}">
        <nav class="{{ dsgClasses(['tabs.wrapper.default', 'tabs.wrapper.horizontal'], $extraClasses) }}" aria-label="Tabs">
            @foreach($tabs as $key => $tab)
                @php
                    $mobileTabs[$key] = [
                        'label' => $tab['name'],
                        'value' => $key,
                        'selected' => $tab['active'] ?? false,
                    ];

                    $tabClasses = dsgClasses([
                        'tabs.item.default',
                        'tabs.item.active.' . (($tab['active'] ?? false) ? 'on' : 'off'). '.horizontal',
                        'tabs.item.disabled.' . (($tab['disabled'] ?? false) ? 'on' : 'off'),
                        'tabs.item.sizes.'. $size,
                    ], $extraClasses);
                @endphp

                <a @if($tab['href'] ?? false)
                       href="{{ $tab['href'] }}"
                       class="{{ $tabClasses }}"
                   @else
                       x-on:click="openedPage = '{{ $key }}'; $dispatch('{{ $eventListener }}', {tab: '{{ $key }}'})"
                       x-bind:class="{ '{{ dsgClasses('tabs.item.active.on.horizontal', $extraClasses) }}' : openedPage == '{{ $key }}',
                                           '{{ dsgClasses('tabs.item.active.off.horizontal', $extraClasses) }}' : openedPage != '{{ $key }}'
                                         }"
                       class="{{ $tabClasses }}"
                   @endif
                   @if($tab['active'] ?? $loop->first) aria-current="page" @endif
                >
                    {{ $tab['name'] }}
                    @isset($tab['badge']) <x-dsg-badge {{ $attributes->merge($tab['badge']) }}>{{ $tab['badge']['text'] }}</x-dsg-badge> @endisset
                </a>
            @endforeach
        </nav>
    </div>
    <div class="{{ dsgClasses(['tabs.frame.mobile'], $extraClasses)  }}">
        <x-dsg-select name="openedPage" :options="$mobileTabs" :event-listener="$eventListener"></x-dsg-select>
    </div>

    @if($slot->isNotEmpty())
        <div class="mt-6">
            {{ $slot }}
        </div>
    @endif
</div>

