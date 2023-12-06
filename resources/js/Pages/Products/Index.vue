<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import ProductAdminCard from '@/Components/Card/Products/ProductAdminCard.vue'

defineProps({
    products: Object,
})
</script>

<template>
    <Head title="Products" />

    <AuthenticatedLayout>
        <template #header> Products</template>

        <div class="grid grid-cols-5 gap-x-4 gap-y-4">
            <ProductAdminCard v-for="product in products" :product="product" />
        </div>
    </AuthenticatedLayout>
</template>
