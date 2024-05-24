<template>
    <GuestLayout patas="true">
        <main class="flex flex-col justify-center items-center relative text-white mt-24 mb-80">
            <Illustration />

            <img src="/images/LogoBlue.svg" class="w-56 mb-11" alt="" />
            <p class="w-96 text-center text-blue-500 mb-6">
                Adotar pode mudar uma vida. Que tal buscar seu novo melhor amigo hoje?
                Vem com a gente!
            </p>
            <form method="POST" action="#" class="w-[461px]" @submit.prevent="form.post('/login')">
                <Input label="Email" labelClass="text-gray-500 text-center"
                    inputClass="bg-gray-50 text-gray-400 placeholder:text-center placeholder:text-gray-300" name="email"
                    type="text" placeholder="Digite seu melhor email" v-model="form.email" :error="errors.email" />
                <Input label="Senha" labelClass="text-gray-500 text-center"
                    inputClass="bg-gray-50 text-gray-400 placeholder:text-center placeholder:text-gray-300" name="password"
                    type="password" placeholder="Digite sua senha" v-model="form.password" :error="errors.password" />
                <div class="flex justify-center my-8">
                    <TheButton type="submit" class="w-48 font-bold">Entrar!</TheButton>
                </div>
            </form>
        </main>
    </GuestLayout>
</template>
  
<script>
import TheButton from '../Components/TheButton.vue';
import Illustration from "../Components/Illustration.vue";
import Input from "../Components/Input.vue";
import GuestLayout from "../Layouts/GuestLayout.vue";
export default {
    props: {
        errors: Object,
    },
    components: { GuestLayout, Illustration, Input, TheButton },
    data() {
        return {
            form: this.$inertia.form({
                email: null,
                password: null,
            }),
        }
    }
};
</script>
  
<style></style>