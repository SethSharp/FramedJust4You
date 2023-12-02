<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Layouts/Section.vue'
import { ArrowDownIcon } from '@heroicons/vue/20/solid/index.js'
import {
    ClipboardDocumentListIcon,
    QueueListIcon,
    ListBulletIcon,
    WrenchIcon,
    PuzzlePieceIcon,
    RectangleGroupIcon,
    PhotoIcon,
    UserGroupIcon,
    UserIcon,
    CheckCircleIcon,
} from '@heroicons/vue/20/solid/index.js'
import Service from '@/Components/Card/Services/Service.vue'
import Image from '@/Components/Image.vue'

const scrollToContent = () =>
    document.getElementById('custom').scrollIntoView({ behavior: 'smooth' })
</script>

<template>
    <Head title="Framing" />

    <PrimaryLayout>
        <Section>
            <template #header>
                <span> Framing </span>
            </template>
            <template #subtitle>
                <div @click="scrollToContent()" class="flex cursor-pointer">
                    <span> View our broad range </span>
                    <ArrowDownIcon class="w-8 h-8" />
                </div>
            </template>
            <template #content>
                <div class="mb-6">
                    At Framed Just For You, we specialize in custom framing that transforms your
                    cherished memories into timeless works of art. Our expert craftsmen meticulously
                    tailor each frame to suit your unique style and preserve the essence of your
                    precious moments. Whether it's artwork, photographs, memorabilia, or more, we
                    provide personalized framing solutions that elevate the beauty and significance
                    of your keepsakes.
                </div>
                <!--                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-4">-->
                <!--                    <Service-->
                <!--                        :icon="UserGroupIcon"-->
                <!--                        :href="route('services.framing.medals-memorabilia')"-->
                <!--                        title="Memorabilia"-->
                <!--                        description=""-->
                <!--                    />-->

                <!--                    <Service-->
                <!--                        :icon="PuzzlePieceIcon"-->
                <!--                        :href="route('services.framing.jigsaws')"-->
                <!--                        title="Jigsaw"-->
                <!--                        description=""-->
                <!--                    />-->

                <!--                    <Service-->
                <!--                        :icon="RectangleGroupIcon"-->
                <!--                        :href="route('services.framing.mirror')"-->
                <!--                        title="Mirror"-->
                <!--                        description=""-->
                <!--                    />-->

                <!--                    <Service-->
                <!--                        :icon="PhotoIcon"-->
                <!--                        :href="route('services.framing.tapestries-and-needlework')"-->
                <!--                        title="Embroidery"-->
                <!--                        description=""-->
                <!--                    />-->
                <!--                </div>-->
            </template>
        </Section>

        <Section id="custom">
            <template #header> Our Approach</template>
            <template #content>
                <div class="">
                    <div class="grid">
                        <div class="flex-wrap md:flex my-4 sm:my-2">
                            <div class="flex my-auto md:w-3/5 px-0 sm:px-8">
                                <div class="p-4">
                                    <ClipboardDocumentListIcon class="w-8 h-8" />
                                </div>
                                <div>
                                    <p>
                                        Our approach is simple, whether your custom framing project
                                        is a valuable artwork by a renowned artist or your
                                        grandchild's arts and crafts project it will receive the
                                        highest attention to detail while being finished to the
                                        finest standards.
                                    </p>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-2/5 mx-auto my-6">
                                <Image src="framing/flinders.webp" alt="flinders range framed" />
                            </div>
                        </div>

                        <div class="flex-wrap md:flex my-4 sm:my-2">
                            <div class="w-1/2 md:w-2/5 mx-auto my-6">
                                <Image
                                    src="framing/selection.webp"
                                    alt="Over 1000 frames to choose from"
                                />
                            </div>
                            <div class="flex my-auto md:w-3/5 px-0 sm:px-8">
                                <div class="p-4">
                                    <ListBulletIcon class="w-8 h-8" />
                                </div>
                                <div>
                                    <p>
                                        Our custom framing service, with over 1000 frames to choose
                                        from, caters to every customer's unique preferences and
                                        needs. Just like a satisfied customer who values quality and
                                        variety, we offer an extensive selection of frames that
                                        suits any style or project.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex-wrap md:flex my-4 sm:my-2">
                            <div class="flex my-auto md:w-3/5 px-0 sm:px-8">
                                <div class="p-4">
                                    <QueueListIcon class="w-8 h-8" />
                                </div>
                                <div>
                                    <div>
                                        We offer a comprehensive selection of glass types to
                                        compliment your custom frame:
                                        <ul class="list-disc list-inside">
                                            <li>Clear Glass</li>
                                            <li>UV Clear Glass 97% Non Fading</li>
                                            <li>Non Reflective Glass</li>
                                            <li>
                                                Conservation Non reflective Glass 97% Non Fading
                                            </li>
                                            <li>Museum Glass</li>
                                            <li>Ultra-view</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-2/5 mx-auto my-6">
                                <Image
                                    src="framing/glassChoices.webp"
                                    alt="The difference between clear and ultra vue glass"
                                />
                            </div>
                        </div>

                        <div class="flex-wrap md:flex my-4 sm:my-2">
                            <div class="w-1/2 md:w-2/5 mx-auto my-6">
                                <Image
                                    src="framing/matboards.webp"
                                    alt="our massive selection of matboards"
                                />
                            </div>
                            <div class="flex my-auto md:w-3/5 px-0 sm:px-8">
                                <div class="p-4">
                                    <QueueListIcon class="w-8 h-8" />
                                </div>
                                <div>
                                    <p>
                                        Our mat boards are top quality and acid free. We use
                                        Crescent - Neilsen, Bainbridge, Alpha, Peterborough Museum
                                        Core, Artique conservation, Archival rag and Museum mats
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex-wrap md:flex my-4 sm:my-2">
                            <div class="flex my-auto md:w-3/5 px-0 sm:px-8">
                                <div class="p-4">
                                    <CheckCircleIcon class="w-8 h-8" />
                                </div>
                                <div>
                                    <p>
                                        At Framed Just For You we use all quality wood and metal
                                        picture frames, no synthetics are used. Frames are sourced
                                        from all over the world and we have over 1000 samples to
                                        choose from. Our huge selection of custom frames include
                                        brands such as Larson-Juhl and Antons Mouldings.
                                    </p>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-2/5 mx-auto my-6">
                                <Image
                                    src="framing/framing.webp"
                                    alt="more of our huge range of frames"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
