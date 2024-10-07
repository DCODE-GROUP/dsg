@props([
    'type' => 'text',
    'name' => '',
    'id' => '',
    'placeholder' => '',
    'disabled' => false,
    'required' => false,
    'readonly' => false,
    'hidden' => false,
    'model' => '',
    'preventSubmitWithEnter' => true,
    'extraClasses' => ['forms_input_default' => 'pl-8'],
])

<div class="relative group">
    <x-dsg-input
            :type="$type"
            :name="$name"
            :id="$id ?: $name"
            :placeholder="$placeholder"
            :disabled="$disabled"
            :required="$required"
            :model="$model"
            :prevent-submit-with-enter="$preventSubmitWithEnter"
            :extra-classes="$extraClasses"
            {{ $attributes }}
    />

    <x-heroicon-s-magnifying-glass class="{{ dsgClasses('forms.search', $extraClasses) }}" />
</div>


