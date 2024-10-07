@props([
    'label' => '',
    'name' => '',
    'required' => false,
    'help' => '',
    'showErrors' => true,
    'errors' => '',
    'labelRight' => false,
    'extraClasses' => [],
])
<div {{ $attributes->class([dsgClasses('fields.label_right_frame', $extraClasses) => $labelRight]) }}>
    @if ($label && $label->isNotEmpty())
        <x-dsg-label :name="$name" class="{{ $labelRight ? 'sm:pt-2' : '' }}">
            {{ $label }}@if ($required)*@endif
        </x-dsg-label>
    @endif

    <div class="{{ dsgClasses('forms.spacings', $extraClasses) }}">
        {{ $slot }}

        @if ($showErrors)
            <x-dsg-form-error :name="$name" :errors="$errors" />
        @endif

        @if (!empty($help))
            <x-dsg-help-text>{{ $help }}</x-dsg-help-text>
        @endif
    </div>
</div>
