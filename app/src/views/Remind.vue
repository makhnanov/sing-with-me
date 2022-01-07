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
        video_id: '1cQh1ccqu8M',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Never made it as a wise man\n' +
          'I couldn\'t cut it as a poor man stealing\n' +
          'Tired of living like a blind man\n' +
          'I\'m sick of sight without a sense of feeling\n' +
          'And this is how you remind me\n' +
          'This is how you remind me of what I really am\n' +
          'This is how you remind me of what I really am\n' +
          'It\'s not like you to say sorry\n' +
          'I was waiting on a different story\n' +
          'This time I\'m mistaken\n' +
          'For handing you a heart worth breaking\n' +
          'And I\'ve been wrong, I\'ve been down\n' +
          'Into the bottom of every bottle\n' +
          'These five words in my head\n' +
          'Scream ,"Are we having fun yet?"\n' +
          'Yeah, yeah, yeah, no no\n' +
          'Yeah, yeah, yeah, no no\n' +
          'It\'s not like you didn\'t know that\n' +
          'I said I love you and I swear I still do\n' +
          'And it must have been so bad\n' +
          'Cause living with him must have damn near killed you\n' +
          'And this is how you remind me me of what I really am\n' +
          'This is how you remind me of what I really am\n' +
          'It\'s not like you to say sorry\n' +
          'I was waiting on a different story\n' +
          'This time I\'m mistaken\n' +
          'For handing you a heart worth breaking\n' +
          'And I\'ve been wrong, I\'ve been down,\n' +
          'Been to the bottom of every bottle\n' +
          'These five words in my head\n' +
          'Scream "Are we having fun yet?"\n' +
          'Yeah, yeah, yeah, no, no\n' +
          'Yeah, yeah, yeah, no, no\n' +
          'Yeah, yeah, yeah, no, no\n' +
          'Yeah, yeah, yeah, no, no\n' +
          'Never made it as a wise man\n' +
          'I couldn\'t cut it as a poor man stealing\n' +
          'And this is how you remind me\n' +
          'This is how you remind me\n' +
          'This is how you remind me of what I really am\n' +
          'This is how you remind me of what I really am\n' +
          'It\'s not like you to say sorry\n' +
          'I was waiting on a different story\n' +
          'This time I\'m mistaken\n' +
          'For handing you a heart worth breaking\n' +
          'And I\'ve been wrong, I\'ve been down,\n' +
          'Been to the bottom of every bottle\n' +
          'These five words in my head\n' +
          'Scream "Are we having fun yet?"\n' +
          'Yeah, yeah "Are we having fun yet?" [3x]\n' +
          'Yeah, yeah "Are we having fun yet?" [3x]\n' +
          'Yeah, yeah "Are we having fun yet?" [3x]\n' +
          'Yeah, yeah\n' +
          'No, no'
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
  top: -1325px;
  animation: move 218s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  1.79486239% {
    top: 0;
  }
  1.83486239% {
    top: -25px;
  }
  3.62972478% {
    top: -25px;
  }
  3.66972478% {
    top: -50px;
  }
  4.54715597% {
    top: -50px;
  }
  4.58715597% {
    top: -75px;
  }
  5.92330276% {
    top: -75px;
  }
  5.96330276% {
    top: -100px;
  }
  7.75816515% {
    top: -100px;
  }
  7.79816515% {
    top: -125px;
  }
  11.42788992% {
    top: -125px;
  }
  11.46788992% {
    top: -150px;
  }
  13.7214679% {
    top: -150px;
  }
  13.7614679% {
    top: -175px;
  }
  15.09761469% {
    top: -175px;
  }
  15.13761469% {
    top: -200px;
  }
  16.47376148% {
    top: -200px;
  }
  16.51376148% {
    top: -225px;
  }
  17.84990827% {
    top: -225px;
  }
  17.88990827% {
    top: -250px;
  }
  18.76733946% {
    top: -250px;
  }
  18.80733946% {
    top: -275px;
  }
  20.14348625% {
    top: -275px;
  }
  20.18348625% {
    top: -300px;
  }
  21.51963304% {
    top: -300px;
  }
  21.55963304% {
    top: -325px;
  }
  22.89577983% {
    top: -325px;
  }
  22.93577983% {
    top: -350px;
  }
  24.27192662% {
    top: -350px;
  }
  24.31192662% {
    top: -375px;
  }
  26.5655046% {
    top: -375px;
  }
  26.6055046% {
    top: -400px;
  }
  29.31779818% {
    top: -400px;
  }
  29.35779818% {
    top: -425px;
  }
  30.23522937% {
    top: -425px;
  }
  30.27522937% {
    top: -450px;
  }
  31.61137616% {
    top: -450px;
  }
  31.65137616% {
    top: -475px;
  }
  32.98752295% {
    top: -475px;
  }
  33.02752295% {
    top: -500px;
  }
  34.36366974% {
    top: -500px;
  }
  34.40366974% {
    top: -525px;
  }
  36.65724772% {
    top: -525px;
  }
  36.69724772% {
    top: -550px;
  }
  39.4095413% {
    top: -550px;
  }
  39.4495413% {
    top: -575px;
  }
  40.78568809% {
    top: -575px;
  }
  40.82568809% {
    top: -600px;
  }
  42.16183488% {
    top: -600px;
  }
  42.20183488% {
    top: -625px;
  }
  43.07926607% {
    top: -625px;
  }
  43.11926607% {
    top: -650px;
  }
  44.45541286% {
    top: -650px;
  }
  44.49541286% {
    top: -675px;
  }
  45.83155965% {
    top: -675px;
  }
  45.87155965% {
    top: -700px;
  }
  47.20770644% {
    top: -700px;
  }
  47.24770644% {
    top: -725px;
  }
  48.58385323% {
    top: -725px;
  }
  48.62385323% {
    top: -750px;
  }
  49.50128442% {
    top: -750px;
  }
  49.54128442% {
    top: -775px;
  }
  52.253578% {
    top: -775px;
  }
  52.293578% {
    top: -800px;
  }
  54.54715598% {
    top: -800px;
  }
  54.58715598% {
    top: -825px;
  }
  57.29944956% {
    top: -825px;
  }
  57.33944956% {
    top: -850px;
  }
  60.05174314% {
    top: -850px;
  }
  60.09174314% {
    top: -875px;
  }
  66.01504589% {
    top: -875px;
  }
  66.05504589% {
    top: -900px;
  }
  67.39119268% {
    top: -900px;
  }
  67.43119268% {
    top: -925px;
  }
  69.22605507% {
    top: -925px;
  }
  69.26605507% {
    top: -950px;
  }
  71.97834865% {
    top: -950px;
  }
  72.01834865% {
    top: -975px;
  }
  75.18935782% {
    top: -975px;
  }
  75.22935782% {
    top: -1000px;
  }
  77.9416514% {
    top: -1000px;
  }
  77.9816514% {
    top: -1025px;
  }
  79.31779819% {
    top: -1025px;
  }
  79.35779819% {
    top: -1050px;
  }
  80.23522938% {
    top: -1050px;
  }
  80.27522938% {
    top: -1075px;
  }
  81.61137617% {
    top: -1075px;
  }
  81.65137617% {
    top: -1100px;
  }
  82.98752296% {
    top: -1100px;
  }
  83.02752296% {
    top: -1125px;
  }
  84.36366975% {
    top: -1125px;
  }
  84.40366975% {
    top: -1150px;
  }
  85.73981654% {
    top: -1150px;
  }
  85.77981654% {
    top: -1175px;
  }
  86.65724773% {
    top: -1175px;
  }
  86.69724773% {
    top: -1200px;
  }
  88.03339452% {
    top: -1200px;
  }
  88.07339452% {
    top: -1225px;
  }
  90.7856881% {
    top: -1225px;
  }
  90.8256881% {
    top: -1250px;
  }
  93.53798168% {
    top: -1250px;
  }
  93.57798168% {
    top: -1275px;
  }
  95.83155966% {
    top: -1275px;
  }
  95.87155966% {
    top: -1300px;
  }
  98.58385324% {
    top: -1300px;
  }
  98.62385324% {
    top: -1325px;
  }
  99.96000003% {
    top: -1325px;
  }
  to {
    top: -1325px;
  }
}
</style>