<template>
  <dsg-field :name="name"
             :form="form"
             :show-errors="showErrors"
             :required="required"
             :extra-classes="extraClasses"
             :help="help"
             :error-key="errorKey"
  >
    <template v-slot:label>
      {{ label }}
    </template>

    <template v-slot:help>
      {{ help }}
    </template>

    <div class="relative">
      <dsg-textarea :name="name"
                    :placeholder="placeholder"
                    :disabled="disabled"
                    :required="required"
                    :hidden="hidden"
                    :extra-classes="getExtraInputClasses()"
                    :dynamic-height="dynamicHeight"
                    :model-value="form[name]"
                    :value="form[name]" @input="form[name] = $event.target.value"
      />

      <alert-circle v-if="form && form.hasError(errorKey ?? name)" :class="dsgClasses('fields.textarea_icon')" class="w-4 h-4 text-error-500" />
    </div>
  </dsg-field>
</template>

<script setup>
import AlertCircle from "@svg/alert-circle.svg";
import { inject } from "vue";
const dsgClasses = inject("dsgClasses");

const props = defineProps({
  name: {
    type: String,
    default: null,
  },
  rows: {
    type: Number,
    default: 5,
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
  prefix: {
    type: String,
    default: null,
  },
  suffix: {
    type: String,
    default: null,
  },
  errorKey: {
    type: String,
    default: null,
  },
  dynamicHeight: {
    type: Boolean,
    default: false,
  },
  extraClasses: Object,
});

function getExtraInputClasses() {
  return (props.form && props.form.hasError(props.errorKey ?? props.name)) ? {...{ forms_input_default: '!border-error-300 pr-9' }, ...props.extraClasses} : props.extraClasses;
}
</script>
