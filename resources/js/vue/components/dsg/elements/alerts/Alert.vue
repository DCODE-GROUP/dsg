<template>
  <div class="alert" :class="variationClass" role="alert">
    <div class="flex">
      <div class="flex-shrink-0">
        <dsg-icon icon="InformationCircleIcon" class="w-6 h-6"></dsg-icon>
      </div>
      <div class="ml-3" :class="{ 'flex-1 md:flex md:justify-between' : link }">
        <p v-if="heading" class="alert__heading">
          {{ heading }}
        </p>
        <div v-if="message || messageList" class="alert__body" :class="{ 'mt-0' : !heading }">
          <p>{{ message }}</p>

          <ul v-if="messageList" role="list" class="list-disc space-y-1 pl-5">
            <li v-for="message in messageList">
              {{ message }}
            </li>
          </ul>
        </div>
        <p v-if="link" class="mt-3 text-sm md:ml-6 md:mt-0">
          <a :href="link" class="alert__details">
            Details
            <span aria-hidden="true"> &rarr;</span>
          </a>
        </p>
      </div>
      <div class="ml-auto pl-3">
        <div class="-mx-1.5 -my-1.5">
          <button type="button" class="alert__button alert__button--info">
            <span class="sr-only">Dismiss</span>
            <dsg-icon icon="XMarkIcon" class="h-5 w-5"></dsg-icon>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, computed } from "vue";
import "../../../../../../css/components/dsg/alert.pcss";

const props = defineProps({
  type: String,
  heading: String,
  message: String,
  messageList: [Array, Object],
  link: String
});

const variations = reactive(["info", "success", "warning", "error"]);
let variation = ref()

const variationClass = computed(() => "alert--" + ( variations.includes(props.type) ? props.type : "info" ))

</script>
