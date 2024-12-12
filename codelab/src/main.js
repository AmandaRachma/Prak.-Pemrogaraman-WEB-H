// Import createApp from Vue
import { createApp } from 'vue';

// Import component App
import App from './App.vue';

// Import config router
import router from './router';

// Create App Vue
const app = createApp(App);

// Use "router" in Vue with plugin "use"
app.use(router);

// Mount the app to the DOM
app.mount('#app');
