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
        video_id: 'iX-QaNzd-0Y',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I want you by my side\n' +
          'So that I never feel alone again\n' +
          'They\'ve always been so kind\n' +
          'But now they\'ve brought you away from here\n' +
          'I hope they didn\'t get your mind\n' +
          'Your heart is too strong anyway\n' +
          'We need to fetch back the time\n' +
          'They have stolen from us\n' +
          'And I want you\n' +
          'We can bring it on the floor\n' +
          'You\'ve never danced like this before\n' +
          'We don\'t talk about it\n' +
          'Dancin\' on do the boogie all night long\n' +
          'Stoned in paradise, shouldn\'t talk about it\n' +
          'And I want you\n' +
          'We can bring it on the floor\n' +
          'You\'ve never danced like this before\n' +
          'We don\'t talk about it\n' +
          'Dancin\' on do the boogie all night long\n' +
          'Stoned in paradise, shouldn\'t talk about it\n' +
          'Shouldn\'t talk about it\n' +
          'Coldest winter for me\n' +
          'No sun is shining anymore\n' +
          'The only thing I feel is pain\n' +
          'Caused by absence of you\n' +
          'Suspense is controlling my mind\n' +
          'I cannot find the way out of here\n' +
          'I want you by my side\n' +
          'So that I never feel alone again\n' +
          'And I want you\n' +
          'We can bring it on the floor\n' +
          'You\'ve never danced like this before\n' +
          'We don\'t talk about it\n' +
          'Dancin\' on do the boogie all night long\n' +
          'Stoned in paradise, shouldn\'t talk about it\n' +
          'And I want you\n' +
          'We can bring it on the floor\n' +
          'You\'ve never danced like this before\n' +
          'We don\'t talk about it\n' +
          'Dancin\' on do the boogie all night long\n' +
          'Stoned in paradise, shouldn\'t talk about it\n' +
          'Shouldn\'t talk about it\n' +
          'And I want you\n' +
          'We can bring it on the floor\n' +
          'You\'ve never danced like this before\n' +
          'We don\'t talk about it\n' +
          'Dancin\' on do the boogie all night long\n' +
          'Stoned in paradise, shouldn\'t talk about it\n' +
          'And I want you\n' +
          'We can bring it on the floor\n' +
          'You\'ve never danced like this before\n' +
          'We don\'t talk about it\n' +
          'Dancin\' on do the boogie all night long\n' +
          'Stoned in paradise, shouldn\'t talk about it\n' +
          'Shouldn\'t talk about it'
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
  top: -1350px;
  animation: move 246s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  11.74861789% {
    top: 0;
  }
  11.78861789% {
    top: -25px;
  }
  13.37463415% {
    top: -25px;
  }
  13.41463415% {
    top: -50px;
  }
  15.00065041% {
    top: -50px;
  }
  15.04065041% {
    top: -75px;
  }
  16.62666667% {
    top: -75px;
  }
  16.66666667% {
    top: -100px;
  }
  18.659187% {
    top: -100px;
  }
  18.699187% {
    top: -125px;
  }
  20.28520326% {
    top: -125px;
  }
  20.32520326% {
    top: -150px;
  }
  21.91121952% {
    top: -150px;
  }
  21.95121952% {
    top: -175px;
  }
  23.13073172% {
    top: -175px;
  }
  23.17073172% {
    top: -200px;
  }
  25.97626018% {
    top: -200px;
  }
  26.01626018% {
    top: -225px;
  }
  26.78926831% {
    top: -225px;
  }
  26.82926831% {
    top: -250px;
  }
  28.00878051% {
    top: -250px;
  }
  28.04878051% {
    top: -275px;
  }
  28.82178864% {
    top: -275px;
  }
  28.86178864% {
    top: -300px;
  }
  30.4478049% {
    top: -300px;
  }
  30.4878049% {
    top: -325px;
  }
  32.07382116% {
    top: -325px;
  }
  32.11382116% {
    top: -350px;
  }
  32.88682929% {
    top: -350px;
  }
  32.92682929% {
    top: -375px;
  }
  33.69983742% {
    top: -375px;
  }
  33.73983742% {
    top: -400px;
  }
  34.91934962% {
    top: -400px;
  }
  34.95934962% {
    top: -425px;
  }
  35.73235775% {
    top: -425px;
  }
  35.77235775% {
    top: -450px;
  }
  37.35837401% {
    top: -450px;
  }
  37.39837401% {
    top: -475px;
  }
  38.98439027% {
    top: -475px;
  }
  39.02439027% {
    top: -500px;
  }
  39.7973984% {
    top: -500px;
  }
  39.8373984% {
    top: -525px;
  }
  49.1469919% {
    top: -525px;
  }
  49.1869919% {
    top: -550px;
  }
  51.17951223% {
    top: -550px;
  }
  51.21951223% {
    top: -575px;
  }
  52.80552849% {
    top: -575px;
  }
  52.84552849% {
    top: -600px;
  }
  54.43154475% {
    top: -600px;
  }
  54.47154475% {
    top: -625px;
  }
  56.05756101% {
    top: -625px;
  }
  56.09756101% {
    top: -650px;
  }
  57.68357727% {
    top: -650px;
  }
  57.72357727% {
    top: -675px;
  }
  59.7160976% {
    top: -675px;
  }
  59.7560976% {
    top: -700px;
  }
  61.34211386% {
    top: -700px;
  }
  61.38211386% {
    top: -725px;
  }
  63.37463419% {
    top: -725px;
  }
  63.41463419% {
    top: -750px;
  }
  64.59414639% {
    top: -750px;
  }
  64.63414639% {
    top: -775px;
  }
  65.81365859% {
    top: -775px;
  }
  65.85365859% {
    top: -800px;
  }
  66.62666672% {
    top: -800px;
  }
  66.66666672% {
    top: -825px;
  }
  67.84617892% {
    top: -825px;
  }
  67.88617892% {
    top: -850px;
  }
  69.87869925% {
    top: -850px;
  }
  69.91869925% {
    top: -875px;
  }
  70.28520332% {
    top: -875px;
  }
  70.32520332% {
    top: -900px;
  }
  71.50471552% {
    top: -900px;
  }
  71.54471552% {
    top: -925px;
  }
  72.72422772% {
    top: -925px;
  }
  72.76422772% {
    top: -950px;
  }
  73.13073179% {
    top: -950px;
  }
  73.17073179% {
    top: -975px;
  }
  74.75674805% {
    top: -975px;
  }
  74.79674805% {
    top: -1000px;
  }
  76.78926838% {
    top: -1000px;
  }
  76.82926838% {
    top: -1025px;
  }
  77.60227651% {
    top: -1025px;
  }
  77.64227651% {
    top: -1050px;
  }
  85.73235781% {
    top: -1050px;
  }
  85.77235781% {
    top: -1075px;
  }
  86.54536594% {
    top: -1075px;
  }
  86.58536594% {
    top: -1100px;
  }
  87.76487814% {
    top: -1100px;
  }
  87.80487814% {
    top: -1125px;
  }
  88.57788627% {
    top: -1125px;
  }
  88.61788627% {
    top: -1150px;
  }
  90.20390253% {
    top: -1150px;
  }
  90.24390253% {
    top: -1175px;
  }
  91.82991879% {
    top: -1175px;
  }
  91.86991879% {
    top: -1200px;
  }
  92.64292692% {
    top: -1200px;
  }
  92.68292692% {
    top: -1225px;
  }
  93.45593505% {
    top: -1225px;
  }
  93.49593505% {
    top: -1250px;
  }
  94.67544725% {
    top: -1250px;
  }
  94.71544725% {
    top: -1275px;
  }
  95.48845538% {
    top: -1275px;
  }
  95.52845538% {
    top: -1300px;
  }
  97.11447164% {
    top: -1300px;
  }
  97.15447164% {
    top: -1325px;
  }
  99.14699197% {
    top: -1325px;
  }
  99.18699197% {
    top: -1350px;
  }
  99.9600001% {
    top: -1350px;
  }
  to {
    top: -1350px;
  }
}
</style>