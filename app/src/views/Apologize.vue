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
      temp: {
        video_id:"ZSM3w1v-A_Y",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id:"ZSM3w1v-A_Y",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          '<div class="text-line">I\'m holding on your rope</div>' +
          '<div class="text-line">Got me ten feet off the ground</div>' +
          '<div class="text-line">And I\'m hearing what you say</div>' +
          '<div class="text-line">But I just can\'t make a sound</div>' +
          'You tell me that you need me\n' +
          'Then you go and cut me down\n' +
          'But wait\n' +
          'You tell me that you\'re sorry\n' +
          'Didn\'t think I\'d turn around and say\n' +
          'That it\'s too late to apologize, it\'s too late\n' +
          'I said it\'s too late to apologize, it\'s too late\n' +
          'I\'d take another chance, take a fall, take a shot for you\n' +
          'And I need you like a heart needs a beat\n' +
          '(But that\'s nothing new) Yeah yeah\n' +
          'I loved you with a fire red, now it\'s turning blue\n' +
          'And you say\n' +
          'Sorry like an angel, heavens not the thing for you,\n' +
          'But I\'m afraid\n' +
          'It\'s too late to apologize, it\'s too late\n' +
          'I said it\'s too late to apologizes, it\'s too late\n' +
          'Woahoo woah\n' +
          'It\'s too late to apologize, it\'s too late\n' +
          'I said it\'s too late to apologize, it\'s too late\n' +
          'I said it\'s too late to apologize, yeah yeah\n' +
          'I said it\'s too late to apologize, a yeah\n' +
          'I\'m holding on your rope\n' +
          'Got me ten feet off the ground…\n',
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

  top: -650px;
  animation: move 183s linear alternate;
}

.text-line:nth-child(1) {
  animation: scale1 183s linear alternate;
}
@keyframes scale1 {
  from {
    transform: scale(1.2);
  }
  9.79606557% {
    transform: scale(1.2);
  }
  9.83606557% {
    transform: scale(0.9);
  }
  11.98185792% {
    transform: scale(0.9);
  }
  to {
    transform: none;
  }
}
.text-line:nth-child(2) {
  animation: scale2 183s linear alternate;
}
@keyframes scale2 {
  from {
    transform: scale(0.8);
  }
  9.79606557% {
    transform: scale(0.8);
  }
  9.83606557% {
    transform: scale(1.2);
  }
  11.98185792% {
    transform: scale(1.2);
  }
  12.02185792% {
    transform: scale(0.8);
  }
  to {
    transform: scale(0.8);
  }
}
.text-line:nth-child(3) {
  transform: scale(0.7);
  animation: scale3 183s linear alternate;
}
@keyframes scale3 {
  from {
    transform: scale(0.8);;
  }
  11.98185792% {
    transform: scale(0.8);
  }
  12.02185792% {
    transform: scale(1.2);
  }
  14.16765027% {
    transform: scale(1.2);
  }
  14.20765027% {
    transform: scale(0.8);
  }
  to {
    transform: scale(0.8);
  }
}

.text-line:nth-child(4) {
  animation: scale4 183s linear alternate;
}

@keyframes scale4 {
  from {
    transform: scale(0.8);
  }
  14.16765027% {
    transform: scale(0.8);
  }
  14.20765027% {
    transform: scale(1.2);
  }
  16.35344262% {
    transform: scale(1.2);
  }
  16.39344262% {
    transform: scale(0.8);
  }
  to {
    transform: scale(0.8);
  }
}

@keyframes move {
  from {
    top: 0;
  }
  9.79606557% {
    top: 0;
  }
  9.83606557% {
    top: -25px;
  }
  11.98185792% {
    top: -25px;
  }
  12.02185792% {
    top: -50px;
  }
  14.16765027% {
    top: -50px;
  }
  14.20765027% {
    top: -75px;
  }
  16.35344262% {
    top: -75px;
  }
  16.39344262% {
    top: -100px;
  }
  19.08568306% {
    top: -100px;
  }
  19.12568306% {
    top: -125px;
  }
  20.72502732% {
    top: -125px;
  }
  20.76502732% {
    top: -150px;
  }
  22.36437158% {
    top: -150px;
  }
  22.40437158% {
    top: -175px;
  }
  23.45726775% {
    top: -175px;
  }
  23.49726775% {
    top: -200px;
  }
  26.73595627% {
    top: -200px;
  }
  26.77595627% {
    top: -225px;
  }
  30.56109288% {
    top: -225px;
  }
  30.60109288% {
    top: -250px;
  }
  34.93267758% {
    top: -250px;
  }
  34.97267758% {
    top: -275px;
  }
  43.67584698% {
    top: -275px;
  }
  43.71584698% {
    top: -300px;
  }
  45.86163933% {
    top: -300px;
  }
  45.90163933% {
    top: -325px;
  }
  48.59387977% {
    top: -325px;
  }
  48.63387977% {
    top: -350px;
  }
  51.87256829% {
    top: -350px;
  }
  51.91256829% {
    top: -375px;
  }
  53.51191255% {
    top: -375px;
  }
  53.55191255% {
    top: -400px;
  }
  56.24415299% {
    top: -400px;
  }
  56.28415299% {
    top: -425px;
  }
  57.88349725% {
    top: -425px;
  }
  57.92349725% {
    top: -450px;
  }
  61.70863386% {
    top: -450px;
  }
  61.74863386% {
    top: -475px;
  }
  66.08021856% {
    top: -475px;
  }
  66.12021856% {
    top: -500px;
  }
  69.35890708% {
    top: -500px;
  }
  69.39890708% {
    top: -525px;
  }
  80.83431692% {
    top: -525px;
  }
  80.87431692% {
    top: -550px;
  }
  85.20590162% {
    top: -550px;
  }
  85.24590162% {
    top: -575px;
  }
  89.57748632% {
    top: -575px;
  }
  89.61748632% {
    top: -600px;
  }
  93.94907102% {
    top: -600px;
  }
  93.98907102% {
    top: -625px;
  }
  95.58841528% {
    top: -625px;
  }
  95.62841528% {
    top: -650px;
  }
  99.95999998% {
    top: -650px;
  }
  to {
    top: -650px;
  }
}
</style>
