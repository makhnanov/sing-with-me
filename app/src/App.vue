<template>
  <div id="nav" style="margin-bottom: 20px">
    <div>
      <router-link to="/">Sing With Me</router-link>
    </div>
    <div>
      <router-link to="/features">Changelog</router-link>
    </div>
  </div>
  <router-view/>
</template>

<style>
.fist {
  /*background-color: #ccc;*/
  width: 33.33%;
  height: auto;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  padding-top: 20px;
  height: 40px;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
}
#nav a {
  font-weight: bold;
  color: #fff;
}
#nav a.router-link-exact-active {
  color: #42b983;
}
body {
  padding: 0;
  margin: 0;
}
</style>
