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