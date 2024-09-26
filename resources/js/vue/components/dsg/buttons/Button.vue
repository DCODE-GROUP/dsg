<template>
  <a v-if="href" :href="href" :class="classes">
    <slot v-if="iconPosition === 'left'" name="icon"></slot>
    <span v-if="slots.icon && slots.default"><slot></slot></span>
    <slot v-else></slot>
    <slot v-if="iconPosition === 'right'" name="icon"></slot>
  </a>

  <button v-else :class="classes" :type="buttonType">
    <slot v-if="iconPosition === 'left'" name="icon"></slot>
    <span v-if="slots.icon && slots.default"><slot></slot></span>
    <slot v-else></slot>
    <slot v-if="iconPosition === 'right'" name="icon"></slot>
  </button>
</template>

<script setup>
import { ref, inject, useSlots, watch } from "vue";
const dsgClasses = inject("dsgClasses");

const props = defineProps({
  type: {
    type: String,
    default: "primary",
    validator(value) {
      return ["primary", "secondary", "tertiary", "link", "secondary_gray", "tertiary_gray", "link_gray"].includes(value);
    },
  },
  size: {
    type: String,
    default: "sm",
    validator(value) {
      return ["sm", "md", "lg", "xl", "2xl"].includes(value);
    },
  },
  iconPosition: {
    type: String,
    default: "left",
    validator(value) {
      return ["left", "right"].includes(value);
    },
  },
  href: String,
  disabled: {
    type: Boolean,
    default: false,
  },
  buttonType: {
    type: String,
    default: "button",
  },
  extraClasses: Object,
});

const slots = useSlots();

const classes = ref("");
classes.value = getClasses();

watch(props, () => {
  classes.value = getClasses();
});

function getClasses() {
  return dsgClasses(
    [
      "buttons.default",
      "buttons.sizes." + props.size + "." + (slots.icon && !slots.default ? "with_icon" : (["link", "link_gray"].includes(props.type) ? "link" : "default")),
      "buttons." + props.type + "." + (props.disabled ? "disabled" : "default"),
    ],
    props.extraClasses,
  );
}
</script>
