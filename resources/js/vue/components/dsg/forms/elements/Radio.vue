<template>
  <div :class="dsgClasses('forms.radio.wrapper', extraClasses)">
    <input type="radio"
           :name="name"
           :id="id ? id : (name + value)"
           :required="required"
           :class="inputClasses"
           :value="value" @input="$emit('update:modelValue', $event.target.value)"
    >
    <label v-if="slots.default" :class="dsgClasses('forms.radio.label', extraClasses)"
           :for="id ? id : (name + value)"
    >
      <slot />
    </label>
  </div>
</template>

<script setup>
import { inject, ref, useSlots, watch } from "vue";
const dsgClasses = inject("dsgClasses");

const props = defineProps({
  name: {
    type: String,
    default: null,
  },
  value: {
    type: String,
    default: null,
  },
  id: {
    type: String,
    default: null,
  },
  size: {
    type: String,
    default: "sm",
    validator(value) {
      return ["sm", "md"].includes(value);
    },
  },
  required: {
    type: Boolean,
    default: false,
  },
  extraClasses: Object,
  modelValue: {
    required: true
  },
});

const slots = useSlots();

const inputClasses = ref("");
inputClasses.value = getInputClasses();

watch(props, () => {
  inputClasses.value = getInputClasses();
});

function getInputClasses() {
  return dsgClasses(
    [
      "forms.radio.input.default",
      "forms.radio.input.sizes." + props.size,
    ],
    props.extraClasses,
  );
}
</script>
