@props([
    'message' => '',
    'icon' => 'heroicon-s-check-circle',
    'classNotificationsWrapper' => 'bg-green-50 ring-green-700 text-green-700',
])

<div class="@dsgClasses('dsg.notifications.bubble.wrapper')">
    @svg($icon, 'w-5 h-5')

    <p class="@dsgClasses('dsg.notifications.bubble.message')">
        {{ $message }}
    </p>
</div>
