<template>
    <AuthLayout>
        <main class="flex flex-col justify-center items-center relative mt-24 mb-20 ">
            <Illustration />
            <p class="w-96 md:w-[420px] text-center text-blue-500">Esse é o perfil que aparece para responsáveis ou ONGs que recebem sua mensagem.</p>
            <form action="" class="w-96  md:w-[552px]  bg-gray-50 p-7 rounded-xl mt-9" enctype="multipart/form-data" >
                <p class="text-center text-blue-500 font-bold mb-4">Perfil</p>
                <div class="mb-2">
                    <label for="photo" class="text-blue-500 font-bold">Foto</label>
                    <div class="flex flex-col gap-1 items-center justify-center" @click="fileSystemHandle">
                        <img src="/images/avatar.svg" alt="" class="w-20">
                        <span class="text-red-500">Clique na foto para editar</span>
                    </div>
                    <input type="file" id="photo" name="photo" class="invisible" ref="photoInput">
                </div>
                <Input label="Nome" labelClass="text-blue-500" inputClass="bg-white shadow-sm text-left"
                    placeholder="Insira seu nome completo" name="nome" />
                <Input label="Telefone" labelClass="text-blue-500" inputClass="bg-white shadow-sm text-left"
                    placeholder="Insira seu telefone e/ou whatsapp" name="telefone"/>
                <Input label="Cidade" labelClass="text-blue-500" inputClass="bg-white shadow-sm text-left"
                    placeholder="Por qual animal você se interessou?" name="cidade"/>
                <div class="mb-2">
                    <label for="sobre" class="font-bold text-blue-500">Sobre</label>
                    <textarea class="w-full p-3 shadow-sm rounded-sm min-h-52"
                        placeholder="" id="sobre" name="sobre"></textarea>
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
    methods:{
        fileSystemHandle(event){
            this.$refs.photoInput.click()
        }
    }
}

</script>
<style></style>