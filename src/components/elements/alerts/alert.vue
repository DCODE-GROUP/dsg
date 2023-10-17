<template>
  <div class="alert alert--info" role="alert">
    <div class="flex">
      <div class="flex-shrink-0">
        <v-icon icon="InformationCircleIcon" class="alert__icon"></v-icon>
      </div>
      <div class="alert__center">
        <p v-if="heading" class="alert__heading alert__heading--info">{{ heading }}</p>
        <p v-if="message" class="alert__body alert__body--info">{{ message }}</p>
        <p v-if="link" class="alert__details_wrapper">
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
            <v-icon icon="XMarkIcon" class="h-5 w-5"></v-icon>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps(['heading', 'message', 'link'])
</script>