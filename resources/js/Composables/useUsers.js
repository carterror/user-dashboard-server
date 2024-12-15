import { ref, computed } from 'vue';
import { useForm, usePage } from '@inertiajs/vue3';

export function useUsers() {
    const page = usePage();
    const users = computed(() => page.props.users);
    const stats = computed(() => page.props.stats);
    const selectedRole = ref('');

    const filterUsers = (role) => {
        selectedRole.value = role;
        const route = role ? `/filter/${role}` : '/';
        useForm().get(route);
    };

    return {
        users,
        stats,
        selectedRole,
        filterUsers,
    };
}
