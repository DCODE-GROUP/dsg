@props([
    'images' => [],
    'eventListener' => 'slideshow-modal'
])

<div x-data="{ isOpen: false, currentImage: 0, firstKey: {{ array_key_first($images) }}, lastKey: {{ array_key_last($images) }} }"
     x-init="
        document.addEventListener('{{ $eventListener }}', event => {
            isOpen = true;
            currentImage = event.detail.key !== undefined ? event.detail.key : 0;
        });
     "
     x-show="isOpen"
     x-transition
     class="@dsgClasses('dsg.slideshow.wrapper')"
>
    <div class="@dsgClasses('dsg.slideshow.container')">
        <div class="@dsgClasses('dsg.slideshow.heading')">
            <span x-text="currentImage + 1"></span>/{{ count($images) }}
        </div>
        <div class="@dsgClasses('dsg.slideshow.body')">
            <div class="@dsgClasses('dsg.slideshow.button_wrapper')">
                <button class="@dsgClasses('dsg.slideshow.button')"
                        x-on:click="currentImage = currentImage <= firstKey ? lastKey : (currentImage - 1)"
                >
                    <x-heroicon-o-chevron-left class="w-5 h-5" />
                </button>
            </div>
            <div class="@dsgClasses('dsg.slideshow.image_wrapper')">
                @foreach($images as $key => $image)
                    <img src="{{ $image->getUrl() }}"
                         class="@dsgClasses('dsg.slideshow.image')"
                         x-show="currentImage === {{ $key }}"
                         x-transition:enter.duration.300ms
                    >
                @endforeach
            </div>
            <div class="@dsgClasses('dsg.slideshow.button_wrapper')">
                <button class="@dsgClasses('dsg.slideshow.button')"
                        x-on:click="currentImage = currentImage >= lastKey ? firstKey : (currentImage + 1)"
                >
                    <x-heroicon-o-chevron-right class="w-5 h-5" />
                </button>
            </div>
        </div>
    </div>

    <button class="@dsgClasses('dsg.slideshow.close_button')"
            x-on:click="isOpen = false"
    >
        <x-heroicon-o-x-mark class="h-8 w-8" />
    </button>
</div>
