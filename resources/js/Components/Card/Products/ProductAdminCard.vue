<script setup>
import { Link } from '@inertiajs/vue3'
import CreateEditProductForm from '@/Components/Products/CreateEditProductForm.vue'
import CreateEditProductModal from '@/Components/Modals/Products/CreateEditProductModal.vue'
import { ref } from 'vue'

defineProps({
    product: Object,
})

const createEditState = ref(false)
const showState = ref(false)

const toggleCreateEdit = () => {
    createEditState.value = !createEditState.value
}

const toggleShow = () => {
    showState.value = !showState.value
}
</script>

<template>
    <div>
        <div class="relative">
            <div class="relative h-44 w-full overflow-hidden rounded-lg">
                <img
                    :src="product.file.path"
                    alt="Product Image"
                    class="h-full w-full object-cover object-center"
                />
            </div>
            <div class="relative mt-4">
                <h3 class="text-lg font-medium text-gray-900">{{ product.title }}</h3>
                <h3 class="text-sm font-medium text-gray-600">{{ product.category.name }}</h3>
            </div>
            <div
                class="absolute inset-x-0 top-0 flex h-44 items-end justify-end overflow-hidden rounded-lg p-4"
            >
                <div
                    aria-hidden="true"
                    class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"
                />
                <p class="relative text-lg font-semibold text-white">${{ product.price }}</p>
            </div>
        </div>
        <div class="mt-6">
            <div
                @click="toggleCreateEdit"
                class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200"
            >
                Edit
            </div>
        </div>
    </div>

    <CreateEditProductModal :state="createEditState" @close="toggleCreateEdit" :product="product" />
</template>
