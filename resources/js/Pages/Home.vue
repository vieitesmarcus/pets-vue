<script>
import Illustration from "../Components/Illustration.vue";
import LinkCustom from "../Components/LinkCustom.vue";
import GuestLayout from "../Layouts/GuestLayout.vue";
export default {
  components: { Illustration, GuestLayout, LinkCustom },
};
</script>

<template>
    <GuestLayout class="bg-blue-500" :pets="true">
      <main
        class="flex flex-col justify-center items-center relative text-white mt-24 mb-20"
      >
        <Illustration />
        <img src="/images/Logo.svg" class="w-56 mb-11" alt="" />
        <h1 class="text-2xl mb-6">Boas-vindas!</h1>
        <p class="w-96 text-center mb-6">
          Adotar pode mudar uma vida. Que tal buscar seu novo melhor amigo hoje?
          Vem com a gente!
        </p>

        <LinkCustom href="/login" class="mb-3 bg-red-400 hover:bg-red-500">Já tenho conta</LinkCustom>
        <LinkCustom href="/cadastrar" class="bg-red-400 hover:bg-red-500">Quero me cadastrar</LinkCustom>
      </main>
    </GuestLayout>
</template>

<style>
</style>