import { createApp } from 'vue'
import App from './App.vue'
import VueGtag from 'vue-gtag-next';
import router from './router'
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap";

const app = createApp(App);

if ('development' !== process.env.NODE_ENV) {
    app.use(VueGtag, {
        property: {
            id: 'G-R4GPP0R38Q'
        }
    });
}

app.use(router);
app.mount('#app')
