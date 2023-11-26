<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import Section from '@/Components/Section.vue'

defineProps({
    items: Object,
})
</script>

<template>
    <Head title="Store" />

    <PrimaryLayout>
        <Section>
            <template #header> </template>
            <template #content>
                <div v-for="item in items.data">
                    <div class="bg-white">
                        <div class="">
                            <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
                                <img :src="item.images[0]" />

                                <!-- Product info -->
                                <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
                                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                                        {{ item.name }}
                                    </h1>

                                    <div class="mt-3">
                                        <h2 class="sr-only">Product information</h2>
                                        <p class="text-3xl tracking-tight text-gray-900">
                                            ${{ item.price }}
                                        </p>
                                    </div>

                                    <div class="mt-6">
                                        <h3 class="sr-only">Description</h3>

                                        <div
                                            class="space-y-6 text-base text-gray-700"
                                            v-html="item.description"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
