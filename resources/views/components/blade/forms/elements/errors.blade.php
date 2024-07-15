@props([
    'errors' => '',
    'name',
])

@error($name)
    <span class="{{ config('dsg.forms.error') }}">{{ $message }}</span>
@enderror
