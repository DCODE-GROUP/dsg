@props([
    'id' => '',
    'name' => '',
    'icon' => 'heroicon-o-document-arrow-up',
    'binding' => 'wire:model',
    'uploadText' => 'Click to upload',
    'dragDropText' => 'or drag and drop',
    'extraMessage' => '',
    'type' => 'full-width',
    'extraClasses' => '',
])
@php
    // Validation
    $type = $type === 'card' ? 'card' : 'full-width';
@endphp

<div class="{{ config('dsg.forms.uploader.wrapper') . ' ' . $extraClasses }}">
    <div class="{{ config('dsg.forms.uploader.icon_wrapper') }}">
        @svg($icon, 'w-5 h-5')
    </div>

    <div class="text-sm">
        <x-dsg-link type="button"
                    @click="$refs['{{ $id ?: $name }}'].click()"
        >
            <span>{!! $uploadText !!}</span>
        </x-dsg-link>
        @if($type === 'card')<br>@endif
        <span class="{{ config('dsg.forms.uploader.drag_drop_text') }}">
            {!! $dragDropText !!}
        </span>
        <input type="file"
               id="{{ $id ?: $name }}"
               x-ref="{{ $id ?: $name }}"
               class="sr-only"
               @if($name) {{ $binding }}="{{ $name }}" @endif
               multiple
        >
    </div>

    @if($extraMessage)
        <p class="{{ config('dsg.forms.uploader.extra_message') }}">
            {!! $extraMessage !!}
        </p>
    @endif
</div>
