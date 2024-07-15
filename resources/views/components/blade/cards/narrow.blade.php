@props([
    'name' => '',
    'binding' => 'wire:model',
    'title' => '',
    'description' => '',
    'image' => '',
    'imageIcon' => '',
    'content' => '',
])

<div class="@dsgClasses('dsg.cards.narrow.wrapper')">
    @if($name)
        <x-dsg-checkbox name="{{ $name }}" binding="{{ $binding }}" />
    @endif

    <div class="relative">
        @if ($image)
            <img src="{{ $image }}" class="@dsgClasses('dsg.cards.narrow.image')">
        @else
            <div class="@dsgClasses('dsg.cards.narrow.image') bg-gray-100 grid justify-items-center items-center">
                <x-heroicon-o-building-office class="w-6 h-6 text-gray-400" />
            </div>
        @endif

        @if($imageIcon)
            <div class="@dsgClasses('dsg.cards.narrow.image_icon')">
                {!! $imageIcon !!}
            </div>
        @endif
    </div>

    <div class="@dsgClasses('dsg.cards.narrow.content_wrapper')">
        <h3 class="@dsgClasses('dsg.cards.narrow.title')">
            {!! $title !!}
        </h3>

        {!! $content !!}

        @isset($footer)
            <div class="@dsgClasses('dsg.cards.narrow.footer')">
                {!! $footer !!}
            </div>
        @endisset
    </div>

    @isset($rightSide)
        <div class="@dsgClasses('dsg.cards.narrow.right-side')">
            {!! $rightSide !!}
        </div>
    @endif
</div>
