<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Layouts/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Image from '@/Components/Image.vue'
</script>

<template>
    <Head title="Jigsaw" />

    <PrimaryLayout>
        <Section>
            <template #header> Jigsaw Puzzles</template>
            <template #content>
                <div class="sm:flex mt-8">
                    <div class="sm:w-1/2 sm:w-full my-auto">
                        At Framed Just For You, you'll find a vast selection of over 1000 picture
                        frames, ensuring you have abundant options to find the ideal frame for your
                        jigsaw puzzle. Our commitment to conservation framing is evident in every
                        aspect of our work, and this dedication extends to our meticulous process
                        for framing jigsaw puzzles.
                    </div>
                    <div class="sm:w-1/2 sm:w-full mt-4 sm:mt-0">
                        <Image src="jigsaw/giraffe.webp" class="w-1/2 mx-auto" />
                    </div>
                </div>
            </template>
        </Section>

        <Section>
            <template #header> The Process</template>
            <template #content>
                The process we take is very smooth and efficient to ensure your jigsaw is not
                damaged or messed up and make it stand out within your home. Each step of our jigsaw
                puzzle framing is completed in house using the best materials and equipment,
                guaranteeing it is finished to the highest standards.

                <div class="mt-8">
                    <div class="sm:flex my-4">
                        <div class="sm:w-1/2 sm:w-full my-auto">
                            <Image src="jigsaw/initial-stage.webp" />
                        </div>
                        <div class="sm:w-1/2 sm:w-full p-6">
                            <h1 class="text-xl font-bold">First Steps</h1>
                            <p>
                                First step is to acquire a jigsaw and completing it. This can be any
                                jigsaw you currently own or from the store for 10 bucks, we can make
                                any jigsaw look like a million dollars!
                            </p>
                        </div>
                    </div>
                    <div class="sm:flex my-4">
                        <div class="sm:w-1/2 sm:w-full p-6">
                            <h1 class="text-xl font-bold">Second Step</h1>
                            <p>
                                Bring the complete jigsaw in, this is where we will help you decide
                                on the right frame that best suits the jigsaw. In this case we have
                                chosen a double frame, with a nice blue colour to accent the ocean
                                waves a thicker frame to match the colour scheme.
                            </p>
                        </div>
                        <div class="sm:w-1/2 sm:w-full my-auto">
                            <Image src="jigsaw/frame.webp" class="sm:w-3/4 mx-auto" />
                        </div>
                    </div>
                    <div class="sm:flex my-4">
                        <div class="w-full p-6">
                            <h1 class="text-xl font-bold">Backing</h1>
                            <p>
                                The rest is up to us now! We apply our own backing to keep the
                                jigsaw in place, it is adhered to the backboard using a pH neutral
                                dry mount acid free adhesive.
                            </p>
                        </div>
                    </div>
                    <div class="sm:flex my-4">
                        <div class="w-full p-6">
                            <h1 class="text-xl font-bold">Overlay</h1>
                            <p>
                                The overlay is important to preserve the jigsaw and allow you to
                                clean it. We apply an artshield uv heatseal overlay which is put in
                                our heat press at 97 degrees. This process also prevents the jigsaw
                                from fading!
                            </p>
                        </div>
                    </div>
                    <div class="sm:flex my-4">
                        <div class="sm:w-1/2 sm:w-full my-auto">
                            <Image src="jigsaw/final-product.webp" class="sm:w-3/4 mx-auto" />
                        </div>
                        <div class="sm:w-1/2 sm:w-full p-6">
                            <h1 class="text-xl font-bold">Final Product</h1>
                            <p>
                                The result of this process ensures your framed jigsaw puzzle is fade
                                resistant, preserved and easily maintained by simply wiping clean.
                            </p>
                        </div>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
