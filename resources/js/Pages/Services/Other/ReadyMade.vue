<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Layouts/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Image from '@/Components/Image.vue'
</script>

<template>
    <Head title="Ready Made" />

    <PrimaryLayout>
        <Section>
            <template #header> Ready Made Frames</template>
            <template #subtitle> Ready to hang</template>
            <template #content>
                <div class="sm:flex">
                    <div class="w-1/2 sm:w-2/5 relative">
                        <Image
                            src="readyMade/graduation.webp"
                            class="absolute w-full z-10 -rotate-12"
                        />
                    </div>

                    <div class="sm:w-3/4 bg-gray-100 rounded-lg shadow-sm my-auto z-20 p-4">
                        <p class="z-20">
                            We have multiple hand made, ready made frames ready to hang in your
                            space. We stock the most common sizes and is a great option for your
                            photo/prints without having to go down a possibly more expensive route
                            in custom framing yet still provides a great look or if you are in a
                            rush for a frame.
                        </p>
                    </div>
                    <Image
                        src="readyMade/ready-made-1.webp"
                        class="z-20 w-1/2 mx-auto sm:w-1/4 absolute rotate-12"
                    />
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
