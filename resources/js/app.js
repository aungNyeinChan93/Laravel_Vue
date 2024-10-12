// import "./bootstrap";
import "../../resources/css/app.css";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import Layout from "../js/layouts/Layout.vue";
import {Link, Head} from "@inertiajs/vue3";
import {ZiggyVue} from "../../vendor/tightenco/ziggy";

createInertiaApp({
    title:(title)=> `My App | ${title}`,  //global Tilte
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        let page =  pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || Layout;  // default layout define
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component("Link",Link)
            .component("Head",Head)
            .mount(el);
    },
    progress: {
        // The delay after which the progress bar will appear, in milliseconds...
        delay: 1,

        // The color of the progress bar...
        color: 'white',

        // Whether to include the default NProgress styles...
        includeCSS: true,

        // Whether the NProgress spinner will be shown...
        showSpinner: true,
      },


});
