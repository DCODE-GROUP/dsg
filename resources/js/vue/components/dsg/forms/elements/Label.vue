<template>
  <label :class="dsgClasses('forms.label', extraClasses)" :for="name">
    <slot></slot>
  </label>
</template>

<script setup>
import { inject } from "vue";
const dsgClasses = inject("dsgClasses");

const props = defineProps({
  name: {
    type: String,
    default: "",
  },
  extraClasses: Object,
});
</script>
