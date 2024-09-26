<template>
  <div class="relative group">
    <dsg-input :type="type"
           :name="name"
           :id="id ? id : name"
           :placeholder="placeholder"
           :disabled="disabled"
           :required="required"
           :readonly="readonly"
           :hidden="hidden"
           :extraClasses="extraClasses"
           :modelValue="modelValue"
           :value="modelValue" @input="$emit('update:modelValue', $event.target.value)"
           class="pl-8"
    />

    <span :class="dsgClasses('forms.search')">
      <slot name="icon"></slot>
    </span>
</div>

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
  readonly: {
    type: Boolean,
    default: false,
  },
  hidden: {
    type: Boolean,
    default: false,
  },
  extraClasses: Object,
  modelValue: {
    type: String,
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
