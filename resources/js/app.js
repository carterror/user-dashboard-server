import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';

import '../css/app.css';
import 'tailwindcss'

createInertiaApp({
    resolve: async (name) => {
        const module = await import(`./Pages/${name}.vue`);
        return module.default;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
