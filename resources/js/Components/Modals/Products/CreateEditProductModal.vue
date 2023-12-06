<script setup>
import CreateEditCategoryForm from '@/Components/Categories/CreateEditCategoryForm.vue'
import BaseModal from '@/Components/Modals/BaseModal.vue'
import CreateEditProductForm from '@/Components/Products/CreateEditProductForm.vue'

const props = defineProps({
    state: Boolean,
    product: Object,
})

const emits = defineEmits(['close'])

const title = props.product ? 'Edit ' + props.product.name : 'Create'

const closeModal = () => {
    emits('close')
}
</script>

<template>
    <BaseModal :state="state" @close="closeModal">
        <template #title>
            {{ title }}
        </template>
        <template #content>
            <CreateEditProductForm :product="product" @close="closeModal" />
        </template>
    </BaseModal>
</template>
