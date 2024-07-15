{{-- @TODO: This has to be simplified even more --}}
@props([
    'name' => '',
    'value' => '',
    'binding' => 'wire:model',
    'type' => 'default',
    'title' => '',
    'link' => '',
    'description' => '',
    'imageIcon' => '',
    'images' => collect(), // A collection of media items
    'contentTags' => [],
    'content' => '',
    'rightSide' => '',
    'footerImage' => '',
])
@php $isVertical = $type === 'vertical'; @endphp

<div class="@dsgClasses('dsg.cards.list_item.default.wrapper') @if($isVertical) @dsgClasses('dsg.cards.list_item.vertical.wrapper') @else @dsgClasses('dsg.cards.list_item.horizontal.wrapper') @endif">
    @if($name)
        <x-dsg-checkbox name="{{ $name }}"
                        binding="{{ $binding }}"
                        value="{{ $value }}"
                        :extra-classes="$isVertical ? 'mb-3' : 'mb-3 lg:mb-0 lg:mr-3'"
        />
    @else
        <span class="mb-7"></span>
    @endif

    <div x-data="{currentImage: 0}"
         class="@if($isVertical) mb-6 @else lg:mr-6 @endif"
    >
        <div class="relative">
            <div>
                @if($images->isNotEmpty())
                    @foreach($images as $key => $image)
                        <img src="{{ $image->getUrl('thumb') }}"
                             class="@dsgClasses('dsg.cards.list_item.default.gallery.image') @if($isVertical) @dsgClasses('dsg.cards.list_item.vertical.gallery.image') @else @dsgClasses('dsg.cards.list_item.horizontal.gallery.image') @endif"
                             x-show="currentImage === {{ $key }}"
                        >
                    @endforeach
                @else
                    <div class="@dsgClasses('dsg.cards.list_item.default.gallery.image') @if($isVertical) @dsgClasses('dsg.cards.list_item.vertical.gallery.image') @else @dsgClasses('dsg.cards.list_item.horizontal.gallery.image') @endif bg-gray-100 grid justify-items-center items-center">
                        <x-heroicon-o-building-office class="w-6 h-6 text-gray-400" />
                    </div>
                @endif
            </div>
            @if($images->isNotEmpty())
                <div class="@dsgClasses('dsg.cards.list_item.default.gallery.buttons.wrapper')">
                    <button class="@dsgClasses('dsg.cards.list_item.default.gallery.buttons.default')"
                            x-bind:class="{ '@dsgClasses('dsg.cards.list_item.default.gallery.buttons.active')': currentImage == 0 }"
                            x-on:click="currentImage--"
                    >
                        <x-heroicon-o-chevron-left class="w-3 h-3" />
                    </button>
                    <button class="{{ config('dsg.cards.list_item.default.gallery.buttons.default') }}"
                            x-bind:class="{ '@dsgClasses('dsg.cards.list_item.default.gallery.buttons.active')': currentImage == {{ count($images)-1 }} }"
                            x-on:click="currentImage++"
                    >
                        <x-heroicon-o-chevron-right class="w-3 h-3" />
                    </button>
                </div>
            @endif

            @if($imageIcon)
                <div class="@dsgClasses('dsg.cards.list_item.default.image_icon') top-2 left-2 @if($isVertical) -top-5 left-6 @else top-8 -left-8 @endif">
                    {!! $imageIcon !!}
                </div>
            @endif
        </div>
    </div>

    <div class="@dsgClasses('dsg.cards.list_item.default.content_wrapper')">
        <div class="@dsgClasses('dsg.cards.list_item.default.head')">
            <div class="@dsgClasses('dsg.cards.list_item.default.header')">
                <h3 class="@dsgClasses('dsg.cards.list_item.default.title')">
                    <a href="{{ $link }}" wire:navigate>{{ $title }}</a>
                </h3>

                @if($rightSide)
                    <div class="@dsgClasses('dsg.cards.list_item.default.right_side') @if($isVertical) @dsgClasses('dsg.cards.list_item.vertical.right_side') @else @dsgClasses('dsg.cards.list_item.horizontal.right_side') @endif">
                        {!! $rightSide !!}
                    </div>
                @endif
            </div>

            {!! $description !!}
        </div>

        <hr class="my-4">

        {!! $content !!}

        <div class="@dsgClasses('dsg.cards.list_item.default.footer') @if($isVertical) @dsgClasses('dsg.cards.list_item.vertical.footer') @else @dsgClasses('dsg.cards.list_item.horizontal.footer') @endif">
            {!! $footer !!}
        </div>
    </div>
</div>
