@props([
    'label' => '',
    'name' => '',
    'required' => true,
    'help' => '',
    'showErrors' => true,
    'errors' => '',
    'spacing' => 'mt-1 mb-4',
    'labelRight' => false,
])
<div {{ $attributes->class(['sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5' => $labelRight]) }}>
    @if ($label && $label->isNotEmpty())
        @if($labelRight)
            <x-dsg-label name="{{ $name }}" class="sm:pt-2">
                {{ $label }}@if ($required) *@endif
            </x-dsg-label>
        @else
            <x-dsg-label name="{{ $name }}">
                {{ $label }}@if ($required) *@endif
            </x-dsg-label>
        @endif
    @endif

    <div class="{{ $spacing }}">
        @if (!empty($help))
            <x-dsg-help-text>{{ $help }}</x-dsg-help-text>
        @endif

        @if ($showErrors)
            <x-dsg-form-error :name="$name" :errors="$errors" />
        @endif

        {{ $slot }}
    </div>
</div>
