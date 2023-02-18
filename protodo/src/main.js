import { createApp } from 'vue';
import App from './App.vue';
import CartModal from "./components/common/CartModal.vue";

const app = createApp(App);
app.mount('#app');
app.component("CartModal",CartModal); // Global registration
// CookieModal
