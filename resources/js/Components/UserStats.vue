<template>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <div
            v-for="stat in stats"
            :key="stat.role"
            class="flex flex-col items-center bg-gray-50 p-4 rounded-lg shadow"
        >
            <span class="text-lg font-semibold">{{ stat.role }}</span>
            <span class="text-3xl text-indigo-600">{{ stat.count }}</span>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        stats: {
            type: Array,
            required: true,
        },
    },
};
</script>
