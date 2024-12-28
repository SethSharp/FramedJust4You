@section('title', 'Medals & Memorabilia - ' . config('app.name'))
@section('description', 'Medals & Other Memorabilia are our most popular items to frame and we have gotten pretty good at it! Providing much experience across all kinds of memorabilia items.')

@php
    $links = [
        [
            'href' => '#collectables',
            'title' => 'Collectables'
        ],
        [
            'href' => '#medals',
            'title' => 'Medals'
        ],
        [
            'href' => '#sports',
            'title' => 'Sports'
        ]
    ];
@endphp

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Medals & Memorabilia
            </x-slot>

            <x-slot name="content">
                <div>
                    <div>
                        We understand the unique value of your memorabilia, and that's why we take great care in
                        handling and displaying it appropriately.
                        Our conservation framing techniques ensure that your cherished pieces are framed in a manner
                        that allows for easy removal while preserving
                        their original condition. Your memorabilia remains both well-protected and accessible when you
                        choose our services.
                    </div>
                    <div>
                        <x-section.whats-on-this-page :links="$links"/>
                    </div>
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>

    <x-section.wrapper>
        <x-section.content id="collectables">
            <x-slot name="title"> Collectables</x-slot>

            <x-slot name="content">
                <p>
                    Framed memorabilia encompasses a wide range of items, spanning from quirky
                    novelties to highly valuable collectibles. At Framed Just For You, we have
                    extensive experience framing various celebrity-related treasures, including
                    autographed garments, costumes, and rare signed correspondence.
                </p>
                <div class="sm:w-3/4 mx-auto my-2">
                    <x-image
                        src="memorabilia/memorabilia-3.webp"
                        alt="Collectables"
                    />
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>

    <x-section.wrapper>
        <x-section.content id="medals">
            <x-slot name="title"> Medals</x-slot>

            <x-slot name="content">
                <p>
                    Medal memorabilia holds a significant place in the world of collectibles. These
                    distinguished awards, often earned through acts of bravery, excellence in
                    sports, or other exceptional achievements, carry with them not only historical
                    significance but also personal stories of triumph and honor. Whether it's
                    military medals, Sporting medals, or medals from various fields of
                    accomplishment, they serve as tangible reminders of individuals' dedication and
                    accomplishments.
                </p>
                <div class="w-3/4 mx-auto my-2 grid sm:grid-cols-2 gap-4">
                    <x-image
                        src="matboards/gymnastics.webp"
                        alt="Gymnastics frame with multiple cutouts for medals"
                    />
                    <x-image
                        src="matboards/asw-athlete.webp"
                        alt="ASW frame with multiple cutouts for medals and photos"
                    />
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>

    <x-section.wrapper>
        <x-section.content id="sports">
            <x-slot name="title"> Sports</x-slot>

            <x-slot name="content">
                <p>
                    At Framed Just For You, we specialize in framing a wide array of sports
                    memorabilia, from NRL, AFL, and A-League jerseys to footballs, cricket bats,
                    golf clubs, helmets, and more! Located on the Gold Coast, we bring our expertise
                    to the world of sports collectibles. Showcasing your cherished sports
                    memorabilia in your home, home bar, or office is bound to spark conversations.
                </p>
                <div class="sm:w-3/4 mx-auto my-2">
                    <x-image
                        src="memorabilia/jerseys.webp"
                        alt="Framed Sport Jerseys"
                    />
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
