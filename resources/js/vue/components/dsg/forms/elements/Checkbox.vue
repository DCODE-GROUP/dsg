<template>
  <input type="checkbox"
         :name="name"
         :id="id ? id : name"
         :required="required"
         :disabled="disabled"
         :class="classes"
         :checked="modelValue" @input="$emit('update:modelValue', $event.target.checked)"
         :style="{'background-image':`url(${bgImage})`}"
  />
</template>

<script setup>
import { inject, ref, watch, computed } from "vue";
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
  disabled: {
    type: Boolean,
    default: false,
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

const bgImage = computed(() => {
  return `"data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23${props.disabled ? 'cbd5e1' : 'ffffff'}' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e"`;
})

const classes = ref("");
classes.value = getClasses();

watch(props, () => {
  classes.value = getClasses();
});
function getClasses() {
  return dsgClasses(
    [
      "forms.checkbox.input.default",
      "forms.checkbox.input.readonly." + (props.disabled ? "on" : "off"),
    ],
    props.extraClasses,
  );
}
</script>
