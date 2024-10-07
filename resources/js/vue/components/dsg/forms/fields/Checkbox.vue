<template>
  <dsg-field :name="name"
             :form="form"
             :show-errors="showErrors"
             :required="required"
             :extra-classes="extraClasses"
             :help="help"
             :error-key="errorKey"
  >
    <template v-slot:help>
      {{ help }}
    </template>

    <div :class="dsgClasses('forms.checkbox.wrapper', extraClasses)">
      <div :class="dsgClasses('forms.checkbox.input.field', extraClasses)">
        <dsg-checkbox
          :name="name"
          :required="required"
          :disabled="disabled"
          :extra-classes="extraClasses"
          :model-value="form[name]"
          :checked="form[name]" @input="form[name] = $event.target.checked"
        ></dsg-checkbox>
      </div>

      <dsg-label v-if="label" :name="name" :class="labelClasses" :extra-classes="extraClasses">
        <span v-html="label"></span><template v-if="required">*</template>
      </dsg-label>
    </div>
  </dsg-field>
</template>

<script setup>
import { inject, ref, watch } from "vue";

const dsgClasses = inject("dsgClasses");

const props = defineProps({
  type: {
    type: String,
    default: "text",
  },
  name: {
    type: String,
    default: null,
  },
  form: Object,
  placeholder: {
    type: String,
    default: null,
  },
  showErrors: {
    type: Boolean,
    default: true,
  },
  disabled: {
    type: Boolean,
    default: false,
  },
  required: {
    type: Boolean,
    default: false,
  },
  hidden: {
    type: Boolean,
    default: false,
  },
  label: {
    type: String,
    default: null,
  },
  help: {
    type: String,
    default: null,
  },
  errorKey: {
    type: String,
    default: null,
  },
  extraClasses: Object,
});

const labelClasses = ref("");
labelClasses.value = getLabelClasses();

watch(props, () => {
  labelClasses.value = getLabelClasses();
});
function getLabelClasses() {
  return dsgClasses(
    [
      "forms.checkbox.label.default",
      "forms.checkbox.label.readonly." + (props.disabled ? "on" : "off"),
    ],
    props.extraClasses,
  );
}
</script>
