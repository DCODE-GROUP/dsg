<template>
  <div :class="getFrameClasses">
    <dsg-label v-if="slots.label" :name="name" :class="{'sm:pt-2': labelRight}" :extra-classes="extraClasses">
      <slot name="label"></slot><template v-if="required">*</template>
    </dsg-label>

    <div :class="dsgClasses('fields.spacings', extraClasses)">
      <slot></slot>

      <dsg-form-error v-if="showErrors && form && form.hasError(errorKey ?? name)" :extra-classes="extraClasses">
        <span v-html="getErrors()"></span>
      </dsg-form-error>

      <dsg-help-text v-if="slots.help" :extra-classes="extraClasses">
        <slot name="help"></slot>
      </dsg-help-text>
    </div>
  </div>
</template>

<script setup>
import { inject, useSlots } from "vue";
const dsgClasses = inject("dsgClasses");

const props = defineProps({
  form: Object,
  name: {
    type: String,
    default: "",
  },
  required: {
    type: Boolean,
    default: false,
  },
  labelRight: {
    type: Boolean,
    default: false,
  },
  showErrors: {
    type: Boolean,
    default: true,
  },
  errorKey: {
    type: String,
    default: null,
  },
  extraClasses: Object,
});

const slots = useSlots();

function getFrameClasses() {
  return props.labelRight ? dsgClasses('fields.label_right_frame', props.extraClasses) : '';
}

function getErrors() {
  const errors = props.form.errors.get(props.errorKey ?? props.name);

  if (errors.constructor === Array) {
    return errors.join('<br>');
  }

  return errors;
}
</script>
