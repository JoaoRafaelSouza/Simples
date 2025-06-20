<template>
  <div class="flex justify-center items-center h-screen">
    <form @submit.prevent="submit" class="bg-white p-8 rounded shadow-md w-full max-w-sm">
      <h2 class="text-2xl font-bold mb-6 text-center">Entrar</h2>
      
      <div class="mb-4">
        <label class="block mb-1">Email</label>
        <input v-model="email" type="email" required class="w-full p-2 border rounded" />
      </div>

      <div class="mb-4">
        <label class="block mb-1">Senha</label>
        <input v-model="password" type="password" required class="w-full p-2 border rounded" />
      </div>

      <div class="flex justify-between items-center mb-6">
        <a href="#" class="text-sm text-blue-500 hover:underline">Esqueci minha senha</a>
      </div>

      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">
        Entrar
      </button>

      <p v-if="error" class="text-red-500 mt-4 text-sm text-center">{{ error }}</p>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: '',
      error: ''
    };
  },
  methods: {
    async submit() {
      try {
        const response = await axios.post('/api/login', {
          email: this.email,
          password: this.password
        });
        window.location.href = '/dashboard'; // redireciona após login
      } catch (e) {
        this.error = 'Credenciais inválidas';
      }
    }
  }
};
</script>
