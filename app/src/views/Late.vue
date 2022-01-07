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
        video_id: 'lL2ZwXj1tXM',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'This world will never be\n' +
          'What I expected\n' +
          'And if I don\'t belong\n' +
          'Who would have guessed it\n' +
          'I will not leave alone\n' +
          'Everything that I own\n' +
          'To make you feel like it\'s not too late\n' +
          'It\'s never too late\n' +
          'Even if I say\n' +
          'It\'ll be alright\n' +
          'Still I hear you say\n' +
          'You want to end your life\n' +
          'Now and again we try\n' +
          'To just stay alive\n' +
          'Maybe we\'ll turn it around\n' +
          '\'Cause it\'s not too late\n' +
          'It\'s never too late\n' +
          'No one will ever see\n' +
          'This side reflected\n' +
          'And if there\'s something wrong\n' +
          'Who would have guessed it\n' +
          'And I have left alone\n' +
          'Everything that I own\n' +
          'To make you feel like\n' +
          'It\'s not too late\n' +
          'It\'s never too late\n' +
          'Even if I say\n' +
          'It\'ll be alright\n' +
          'Still I hear you say\n' +
          'You want to end your life\n' +
          'Now and again we try\n' +
          'To just stay alive\n' +
          'Maybe we\'ll turn it around\n' +
          '\'Cause it\'s not too late\n' +
          'It\'s never too late\n' +
          'The world we knew\n' +
          'Won\'t come back\n' +
          'The time we\'ve lost\n' +
          'Can\'t get back\n' +
          'The life we had\n' +
          'Won\'t be ours again\n' +
          'This world will never be\n' +
          'What I expected\n' +
          'And if I don\'t belong\n' +
          'Even if I say\n' +
          'It\'ll be alright\n' +
          'Still I hear you say\n' +
          'You want to end your life\n' +
          'Now and again we try\n' +
          'To just stay alive\n' +
          'Maybe we\'ll turn it around\n' +
          '\'Cause it\'s not too late\n' +
          'It\'s never too late\n' +
          'Maybe we\'ll turn it around\n' +
          '\'Cause it\'s not too late\n' +
          'It\'s never too late (It\'s never too late)\n' +
          'It\'s not too late\n' +
          'It\'s never too late'
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
  top: -1425px;
  animation: move 192s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  8.29333333% {
    top: 0;
  }
  8.33333333% {
    top: -25px;
  }
  9.85583333% {
    top: -25px;
  }
  9.89583333% {
    top: -50px;
  }
  11.93916666% {
    top: -50px;
  }
  11.97916666% {
    top: -75px;
  }
  12.98083333% {
    top: -75px;
  }
  13.02083333% {
    top: -100px;
  }
  15.06416666% {
    top: -100px;
  }
  15.10416666% {
    top: -125px;
  }
  17.14749999% {
    top: -125px;
  }
  17.18749999% {
    top: -150px;
  }
  18.70999999% {
    top: -150px;
  }
  18.74999999% {
    top: -175px;
  }
  19.75166666% {
    top: -175px;
  }
  19.79166666% {
    top: -200px;
  }
  21.83499999% {
    top: -200px;
  }
  21.87499999% {
    top: -225px;
  }
  23.39749999% {
    top: -225px;
  }
  23.43749999% {
    top: -250px;
  }
  24.95999999% {
    top: -250px;
  }
  24.99999999% {
    top: -275px;
  }
  26.52249999% {
    top: -275px;
  }
  26.56249999% {
    top: -300px;
  }
  28.08499999% {
    top: -300px;
  }
  28.12499999% {
    top: -325px;
  }
  29.64749999% {
    top: -325px;
  }
  29.68749999% {
    top: -350px;
  }
  30.68916666% {
    top: -350px;
  }
  30.72916666% {
    top: -375px;
  }
  32.25166666% {
    top: -375px;
  }
  32.29166666% {
    top: -400px;
  }
  33.29333333% {
    top: -400px;
  }
  33.33333333% {
    top: -425px;
  }
  35.37666666% {
    top: -425px;
  }
  35.41666666% {
    top: -450px;
  }
  36.93916666% {
    top: -450px;
  }
  36.97916666% {
    top: -475px;
  }
  38.50166666% {
    top: -475px;
  }
  38.54166666% {
    top: -500px;
  }
  40.06416666% {
    top: -500px;
  }
  40.10416666% {
    top: -525px;
  }
  42.14749999% {
    top: -525px;
  }
  42.18749999% {
    top: -550px;
  }
  43.18916666% {
    top: -550px;
  }
  43.22916666% {
    top: -575px;
  }
  44.23083333% {
    top: -575px;
  }
  44.27083333% {
    top: -600px;
  }
  45.2725% {
    top: -600px;
  }
  45.3125% {
    top: -625px;
  }
  46.835% {
    top: -625px;
  }
  46.875% {
    top: -650px;
  }
  48.3975% {
    top: -650px;
  }
  48.4375% {
    top: -675px;
  }
  49.96% {
    top: -675px;
  }
  50% {
    top: -700px;
  }
  51.00166667% {
    top: -700px;
  }
  51.04166667% {
    top: -725px;
  }
  53.085% {
    top: -725px;
  }
  53.125% {
    top: -750px;
  }
  54.6475% {
    top: -750px;
  }
  54.6875% {
    top: -775px;
  }
  56.73083333% {
    top: -775px;
  }
  56.77083333% {
    top: -800px;
  }
  57.7725% {
    top: -800px;
  }
  57.8125% {
    top: -825px;
  }
  58.81416667% {
    top: -825px;
  }
  58.85416667% {
    top: -850px;
  }
  59.85583334% {
    top: -850px;
  }
  59.89583334% {
    top: -875px;
  }
  61.41833334% {
    top: -875px;
  }
  61.45833334% {
    top: -900px;
  }
  62.98083334% {
    top: -900px;
  }
  63.02083334% {
    top: -925px;
  }
  64.54333334% {
    top: -925px;
  }
  64.58333334% {
    top: -950px;
  }
  66.10583334% {
    top: -950px;
  }
  66.14583334% {
    top: -975px;
  }
  67.66833334% {
    top: -975px;
  }
  67.70833334% {
    top: -1000px;
  }
  71.83500001% {
    top: -1000px;
  }
  71.87500001% {
    top: -1025px;
  }
  74.96000001% {
    top: -1025px;
  }
  75.00000001% {
    top: -1050px;
  }
  76.52250001% {
    top: -1050px;
  }
  76.56250001% {
    top: -1075px;
  }
  79.12666668% {
    top: -1075px;
  }
  79.16666668% {
    top: -1100px;
  }
  81.73083335% {
    top: -1100px;
  }
  81.77083335% {
    top: -1125px;
  }
  83.81416668% {
    top: -1125px;
  }
  83.85416668% {
    top: -1150px;
  }
  84.85583335% {
    top: -1150px;
  }
  84.89583335% {
    top: -1175px;
  }
  86.93916668% {
    top: -1175px;
  }
  86.97916668% {
    top: -1200px;
  }
  87.98083335% {
    top: -1200px;
  }
  88.02083335% {
    top: -1225px;
  }
  90.06416668% {
    top: -1225px;
  }
  90.10416668% {
    top: -1250px;
  }
  90.58500001% {
    top: -1250px;
  }
  90.62500001% {
    top: -1275px;
  }
  92.14750001% {
    top: -1275px;
  }
  92.18750001% {
    top: -1300px;
  }
  93.18916668% {
    top: -1300px;
  }
  93.22916668% {
    top: -1325px;
  }
  94.23083335% {
    top: -1325px;
  }
  94.27083335% {
    top: -1350px;
  }
  95.27250002% {
    top: -1350px;
  }
  95.31250002% {
    top: -1375px;
  }
  97.87666669% {
    top: -1375px;
  }
  97.91666669% {
    top: -1400px;
  }
  98.91833336% {
    top: -1400px;
  }
  98.95833336% {
    top: -1425px;
  }
  99.96000003% {
    top: -1425px;
  }
  to {
    top: -1425px;
  }
}
</style>