<script setup>

import ConfirmationModal from "../ConfirmationModal.vue";
import ActionButton from "../ActionButton.vue";
import DangerButton from "../DangerButton.vue";
import SecondaryButton from "../SecondaryButton.vue";
// import 

import { useForm } from "@inertiajs/vue3";
import { ref, defineEmits, inject } from "vue";
import { TrashIcon } from "@heroicons/vue/24/outline";

// const removeItem = inject('removeItem');

const emit = defineEmits(["open"]);
const show = ref(false);
const props = defineProps({
    title: String,
    item: Object,
});

const form = useForm({});

const submit = () => {
    form.delete(route("product.forceDelete", props.item?.id), {
        preserveScroll: true,
        onSuccess: () => {
            closeModal();
            removeItem(props.item?.id);
        },
        onError: () => null,
        onFinish: () => null,
    });
};

const closeModal = () => {
    show.value = false;
};
</script>
<template>
    <div>
        <ActionButton
            variant="danger"
            @click.prevent="(show = true), emit('open')"
        >
            <TrashIcon class="w-4 h-auto" />
        </ActionButton>
        <ConfirmationModal :show="show" @close="closeModal">
            <template #title>
                delete {{ props.title }}
            </template>

            <template #content>
                <h1 class="font-bold text-2xl">Are you sure you want to delete {{ props.item?.name }}?</h1>
            </template>

            <template #footer>
                <SecondaryButton @click="closeModal">
                    cancle
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    @click="submit"
                >
                    delete
                    {{ form.processing ? "..." : "" }}
                </DangerButton>
            </template>
        </ConfirmationModal>
    </div>
</template>
