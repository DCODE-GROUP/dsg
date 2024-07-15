@props([
    'items' => [],
    'eventListener' => 'toggle-sidebar',
])
<div class="md:min-w-[16.5rem] md:max-w-[16.5rem] absolute md:relative bg-white h-full w-full top-0 left-0 md:left-0 z-10 transition-all"
     x-data="{ mobileOpen: false }"
     x-init="
        document.addEventListener('{{ $eventListener }}', event => {
            mobileOpen = !mobileOpen;
        });
     "
     x-bind:class="{ 'left-full': !mobileOpen }"
     x-cloak
>
    <nav class="{{ config('dsg.sidebar.wrapper') }}" aria-label="Sidebar">
        @foreach($items as $item)
            <a href="{{ $item['url'] }}" wire:navigate
               {{ $attributes->merge(['class' => config('dsg.sidebar.item.default') . ' ' .
                                                 config('dsg.sidebar.item.active.' . (($item['active'] && empty($item['children'])) ? 'on' : 'off'))
                                    ])
               }}
            >
                @svg('heroicon-o-'. $item['icon'], 'w-4 h-4')
                <span class="flex-1">{{ $item['label'] }}</span>
            </a>

            @if($item['children'])
                <ul class="ml-8">
                    @foreach($item['children'] as $childItem)
                        <li>
                            <a href="{{ $childItem['url'] }}" wire:navigate
                               {{ $attributes->merge(['class' => config('dsg.sidebar.item.child.default') . ' ' .
                                                                 config('dsg.sidebar.item.child.active.' . (($item['active'] && !empty($item['children'])) ? 'on' : 'off'))
                                                     ])
                               }}
                            >
                                @svg('heroicon-o-'. $childItem['icon'], 'w-4 h-4')
                                <span class="flex-1">{{ $childItem['label'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        @endforeach
    </nav>
</div>
