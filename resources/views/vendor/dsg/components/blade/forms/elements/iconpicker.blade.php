@props([
    'name' => '',
    'id' => '',
    'disabled' => false,
    'icons' => collect(),
])

<div class="relative"
     x-cloak
     x-data="{ isOpen: false, pickedIcon: '', preview: '', search: '', icons: JSON.parse('{{ $icons->toJson() }}') }"
     x-init="
         $watch('search', value => (
             Object.keys(icons).forEach(function(key) {
                icons[key]=key.includes(value);
             }))
         );
         $watch('pickedIcon', value => (
             preview = $refs[value] ? $refs[value].outerHTML : '',
             $wire.$set('{{ $name }}', pickedIcon))
         );

         pickedIcon = $wire.$get('{{ $name }}');
    "
>
    <button type="button"
            class="{{ config('dsg.forms.iconpicker.opener') }}"
            x-on:click="isOpen = ! isOpen"
    >
        <x-heroicon-o-plus x-show="! pickedIcon" class="w-6 h-6" />
        @svg('heroicon-o-'. $icon->value, 'w-6 h-6')
        <span x-show="preview" x-html="preview"></span>
    </button>

    <div x-show="isOpen"
         x-on:click.away="isOpen = false"
         class="{{ config('dsg.forms.iconpicker.window') }}"
    >
        <x-dsg-search-field placeholder="{{ __('forms.placeholders.search_icon') }}"
                            wire:ignore
                            model="search"
        />

        <div class="{{ config('dsg.forms.iconpicker.list') }}">
            @foreach($icons as $key => $icon)
                <button type="button"
{{--                        @click="dispatch('icon-selected', {icon: {{ $icon }})"--}}
                        x-on:click="pickedIcon = '{{ $icon->value }}'; isOpen = false"
                >
                    @svg('heroicon-o-'. $icon->value, 'w-6 h-6')
                </button>
{{--                <button type="button"--}}
{{--                        x-show="icons['{{ $icon }}']"--}}
{{--                        x-on:click="pickedIcon = '{{ $icon }}'; isOpen = false"--}}
{{--                        class="{{ config('dsg.forms.iconpicker.icon') }}"--}}
{{--                >--}}
{{--                </button>--}}
            @endforeach
        </div>
    </div>

    <input type="hidden"
           name="{{ $name }}"
           id="{{ $id ?: $name }}"
           @if($name) wire:model.live="{{ $name }}" @endif
           x-model="pickedIcon"
    />
</div>
