// resources/js/router.js
import { createRouter, createWebHistory } from 'vue-router';
import Dashboard from './pages/views/Dashboard.vue';
import RH from './pages/views/RH.vue';
import Contabilidade from './pages/views/Contabilidade.vue';
import Configuracoes from './pages/views/Configuracoes.vue';
import Login from './pages/Login.vue';

const routes = [
    { path: '/', redirect: '/dashboard' },
  { path: '/login', component: Login },
  { path: '/dashboard', component: Dashboard },
  { path: '/rh', component: RH },
  { path: '/contabilidade', component: Contabilidade },
  { path: '/configuracoes', component: Configuracoes }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  const publicPages = ['/login'];
  const authRequired = !publicPages.includes(to.path);
  const loggedIn = localStorage.getItem('token'); // exemplo: token salvo no login

  if (authRequired && !loggedIn) {
    return next('/login');
  }

  next();
});

export default router;