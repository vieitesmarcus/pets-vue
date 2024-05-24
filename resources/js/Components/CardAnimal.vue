<template>
    <div class=" w-96 flex gap-4 card p-6 bg-gray-50 rounded-md" :key="id">
        <div>
            <img :src="`/images/pets/${photo}`" :alt="photo">
        </div>
        <div class="flex flex-col justify-between">
            <div>
                <p class="text-blue-500 font-semibold text-base">{{ name }}</p>
                <p class="text-gray-500 text-sm">{{ age }} anos</p>
                <p class=" text-gray-500 text-sm">{{ size }}</p>
                <p class=" text-gray-500 text-sm">{{ informations }}</p>
            </div>
            <div>
                <p class="text-gray-500 text-xs">{{ city }}</p>
                <p class="text-sm text-gray-500 text-[10px]"> <a :href="'#' + cellphone">Tel: </a>Falar com
                    responsável
                </p>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        id: Number,
        name: String,
        age: Number,
        size: String,
        informations: String,
        city: String,
        cellphone: String,
        photo: String,

    }
}
</script>

<style></style>