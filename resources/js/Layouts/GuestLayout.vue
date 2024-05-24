<template>
  <div class="container min-w-[366px] m-auto flex flex-col justify-between relative">
    <img src="/images/Patas.svg" alt="" class="absolute top-0 right-0" v-if="patas">
      <Menu />
    <slot></slot>
    <Footer :pets="pets" />
  </div>
</template>

<script>
import Footer from '../Components/Footer.vue';
import Menu from '../Components/Menu.vue'
export default {
  components: { Menu, Footer },
  props: ['patas', 'pets']
}
</script>

<style></style>