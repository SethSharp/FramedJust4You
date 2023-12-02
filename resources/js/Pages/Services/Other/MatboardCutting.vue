<script setup>
import { Head } from '@inertiajs/vue3'
import Image from '@/Components/Image.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Layouts/Section.vue'
</script>

<template>
    <Head title="Matboard Cutting" />

    <PrimaryLayout>
        <Section>
            <template #header> Matboard Cutting</template>

            <template #content>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                    <div class="my-auto">
                        <h1 class="font-bold">Computerised Matboard Cutter</h1>
                        Here we are ahead of the game using a computerised matboard cutter. This
                        allows us to cut and make just about any shape, any curve and do it with
                        precision. This is perfect for items requiring multiple cutouts such as a
                        winning a competition with multiple medals and items or a collection of
                        items, we can map out the layout and achieve an amazing looking piece
                        containing multiple items, or if you have a record then we can perfectly map
                        the correct size to fit the circular shape.
                    </div>
                    <Image
                        src="matboards/matboard-cutter.webp"
                        alt="Computerised matboard cutter"
                    />
                </div>
                <div class="grid grid-cols-3 gap-x-4 mt-8">
                    <Image
                        src="matboards/multiple-squares-and-circles.webp"
                        alt="2 Rows of 6 cut outs, side by side"
                        class="my-auto"
                    />
                    <Image
                        src="matboards/shape-red.webp"
                        alt="Corner square shapes with a internal mat"
                    />
                    <Image
                        src="matboards/tools.webp"
                        alt="3 different sized cutouts holding different items"
                        class="my-auto"
                    />
                </div>
            </template>
        </Section>
        <Section>
            <template #header> Just need a matboard?</template>

            <template #content>
                If you just need a new matboard that has gone all crusty over the years, then we can
                get the measurement of your frame and cut a brand new one with your selection of
                colours.

                <div class="grid grid-cols-3 gap-x-4 my-12">
                    <Image src="matboards/record.webp" alt="Metallica Record" class="my-auto" />
                    <Image
                        src="matboards/gymnastics.webp"
                        alt="Gymnastics frame with multiple cutouts for medals"
                        class="my-auto"
                    />
                    <Image
                        src="matboards/asw-athlete.webp"
                        alt="ASW frame with multiple cutouts for medals and photos"
                        class="my-auto"
                    />
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
