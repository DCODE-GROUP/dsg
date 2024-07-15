<div x-data="{ isOpen: false }"
     x-init="
        document.addEventListener('slide-over', event => {
            isOpen = true;
        });
        document.addEventListener('slide-over-closed', event => {
            isOpen = false;
        });
     "
     class="relative z-10"
     aria-labelledby="slide-over-title"
     role="dialog"
     aria-modal="true"
>
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
         x-cloak
         @click="show = false"
         x-show="isOpen"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
    ></div>

    <div class="fixed inset-0 overflow-hidden"
         x-cloak
         x-show="isOpen"
         x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transform transition ease-in-out duration-500 sm:duration-70"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
    >
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                <div class="pointer-events-auto w-screen max-w-2xl">
                    <div class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl">
                        <div class="flex min-h-0 flex-1 flex-col overflow-y-scroll pb-6">
                            <div class="bg-brand-primary px-4 py-6 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-base font-semibold leading-6 text-white" id="slide-over-title">{{ $title }}</h2>
                                    <div class="ml-3 flex h-7 items-center">
                                        <button type="button"
                                                class="relative rounded-md bg-brand-primary text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                                @click="isOpen = false"
                                        >
                                            <span class="absolute -inset-2.5"></span>
                                            <span class="sr-only">Close panel</span>
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mt-6 flex-1">
                                @if ($component_name)
                                    <x-dynamic-component :component="$component_name" :data="$data"></x-dynamic-component>
                                @endif
                            </div>
                        </div>
                        @if ($show_buttons)
                            <div class="flex flex-shrink-0 justify-end px-4 py-4">
                                <button type="button" class="rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" @click="isOpen = false">Cancel</button>
                                <button type="button" class="ml-4 inline-flex justify-center rounded-md bg-brand-green px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-brand-green-secondary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" @click="$dispatch('slide-over-confirm')">Save</button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>