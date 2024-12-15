<template>
    <div class="flex items-center mb-6 space-x-4">
        <label for="role" class="text-lg">Filtrar por rol:</label>
        <select
            v-model="selected"
            @change="emitFilter"
            class="px-4 py-2 border rounded-lg shadow-sm"
        >
            <option value="">Todos</option>
            <option value="manager">Manager</option>
            <option value="revisor">Revisor</option>
            <option value="comprador">Comprador</option>
        </select>
    </div>
</template>

<script>
import { ref, watch } from 'vue';

export default {
    props: {
        selectedRole: {
            type: String,
            default: '',
        },
    },
    emits: ['filter'],
    setup(props, { emit }) {
        const selected = ref(props.selectedRole);

        const emitFilter = () => {
            emit('filter', selected.value);
        };

        watch(() => props.selectedRole, (newValue) => {
            selected.value = newValue;
        });

        return {
            selected,
            emitFilter,
        };
    },
};
</script>
