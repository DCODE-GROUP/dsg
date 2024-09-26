<template>
<div>
  <div :class="dsgClasses(['tabs.frame.desktop', 'tabs.frame.horizontal'], extraClasses)">
    <nav :class="dsgClasses(['tabs.wrapper.default', 'tabs.wrapper.horizontal'], extraClasses)" aria-label="Tabs">
      <a v-for="(tab, index) in tabs" :key="index"
         :class="getTabClasses(tab)"
         @click="tabChange(index)"
      >
        {{ tab.name }}
        <dsg-badge v-if="tab.badge" v-bind="{...tab.badge.props}">
          {{ tab.badge.text }}
        </dsg-badge>
      </a>
    </nav>
  </div>
  <div :class="dsgClasses('tabs.frame.mobile', extraClasses)">
    <!-- TODO: add dsg select component -->
  </div>

  <div v-if="slots.default" class="mt-6">
    <slot></slot>
  </div>
</div>
</template>

<script setup>
import { inject, useSlots } from "vue";
const dsgClasses = inject("dsgClasses");
const bus = inject("bus");

const props = defineProps({
  size: {
    type: String,
    default: "sm",
    validator(value) {
      return ["sm", "md", "lg", "xl", "2xl"].includes(value);
    },
  },
  tabs: {
    type: [Array,Object]
  },
  eventListener: {
    type: String,
    default: 'change-tab'
  },
  extraClasses: Object,
});

const slots = useSlots();

function getTabClasses(tab) {
  return dsgClasses(
    [
      'tabs.item.default',
      'tabs.item.active.' + ((tab.active ?? false) ? 'on' : 'off') +'.horizontal',
      'tabs.item.disabled.'+ ((tab.disabled ?? false) ? 'on' : 'off'),
      'tabs.item.sizes.'+ props.size,
    ],
    props.extraClasses,
  );
}

function tabChange(index) {
  bus.$emit(props.eventListener, index);
}
</script>
