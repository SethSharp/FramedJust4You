<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Layouts/Section.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Image from '@/Components/Image.vue'
</script>

<template>
    <Head title="Prints, Posters and Photos" />

    <PrimaryLayout>
        <Section>
            <template #header> Prints Posters and Photos</template>
            <template #content>
                <div>
                    <p>
                        Transform anything on paper into a captivating masterpiece with our expert
                        framing services. Whether it's your cherished family photos capturing
                        precious moments or posters from your favorite movies that hold sentimental
                        value, we specialize in helping you select the perfect frame. Our commitment
                        goes beyond mere framing; we understand the significance of each piece and
                        tailor our recommendations to complement the essence of your unique items.
                        Entrust us with your memories, and let our craftsmanship elevate the visual
                        impact of your paper treasures, creating timeless displays that tell your
                        story with elegance and flair.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 w-3/4 mx-auto gap-x-6 gap-y-6 my-8">
                    <Image src="prints-photos/picture-2.webp" />
                    <Image src="prints-photos/picture-1.webp" class="my-auto" />
                    <Image src="prints-photos/poster-1.webp" />
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
