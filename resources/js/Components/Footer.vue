<template>
  <div class="flex justify-center" v-if="pets">
    <img src="/images/Pets.svg" alt="" class="-mb-10" />
  </div>
  <footer class="bg-[#36D6AD] flex justify-center relative">
    <p class="text-white p-6">2022 - Desenvolvido por Alura.</p>
  </footer>
</template>

<script>
export default {
  props: ["pets"]
}
</script>

<style></style>