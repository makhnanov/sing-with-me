<template>
  <div class="container">
    <div class="header row">
      <div v-bind:class="{ active: 'castle' === current }" class="col-md-2 ctrl-btn btn btn-outline-dark" v-on:click="changeImg('castle')">
        Замок / Castle
      </div>
      <div v-bind:class="{ active: 'tower' === current }" class="col-lg-2 ctrl-btn btn btn-outline-dark" v-on:click="changeImg('tower')">
        Башня / Tower
      </div>
      <div v-bind:class="{ active: 'necropolis' === current }" class="col-lg-2 ctrl-btn btn btn-outline-dark" v-on:click="changeImg('necropolis')">
        Некрополис / Necropolis
      </div>
      <div v-bind:class="{ active: 'fortress' === current }" class="col-lg-2 ctrl-btn btn btn-outline-dark" v-on:click="changeImg('fortress')">
        Крепость / Fortress
      </div>
      <div v-bind:class="{ active: 'rampart' === current }" class="col-lg-2 ctrl-btn btn btn-outline-dark" v-on:click="changeImg('rampart')">
        Оплот / Rampart
      </div>

    </div>
    <div class="header row">
      <div v-bind:class="{ active: 'inferno' === current }" class="col-lg-2 ctrl-btn btn btn-outline-dark" v-on:click="changeImg('inferno')">
        Инферно / Inferno
      </div>
      <div v-bind:class="{ active: 'dungeon' === current }" class="col-lg-2 ctrl-btn btn btn-outline-dark" v-on:click="changeImg('dungeon')">
        Подземелье / Dungeon
      </div>
      <div v-bind:class="{ active: 'stronghold' === current }" class="col-lg-2 ctrl-btn btn btn-outline-dark" v-on:click="changeImg('stronghold')">
        Цитадель / Stronghold
      </div>
      <div v-bind:class="{ active: 'conflux' === current }" class="col-lg-2 ctrl-btn btn btn-outline-dark" v-on:click="changeImg('conflux')">
        Сопряжение / Conflux
      </div>
    </div>
    <div class="content" v-bind:class="{ hidden: !normal }">
      <div style="overflow: hidden; height: calc(147px - 19px); display: flex; justify-content: space-between">
        <div style="margin-left: 125px;overflow: hidden;">
          <img class="clip" :src="normal" alt="" style="margin-top: -20px; height: 147px; margin-left: -8px;">
        </div>
        <img class="clip" :src="extended" alt="" style="margin-top: -20px; height: 147px; margin-left: -8px; clip-path: polygon(9px 0, 100% 0%, 100% 100%, 9px 100%);">
      </div>
      <div style="overflow: hidden; height: calc(147px - 19px); display: flex; justify-content: space-between">
        <img class="clip" :src="normal" alt="" style="margin-top: -20px; height: 147px; margin-left: -402px; width: 789px">
        <img class="clip" :src="extended" alt="" style="width: 789px; margin-top: -20px; height: 147px; margin-left: -62px; clip-path: polygon(403px 0, 100% 0%, 100% 100%, 403px 100%);">
      </div>
      <div style="overflow: hidden; height: calc(147px - 19px); display: flex; justify-content: space-between">
        <img class="clip" :src="normal" alt="" style="margin-top: -153px; height: 280px; margin-left: -8px;">
        <img class="clip" :src="extended" alt="" style="margin-top: -153px; height: 280px; margin-left: -8px; clip-path: polygon(9px 0, 100% 0%, 100% 100%, 9px 100%);">
      </div>
      <div style="overflow: hidden; height: calc(147px - 19px); display: flex; justify-content: space-between">
        <img class="clip" :src="normal" alt="" style="margin-top: -153px;height: 280px;margin-left: -402px;width: 789px;">
        <img class="clip" :src="extended" alt="" style="margin-top: -153px;height: 280px;margin-left: -402px;width: 789px; clip-path: polygon(403px 0, 100% 0%, 100% 100%, 403px 100%);">
      </div>
      <div style="overflow: hidden; height: calc(147px - 19px); display: flex; justify-content: space-between">
        <img class="clip" :src="normal" alt="" style="margin-top: -286px; height: 413px; margin-left: -8px;">
        <img class="clip" :src="extended" alt="" style="margin-top: -286px; height: 413px; margin-left: -8px; clip-path: polygon(9px 0, 100% 0%, 100% 100%, 9px 100%);">
      </div>
      <div style="overflow: hidden; height: calc(147px - 19px); display: flex; justify-content: space-between">
        <img class="clip" :src="normal" alt="" style="margin-top: -286px;height: 413px;margin-left: -402px;width: 789px;">
        <img class="clip" :src="extended" alt="" style="margin-top: -286px;height: 413px;margin-left: -402px;width: 789px; clip-path: polygon(403px 0, 100% 0%, 100% 100%, 403px 100%);">
      </div>
      <div style="overflow: hidden; height: calc(147px - 19px); display: flex; justify-content: space-between">
        <img class="clip" :src="normal" alt="" style="width: 591px; margin-top: -419px;height: 546px;margin-left: -204px;">
        <div style="padding-right: 159px;">
          <img class="clip" :src="extended" alt="" style="width: 591px; margin-top: -419px;height: 546px;margin-left: -204px; clip-path: polygon(205px 0, 100% 0%, 100% 100%, 205px 100%);">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      normal: false,
      extended: false,
      current: false
    }
  },
  methods: {
    changeImg(pic) {
      this.normal = require('@/assets/' + pic + '.png');
      this.extended = require('@/assets/' + pic + '-up.png');
      this.current = pic;
    }
  }
}
</script>

<style>
.clip {
  object-fit: none;
  width: 395px;
  height: 554px;
  object-position: left top;
}

.container {
  margin-top: 1px;
}
.header {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin-bottom: 1px;
}
.ctrl-btn {
  width: 18%;
}
.hidden {
  display: none;
}
.active {
  color: #fff;
  background-color: #212529;
  border-color: #212529;
}
</style>
