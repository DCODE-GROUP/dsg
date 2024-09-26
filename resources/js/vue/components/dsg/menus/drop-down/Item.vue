<template>
  <a :href="href"
     :class="dsgClasses('drop_down.menu.item', extraClasses)"
  >
    <slot name="icon"></slot>
    <span class="flex-1">
      <slot></slot>
    </span>
  </a>
</template>

<script setup>
import { inject } from "vue";

const dsgClasses = inject("dsgClasses");

const props = defineProps({
  href: {
    type: String,
    default: null
  },
  extraClasses: Object,
});
</script>
