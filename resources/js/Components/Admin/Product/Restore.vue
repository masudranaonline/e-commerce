<script setup>
import ConfirmationModal from "../ConfirmationModal.vue";
import ActionButton from "../ActionButton.vue";
import PrimaryButton from "../PrimaryButton.vue";
import SecondaryButton from "../SecondaryButton.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, defineEmits, inject } from "vue";
import { ArrowUturnLeftIcon } from "@heroicons/vue/24/outline";

const removeItem = inject('removeItem');

const emit = defineEmits(["open"]);
const show = ref(false);
const props = defineProps({
    title: String,
    item: Object,
});

const form = useForm({});

const submit = () => {
    form.post(route("products.restore",  props.item?.id), {
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
            variant="success"
            @click.prevent="(show = true), emit('open')"
        >
            <ArrowUturnLeftIcon class="w-4 h-auto" />
        </ActionButton>
        <ConfirmationModal :show="show" @close="closeModal">
            <template #title>
                Restore {{ props.title }}
            </template>

            <template #content>
                Are you sure you want to restore {{ props.item?.name }}?
            </template>

            <template #footer>
                <SecondaryButton @click="closeModal">
                    Cancle
                </SecondaryButton>

                <PrimaryButton
                    class="ml-3"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    @click="submit"
                >
                    Restore
                    {{ form.processing ? "..." : "" }}
                </PrimaryButton>
            </template>
        </ConfirmationModal>
    </div>
</template>
