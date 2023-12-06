<script setup>
import { ref } from 'vue'
import { PencilIcon, EyeIcon } from '@heroicons/vue/24/outline/index.js'
import CreateEditCategoryModal from '@/Components/Modals/CreateEditCategoryModal.vue'
import ShowCategoryModal from '@/Components/Modals/ShowCategoryModal.vue'

defineProps({
    category: Object,
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
    <div class="relative overflow-hidden rounded-xl shadow-sm h-52">
        <div>
            <div class="self-stretch flex-grow overflow-hidden">
                <div class="aspect-1">
                    <img
                        :src="category.file.path"
                        :alt="category.name"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    />
                </div>
            </div>

            <div class="absolute inset-0 flex justify-end z-30">
                <div @click="toggleCreateEdit" class="bg-white/50 hover:bg-primary-100 p-2 h-fit">
                    <PencilIcon class="w-6 h-6" />
                </div>
                <div @click="toggleShow" class="bg-white/50 hover:bg-primary-100 p-2 h-fit">
                    <EyeIcon class="w-6 h-6" />
                </div>
            </div>
            <div class="absolute inset-0 flex flex-col justify-end z-20">
                <div
                    class="relative text-white p-4 font-bold bg-gradient-to-b from-transparent to-black/75 z-0"
                >
                    <div class="text-sm z-50">{{ category.name }}</div>
                </div>
            </div>
        </div>
    </div>

    <CreateEditCategoryModal
        :state="createEditState"
        @close="toggleCreateEdit"
        :category="category"
    />

    <ShowCategoryModal :state="showState" @close="toggleShow" :category="category" />
</template>
