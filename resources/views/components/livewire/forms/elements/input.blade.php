@props([
    'type' => 'text',
    'name' => '',
    'id' => '',
    'mask' => '',
    'placeholder' => '',
    'disabled' => false,
    'required' => false,
    'readonly' => false,
    'hidden' => false,
    'binding' => 'wire:model',
    'model' => '',
    'preventSubmitWithEnter' => false,
    'extraClasses' => '',
])

<input type="{{ $type }}"
       name="{{ $name }}"
       @if($id ?: $name) id="{{ $id ?: $name }}" @endif
       @if($mask)x-mask="{{ $mask }}"@endif
       placeholder="{{ $placeholder }}"
       @if($name) {{ $binding }}="{{ $name }}" @endif
       @if(!empty($model)) x-model="{{ $model }}" @endif
       @if($disabled) disabled @endif
       @if($required) required @endif
       @if($readonly) readonly @endif
       @if($hidden) hidden @endif
       @if($preventSubmitWithEnter) onkeydown="return !(window.event && window.event.keyCode == 13)" @endif
       {{ $attributes->merge([
            'class' => config('dsg.forms.input.default') . ' ' . config('dsg.forms.input.readonly.' . ($readonly ? 'on' : 'off')) . ' ' . $extraClasses
       ])}}
/>
