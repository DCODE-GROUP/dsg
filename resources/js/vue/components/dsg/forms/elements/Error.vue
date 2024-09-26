<template>
  <div :class="dsgClasses('forms.error', extraClasses)">
    <slot></slot>
  </div>
</template>

<script setup>
import { inject } from "vue";
const dsgClasses = inject("dsgClasses");

const props = defineProps({
  extraClasses: Object,
});
</script>
