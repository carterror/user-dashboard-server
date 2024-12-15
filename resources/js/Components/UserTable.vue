<template>
    <ul>
        <li
            v-for="user in users.data"
            :key="user.id"
            class="flex justify-between items-center py-2 border-b"
        >
            <span class="text-gray-700">{{ user.name }}</span>
            <span class="text-gray-500">{{ user.email }}</span>
            <span
                class="px-3 py-1 text-sm rounded-lg"
                :class="{
                    'bg-blue-100 text-blue-600': user.role === 'manager',
                    'bg-green-100 text-green-600': user.role === 'revisor',
                    'bg-yellow-100 text-yellow-600': user.role === 'comprador',
                }"
            >
                {{ user.role }}
            </span>
        </li>
    </ul>
</template>
<script>
export default {
    props: {
        users: {
            type: Object,
            required: true,
        },
    },
};
</script>
