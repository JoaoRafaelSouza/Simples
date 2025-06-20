<template>
  <div class="min-h-screen flex items-center justify-center bg-gray-100">
    <form @submit.prevent="login" class="bg-white p-6 rounded shadow-md w-full max-w-sm">
      <h2 class="text-xl mb-4 font-semibold text-center">Login</h2>
      <input v-model="email" type="email" placeholder="E-mail" class="input mb-3" required />
      <input v-model="password" type="password" placeholder="Senha" class="input mb-3" required />
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">Entrar</button>
      <p class="text-sm mt-2 text-center">
        <a href="#" class="text-blue-500 hover:underline">Esqueci minha senha</a>
      </p>
      <p v-if="error" class="text-red-500 text-sm mt-2 text-center">{{ error }}</p>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios'

const email = ref('')
const password = ref('')
const error = ref('')

const login = async () => {
  error.value = ''
  try {
    const response = await axios.post('/api/login', {
      email: email.value,
      password: password.value
    })
    console.log(response.data)
    // redirecionar ou salvar token
  } catch (err) {
    error.value = 'Email ou senha inválidos'
  }
}
</script>

<style scoped>
.input {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ccc;
  border-radius: 0.375rem;
}
</style>
