@props([
    'href' => '',
    'logo' => '',
    'image' => '',
    'avatar' => '',
    'name' => '',
    'tags' => '',
    'additional' => [],
])

<a href="{{ $href }}" class="hover:scale-[103%] transition" wire:transition>
    <div class="bg-slate-50 rounded-lg pt-24 overflow-hidden relative">
        <div class="w-12 absolute top-4 right-4">
            <img src="{{ $logo }}" class="w-full h-auto">
        </div>

        <div class="bg-white flex flex-col items-center justify-center space-y-8 px-6 pb-8">
            <div class="space-y-2 text-center">
                @empty($image)
                    <x-profiles.avatar :avatar="$avatar" :size="24" text-size="xl" class="-mt-12"/>
                @else
                    <img src="{{ $image }}" class="w-24 h-24 rounded-full -mt-12 mx-auto">
                @endisset
                <h3 class="text-xl font-bold">{{ $name }}</h3>

                <div class="flex flex-wrap gap-2 justify-center">
                    @foreach($tags as $tag)
                        <x-dsg-tag title="{{ $tag }}"/>
                    @endforeach
                </div>
            </div>

            <div class="text-slate-500 flex flex-wrap gap-y-2 gap-x-6 justify-center">
                @foreach($additional as $item)
                    <div class="flex items-center space-x-1">
                        @isset($item['icon'])
                            @svg($item['icon'], 'w-4 h-4')
                        @endisset
                        <span>{{ $item['title'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</a>
