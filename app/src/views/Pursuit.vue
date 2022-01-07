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
        video_id: '7xzU9Qqdqww',
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
          'People told me slow my roll\n' +
          'I\'m screaming out, "Fuck that"\n' +
          'I\'ma do just what I want\n' +
          'Looking ahead no turning back\n' +
          'If I fall if I die\n' +
          'Know I lived it to the fullest\n' +
          'If I fall if I die\n' +
          'Know I lived and missed some bullets\n' +
          'I\'m on the pursuit of happiness and I know\n' +
          'Everything that shine ain\'t always gonna be gold, hey\n' +
          'I\'ll be fine once I get it, yeah, I\'ll be good\n' +
          'I\'m on the pursuit of happiness and I know\n' +
          'Everything that shine ain\'t always gonna be gold, hey\n' +
          'I\'ll be fine once I get it, yeah, I\'ll be good\n' +
          'Tell me what you know about dreamin\', dreamin\'\n' +
          'You don\'t really know about nothin\', nothin\'\n' +
          'Tell me what you know about them night terrors every night\n' +
          'Five AM cold sweats, waking up to the sky\n' +
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
          'I\'ll be fine once I get it, yeah, I\'ll be good\n' +
          'I\'m on the pursuit of happiness and I know\n' +
          'Everything that shine ain\'t always gonna be gold, hey\n' +
          'I\'ll be fine once I get it, yeah, I\'ll be good\n' +
          'Pursuit of happiness\n' +
          'Yeah, I\'m gon\' get it, I\'ll be, good\n' +
          'Ugh\n' +
          'Oh man\n' +
          'Oh alright, oh\n' +
          'Room\'s spinning, room\'s spinning\n' +
          'Pat, Zuli, wait, oh fuck\n' +
          'Oh my God\n' +
          'Why did I drink so much and smoke so much? Ugh\n' +
          'Oh fuck'
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
  top: -1375px;
  animation: move 277s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  4.65314079% {
    top: 0;
  }
  4.69314079% {
    top: -25px;
  }
  5.37516245% {
    top: -25px;
  }
  5.41516245% {
    top: -50px;
  }
  6.09718411% {
    top: -50px;
  }
  6.13718411% {
    top: -75px;
  }
  6.81920577% {
    top: -75px;
  }
  6.85920577% {
    top: -100px;
  }
  7.1802166% {
    top: -100px;
  }
  7.2202166% {
    top: -125px;
  }
  7.54122743% {
    top: -125px;
  }
  7.58122743% {
    top: -150px;
  }
  8.26324909% {
    top: -150px;
  }
  8.30324909% {
    top: -175px;
  }
  8.98527075% {
    top: -175px;
  }
  9.02527075% {
    top: -200px;
  }
  9.70729241% {
    top: -200px;
  }
  9.74729241% {
    top: -225px;
  }
  10.42931407% {
    top: -225px;
  }
  10.46931407% {
    top: -250px;
  }
  11.51234656% {
    top: -250px;
  }
  11.55234656% {
    top: -275px;
  }
  12.23436822% {
    top: -275px;
  }
  12.27436822% {
    top: -300px;
  }
  12.95638988% {
    top: -300px;
  }
  12.99638988% {
    top: -325px;
  }
  13.67841154% {
    top: -325px;
  }
  13.71841154% {
    top: -350px;
  }
  14.4004332% {
    top: -350px;
  }
  14.4404332% {
    top: -375px;
  }
  15.12245486% {
    top: -375px;
  }
  15.16245486% {
    top: -400px;
  }
  15.84447652% {
    top: -400px;
  }
  15.88447652% {
    top: -425px;
  }
  17.28851984% {
    top: -425px;
  }
  17.32851984% {
    top: -450px;
  }
  19.09357399% {
    top: -450px;
  }
  19.13357399% {
    top: -475px;
  }
  21.98166063% {
    top: -475px;
  }
  22.02166063% {
    top: -500px;
  }
  23.42570395% {
    top: -500px;
  }
  23.46570395% {
    top: -525px;
  }
  25.2307581% {
    top: -525px;
  }
  25.2707581% {
    top: -550px;
  }
  27.75783391% {
    top: -550px;
  }
  27.79783391% {
    top: -575px;
  }
  29.56288806% {
    top: -575px;
  }
  29.60288806% {
    top: -600px;
  }
  31.00693138% {
    top: -600px;
  }
  31.04693138% {
    top: -625px;
  }
  32.4509747% {
    top: -625px;
  }
  32.4909747% {
    top: -650px;
  }
  33.89501802% {
    top: -650px;
  }
  33.93501802% {
    top: -675px;
  }
  35.33906134% {
    top: -675px;
  }
  35.37906134% {
    top: -700px;
  }
  36.78310466% {
    top: -700px;
  }
  36.82310466% {
    top: -725px;
  }
  38.22714798% {
    top: -725px;
  }
  38.26714798% {
    top: -750px;
  }
  40.03220213% {
    top: -750px;
  }
  40.07220213% {
    top: -775px;
  }
  41.47624545% {
    top: -775px;
  }
  41.51624545% {
    top: -800px;
  }
  43.2812996% {
    top: -800px;
  }
  43.3212996% {
    top: -825px;
  }
  45.80837541% {
    top: -825px;
  }
  45.84837541% {
    top: -850px;
  }
  47.61342956% {
    top: -850px;
  }
  47.65342956% {
    top: -875px;
  }
  49.41848371% {
    top: -875px;
  }
  49.45848371% {
    top: -900px;
  }
  51.94555952% {
    top: -900px;
  }
  51.98555952% {
    top: -925px;
  }
  53.02859201% {
    top: -925px;
  }
  53.06859201% {
    top: -950px;
  }
  55.19465699% {
    top: -950px;
  }
  55.23465699% {
    top: -975px;
  }
  58.08274363% {
    top: -975px;
  }
  58.12274363% {
    top: -1000px;
  }
  71.44014435% {
    top: -1000px;
  }
  71.48014435% {
    top: -1025px;
  }
  73.2451985% {
    top: -1025px;
  }
  73.2851985% {
    top: -1050px;
  }
  76.13328514% {
    top: -1050px;
  }
  76.17328514% {
    top: -1075px;
  }
  77.57732846% {
    top: -1075px;
  }
  77.61732846% {
    top: -1100px;
  }
  79.38238261% {
    top: -1100px;
  }
  79.42238261% {
    top: -1125px;
  }
  81.90945842% {
    top: -1125px;
  }
  81.94945842% {
    top: -1150px;
  }
  83.35350174% {
    top: -1150px;
  }
  83.39350174% {
    top: -1175px;
  }
  86.96361004% {
    top: -1175px;
  }
  87.00361004% {
    top: -1200px;
  }
  88.04664253% {
    top: -1200px;
  }
  88.08664253% {
    top: -1225px;
  }
  89.85169668% {
    top: -1225px;
  }
  89.89169668% {
    top: -1250px;
  }
  90.93472917% {
    top: -1250px;
  }
  90.97472917% {
    top: -1275px;
  }
  92.01776166% {
    top: -1275px;
  }
  92.05776166% {
    top: -1300px;
  }
  94.18382664% {
    top: -1300px;
  }
  94.22382664% {
    top: -1325px;
  }
  95.98888079% {
    top: -1325px;
  }
  96.02888079% {
    top: -1350px;
  }
  97.07191328% {
    top: -1350px;
  }
  97.11191328% {
    top: -1375px;
  }
  99.95999992% {
    top: -1375px;
  }
  to {
    top: -1375px;
  }
}
</style>