@props([
    'message' => '',
    'extraClasses' => '',
])

<div class="group {{ $extraClasses }}">
    <div class="relative">
        <x-heroicon-o-question-mark-circle class="w-4 h-4 text-slate-400 group-hover:text-slate-600"/>

        <div class="{{ config('dsg.forms.hint') }}">
            {{ $message }}
        </div>
    </div>
</div>
