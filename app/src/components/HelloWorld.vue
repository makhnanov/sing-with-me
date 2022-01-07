<template>
  <div class="hello" style="text-align: left;display: flex; justify-content: center">
    <ol>
      <li v-for="item of routerItems" :key="item.index">
        <a :href="item.path" rel="noopener">{{ item.name }}</a>
      </li>
    </ol>
  </div>
</template>

<script>
export default {
  // data() {
  //   return {
  //     items: this.$router.getRoutes()
  //   }
  // },
  computed: {
    routerItems: function () {
      return this.$router.getRoutes().filter(i =>
          i.name !== 'Home'
          && i.name !== 'Next Features List'
      );
    }
  },
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ol {
  padding: 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  list-style-position: inside;
  color: white;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
