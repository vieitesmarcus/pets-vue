<template>
  <GuestLayout patas="true">
    <main class="flex flex-col justify-center items-center relative text-white mt-24 mb-24">
      <Illustration />

      <img src="/images/LogoBlue.svg" class="w-56 mb-11" alt="" />
      <p class="w-96 text-center text-blue-500 mb-6">
        Adotar pode mudar uma vida. Que tal buscar seu novo melhor amigo hoje?
        Vem com a gente!
      </p>
      <form action="" method="POST" class="w-[461px]" @submit.prevent="handleSubmit">
        <Input label="Nome" labelClass="text-gray-500 text-center" inputClass="bg-gray-50 text-gray-400 placeholder:text-center placeholder:text-gray-300" placeholder="Digite seu nome completo" :error="errors.name" v-model="form.name" />
        <Input label="Email" labelClass="text-gray-500 text-center" inputClass="bg-gray-50 text-gray-400 placeholder:text-center placeholder:text-gray-300" name="email" type="email" placeholder="Digite seu melhor email" :error="errors.email"
          v-model="form.email" />
        <Input label="Senha" labelClass="text-gray-500 text-center" inputClass="bg-gray-50 text-gray-400 placeholder:text-center placeholder:text-gray-300" name="password" type="password" placeholder="Digite sua senha" :error="errors.password"
          v-model="form.password" />
        <Input label="Confirme sua senha" labelClass="text-gray-500 text-center" inputClass="bg-gray-50 text-gray-400 placeholder:text-center placeholder:text-gray-300" name="password_confirm" type="password" placeholder="Repita sua senha"
          :error="errors.password_confirmation" v-model="form.password_confirmation" />
        <div class="flex justify-center my-8">
          <Button type="submit" class="w-48 font-bold">Cadastrar!</Button>
        </div>
      </form>
    </main>
    <div @click="showMessages = !showMessages" v-if="showMessages"
      class="absolute top-0 p-4 bg-green-500 right-0 w-96 text-green-900 border flex justify-center border-green-500">
      {{ mensagens.mensagem }}</div>
  </GuestLayout>
</template>

<script>
import TheButton from '../Components/TheButton.vue';
import Illustration from "../Components/Illustration.vue";
import Input from "../Components/Input.vue";
import GuestLayout from "../Layouts/GuestLayout.vue";
export default {
  components: { GuestLayout, Illustration, Input, TheButton },
  props: {
    errors: Object,
    mensagens: Object
  },
  data() {
    return {
      form: this.$inertia.form({
        name: null,
        email: null,
        password: null,
        password_confirmation: null,
      }),
      showMessages: false

    }

  },
  watch: {
    mensagens: {
      handler(newVal) {
        this.showMessages = !!newVal;
      },
      immediate: true
    }
  },
  methods: {
    async handleSubmit() {
      try {
        await this.form.post('cadastrar');
        // Limpar campos do formulário após envio bem-sucedido
        this.form.reset();
      } catch (error) {
        // Lidar com erros de envio, se necessário
        console.error('Erro ao enviar o formulário:', error);
      }
    }
  }

};
</script>

<style></style>