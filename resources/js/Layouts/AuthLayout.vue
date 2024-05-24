<template>
  <div class="container min-w-[366px] m-auto flex flex-col justify-between relative">
    <div class="flex justify-between items-end">
      <Menu />
      <Avatar />
    </div>
    <slot></slot>
    <Footer :pets="pets" />
  </div>
</template>

<script>
import Avatar from '../Components/Avatar.vue';
import Footer from '../Components/Footer.vue';
import Menu from '../Components/Menu.vue'
export default {
  components: { Menu, Footer, Avatar },
  props: {
    pets: Object,
  }
}
</script>

<style></style>