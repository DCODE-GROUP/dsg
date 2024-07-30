@props([
    'icon' => 'heroicon-o-document-text',
    'iconClasses' => 'heroicon-o-document-text',
    'title' => '',
    'size' => '',
    'deleteMethod' => 'deleteMedia',
    'extraClasses' => ''
])

<div class="{{ config('dsg.forms.upload-item.wrapper') . ' ' . $extraClasses }}">
    {{ svg($icon, 'w-5 h-5 '. $iconClasses) }}

    <div class="flex-1">
        <div class="{{ config('dsg.forms.upload-item.title') }}">{{ $title }}</div>
        <div class="{{ config('dsg.forms.upload-item.size') }}">{{ $size }}</div>
    </div>

    <div class="relative">
        <x-dsg-tertiary-button wire:click="{{ $deleteMethod }}"
                               extraClasses="{{ config('dsg.forms.upload-item.delete_button') }}"
        >
            <x-heroicon-o-trash class="{{ config('dsg.forms.upload-item.delete_icon') }}" />
        </x-dsg-tertiary-button>
    </div>
</div>
