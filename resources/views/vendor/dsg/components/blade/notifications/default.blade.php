@props([
    'title' => '',
    'message' => '',
    'timer' => 3,
    'theme' => '',
])

@php
    // Validation with fallback values
    $theme = in_array($theme, ['success','error']) ? $theme : 'success';
@endphp

<div x-data="{ title: '', message: '', show: false }"
     x-init="
        @if($title || $message) showMessage('{{$title}}','{{$message}}',{{$timer}}) @endif

        document.addEventListener('notification', event => {
            showMessage(event.detail[0].title, event.detail[0].message, event.detail[0].timer);
        });

        function showMessage (nTitle,nMessage,timer) {
            if (timer) {
                setTimeout(() => { show = false },  timer * 1000);
            }
            title = nTitle;
            message = nMessage;
            show = true;
        }
     "
     class="{{ dsgClasses(['notifications.default.wrapper', "notifications.color.{$theme}.wrapper"]) }}"
     x-show="show"
     x-cloak
     x-transition:enter="transition ease-out duration-300 transform"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200 transform"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
>
    @if($theme === 'success')
        <x-icon-check-circle class="w-5 h-5 text-success-600" />
    @else
        <x-icon-alert-circle class="w-5 h-5 text-{{ $theme }}-600" />
    @endif

    <div class="{{ dsgClasses('notifications.content') }}">
        <span class="{{ dsgClasses('notifications.default.title') }}" x-show="title" x-text="title">{{ $title }}</span>
        <p class="{{ dsgClasses('notifications.message') }}" x-show="message" x-text="message">{{ $message }}</p>

        {!! $slot !!}
    </div>

    <div class="absolute top-2 right-2">
        <x-dsg-button type="tertiary_gray" icon="x-close"
                      :extra-classes="['buttons_default' => '!p-2 !text-gray-400 hover:!text-gray-500']"
                      x-on:click="show = false"
        ></x-dsg-button>
    </div>
</div>
