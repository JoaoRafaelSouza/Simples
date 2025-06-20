<template>
  <aside :class="['sidebar', { 'visible': visible }]">
    <div 
      class="close-btn" 
      @click="$emit('close')" 
      @keyup.enter="$emit('close')" 
      role="button" 
      tabindex="0" 
      aria-label="Fechar Menu"
    >
      ×
    </div>
    <h2 class="logo">Meu Sistema</h2>
    <nav>
      <ul>
        <li><router-link to="/dashboard" @click="$emit('close')">Dashboard</router-link></li>
        <li><router-link to="/rh" @click="$emit('close')">RH</router-link></li>
        <li><router-link to="/contabilidade" @click="$emit('close')">Contabilidade</router-link></li>
        <li><router-link to="/configuracoes" @click="$emit('close')">Configurações</router-link></li>
      </ul>
    </nav>
  </aside>
</template>

<script>
export default {
  props: ['visible']
}
</script>
