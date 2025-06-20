import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import './bootstrap';

// import { createApp } from 'vue';
// import App from './App.vue';

// createApp(App).mount('#app');

// import { createApp } from 'vue';
// import App from './App.vue';

// createApp(App).mount('#app');

createApp(App).use(router).mount('#app');
