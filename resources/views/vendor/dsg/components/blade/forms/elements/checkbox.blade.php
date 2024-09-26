@props([
    'id' => '',
    'name' => '',
    'required' => false,
    'readonly' => false,
    'extraClasses' => [],
])

<input type="checkbox"
       @if($id ?: $name) id="{{ $id ?: $name }}" @endif
       name="{{ $name }}"
       @if($required) required @endif
       @if($readonly) readonly @endif
       class="{{ dsgClasses(['forms.checkbox.input.default', 'forms.checkbox.input.readonly.'. ($readonly ? 'on' : 'off')], $extraClasses) }}"
/>

<style>
    #{{ $name }}:checked {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23{{ $readonly ? 'cbd5e1' : 'ffffff' }}' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
    }
</style>
