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
        video_id: 'L-iepu3EtyE',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Life is a waterfall\n' +
          'We\'re one in the river\n' +
          'And one again after the fall\n' +
          'Swimming through the void\n' +
          'We hear the word\n' +
          'We lose ourselves\n' +
          'But we find it all?\n' +
          '\'Cause we are the ones that want to play\n' +
          'Always want to go\n' +
          'But you never want to stay\n' +
          'And we are the ones that want to choose\n' +
          'Always want to play\n' +
          'But you never want to lose\n' +
          'Aerials in the sky\n' +
          'When you lose small mind\n' +
          'You free your life\n' +
          'Life is a waterfall\n' +
          'We drink from the river\n' +
          'Then we turn around and put up our walls\n' +
          'Swimming through the void\n' +
          'We hear the word\n' +
          'We lose ourselves\n' +
          'But we find it all?\n' +
          '\'Cause we are the ones that want to play\n' +
          'Always want to go\n' +
          'But you never want to stay\n' +
          'And we are the ones that want to choose\n' +
          'Always want to play\n' +
          'But you never want to lose\n' +
          'Aerials in the sky\n' +
          'When you lose small mind\n' +
          'You free your life\n' +
          'Aerials so up high\n' +
          'When you free your eyes\n' +
          'Eternal prize\n' +
          'Aerials in the sky\n' +
          'When you lose small mind\n' +
          'You free your life\n' +
          'Aerials so up high\n' +
          'When you free your eyes\n' +
          'Eternal prize'
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
  animation: move 213s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  20.14779343% {
    top: 0;
  }
  20.18779343% {
    top: -25px;
  }
  21.08676057% {
    top: -25px;
  }
  21.12676057% {
    top: -50px;
  }
  22.49521127% {
    top: -50px;
  }
  22.53521127% {
    top: -75px;
  }
  24.84262911% {
    top: -75px;
  }
  24.88262911% {
    top: -100px;
  }
  25.78159625% {
    top: -100px;
  }
  25.82159625% {
    top: -125px;
  }
  26.72056339% {
    top: -125px;
  }
  26.76056339% {
    top: -150px;
  }
  27.65953053% {
    top: -150px;
  }
  27.69953053% {
    top: -175px;
  }
  31.88488264% {
    top: -175px;
  }
  31.92488264% {
    top: -200px;
  }
  32.35436621% {
    top: -200px;
  }
  32.39436621% {
    top: -225px;
  }
  33.29333335% {
    top: -225px;
  }
  33.33333335% {
    top: -250px;
  }
  37.51868546% {
    top: -250px;
  }
  37.55868546% {
    top: -275px;
  }
  37.98816903% {
    top: -275px;
  }
  38.02816903% {
    top: -300px;
  }
  39.8661033% {
    top: -300px;
  }
  39.9061033% {
    top: -325px;
  }
  47.37784039% {
    top: -325px;
  }
  47.41784039% {
    top: -350px;
  }
  48.31680753% {
    top: -350px;
  }
  48.35680753% {
    top: -375px;
  }
  49.72525823% {
    top: -375px;
  }
  49.76525823% {
    top: -400px;
  }
  51.6031925% {
    top: -400px;
  }
  51.6431925% {
    top: -425px;
  }
  52.07267607% {
    top: -425px;
  }
  52.11267607% {
    top: -450px;
  }
  53.48112677% {
    top: -450px;
  }
  53.52112677% {
    top: -475px;
  }
  56.29802818% {
    top: -475px;
  }
  56.33802818% {
    top: -500px;
  }
  57.23699532% {
    top: -500px;
  }
  57.27699532% {
    top: -525px;
  }
  57.70647889% {
    top: -525px;
  }
  57.74647889% {
    top: -550px;
  }
  59.11492959% {
    top: -550px;
  }
  59.15492959% {
    top: -575px;
  }
  62.87079813% {
    top: -575px;
  }
  62.91079813% {
    top: -600px;
  }
  63.3402817% {
    top: -600px;
  }
  63.3802817% {
    top: -625px;
  }
  64.7487324% {
    top: -625px;
  }
  64.7887324% {
    top: -650px;
  }
  68.50460094% {
    top: -650px;
  }
  68.54460094% {
    top: -675px;
  }
  68.97408451% {
    top: -675px;
  }
  69.01408451% {
    top: -700px;
  }
  71.32150235% {
    top: -700px;
  }
  71.36150235% {
    top: -725px;
  }
  80.71117371% {
    top: -725px;
  }
  80.75117371% {
    top: -750px;
  }
  82.11962441% {
    top: -750px;
  }
  82.15962441% {
    top: -775px;
  }
  83.52807511% {
    top: -775px;
  }
  83.56807511% {
    top: -800px;
  }
  86.34497652% {
    top: -800px;
  }
  86.38497652% {
    top: -825px;
  }
  87.75342722% {
    top: -825px;
  }
  87.79342722% {
    top: -850px;
  }
  88.69239436% {
    top: -850px;
  }
  88.73239436% {
    top: -875px;
  }
  91.50929577% {
    top: -875px;
  }
  91.54929577% {
    top: -900px;
  }
  92.91774647% {
    top: -900px;
  }
  92.95774647% {
    top: -925px;
  }
  94.32619717% {
    top: -925px;
  }
  94.36619717% {
    top: -950px;
  }
  97.14309858% {
    top: -950px;
  }
  97.18309858% {
    top: -975px;
  }
  98.55154928% {
    top: -975px;
  }
  98.59154928% {
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