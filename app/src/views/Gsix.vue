<template>
  <div class="resume">
    <div class="container">
      <YoutubeVue3 ref="youtube" :videoid="play.video_id" :loop="play.loop" :width="854" :height="480"
                   @ended="onEnded" @paused="onPaused" @played="onPlayed"/>
      <div class="text" v-bind:class="{ hidden: !isMusicListen }">

        <div
            class="text-block"
            v-bind:class="{ paused: !isMusicListen }"
            v-html="textBlock">
        </div>

      </div>
    </div>
  </div>
</template>

<script>
import { YoutubeVue3 } from 'youtube-vue3'

export default {
  name: 'App',
  data() {
    return {
      play : {
        video_id: 'w4s6H4ku6ZY',
        loop: 1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Poppin bottles in the ice, like a blizzard\n' +
          'When we drink we do it right, gettin\' slizzard\n' +
          'Sippin\' sizzurp in my ride, in my ride, like a Three 6\n' +
          'Now I\'m feelin\' so fly like a G6\n' +
          'Like a G6, like a G6\n' +
          'Now, now, now, now, now, now I\'m feelin\' so fly like a G6\n' +
          'Like a G6, like a G6\n' +
          'Now, now, now, now, now, now I\'m feelin\' so fly like a G6\n' +
          'Give me that Mo-Moet-wet\n' +
          'Give me that Cry-Crystal-tal\n' +
          'Ladies love my style, at my table gettin\' wild\n' +
          'Get them bottles poppin, we get that drip and that drop\n' +
          'Now give me 2 more bottles \'cause you know it don\'t stop\n' +
          'Hell yeah\n' +
          'Drink it up, drink-drink it up,\n' +
          'When sober girls around me, they be actin\' like they drunk\n' +
          'They be actin\' like they drunk, actin\'-actin\' like they drunk\n' +
          'Whe, when sober girls around me they be actin\' like they drunk-unk-unk\n' +
          'Poppin\' bottles in the ice, like a blizzard\n' +
          'When we drink we do it right gettin\' slizzard\n' +
          'Sippin\' sizzurp in my ride, in my ride, like a Three 6\n' +
          'Now I\'m feelin\' so fly like a G6\n' +
          'Like a G6, like a G6\n' +
          'Now, now, now, now, now, now I\'m feelin\' so fly like a G6\n' +
          'Like a G6, like a G6\n' +
          'Now, now, now, now, now, now I\'m feelin\' so fly like a G6\n' +
          'Sippin on, sippin on sizz, I\'ma ma-make it fizz\n' +
          'Girl I keep it gangster, poppin\' bottles at the crib, crib\n' +
          'This is how we live, every single night\n' +
          'Take that bottle to the head, and let me see you fly\n' +
          'Hell yeah\n' +
          'Drink it up, drink-drink it up\n' +
          'When sober girls around me, they be actin\' like they drunk\n' +
          'They be actin\' like they drunk, actin\' like they drunk\n' +
          'Whe, when sober girls around me they be actin\' like they dru-u-unk\n' +
          'Poppin\' bottles in the ice, like a blizzard\n' +
          'When we drink we do it right gettin slizzard\n' +
          'Sippin\' sizzurp in my ride, in my ride, like Three 6\n' +
          'Now I\'m feelin\' so fly like a G6\n' +
          'Like a G6, like a G6\n' +
          'Now, now, now, now, now, now I\'m feelin\' so fly like a G6\n' +
          'Like a G6, like a G6\n' +
          'Now, now, now, now, now, now I\'m feelin\' so fly like a G6\n' +
          'It\'s that 808 bump, make you put yo hands up\n' +
          'Make you put yo hands up, put yo, put yo hands up (You can\'t touch this)\n' +
          'It\'s that 808 bump, make you put yo hands up\n' +
          'Make you put yo hands up, put yo, put yo hands up\n' +
          '(You can\'t touch this)\n' +
          'Hell yeah, make you put yo hands up\n' +
          'Make you put yo hands up, put yo, put yo hands up (You can\'t touch this)\n' +
          'Hell yeah, make you put yo hands up\n' +
          'Make you put yo hands up, put yo, put yo hands up\n' +
          'Poppin\' bottles in the ice, like a blizzard\n' +
          'When we drink we do it right gettin\' slizzard\n' +
          'Sippin\' sizzurp in my ride, in my ride, like Three 6\n' +
          'Now I\'m feelin\' so fly like a G6\n' +
          'Like a G6, like a G6\n' +
          'Now, now, now, now, now, now I\'m feelin\' so fly like a G6\n' +
          'Like a G6, like a G6\n' +
          'Now, now, now, now, now, now I\'m feelin\' so fly like a G6'
    }
  },
  components: {
    YoutubeVue3
  },
  methods: {
    applyConfig() {
      this.play = Object.assign(this.play, this.temp)
    },
    playCurrentVideo() {
      this.$refs.youtube.player.playVideo();
    },
    stopCurrentVideo() {
      this.$refs.youtube.player.stopVideo();
    },
    pauseCurrentVideo() {
      this.$refs.youtube.player.pauseVideo();
    },
    onEnded() {
      this.isMusicListen = false;
      console.log("## OnEnded");
      var path = this.$router.currentRoute.value.path;
      this.$router.getRoutes().forEach((function (value, index, array) {
        if (value.path === path) {
          this.$router.push(array[++index].path);
        }
      }).bind(this));
    },
    onPaused() {
      this.isMusicListen = false;
      console.log("## OnPaused");
    },
    onPlayed() {
      this.isMusicListen = true;
      console.log("## OnPlayed");
      this.listenMusic();
    },
    listenMusic() {
      if (this.isMusicListen === true) {
        const currentTimePromise = this.$refs.youtube.player.getCurrentTime();
        currentTimePromise.then((value) => {
          console.log(value);
          setTimeout(this.listenMusic, 100);
        })
      }
    }
  }
}
</script>

<style>
.text {
  color: white;
  font-family: sans-serif;
  font-size: 24px;
  line-height: 25px;
  width: 814px;
  height: 150px;
  background-color: rgba(0,0,0,0.65);
  position: absolute;
  top: 270px;
  left: 20px;
  overflow: hidden;
}
.container {
  position: relative;
  width: 854px;
}
.resume {
  display: flex;
  justify-content: space-around;
}
.hidden {
  /*display: none;*/
}
.paused {
  animation-play-state: paused !important;
}

.text-block {
  width: 814px;
  white-space: pre;
  position: absolute;
  left: 0;
  z-index: 1;
  top: -1475px;
  animation: move 222s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  4.4645045% {
    top: 0;
  }
  4.5045045% {
    top: -25px;
  }
  6.2663063% {
    top: -25px;
  }
  6.3063063% {
    top: -50px;
  }
  8.0681081% {
    top: -50px;
  }
  8.1081081% {
    top: -75px;
  }
  9.8699099% {
    top: -75px;
  }
  9.9099099% {
    top: -100px;
  }
  11.22126125% {
    top: -100px;
  }
  11.26126125% {
    top: -125px;
  }
  13.4735135% {
    top: -125px;
  }
  13.5135135% {
    top: -150px;
  }
  14.82486485% {
    top: -150px;
  }
  14.86486485% {
    top: -175px;
  }
  16.62666665% {
    top: -175px;
  }
  16.66666665% {
    top: -200px;
  }
  17.52756755% {
    top: -200px;
  }
  17.56756755% {
    top: -225px;
  }
  18.42846845% {
    top: -225px;
  }
  18.46846845% {
    top: -250px;
  }
  20.23027025% {
    top: -250px;
  }
  20.27027025% {
    top: -275px;
  }
  21.5816216% {
    top: -275px;
  }
  21.6216216% {
    top: -300px;
  }
  23.3834234% {
    top: -300px;
  }
  23.4234234% {
    top: -325px;
  }
  24.2843243% {
    top: -325px;
  }
  24.3243243% {
    top: -350px;
  }
  25.1852252% {
    top: -350px;
  }
  25.2252252% {
    top: -375px;
  }
  26.987027% {
    top: -375px;
  }
  27.027027% {
    top: -400px;
  }
  28.7888288% {
    top: -400px;
  }
  28.8288288% {
    top: -425px;
  }
  30.5906306% {
    top: -425px;
  }
  30.6306306% {
    top: -450px;
  }
  32.3924324% {
    top: -450px;
  }
  32.4324324% {
    top: -475px;
  }
  33.74378375% {
    top: -475px;
  }
  33.78378375% {
    top: -500px;
  }
  35.996036% {
    top: -500px;
  }
  36.036036% {
    top: -525px;
  }
  37.34738735% {
    top: -525px;
  }
  37.38738735% {
    top: -550px;
  }
  39.14918915% {
    top: -550px;
  }
  39.18918915% {
    top: -575px;
  }
  40.95099095% {
    top: -575px;
  }
  40.99099095% {
    top: -600px;
  }
  42.75279275% {
    top: -600px;
  }
  42.79279275% {
    top: -625px;
  }
  44.55459455% {
    top: -625px;
  }
  44.59459455% {
    top: -650px;
  }
  45.9059459% {
    top: -650px;
  }
  45.9459459% {
    top: -675px;
  }
  47.7077477% {
    top: -675px;
  }
  47.7477477% {
    top: -700px;
  }
  49.5095495% {
    top: -700px;
  }
  49.5495495% {
    top: -725px;
  }
  51.3113513% {
    top: -725px;
  }
  51.3513513% {
    top: -750px;
  }
  51.76180175% {
    top: -750px;
  }
  51.80180175% {
    top: -775px;
  }
  53.1131531% {
    top: -775px;
  }
  53.1531531% {
    top: -800px;
  }
  54.9149549% {
    top: -800px;
  }
  54.9549549% {
    top: -825px;
  }
  56.26630625% {
    top: -825px;
  }
  56.30630625% {
    top: -850px;
  }
  58.06810805% {
    top: -850px;
  }
  58.10810805% {
    top: -875px;
  }
  59.86990985% {
    top: -875px;
  }
  59.90990985% {
    top: -900px;
  }
  61.67171165% {
    top: -900px;
  }
  61.71171165% {
    top: -925px;
  }
  63.47351345% {
    top: -925px;
  }
  63.51351345% {
    top: -950px;
  }
  65.27531525% {
    top: -950px;
  }
  65.31531525% {
    top: -975px;
  }
  66.6266666% {
    top: -975px;
  }
  66.6666666% {
    top: -1000px;
  }
  68.4284684% {
    top: -1000px;
  }
  68.4684684% {
    top: -1025px;
  }
  70.2302702% {
    top: -1025px;
  }
  70.2702702% {
    top: -1050px;
  }
  72.032072% {
    top: -1050px;
  }
  72.072072% {
    top: -1075px;
  }
  73.38342335% {
    top: -1075px;
  }
  73.42342335% {
    top: -1100px;
  }
  75.6356756% {
    top: -1100px;
  }
  75.6756756% {
    top: -1125px;
  }
  76.98702695% {
    top: -1125px;
  }
  77.02702695% {
    top: -1150px;
  }
  78.78882875% {
    top: -1150px;
  }
  78.82882875% {
    top: -1175px;
  }
  79.2392792% {
    top: -1175px;
  }
  79.2792792% {
    top: -1200px;
  }
  80.59063055% {
    top: -1200px;
  }
  80.63063055% {
    top: -1225px;
  }
  82.39243235% {
    top: -1225px;
  }
  82.43243235% {
    top: -1250px;
  }
  83.7437837% {
    top: -1250px;
  }
  83.7837837% {
    top: -1275px;
  }
  85.5455855% {
    top: -1275px;
  }
  85.5855855% {
    top: -1300px;
  }
  87.3473873% {
    top: -1300px;
  }
  87.3873873% {
    top: -1325px;
  }
  89.1491891% {
    top: -1325px;
  }
  89.1891891% {
    top: -1350px;
  }
  90.9509909% {
    top: -1350px;
  }
  90.9909909% {
    top: -1375px;
  }
  92.7527927% {
    top: -1375px;
  }
  92.7927927% {
    top: -1400px;
  }
  94.5545945% {
    top: -1400px;
  }
  94.5945945% {
    top: -1425px;
  }
  96.3563963% {
    top: -1425px;
  }
  96.3963963% {
    top: -1450px;
  }
  97.70774765% {
    top: -1450px;
  }
  97.74774765% {
    top: -1475px;
  }
  99.9599999% {
    top: -1475px;
  }
  to {
    top: -1475px;
  }
}
</style>
