<script setup>
import ConfirmationModal from "@/Components/Admin/ConfirmationModal.vue";
import ActionButton from "@/Components/Admin/ActionButton.vue";
import DangerButton from "@/Components/Admin/DangerButton.vue";
import SecondaryButton from "@/Components/Admin/SecondaryButton.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, defineEmits, inject } from "vue";
import { TrashIcon } from "@heroicons/vue/24/outline";

const updateItems = inject('updateItems');

const emit = defineEmits(["open"]);
const show = ref(false);
const props = defineProps({
    title: String,
    item: Object,
});

const form = useForm({});

const submit = () => {
    form.delete(route("products.destroy", props.item?.id), {
        preserveScroll: true,
        onSuccess: (response) => {
            closeModal();
            updateItems(response.props.products);
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
                Delete {{ props.title }}
            </template>

            <template #content>
                Confirm Delete {{ props.item?.name }}?
            </template>

            <template #footer>
                <SecondaryButton @click="closeModal">
                    Cancel
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
