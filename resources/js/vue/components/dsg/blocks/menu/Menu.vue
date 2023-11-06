<template>
  <nav class="menu" :class="menuBarOpen ? 'menu--open' : 'menu--closed'" aria-label="Sidebar">
    <div class="menu__header">
      <div class="menu__logo" :class="menuBarOpen ? 'menu__logo--open' : 'menu__logo--closed'">
        <v-icon :icon="menuLogo" classes="w-full"></v-icon>
      </div>

      <button
        type="button"
        class="menu__toggle"
        :class="menuBarOpen ? 'menu__toggle--open' : 'menu__toggle--closed'"
        @click="toggleMenuBar"
      >
        <v-icon icon="arrowUpTrayIcon" classes="h-8 w-8 p-1"></v-icon>
      </button>
    </div>

    <div class="menu__list">
      <template v-for="(group, index) in menu" :key="index">
        <div class="menu__group">
          <template v-for="item in group" :key="item.label">
            <div class="relative">
              <a
                :href="item.url"
                @click="toggleMenuItem(item)"
                class="menu__items"
                :class="{ 'menu__items--active': item.active && !item.children.length }"
              >
                <span class="h-6 w-6 flex-shrink-0">
                  <v-icon :icon="item.icon" classes="h-6 w-6"></v-icon>
                </span>

                <span
                  class="menu__item-title"
                  :class="menuBarOpen ? 'menu__item-title--open' : 'menu__item-title--closed'"
                >
                  {{ item.label }}
                </span>
              </a>

              <a
                v-if="item.active && !item.children.length && menuBarOpen && item.createRoute"
                type="button"
                class="menu__add-button"
                :href="item.createRoute"
              >
                <v-icon icon="plusIcon" classes="h-5 w-5"></v-icon>
              </a>
            </div>
            <ul v-if="item.children.length && item.active" class="ml-xlSpace">
              <li v-for="child in item.children" :key="child.label">
                <a :href="child.url" class="menu__child-item" :class="{ 'menu__child-item--active': child.active }">
                  <v-icon :icon="child.icon"></v-icon>
                  <span class="flex-1">{{ child.label }}</span>
                </a>
              </li>
            </ul>
          </template>
        </div>
      </template>
    </div>
  </nav>
</template>

<script setup>
import { reactive, ref, defineProps, onMounted, inject } from "vue";
import "../../../../../../css/components/dsg/menu.pcss";

const $cookies = inject("$cookies");

const props = defineProps({
  items: {
    type: Object,
  },
  menuLogo: {
    type: String,
    default: "PrecisionScaffoldingIcon",
  },
});

const menu = reactive(props.items);
const menuBarOpen = ref();

onMounted(() => {
  menuBarOpen.value = $cookies.get("menuBarOpen") !== "false";
});

function toggleMenuBar() {
  menuBarOpen.value = !menuBarOpen.value;
  $cookies.set("menuBarOpen", menuBarOpen.value);
}

function toggleMenuItem(item) {
  item.active = !item.active;
}
</script>
