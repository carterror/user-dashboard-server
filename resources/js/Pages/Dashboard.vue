<template>
    <div class="p-6 bg-gray-100 min-h-screen">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

        <!-- Filtros -->
        <UserFilter :selected-role="selectedRole" @filter="filterUsers" />

        <!-- Listado de Usuarios -->
        <div class="bg-white shadow-md rounded-lg p-4 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Listado de Usuarios</h2>
            <UserTable :users="users" />
        </div>

        <!-- Estadísticas -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-2xl font-semibold mb-4">Estadísticas</h2>
            <UserStats :stats="stats" />
        </div>
    <Notification />
    </div>

</template>

<script>
import { ref, computed } from 'vue';
import { usePage, useForm } from '@inertiajs/vue3';
import UserFilter from '../Components/UserFilter.vue';
import UserTable from '../Components/UserTable.vue';
import UserStats from '../Components/UserStats.vue';
import { useUsers } from '../Composables/useUsers';
import Notification from '../Components/Notification.vue';

export default {
    components: { UserFilter, UserTable, UserStats, Notification },
    setup() {
        // Estado reactivo
        const page = usePage();
        const { users, stats, selectedRole, filterUsers } = useUsers();

        return {
            users,
            stats,
            selectedRole,
            filterUsers,
        };
    },
};
</script>
