<template>
  <textarea :name="name"
            :id="id ? id : name"
            :rows="rows"
            :placeholder="placeholder"
            :disabled="disabled"
            :required="required"
            :hidden="hidden"
            :class="classes"
            :value="modelValue" @input="$emit('update:modelValue', $event.target.value)"
            @keyup="setHeight"
  ></textarea>
</template>

<script setup>
import { inject, ref, watch } from "vue";
const dsgClasses = inject("dsgClasses");

const props = defineProps({
  name: {
    type: String,
    default: null,
  },
  id: {
    type: String,
    default: null,
  },
  rows: {
    type: Number,
    default: 5,
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
  dynamicHeight: {
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

function setHeight($el) {
  if (props.dynamicHeight) {
    $el.style.height = '1px';
    $el.style.height = ($el.scrollHeight + 5) + 'px';
    $el.scrollIntoView();
  }
}
</script>
