<script setup>
import { useForm, router } from '@inertiajs/vue3'
import { computed, onMounted, ref } from 'vue'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
import TextInput from '@/Components/Inputs/TextInput.vue'
import TextAreaInput from '@/Components/Inputs/TextAreaInput.vue'
import ImageUpload from '@/Components/Inputs/ImageUpload.vue'
import Seperator from '@/Components/Form/Seperator.vue'
import DangerButton from '@/Components/Button/DangerButton.vue'

const props = defineProps({
    product: {
        type: Object,
    },
})

const emits = defineEmits(['close'])

const isEditing = computed(() => !!props.product)
const path = props.product ? props.product.file.path : ''
const errors = ref({})

const form = useForm({
    title: null,
    description: null,
    file: null,
})

const submit = () => {
    !isEditing.value
        ? form.post(route('categories.store'), {
              onError: (errors) => handleError(errors),
              onSuccess: () => handleSuccess(),
          })
        : form.post(route('categories.update', props.product), {
              onError: (errors) => handleError(errors),
              onSuccess: () => handleSuccess(),
          })
}

const deleteCategory = () => {
    router.delete(route('categories.delete', props.product), {
        onBefore: () => confirm('Are you sure you want to delete this product?'),
        onSuccess: () => handleSuccess(),
    })
}

const handleSuccess = () => {
    emits('close')
}

const handleError = (errs) => {
    for (const key in errs) {
        errors.value[key] = errs[key]
    }
}

onMounted(() => {
    if (isEditing.value) {
        form.title = props.product.title
        form.description = props.product.description
    }
})
</script>

<template>
    <div class="flex justify-center">
        <form @submit.prevent="submit" class="w-3/4 my-10">
            <Seperator>
                <TextInput v-model="form.title" type="text" label="Name" :error="errors['title']" />
            </Seperator>
            <Seperator>
                <TextAreaInput
                    v-model="form.description"
                    label="Description"
                    :error="errors['description']"
                />
            </Seperator>
            <Seperator>
                <ImageUpload v-model="form.file" :current-image="path" :error="errors['file']" />
            </Seperator>

            <div class="gap-x-2 flex">
                <PrimaryButton type="submit" as="button">
                    {{ isEditing ? 'Update' : 'Add' }}
                </PrimaryButton>
                <DangerButton v-if="isEditing" as="button" @click.prevent="deleteCategory">
                    Delete
                </DangerButton>
            </div>
        </form>
    </div>
</template>
