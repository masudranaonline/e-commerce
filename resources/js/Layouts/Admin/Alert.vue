<script setup>
    import { ref, onMounted } from 'vue';

    // Props received from Laravel controller
    const props = defineProps({
        successMessage: String,
        errorMessage: String,
    });

    onMounted(() => {
        if (props.successMessage) {
            Toastify({
                text: props.successMessage,
                duration: 3000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function() {} // Callback after click
            }).showToast();
        }

        if (props.errorMessage) {
            Toastify({
                text: props.errorMessage,
                duration: 3000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                },
                onClick: function() {} // Callback after click
            }).showToast();
        }
    });
</script>

<template>
    <!-- Your component's template -->
</template>
