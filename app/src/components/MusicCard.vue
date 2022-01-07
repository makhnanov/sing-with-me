<template>
  <div class="card" @click="showHide()">
    <img src="https://imgcomfort.com/Userfiles/Upload/images/illustration-geiranger.jpg" width="220">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <div class="actions" v-bind:class="{ 'd-none': !visibleActions }">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MusicCard',
  data() {
    return {
      visibleActions: false
    }
  },
  methods: {
    showHide() {
      this.visibleActions = !this.visibleActions;
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
