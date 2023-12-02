<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Layouts/Section.vue'
import Image from '@/Components/Image.vue'
</script>

<template>
    <Head title="Memorabilia" />

    <PrimaryLayout>
        <Section>
            <template #header> Memorabilia</template>
            <template #subtitle> Memorabilia framed the right way</template>
            <template #content>
                <Image
                    src="memorabilia/suns-jerseys.webp"
                    alt="Suns Jerseys"
                    class="sm:w-4/5 mx-auto"
                />
                <div class="mt-4">
                    We understand the unique value of your memorabilia, and that's why we take great
                    care in handling and displaying it appropriately. Our conservation framing
                    techniques ensure that your cherished pieces are framed in a manner that allows
                    for easy removal while preserving their original condition. Your memorabilia
                    remains both well-protected and accessible when you choose our services.
                </div>
            </template>
        </Section>

        <Section>
            <template #header> Collectables</template>
            <template #content>
                <p>
                    Framed memorabilia encompasses a wide range of items, spanning from quirky
                    novelties to highly valuable collectibles. At Framed Just For You, we have
                    extensive experience framing various celebrity-related treasures, including
                    autographed garments, costumes, and rare signed correspondence.
                </p>
                <div class="sm:w-3/4 mx-auto my-2">
                    <Image src="memorabilia/memorabilia-3.webp" alt="Collectables" />
                </div>
            </template>
        </Section>

        <Section>
            <template #header> Medals</template>
            <template #content>
                <p>
                    Medal memorabilia holds a significant place in the world of collectibles. These
                    distinguished awards, often earned through acts of bravery, excellence in
                    sports, or other exceptional achievements, carry with them not only historical
                    significance but also personal stories of triumph and honor. Whether it's
                    military medals, Sporting medals, or medals from various fields of
                    accomplishment, they serve as tangible reminders of individuals' dedication and
                    accomplishments. Collectors and enthusiasts value medal memorabilia for its
                    historical context, the artistry of its design, and the remarkable stories they
                    represent, making it a compelling and coveted category within the world of
                    memorabilia.
                </p>
                <div class="w-3/4 mx-auto my-2 grid sm:grid-cols-2 gap-x-2 gap-y-2">
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

        <Section>
            <template #header> Sports Memorabilia</template>
            <template #content>
                <p>
                    At Framed Just For You, we specialize in framing a wide array of sports
                    memorabilia, from NRL, AFL, and A-League jerseys to footballs, cricket bats,
                    golf clubs, helmets, and more! Located on the Gold Coast, we bring our expertise
                    to the world of sports collectibles. Showcasing your cherished sports
                    memorabilia in your home, home bar, or office is bound to spark conversations.
                    With over 1000 frame options and a variety of creative display styles, we can
                    have your sports memorabilia expertly framed and ready to adorn your walls
                    within just one week.
                </p>
                <div class="sm:w-3/4 mx-auto my-2">
                    <Image src="memorabilia/jerseys.webp" alt="Framed Sport Jerseys" />
                </div>
            </template>
        </Section>

        <!--        <Section>-->
        <!--            <template #header> Other Ideas for Memorabilia </template>-->
        <!--            <template #content>-->
        <!--                Night to remember, an event you will cherish, school or university graduation Insert-->
        <!--                own graduation cert and that radio star frame-->
        <!--            </template>-->
        <!--        </Section>-->
    </PrimaryLayout>
</template>
