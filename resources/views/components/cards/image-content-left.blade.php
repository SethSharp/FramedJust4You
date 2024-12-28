@props(['content', 'image', 'title' => null])
<div class="space-y-4 flex items-center justify-center">
    <x-section.sub-content class="!bg-secondary-100 z-10 border-none w-1/2">
        @if ($title)
            <x-slot name="title">
                {{ $title }}
            </x-slot>
        @endif
        <x-slot name="content">
            <div class="w-full border-l-4 border-primary-500 py-2 pl-4">
                {{$content}}
            </div>
        </x-slot>
    </x-section.sub-content>

    <div class="w-1/2">
        {{ $image }}
    </div>
</div>
