<template>
  <a v-if="href" :href="href" :class="classes">
    <template v-if="slots.icon">
      <slot v-if="iconPosition === 'left'" name="icon"></slot>
      <slot></slot>
      <slot v-if="iconPosition === 'right'" name="icon"></slot>
    </template>

    <slot v-else></slot>
  </a>

  <button v-else :class="classes" :type="buttonType">
    <template v-if="slots.icon">
      <slot v-if="iconPosition === 'left'" name="icon"></slot>
      <slot></slot>
      <slot v-if="iconPosition === 'right'" name="icon"></slot>
    </template>

    <slot v-else></slot>
  </button>
</template>

<script setup>
import { inject, useSlots } from "vue";
const dsgClasses = inject("dsgClasses");

const props = defineProps({
  type: {
    type: String,
    default: "primary",
    validator(value) {
      return ["primary", "secondary", "tertiary", "link"].includes(value);
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

const classes = dsgClasses(
  [
    "buttons.default",
    "buttons.sizes." + props.size + "." + (props.icon && !slots.default ? "icon" : "default"),
    "buttons." + props.type + "." + (props.disabled ? "disabled" : "default"),
  ],
  props.extraClasses,
);
</script>
