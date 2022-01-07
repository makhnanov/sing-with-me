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
        video_id: 'YqeW9_5kURI',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Do you recall, not long ago\n' +
          'We would walk on the sidewalk?\n' +
          'Innocent, remember?\n' +
          'All we did was care for each other\n' +
          'But the night was warm\n' +
          'We were bold and young\n' +
          'All around the wind blows\n' +
          'We would only hold on to let go\n' +
          'Blow a kiss, fire a gun\n' +
          'We need someone to lean on\n' +
          'Blow a kiss, fire a gun\n' +
          'All we need is somebody to lean on\n' +
          'Blow a kiss, fire a gun\n' +
          'We need someone to lean on\n' +
          'Blow a kiss, fire a gun\n' +
          'All we need is somebody to lean on\n' +
          'What will we do when we get old?\n' +
          'Will we walk down the same road?\n' +
          'Will you be there by my side?\n' +
          'Standing strong as the waves roll over\n' +
          'When the nights are long\n' +
          'Longing for you to come home\n' +
          'All around the wind blows\n' +
          'We would only hold on to let go\n' +
          'Blow a kiss, fire a gun\n' +
          'We need someone to lean on\n' +
          'Blow a kiss, fire a gun\n' +
          'All we need is somebody to lean on\n' +
          'Blow a kiss, fire a gun\n' +
          'We need someone to lean on\n' +
          'Blow a kiss, fire a gun\n' +
          'All we need is somebody to lean on\n' +
          'All we need is somebody to lean on\n' +
          'All we need is somebody to lean on\n' +
          'Lean on, lean on, lean on, lean on...\n' +
          'Blow a kiss, fire a gun\n' +
          'We need someone to lean on\n' +
          'Blow a kiss, fire a gun\n' +
          'All we need is somebody to lean on\n' +
          'Blow a kiss, fire a gun\n' +
          'We need someone to lean on\n' +
          'Blow a kiss, fire a gun\n' +
          'All we need is somebody to lean on'
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
  top: -1050px;
  animation: move 171s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  6.97754386% {
    top: 0;
  }
  7.01754386% {
    top: -25px;
  }
  8.1471345% {
    top: -25px;
  }
  8.1871345% {
    top: -50px;
  }
  9.90152046% {
    top: -50px;
  }
  9.94152046% {
    top: -75px;
  }
  11.65590642% {
    top: -75px;
  }
  11.69590642% {
    top: -100px;
  }
  12.24070174% {
    top: -100px;
  }
  12.28070174% {
    top: -125px;
  }
  13.9950877% {
    top: -125px;
  }
  14.0350877% {
    top: -150px;
  }
  15.16467834% {
    top: -150px;
  }
  15.20467834% {
    top: -175px;
  }
  16.9190643% {
    top: -175px;
  }
  16.9590643% {
    top: -200px;
  }
  18.08865494% {
    top: -200px;
  }
  18.12865494% {
    top: -225px;
  }
  19.8430409% {
    top: -225px;
  }
  19.8830409% {
    top: -250px;
  }
  21.01263154% {
    top: -250px;
  }
  21.05263154% {
    top: -275px;
  }
  22.7670175% {
    top: -275px;
  }
  22.8070175% {
    top: -300px;
  }
  23.93660814% {
    top: -300px;
  }
  23.97660814% {
    top: -325px;
  }
  25.6909941% {
    top: -325px;
  }
  25.7309941% {
    top: -350px;
  }
  26.86058474% {
    top: -350px;
  }
  26.90058474% {
    top: -375px;
  }
  28.6149707% {
    top: -375px;
  }
  28.6549707% {
    top: -400px;
  }
  41.48046778% {
    top: -400px;
  }
  41.52046778% {
    top: -425px;
  }
  42.65005842% {
    top: -425px;
  }
  42.69005842% {
    top: -450px;
  }
  44.40444438% {
    top: -450px;
  }
  44.44444438% {
    top: -475px;
  }
  45.57403502% {
    top: -475px;
  }
  45.61403502% {
    top: -500px;
  }
  46.74362566% {
    top: -500px;
  }
  46.78362566% {
    top: -525px;
  }
  48.49801162% {
    top: -525px;
  }
  48.53801162% {
    top: -550px;
  }
  49.66760226% {
    top: -550px;
  }
  49.70760226% {
    top: -575px;
  }
  51.42198822% {
    top: -575px;
  }
  51.46198822% {
    top: -600px;
  }
  52.59157886% {
    top: -600px;
  }
  52.63157886% {
    top: -625px;
  }
  54.34596482% {
    top: -625px;
  }
  54.38596482% {
    top: -650px;
  }
  55.51555546% {
    top: -650px;
  }
  55.55555546% {
    top: -675px;
  }
  57.26994142% {
    top: -675px;
  }
  57.30994142% {
    top: -700px;
  }
  58.43953206% {
    top: -700px;
  }
  58.47953206% {
    top: -725px;
  }
  59.6091227% {
    top: -725px;
  }
  59.6491227% {
    top: -750px;
  }
  61.36350866% {
    top: -750px;
  }
  61.40350866% {
    top: -775px;
  }
  62.5330993% {
    top: -775px;
  }
  62.5730993% {
    top: -800px;
  }
  68.38105252% {
    top: -800px;
  }
  68.42105252% {
    top: -825px;
  }
  74.22900574% {
    top: -825px;
  }
  74.26900574% {
    top: -850px;
  }
  75.39859638% {
    top: -850px;
  }
  75.43859638% {
    top: -875px;
  }
  90.01847942% {
    top: -875px;
  }
  90.05847942% {
    top: -900px;
  }
  91.18807006% {
    top: -900px;
  }
  91.22807006% {
    top: -925px;
  }
  92.94245602% {
    top: -925px;
  }
  92.98245602% {
    top: -950px;
  }
  94.11204666% {
    top: -950px;
  }
  94.15204666% {
    top: -975px;
  }
  95.86643262% {
    top: -975px;
  }
  95.90643262% {
    top: -1000px;
  }
  97.03602326% {
    top: -1000px;
  }
  97.07602326% {
    top: -1025px;
  }
  98.79040922% {
    top: -1025px;
  }
  98.83040922% {
    top: -1050px;
  }
  99.95999986% {
    top: -1050px;
  }
  to {
    top: -1050px;
  }
}
</style>