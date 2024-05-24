<template>
    <AuthLayout>
        <main class="flex flex-col justify-center items-center relative mt-24 mb-20 ">
            <Illustration />
            <p class="w-96 md:w-[420px] text-center text-blue-500">Envie uma mensagem para a pessoa ou instituição que
                está
                cuidando
                do animal:</p>
            <form action="" class="w-96  md:w-[552px]  bg-gray-50 p-7 rounded-xl mt-9">
                <Input label="Nome" labelClass="text-blue-500" inputClass="bg-white shadow-sm text-left"
                    placeholder="Insira seu nome completo" />
                <Input label="Telefone" labelClass="text-blue-500" inputClass="bg-white shadow-sm text-left"
                    placeholder="Insira seu telefone e/ou whatsapp" />
                <Input label="Nome do animal" labelClass="text-blue-500" inputClass="bg-white shadow-sm text-left"
                    placeholder="Por qual animal você se interessou?" />
                <div class="mb-2">
                    <label for="mensagem" class="font-bold text-blue-500">Mensagem</label>
                    <textarea class="w-full p-3 shadow-sm rounded-sm min-h-52" id="mensagem"
                        placeholder="Escreva sua mensagem"></textarea>
                </div>
                <div class="flex justify-center ">
                    <TheButton type="button" class="text-white w-32 py-1 font-semibold">Enviar</TheButton>
                </div>
            </form>
        </main>
    </AuthLayout>
</template>

<script>
import TheButton from '../Components/TheButton.vue';
import Illustration from '../Components/Illustration.vue'
import Input from '../Components/Input.vue';
import AuthLayout from '../Layouts/AuthLayout.vue'
export default {
    components: { AuthLayout, Illustration, Input, TheButton },
    
}

</script>
<style></style>