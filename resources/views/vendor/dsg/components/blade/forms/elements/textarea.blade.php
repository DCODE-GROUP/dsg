@props([
    'name' => '',
    'id' => '',
    'placeholder' => '',
    'rows' => 5,
    'disabled' => false,
    'required' => false,
    'hidden' => false,
    'binding' => 'wire:model',
    'model' => '',
    'extraClasses' => '',
    'dynamicHeight' => false,
])

<textarea name="{{ $name }}"
          @if($id ?: $name) id="{{ $id ?: $name }}" @endif
          rows="{{ $rows }}"
          placeholder="{{ $placeholder }}"
          {{ $binding }}="{{ $name }}"
          :wired="true"
          {{ $attributes->merge([
            'class' => dsgClasses(['forms.input.default', 'forms.input.textarea', 'forms.input.readonly.' . ($readonly ? 'on' : 'off')], $extraClasses)
          ])}}
          @if(!empty($model)) x-model="{{ $model }}" @endif
          @if($disabled) disabled @endif
          @if($required) required @endif
          @if($dynamicHeight)
              x-on:keyup="$el.style.height = '1px',$el.style.height = ($el.scrollHeight + 5)+'px',$el.scrollIntoView()"
          @endif
></textarea>
