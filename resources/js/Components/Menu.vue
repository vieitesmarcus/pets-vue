<template>
  <nav class="">
    <img src="/images/Forma1.svg" alt="" class="absolute min-w-[364px]" />
    <div class="flex items-center pl-10 md:pl-36 relative pt-16 ">
      <Link href="/index">
        <img src="/images/Logo.svg" alt="Logo do Adopet" class="mr-12 " />
      </Link>
      <Link href="/" class="mr-8">
        <img src="/images/Casa.svg" alt="Logo do link do página index"
      /></Link>
      <Link href="/mensagem">
        <img
          src="/images/Mensagens.svg"
          alt="Logo do link para página de contato"
      /></Link>
    </div>
  </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3'
export default {
components:{Link}
}
</script>

<style>
</style>