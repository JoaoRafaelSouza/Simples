<template>
  <div class="login-container">
    <h1>Login</h1>
    <form @submit.prevent="fazerLogin">
      <input v-model="email" type="email" placeholder="Email" required>
      <input v-model="password" type="password" placeholder="Senha" required>
      <button type="submit">Entrar</button>
      <p v-if="erro" style="color:red">{{ erro }}</p>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: '',
      erro: ''
    };
  },
  methods: {
    async fazerLogin() {
      try {
        const response = await fetch('/login', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({
            email: this.email,
            password: this.password
          })
        });

        const data = await response.json();
        if (data.success) {
          alert('Login realizado!');
          // redirecionar ou armazenar token
        } else {
          this.erro = data.message;
        }
      } catch (error) {
        this.erro = 'Erro de conexão com o servidor.';
      }
    }
  }
};
</script>
