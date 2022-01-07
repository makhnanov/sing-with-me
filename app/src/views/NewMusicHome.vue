<template>
  <div class="container">
    <div class="header">
      <div class="row">
        <div class="col-lg-2 music-home btn btn-outline-dark">
          Music Home
        </div>
      </div>
    </div>
    <table>
      <tr>
        <td>
          <MusicCard></MusicCard>
          <MusicCard></MusicCard>
        </td>
        <td>
          <MusicCard></MusicCard>
          <MusicCard></MusicCard>
        </td>
        <td>
          <MusicCard></MusicCard>
          <MusicCard></MusicCard>
        </td>
      </tr>
    </table>
  </div>
</template>

<script>
import MusicCard from '../components/MusicCard.vue';

export default {
  name: 'App',
  components: {MusicCard},
  data() {
  }
}
</script>

<style>
.container {
}
.header {
  font-weight: bold;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  height: 56px;
  text-align: left;
}
.music-home {
}
</style>
