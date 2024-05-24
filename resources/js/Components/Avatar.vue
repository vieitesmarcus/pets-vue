<template>
    <div class="rounded-full w-14 h-14 relative border border-green-600 sm:mr-10 z-10" @click="expanded = !expanded"
        id="avatar">
        <img src="/images/avatar.svg" alt="avatar do usuário" class="mb-4">
        <Transition name="fade">
            <div v-show="expanded">
                <Link href="/perfil" class="py-2 px-7 rounded mt-2 -ml-5  bg-green-400 text-white font-bold">Perfil</Link>
                <form action="#" class="-ml-5 sm:-ml-5" method="post" @submit.prevent="form.post('/logout')">
                    <button type="submit" class="py-2 px-5 mt-2 rounded bg-red-400 text-white font-bold">Logout</button>
                </form>
            </div>
        </Transition>
    </div>
</template>
<script>
import { Link } from '@inertiajs/vue3';
import TheButton from './TheButton.vue';
export default {
    components: { TheButton, Link },
    data() {
        return {
            form: this.$inertia.form({
            }),
            expanded: false,
        }
    }
}
</script>

<style>
#avatar {
    cursor: pointer;
}



.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>