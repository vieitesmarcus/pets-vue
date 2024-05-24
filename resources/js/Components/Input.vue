<template>
  <div class="mb-2 relative">
    <label :for="name" :class="[' font-bold block ', labelClass]">{{ label }}</label>
    <input :type="type ?? 'text'" :id="name" :name="name"
      :class="['rounded-md border-b w-full p-3 ', inputClass]"
      :placeholder="placeholder" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" />
    <span v-if="error" class="text-red-500 rounded-sm text-center">{{ error }}</span>
  </div>
</template>

<script>
export default {
  props: {
    id: String,
    label: String,
    name: String,
    type: String,
    placeholder: String,
    labelClass: String,
    inputClass: String,
    modelValue: String,
    error: String,
  },
  emits: ['update:modelValue']
}
</script>

<style></style>