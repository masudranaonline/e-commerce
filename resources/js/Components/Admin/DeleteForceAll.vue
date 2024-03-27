<script setup>
import ConfirmationModal from "./ConfirmationModal.vue";
import DangerButton from "./DangerButton.vue";
import SecondaryButton from "./SecondaryButton.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, inject } from "vue";
import ActionButton from "./ActionButton.vue";

const removeAllItems = inject('removeAllItems');

const emit = defineEmits(["close"]);
const show = ref(false);
const props = defineProps({
    title: String,
});

const form = useForm({});

const submit = () => {
    form.delete(route("products.destroy.force.all"), {
        preserveScroll: true,
        onSuccess: () => {
            closeModal();
            emit("close");
            removeAllItems();
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
            class="rounded-none"
            variant="danger"
            @click.prevent="show = true"
        >
            <!-- <TrashIcon class="w-4 h-auto" /> -->
            Empty Trash
        </ActionButton>
        <ConfirmationModal :show="show" @close="closeModal">
            <template #title>
                delete {{ props.title }}
            </template>

            <template #content>
                Are you sure you want to delete all
                {{ props.selectedId?.length }} {{ props.title }}?
            </template>

            <template #footer>
                <SecondaryButton @click="closeModal">
                    Cancle
                </SecondaryButton>

                <DangerButton
                    class="ml-3"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    @click="submit"
                >
                    Delete
                    {{ form.processing ? "..." : "" }}
                </DangerButton>
            </template>
        </ConfirmationModal>
    </div>
</template>
