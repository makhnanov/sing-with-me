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
        video_id: '1jre6_FBBc0',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Crush a bit, little bit\n' +
          'Roll it up, take a hit\n' +
          'Feeling lit, feeling right\n' +
          'Two AM, summer night\n' +
          'I don\'t care\n' +
          'Hand on the wheel\n' +
          'Driving drunk I\'m doing my thang\n' +
          'Rolling the Midwest side and out\n' +
          'Living my life, getting our dreams\n' +
          'I\'ma do just what I want\n' +
          'Looking ahead no turning back\n' +
          'People told me slow my roll\n' +
          'I\'m screaming out, "Fuck that"\n' +
          'I\'m screaming out, "Fuck that"\n' +
          'I\'m screaming out, "Fuck that"\n' +
          'Tell me what you know about dreamin\', dreamin\'\n' +
          'You don\'t really know about nothin\', nothin\'\n' +
          'Tell me what you know about them night terrors every night\n' +
          'Five AM cold sweats, waking up to the sky\n' +
          'I\'m on the pursuit of happiness and I know\n' +
          'Everything that shine ain\'t always gonna be gold, hey\n' +
          'I\'ll be fine once I get it, yeah, I\'ll be good\n' +
          'I\'m on the pursuit of happiness and I know\n' +
          'Everything that shine ain\'t always gonna be gold, hey\n' +
          'I\'ll be fine once I get it\n' +
          'Tell me what you know about dreams, dreams\n' +
          'Tell me what you know about night terrors, nothin\'\n' +
          'You don\'t really care about the trials of tomorrow\n' +
          'Rather lay awake in the bed full of sorrow\n' +
          'I\'m on the pursuit of happiness and I know\n' +
          'Everything that shine ain\'t always gonna be gold, hey\n' +
          'I\'ll be fine once I get it, yeah, I\'ll be good\n' +
          'I\'m on the pursuit of happiness and I know\n' +
          'Everything that shine ain\'t always gonna be gold, hey\n' +
          'I\'ll be fine once I get it, yeah, I\'ll be good\n' +
          'I\'m on the pursuit of happiness\n' +
          'I know everything that shine ain\'t always gold\n' +
          'I\'ll be fine once I get it, I\'ll be good\n' +
          'I\'m on the pursuit of happiness and I know\n' +
          'Everything that shine ain\'t always gonna be gold, hey\n' +
          'I\'ll be fine once I get it, yeah, I\'ll be good'
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
  top: -1000px;
  animation: move 288s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  5.86277778% {
    top: 0;
  }
  5.90277778% {
    top: -25px;
  }
  6.55722222% {
    top: -25px;
  }
  6.59722222% {
    top: -50px;
  }
  7.25166666% {
    top: -50px;
  }
  7.29166666% {
    top: -75px;
  }
  7.59888888% {
    top: -75px;
  }
  7.63888888% {
    top: -100px;
  }
  7.9461111% {
    top: -100px;
  }
  7.9861111% {
    top: -125px;
  }
  8.29333332% {
    top: -125px;
  }
  8.33333332% {
    top: -150px;
  }
  8.98777776% {
    top: -150px;
  }
  9.02777776% {
    top: -175px;
  }
  9.6822222% {
    top: -175px;
  }
  9.7222222% {
    top: -200px;
  }
  10.37666664% {
    top: -200px;
  }
  10.41666664% {
    top: -225px;
  }
  11.07111108% {
    top: -225px;
  }
  11.11111108% {
    top: -250px;
  }
  11.76555552% {
    top: -250px;
  }
  11.80555552% {
    top: -275px;
  }
  12.45999996% {
    top: -275px;
  }
  12.49999996% {
    top: -300px;
  }
  12.80722218% {
    top: -300px;
  }
  12.84722218% {
    top: -325px;
  }
  13.50166662% {
    top: -325px;
  }
  13.54166662% {
    top: -350px;
  }
  14.19611106% {
    top: -350px;
  }
  14.23611106% {
    top: -375px;
  }
  27.3905555% {
    top: -375px;
  }
  27.4305555% {
    top: -400px;
  }
  28.43222217% {
    top: -400px;
  }
  28.47222217% {
    top: -425px;
  }
  29.82111106% {
    top: -425px;
  }
  29.86111106% {
    top: -450px;
  }
  31.20999995% {
    top: -450px;
  }
  31.24999995% {
    top: -475px;
  }
  37.80722217% {
    top: -475px;
  }
  37.84722217% {
    top: -500px;
  }
  38.84888884% {
    top: -500px;
  }
  38.88888884% {
    top: -525px;
  }
  41.62666662% {
    top: -525px;
  }
  41.66666662% {
    top: -550px;
  }
  42.66833329% {
    top: -550px;
  }
  42.70833329% {
    top: -575px;
  }
  44.4044444% {
    top: -575px;
  }
  44.4444444% {
    top: -600px;
  }
  45.79333329% {
    top: -600px;
  }
  45.83333329% {
    top: -625px;
  }
  64.89055551% {
    top: -625px;
  }
  64.93055551% {
    top: -650px;
  }
  66.2794444% {
    top: -650px;
  }
  66.3194444% {
    top: -675px;
  }
  67.66833329% {
    top: -675px;
  }
  67.70833329% {
    top: -700px;
  }
  68.70999996% {
    top: -700px;
  }
  68.74999996% {
    top: -725px;
  }
  80.51555552% {
    top: -725px;
  }
  80.55555552% {
    top: -750px;
  }
  82.25166663% {
    top: -750px;
  }
  82.29166663% {
    top: -775px;
  }
  84.33499996% {
    top: -775px;
  }
  84.37499996% {
    top: -800px;
  }
  85.72388885% {
    top: -800px;
  }
  85.76388885% {
    top: -825px;
  }
  87.11277774% {
    top: -825px;
  }
  87.15277774% {
    top: -850px;
  }
  89.5433333% {
    top: -850px;
  }
  89.5833333% {
    top: -875px;
  }
  90.58499997% {
    top: -875px;
  }
  90.62499997% {
    top: -900px;
  }
  91.97388886% {
    top: -900px;
  }
  92.01388886% {
    top: -925px;
  }
  95.09888886% {
    top: -925px;
  }
  95.13888886% {
    top: -950px;
  }
  96.14055553% {
    top: -950px;
  }
  96.18055553% {
    top: -975px;
  }
  97.52944442% {
    top: -975px;
  }
  97.56944442% {
    top: -1000px;
  }
  99.95999998% {
    top: -1000px;
  }
  to {
    top: -1000px;
  }
}
</style>