<div class="my-auto">
    <x-headings.secondary title="Whats on this page"/>

    <div class="ml-2">
        <uL>
            @foreach($links as $link)
                <li class="my-4">
                    <a href="{{ $link['href'] }}" class="flex w-fit">
                    <span class="my-auto">
                        <x-icons.plus/>
                    </span>

                        <p class="ml-4 my-auto">
                            {{ $link['title'] }}
                        </p>
                    </a>
                </li>
            @endforeach
        </uL>
    </div>
</div>
