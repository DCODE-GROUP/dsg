@props([
    'errors' => '',
    'name',
    'extraClasses' => [],
])

@if($errors)
    @error($name)
        <span class="{{ dsgClasses('forms.error', $extraClasses) }}">{{ $message }}</span>
    @enderror
@endif
