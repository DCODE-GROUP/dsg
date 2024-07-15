@props([
    'name' => '',
    'placeholder' => '',
    'rows' => 5,
    'disabled' => false,
    'required' => false,
    'readonly' => false,
    'hidden' => false,
    'binding' => 'wire:model',
    'model' => '',
    'extraClasses' => 'min-h-24 max-h-[calc(100vh-14rem)]',
    'dynamicHeight' => false,
])

<textarea name="{{ $name }}"
       id="{{ $name }}"
       rows="{{ $rows }}"
       placeholder="{{ $placeholder }}"
       {{ $binding }}="{{ $name }}"
       :wired="true"
       {{ $attributes->merge([
            'class' => config('dsg.forms.input.default') . ' ' . config('dsg.forms.input.readonly.' . ($readonly ? 'on' : 'off')) . ' ' . $extraClasses
       ])}}
       @if(!empty($model)) x-model="{{ $model }}" @endif
       @if($disabled) disabled @endif
       @if($required) required @endif
       @if($readonly) readonly @endif
       @if($dynamicHeight)
           x-on:keyup="$el.style.height = '1px',$el.style.height = ($el.scrollHeight + 5)+'px',$el.scrollIntoView()"
       @endif
></textarea>
