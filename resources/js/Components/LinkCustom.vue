<template>
    <Link
      class="flex justify-center items-center py-3 w-56 sm:w-96  rounded-md "
      ><slot></slot></Link>
  </template>
  
  <script>
import { Link } from '@inertiajs/vue3';

  
  export default {
    props: ['type'],
    components: { Link },
  };
  </script>
  
  <style>
  </style>