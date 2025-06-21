import { createApp } from 'vue';
// import App from './pages/Login.vue';
import router from './router';
import './bootstrap';
import '../css/app.css';
import '../css/login.css';
import '../css/main.css';

// import { createApp } from 'vue';
// import App from './App.vue';

// createApp(App).mount('#app');

// import { createApp } from 'vue';
// import App from './App.vue';

// createApp(App).mount('#app');

createApp(App).use(router).mount('#app');
