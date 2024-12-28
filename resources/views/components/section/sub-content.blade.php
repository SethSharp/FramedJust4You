@props(['title' => '', 'id' => ''])

<div {{ $attributes->merge(['class' => 'rounded-md']) }} id="{{$id}}">
    @if ($title)
        <div>
            <div class="text-secondary-500 text-md md:text-xl"> {{ $title }} </div>
        </div>
    @endif

    <div class="space-y-4 sm:px-2 text-secondary-500 leading-loose {{ $title ? 'mt-4' : '' }}">
        {{ $content }}
    </div>
</div>
