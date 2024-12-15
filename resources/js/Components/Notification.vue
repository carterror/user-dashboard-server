<template>
    <div v-if="message" class="fixed top-4 right-4 bg-green-100 text-green-800 px-4 py-2 rounded-lg shadow">
        {{ message }}
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: this.$page.props.message || null,
        };
    },
};
</script>
