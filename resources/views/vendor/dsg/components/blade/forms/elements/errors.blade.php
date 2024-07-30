@props([
    'errors' => '',
    'name',
])

@if($errors)
    @error($name)
        <span class="{{ config('dsg.forms.error') }}">{{ $message }}</span>
    @enderror
@endif
