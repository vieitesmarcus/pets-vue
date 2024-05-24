<template>
    <AuthLayout>
        <main class="flex flex-col justify-center items-center relative mt-24 mb-20">
            <p class="w-96 text-blue-500 text-center mb-10">Olá! Veja os amigos disponíveis para adoção!</p>
            <section class="cards grid lg:grid-cols-3 gap-4">
                <CardAnimal v-for="animal of animals.data" :id="animal.id" :name="animal.name" :age="animal.age"
                    :size="animal.size" :informations="animal.informations" :city="animal.city" :cellphone="animal.cellphone" :photo="animal.photo" />
            </section>
        </main>
    </AuthLayout>
</template>

<script>
import CardAnimal from '../Components/CardAnimal.vue';
import AuthLayout from '../Layouts/AuthLayout.vue';

export default {

    components: { AuthLayout, CardAnimal },
    props: {
        animals: Object,
    }
}

</script>

<style></style>