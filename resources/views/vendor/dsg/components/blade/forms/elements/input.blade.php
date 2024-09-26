@props([
    'type' => 'text',
    'name' => '',
    'id' => '',
    'mask' => '',
    'placeholder' => '',
    'showErrors' => true,
    'disabled' => false,
    'required' => false,
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
       @if($hidden) hidden @endif
       @if($preventSubmitWithEnter) onkeydown="return !(window.event && window.event.keyCode == 13)" @endif
       {{ $attributes->merge([
            'class' => dsgClasses(['forms.input.default', 'forms.input.readonly.' . ($disabled ? 'on' : 'off')], $extraClasses)
       ])}}
/>
