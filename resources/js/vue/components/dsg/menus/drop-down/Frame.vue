<template>
  <div class="relative" v-cloak>
    <button type="button"
            :class="dsgClasses('drop_down.button', extraClasses)"
            aria-expanded="false"
            aria-haspopup="true"
            @click="toggle"
            v-click-away="close"
    >
      <slot name="button"></slot>
    </button>

    <div v-show="isOpen" :class="dsgClasses('drop_down.menu.wrapper', extraClasses)">
      <slot></slot>
    </div>
  </div>
</template>

<script setup>
import { inject, ref } from "vue";

const dsgClasses = inject("dsgClasses");

const props = defineProps({
  extraClasses: Object,
});

const isOpen = ref(false);

function toggle() {
  isOpen.value = !isOpen.value;
}
function close() {
  isOpen.value = false;
}
</script>
