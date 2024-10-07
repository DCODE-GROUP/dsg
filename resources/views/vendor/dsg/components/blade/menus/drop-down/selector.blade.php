@props([
    'title' => '',
    'fields' => [],
    'extraClasses' => [],
])

{{-- TODO: NOT FINISHED!!! --}}

<div x-data="{isSectionOpen: true}" class="flex flex-col gap-3 py-4">
    <div class="flex justify-between items-center px-4">
        <span>{{ $title }}</span>
        <div>
            <x-dsg-button type="tertiary_gray" icon="minus" x-show="isSectionOpen" x-on:click="isSectionOpen = false" />
            <x-dsg-button type="tertiary_gray" icon="plus" x-show="!isSectionOpen" x-on:click="isSectionOpen = true" />
        </div>
    </div>

    <div x-show="isSectionOpen" class="px-4 flex flex-col gap-3">
        <x-dsg-search placeholder="Search" />

        @php
            $fields = [
                ['name' => 'test 1','label' => 'Test'],
                ['name' => 'test 2','label' => 'Test 2'],
                ['name' => 'test 3','label' => 'Test 3'],
            ];
        @endphp

        <div class="flex grid gap-y-3">
            @foreach($fields as $field)
                <div class="flex items-center">
                    <x-dsg-checkbox
                            :id="$field['key'] ?? $field['name'] ?? $name"
                            :name="$field['name'] ?? $name"
                            :value="$field['value'] ?? ''"
                            :readonly="$field['readonly'] ?? false"
                            :extra-classes="$field['extraClasses'] ?? $extraClasses ?? []"
                            value="{{ $field['value'] ?? '' }}"
                    />
                    <label for="{{ $field['key'] ?? $field['name'] ?? $name }}"
                            {{ $attributes->merge([
                                 'class' => dsgClasses(['forms.checkbox.label.default', 'forms.checkbox.label.readonly.' . (($field['readonly'] ?? false) ? 'on' : 'off')], $extraClasses),
                            ])}}
                    >{{ $field['label'] }}@if ($field['required'] ?? false) *@endif</label>
                </div>
            @endforeach
        </div>
    </div>
</div>
