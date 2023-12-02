<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Layouts/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Image from '@/Components/Image.vue'
</script>

<template>
    <Head title="Acrylic" />

    <PrimaryLayout>
        <Section>
            <template #header> Acrylic</template>
            <template #content>
                <div class="grid md:grid-cols-2 my-6 gap-x-2 gap-y-2">
                    <div class="my-auto">
                        <p>
                            Do you have a special item you'd like to display? Framed Just For You
                            has an acrylic case that will fit almost anything, from golf balls to
                            football boots and from jerseys to guitars!
                        </p>
                        <p>
                            Depending on the item, acrylic cases can be mounted on a wall or
                            displayed on a flat surface. Visit our showroom for a design and quote.
                        </p>
                    </div>
                    <div>
                        <Image
                            src="acrylic/golf-ball-display.webp"
                            alt="Golf Ball display in example home space"
                            class="w-3/4 mx-auto"
                        />
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-x-2 gap-y-2 mx-8 my-8">
                    <Image src="acrylic/football.webp" alt="Football in case" class="my-auto" />
                    <Image src="acrylic/boot.webp" alt="Boot in case" class="my-auto" />
                    <Image src="acrylic/shovel.webp" alt="Golden Shovel in case" class="my-auto" />
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
