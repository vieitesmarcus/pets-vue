<template>
  <button :type="type??'button'"
    class="flex justify-center items-center py-3 w-96 rounded-md bg-red-400 hover:bg-red-500"
    ><slot></slot></button>
</template>

<script>

export default {
  props: ['type'],
  components: {  },
};
</script>

<style>
</style>