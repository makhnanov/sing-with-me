<template>
  <div class="container">
    <button @click="replaceRouter">BTN</button>
  </div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
    }
  },
  methods: {
    replaceRouter() {
      this.$router.replace('qq');
    }
  }
}
</script>

<style>
</style>