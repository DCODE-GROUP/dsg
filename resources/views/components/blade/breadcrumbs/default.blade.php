@props([
    'items' => [],
])

<ul class="@dsgClasses('dsg.breadcrumb.wrapper')">
    @foreach($items as $item)
        <li @if($item->active ?? false) class="@dsgClasses('dsg.breadcrumb.item')" @endif>
            <a @if($item->href ?? false) href="{{ $item->href }}" wire:navigate class="hover:text-slate-600" @endif>
                {{ $item->title ?? '' }}
            </a>
            @if(!$loop->last) <span class="@dsgClasses('dsg.breadcrumb.divider')">/</span> @endif
        </li>
    @endforeach
</ul>
