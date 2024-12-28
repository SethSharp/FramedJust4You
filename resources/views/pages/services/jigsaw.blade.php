@section('title', 'Jigsaws - ' . config('app.name'))
@section('description', 'Jigsaw framing requires a special process and we have a effective of steps to ensure its longevity.')

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Jigsaws
            </x-slot>

            <x-slot name="content">
                <x-cards.image-content-left>
                    <x-slot name="image">
                        <x-image
                            src="jigsaw/giraffe.webp"
                            alt="Giraffe Jigsaw Framed"
                            class="h-96 mx-auto"
                        />
                    </x-slot>

                    <x-slot name="content">
                        At Framed Just For You, you'll find a vast selection of over 1000 picture
                        frames, ensuring you have abundant options to find the ideal frame for your
                        jigsaw puzzle. Our commitment to conservation framing is evident in every
                        aspect of our work, and this dedication extends to our meticulous process
                        for framing jigsaw puzzles.
                    </x-slot>
                </x-cards.image-content-left>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>

    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                The Process
            </x-slot>

            <x-slot name="content">
                The process we take is very smooth and efficient to ensure your jigsaw is not damaged or messed up and
                make it stand out within your home. Each step of our jigsaw puzzle framing is completed in house using
                the best materials and equipment, guaranteeing it is finished to the highest standards.

                <div class="space-y-12">
                    <x-cards.image-content-left>
                        <x-slot name="title">
                            Step 1: Acquire & Solve a Jigsaw
                        </x-slot>

                        <x-slot name="image">
                            <x-image
                                src="jigsaw/initial-stage.webp"
                                alt="Step 1: Acquire and solve the jigsaw"
                            />
                        </x-slot>

                        <x-slot name="content">
                            First step is to acquire a jigsaw and completing it. This can be any
                            jigsaw you currently own or from our store, we can make
                            any jigsaw look like a million dollars!
                        </x-slot>
                    </x-cards.image-content-left>

                    <x-cards.image-content-right>
                        <x-slot name="title">
                            Step 2: Choose a frame
                        </x-slot>

                        <x-slot name="image">
                            <x-image
                                src="jigsaw/frame.webp"
                                alt="Step 2: Choose a frame"
                                class="h-96"
                            />
                        </x-slot>

                        <x-slot name="content">
                            Bring the complete jigsaw in, this is where we will help you decide
                            on the right frame that best suits the jigsaw. In this case we have
                            chosen a double frame, with a nice blue colour to accent the ocean
                            waves a thicker frame to match the colour scheme.
                        </x-slot>
                    </x-cards.image-content-right>

                    <x-section.content>
                        <x-slot name="title">
                            Step 3: Our process
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-full border-l-4 border-primary-500 py-2 pl-4">
                                <p>
                                    The rest is up to us now! We apply our own backing to keep the
                                    jigsaw in place, it is adhered to the backboard using a pH neutral
                                    dry mount acid free adhesive.
                                </p>

                                <p>
                                    The overlay is important to preserve the jigsaw and allow you to
                                    clean it. We apply an artshield uv heatseal overlay which is put in
                                    our heat press at 97 degrees. This process also prevents the jigsaw
                                    from fading!
                                </p>
                            </div>
                        </x-slot>
                    </x-section.content>

                    <x-cards.image-content-right>
                        <x-slot name="title">
                            The final product
                        </x-slot>

                        <x-slot name="image">
                            <x-image
                                src="jigsaw/final-product.webp"
                                alt="Step 4: The final product"
                                class="h-96"
                            />
                        </x-slot>

                        <x-slot name="content">
                            The result of this process helps ensure your framed jigsaw is fade
                            resistant, preserved and easily maintained by simply wiping clean.
                        </x-slot>
                    </x-cards.image-content-right>
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
