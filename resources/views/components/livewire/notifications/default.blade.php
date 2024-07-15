@php
    $showMessage = session('notification');
    if (session()->has('notification_timer')) {
        $timer = session('notification_timer') ? session('notification_timer') : 'false';
    } else {
        $timer = 3;
    }
    $linkLabel = session('notification_link_label');
    $linkUrl = session('notification_link_url');
@endphp

<div x-data="{ message: '', show: false, linkLabel: '', linkUrl: '' }"
     x-init="
        {{ session()->has('notification') ? 'showMessage("'.$showMessage.'",'.$timer.',"'.$linkLabel.'","'.$linkUrl.'")' : '' }}

        document.addEventListener('notification', event => {
            showMessage(event.detail[0].message, event.detail[0].timer, event.detail[0].linkLabel, event.detail[0].linkUrl);
        });

        function showMessage (flashMessage, timer = 3, lLabel = '', lUrl = '') {
            if (timer) {
                setTimeout(() => { show = false },  timer * 1000);
            }
            message = flashMessage;
            show = true;
            linkLabel = lLabel;
            linkUrl = lUrl;
        }
     "
     class="@dsgClasses('dsg.notifications.default.wrapper')"
     x-show="show"
     x-cloak
     x-on:click="show = false"
     x-transition:enter="transition ease-out duration-300 transform"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200 transform"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
>
    <x-heroicon-s-check-circle class="w-5 h-5 text-green-700" />

    <p class="@dsgClasses('dsg.notifications.default.message')" x-text="message"></p>

    <x-dsg-link-tertiary x-if="linkLabel && linkUrl" x-bind:href="linkUrl">
        <span x-text="linkLabel"></span>
    </x-dsg-link-tertiary>

    <x-dsg-tertiary-button x-on:click="show = false" extra-classes="hover:bg-green-100 text-slate-600 hover:text-slate-700 !p-1.5">
        <x-heroicon-o-x-mark class="h-4 w-4" />
    </x-dsg-tertiary-button>
</div>
