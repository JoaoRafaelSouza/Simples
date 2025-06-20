<template>
  <div class="layout">
    <button class="menu-toggle" @click="toggleSidebar" aria-label="Toggle Menu">
      &#9776;
    </button>
    <Sidebar :visible="sidebarVisible" @close="sidebarVisible = false" />
    <div class="main-content" :class="{ 'sidebar-open': sidebarVisible }">
      <Topbar :usuario="usuario" />
      <router-view />
    </div>
  </div>
</template>

<script>
import Sidebar from './Sidebar.vue'
import Topbar from './Topbar.vue'

export default {
  components: { Sidebar, Topbar },
  data() {
    return {
      sidebarVisible: false,
      usuario: {
        nome: 'João Rafael',
        foto: '/images/usuario.png'
      }
    }
  },
  methods: {
    toggleSidebar() {
      this.sidebarVisible = !this.sidebarVisible;
    }
  }
}
</script>

<style scoped>
.layout {
  display: flex;
  min-height: 100vh;
}

/* Botão hambúrguer para mobile/tablet */
.menu-toggle {
  display: none;
  position: fixed;
  top: 10px;
  left: 10px;
  z-index: 1001;
  font-size: 28px;
  background: transparent;
  border: none;
  cursor: pointer;
}

/* Espaço para menu e conteúdo */
.main-content {
  flex: 1;
  padding: 20px;
  transition: margin-left 0.3s ease;
}

/* Quando sidebar está aberto, empurra conteúdo */
.main-content.sidebar-open {
  margin-left: 250px;
}

/* Responsividade */

@media (max-width: 1024px) {
  .menu-toggle {
    display: block;
  }
  .layout {
    flex-wrap: nowrap;
  }
  .main-content {
    margin-left: 0;
  }
}
</style>
