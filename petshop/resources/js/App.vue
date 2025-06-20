<template>
  <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <form @submit.prevent="submit" class="bg-white p-6 sm:p-8 rounded shadow-md w-full max-w-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Entrar</h2>

      <div class="mb-4">
        <label class="block mb-1 text-sm text-gray-700">Email</label>
        <input
          v-model="email"
          type="email"
          required
          class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <div class="mb-4">
        <label class="block mb-1 text-sm text-gray-700">Senha</label>
        <input
          v-model="password"
          type="password"
          required
          class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <div class="flex justify-end mb-6">
        <a href="#" class="text-sm text-blue-500 hover:underline">Esqueci minha senha</a>
      </div>

      <button
        type="submit"
        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-full"
      >
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
        localStorage.setItem('token', response.data.token); // se usar token
        this.$router.push('/dashboard');
      } catch (e) {
        this.error = 'Credenciais inválidas';
      }
    }
  }
};
</script>
