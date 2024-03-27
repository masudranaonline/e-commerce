<script setup>
import ConfirmationModal from "@/Components/Admin/ConfirmationModal.vue";
import DangerButton from "@/Components/Admin/DangerButton.vue";
import SecondaryButton from "@/Components/Admin/SecondaryButton.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, watchEffect, inject } from "vue";
import { TrashIcon } from "@heroicons/vue/24/outline";

const updateItems = inject('updateItems');

const emit = defineEmits(["close"]);
const show = ref(false);
const props = defineProps({
    title: String,
    itemsSelected: Object,
});

const form = useForm({
    id: [],
});

watchEffect(() => {
    if (show) {
        if (props.itemsSelected && props.itemsSelected.length > 0) {
            form.id = props.itemsSelected.map(item => item.id);
        } else {
            // Reset form.id if itemsSelected is empty or not available
            form.id = [];
        }
    }
});

const submit = () => {
    form.delete(route("products.destroy.bulk"), {
        preserveScroll: true,
        onSuccess: (response) => {
            closeModal();
            emit("close");
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
        <DangerButton
            class="rounded-none"
            @click.prevent="show = true"
        >
            <TrashIcon class="w-4 h-auto" />
        </DangerButton>
        <ConfirmationModal :show="show" @close="closeModal">
            <template #title>
                Delete Selected {{ props.title }}
            </template>

            <template #content>
                Confirm Delete
                {{ props.selectedId?.length }} {{ props.title }}?
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
