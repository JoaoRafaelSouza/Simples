<template>
  <header class="topbar">
    <div class="usuario-info">
      <img :src="usuario.foto" alt="Foto do usuário" class="foto" />
      <span>{{ usuario.nome }}</span>
      <button @click="logout" class="btn-logout" title="Sair">Sair</button>
    </div>
  </header>
</template>

<script>
export default {
  props: ['usuario'],
  methods: {
    logout() {
      localStorage.removeItem('token');
      this.$router.push('/login');
    }
  }
}
</script>

<style scoped>
.topbar {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  background: #f4f4f4;
  padding: 10px 20px;
  border-bottom: 1px solid #ccc;
}

.usuario-info {
  display: flex;
  align-items: center;
  gap: 10px;
}

.foto {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
}

.btn-logout {
  cursor: pointer;
  border: none;
  background: transparent;
  color: #333;
  font-weight: bold;
  padding: 5px 10px;
  border-radius: 4px;
  transition: background-color 0.2s ease;
}

.btn-logout:hover {
  background-color: #ddd;
}
</style>