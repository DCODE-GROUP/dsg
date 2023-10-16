<template>
  <!-- Alert > Info Standard -->
  <div v-if="!hasLink" class="alert alert--info" role="alert">
    <div class="alert__wrapper">
      <div class="alert__left">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="alert__icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
        </svg>
      </div>
      <div class="alert__center">
        <p class="alert__heading alert__heading--info">{{ heading }}</p>
        <p class="alert__body alert__body--info">Please check the details for more information ...</p>
      </div>
      <div class="alert__right">
        <div class="alert__button_wrapper">
          <button type="button" class="alert__button alert__button--info">
            <span class="alert__dismiss">Dismiss</span>
            <!-- Heroicon name: mini/x-mark -->
            <svg class="alert__close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Alert > Info with Link -->
  <div v-else class="alert alert--info" role="alert">
    <div class="alert__wrapper">
      <div class="alert__left">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="alert__icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
        </svg>
      </div>
      <div class="alert__center alert__center--info">
        <p class="alert__body alert__body--info alert__body--no_heading">A new software update is available. See what’s new in version 2.0.4.</p>
        <p class="alert__details_wrapper">
          <a href="#" class="alert__details">
            Details
            <span aria-hidden="true"> &rarr;</span>
          </a>
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps(['heading', 'hasLink'])
</script>