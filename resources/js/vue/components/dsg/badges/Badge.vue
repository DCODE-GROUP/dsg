<template>
  <div :class="classes">
    <span v-if="dot" :class="dotClasses"></span>
    <slot></slot>
  </div>
</template>

<script setup>
import { ref, inject, watch } from "vue";
const dsgClasses = inject("dsgClasses");

const props = defineProps({
  type: {
    type: String,
    default: "pill_color",
    validator(value) {
      return ["pill_color","pill_outline","badge_color","badge_modern"].includes(value);
    },
  },
  size: {
    type: String,
    default: "sm",
    validator(value) {
      return ["sm", "md", "lg"].includes(value);
    },
  },
  color: {
    type: String,
    default: "gray",
    validator(value) {
      return ["error", "gray", "purple", "blue", "pink", "orange", "brand", "success", "warning"].includes(value);
    },
  },
  dot: {
    type: Boolean,
    default: false,
  },
  extraClasses: Object,
});

const classes = ref("");
classes.value = getClasses();
const dotClasses = ref("");
dotClasses.value = getDotClasses();

watch(props, () => {
  classes.value = getClasses();
  dotClasses.value = getDotClasses();
});

function getClasses() {
  return dsgClasses([
      "badges.base",
      "badges.sizes." + props.size,
      "badges.types." + props.type,
      "badges.colors." + props.color + '.default',
    ], props.extraClasses);
}
function getDotClasses() {
  return dsgClasses([
    'badges.dot',
    'badges.colors.' + props.color + '.dot'
  ], props.extraClasses);
}
</script>
