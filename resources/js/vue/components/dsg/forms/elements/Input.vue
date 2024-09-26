<template>
  <input :type="type"
         :name="name"
         :id="id ? id : name"
         :placeholder="placeholder"
         :disabled="disabled"
         :required="required"
         :hidden="hidden"
         :class="classes"
         :value="modelValue" @input="$emit('update:modelValue', $event.target.value)"
  />
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
  id: {
    type: String,
    default: null,
  },
  placeholder: {
    type: String,
    default: null,
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
  extraClasses: Object,
  modelValue: {
    required: true
  },
});

const classes = ref("");
classes.value = getClasses();

watch(props, () => {
  classes.value = getClasses();
});
function getClasses() {
  return dsgClasses(
    [
      "forms.input.default",
      "forms.input.readonly." + (props.disabled ? "on" : "off"),
    ],
    props.extraClasses,
  );
}
</script>
