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
        video_id: '2aJUnltwsqs',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I’m at war with the world and they\n' +
          'Try to pull me into the dark\n' +
          'I struggle to find my faith\n' +
          'As I’m slippin’ from your arms\n' +
          'It’s getting harder to stay awake\n' +
          'And my strength is fading fast\n' +
          'You breathe into me at last\n' +
          'I’m awake I’m alive\n' +
          'Now I know what I believe inside\n' +
          'Now it’s my time\n' +
          'I’ll do what I want ’cause this is my life\n' +
          'here, right now\n' +
          'I’ll stand my ground and never back down\n' +
          'I know what I believe inside\n' +
          'I’m awake and I’m alive\n' +
          'I’m at war with the world cause I\n' +
          'Ain’t never gonna sell my soul\n' +
          'I’ve already made up my mind\n' +
          'No matter what I can’t be bought or sold\n' +
          'When my faith is getting weak\n' +
          'And I feel like giving in\n' +
          'You breathe into me again\n' +
          'I’m awake I’m alive\n' +
          'Now I know what I believe inside\n' +
          'Now it’s my time\n' +
          'I’ll do what I want ’cause this is my life\n' +
          'here, right now\n' +
          'I’ll stand my ground and never back down\n' +
          'I know what I believe inside\n' +
          'I’m awake and I’m alive\n' +
          'Waking up waking up waking up waking up\n' +
          'Waking up waking up waking up waking up\n' +
          'In the dark\n' +
          'I can feel you in my sleep\n' +
          'In your arms I feel you breathe into me\n' +
          'Forever hold this heart that I will give to you\n' +
          'Forever I will live for you\n' +
          'I’m awake I’m alive\n' +
          'Now I know what I believe inside\n' +
          'Now it’s my time\n' +
          'I’ll do what I want ’cause this is my life\n' +
          'here, right now\n' +
          'I’ll stand my ground and never back down\n' +
          'I know what I believe inside\n' +
          'I’m awake and I’m alive\n' +
          'Waking up waking up waking up waking up\n' +
          'Waking up waking up waking up waking up'
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
  top: -1150px;
  animation: move 208s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  11.01769231% {
    top: 0;
  }
  11.05769231% {
    top: -25px;
  }
  12.46% {
    top: -25px;
  }
  12.5% {
    top: -50px;
  }
  13.42153846% {
    top: -50px;
  }
  13.46153846% {
    top: -75px;
  }
  15.34461538% {
    top: -75px;
  }
  15.38461538% {
    top: -100px;
  }
  16.78692307% {
    top: -100px;
  }
  16.82692307% {
    top: -125px;
  }
  18.22923076% {
    top: -125px;
  }
  18.26923076% {
    top: -150px;
  }
  20.15230768% {
    top: -150px;
  }
  20.19230768% {
    top: -175px;
  }
  21.11384614% {
    top: -175px;
  }
  21.15384614% {
    top: -200px;
  }
  23.51769229% {
    top: -200px;
  }
  23.55769229% {
    top: -225px;
  }
  24.47923075% {
    top: -225px;
  }
  24.51923075% {
    top: -250px;
  }
  26.40230767% {
    top: -250px;
  }
  26.44230767% {
    top: -275px;
  }
  27.84461536% {
    top: -275px;
  }
  27.88461536% {
    top: -300px;
  }
  29.28692305% {
    top: -300px;
  }
  29.32692305% {
    top: -325px;
  }
  30.72923074% {
    top: -325px;
  }
  30.76923074% {
    top: -350px;
  }
  32.17153843% {
    top: -350px;
  }
  32.21153843% {
    top: -375px;
  }
  39.86384612% {
    top: -375px;
  }
  39.90384612% {
    top: -400px;
  }
  41.30615381% {
    top: -400px;
  }
  41.34615381% {
    top: -425px;
  }
  42.26769227% {
    top: -425px;
  }
  42.30769227% {
    top: -450px;
  }
  44.19076919% {
    top: -450px;
  }
  44.23076919% {
    top: -475px;
  }
  45.63307688% {
    top: -475px;
  }
  45.67307688% {
    top: -500px;
  }
  47.07538457% {
    top: -500px;
  }
  47.11538457% {
    top: -525px;
  }
  48.99846149% {
    top: -525px;
  }
  49.03846149% {
    top: -550px;
  }
  50.44076918% {
    top: -550px;
  }
  50.48076918% {
    top: -575px;
  }
  52.3638461% {
    top: -575px;
  }
  52.4038461% {
    top: -600px;
  }
  53.32538456% {
    top: -600px;
  }
  53.36538456% {
    top: -625px;
  }
  55.24846148% {
    top: -625px;
  }
  55.28846148% {
    top: -650px;
  }
  56.69076917% {
    top: -650px;
  }
  56.73076917% {
    top: -675px;
  }
  58.13307686% {
    top: -675px;
  }
  58.17307686% {
    top: -700px;
  }
  59.57538455% {
    top: -700px;
  }
  59.61538455% {
    top: -725px;
  }
  61.01769224% {
    top: -725px;
  }
  61.05769224% {
    top: -750px;
  }
  63.42153839% {
    top: -750px;
  }
  63.46153839% {
    top: -775px;
  }
  66.30615377% {
    top: -775px;
  }
  66.34615377% {
    top: -800px;
  }
  67.26769223% {
    top: -800px;
  }
  67.30769223% {
    top: -825px;
  }
  68.70999992% {
    top: -825px;
  }
  68.74999992% {
    top: -850px;
  }
  71.5946153% {
    top: -850px;
  }
  71.6346153% {
    top: -875px;
  }
  73.99846145% {
    top: -875px;
  }
  74.03846145% {
    top: -900px;
  }
  75.44076914% {
    top: -900px;
  }
  75.48076914% {
    top: -925px;
  }
  83.61384606% {
    top: -925px;
  }
  83.65384606% {
    top: -950px;
  }
  85.53692298% {
    top: -950px;
  }
  85.57692298% {
    top: -975px;
  }
  86.49846144% {
    top: -975px;
  }
  86.53846144% {
    top: -1000px;
  }
  88.42153836% {
    top: -1000px;
  }
  88.46153836% {
    top: -1025px;
  }
  89.86384605% {
    top: -1025px;
  }
  89.90384605% {
    top: -1050px;
  }
  91.30615374% {
    top: -1050px;
  }
  91.34615374% {
    top: -1075px;
  }
  92.74846143% {
    top: -1075px;
  }
  92.78846143% {
    top: -1100px;
  }
  94.19076912% {
    top: -1100px;
  }
  94.23076912% {
    top: -1125px;
  }
  96.59461527% {
    top: -1125px;
  }
  96.63461527% {
    top: -1150px;
  }
  99.95999989% {
    top: -1150px;
  }
  to {
    top: -1150px;
  }
}
</style>