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
        video_id: 'xN0FFK8JSYE',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'My hands are searching for You\n' +
          'My arms are outstretched towards You\n' +
          'I feel You on my fingertips\n' +
          'My tongue dances behind my lips for You\n' +
          'There\'s fire risin\' through my being\n' +
          'Burning, I\'m not used to seeing You\n' +
          'I\'m alive, I\'m alive\n' +
          'I can feel You all around me\n' +
          'Thickening the air I\'m breathing\n' +
          'Holding on to what I\'m feeling\n' +
          'Savoring this heart that\'s healing\n' +
          'My hands float up above me\n' +
          'And You whisper, You love me\n' +
          'And I begin to fade into our secret place\n' +
          'The music makes me sway\n' +
          'The angels singing, say, "We are alone with You"\n' +
          'I am alone and they are too with You\n' +
          'I\'m alive, I\'m alive\n' +
          'I can feel You all around me\n' +
          'Thickening the air I\'m breathing\n' +
          'Holding on to what I\'m feeling\n' +
          'Savoring this heart that\'s healing\n' +
          'I can feel You all around me\n' +
          'Thickening the air I\'m breathing\n' +
          'Holding on to what I\'m feeling\n' +
          'Savoring this heart that\'s healing\n' +
          'And so I cry\n' +
          'The light is white\n' +
          'And I see You...\n' +
          'I\'m alive (I\'m alive), I\'m alive (I\'m alive)\n' +
          'I\'m alive...\n' +
          'I can feel You all around me\n' +
          'Thickening the air I\'m breathing\n' +
          'Holding on to what I\'m feeling\n' +
          'Savoring this heart that\'s healing\n' +
          'Take my hand, I give it to You\n' +
          'Now You own me, all I am\n' +
          'You said, You would never leave me\n' +
          'I believe You, I believe\n' +
          'I can feel You all around me\n' +
          'Thickening the air I\'m breathing\n' +
          'Holding on to what I\'m feeling\n' +
          'Savoring this heart that\'s healed'
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
  animation: move 203s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  9.31960591% {
    top: 0;
  }
  9.35960591% {
    top: -25px;
  }
  10.79743842% {
    top: -25px;
  }
  10.83743842% {
    top: -50px;
  }
  12.76788177% {
    top: -50px;
  }
  12.80788177% {
    top: -75px;
  }
  15.23093596% {
    top: -75px;
  }
  15.27093596% {
    top: -100px;
  }
  19.17182266% {
    top: -100px;
  }
  19.21182266% {
    top: -125px;
  }
  22.12748768% {
    top: -125px;
  }
  22.16748768% {
    top: -150px;
  }
  26.56098522% {
    top: -150px;
  }
  26.60098522% {
    top: -175px;
  }
  29.02403941% {
    top: -175px;
  }
  29.06403941% {
    top: -200px;
  }
  30.50187192% {
    top: -200px;
  }
  30.54187192% {
    top: -225px;
  }
  31.97970443% {
    top: -225px;
  }
  32.01970443% {
    top: -250px;
  }
  33.95014778% {
    top: -250px;
  }
  33.99014778% {
    top: -275px;
  }
  36.41320197% {
    top: -275px;
  }
  36.45320197% {
    top: -300px;
  }
  38.38364532% {
    top: -300px;
  }
  38.42364532% {
    top: -325px;
  }
  41.83192118% {
    top: -325px;
  }
  41.87192118% {
    top: -350px;
  }
  42.81714285% {
    top: -350px;
  }
  42.85714285% {
    top: -375px;
  }
  45.77280787% {
    top: -375px;
  }
  45.81280787% {
    top: -400px;
  }
  48.23586206% {
    top: -400px;
  }
  48.27586206% {
    top: -425px;
  }
  52.17674876% {
    top: -425px;
  }
  52.21674876% {
    top: -450px;
  }
  54.63980295% {
    top: -450px;
  }
  54.67980295% {
    top: -475px;
  }
  56.11763546% {
    top: -475px;
  }
  56.15763546% {
    top: -500px;
  }
  58.08807881% {
    top: -500px;
  }
  58.12807881% {
    top: -525px;
  }
  59.56591132% {
    top: -525px;
  }
  59.60591132% {
    top: -550px;
  }
  61.04374383% {
    top: -550px;
  }
  61.08374383% {
    top: -575px;
  }
  62.52157634% {
    top: -575px;
  }
  62.56157634% {
    top: -600px;
  }
  64.49201969% {
    top: -600px;
  }
  64.53201969% {
    top: -625px;
  }
  65.9698522% {
    top: -625px;
  }
  66.0098522% {
    top: -650px;
  }
  68.92551722% {
    top: -650px;
  }
  68.96551722% {
    top: -675px;
  }
  71.88118224% {
    top: -675px;
  }
  71.92118224% {
    top: -700px;
  }
  75.82206894% {
    top: -700px;
  }
  75.86206894% {
    top: -725px;
  }
  81.73339899% {
    top: -725px;
  }
  81.77339899% {
    top: -750px;
  }
  83.70384234% {
    top: -750px;
  }
  83.74384234% {
    top: -775px;
  }
  85.18167485% {
    top: -775px;
  }
  85.22167485% {
    top: -800px;
  }
  86.65950736% {
    top: -800px;
  }
  86.69950736% {
    top: -825px;
  }
  88.13733987% {
    top: -825px;
  }
  88.17733987% {
    top: -850px;
  }
  90.10778322% {
    top: -850px;
  }
  90.14778322% {
    top: -875px;
  }
  90.60039406% {
    top: -875px;
  }
  90.64039406% {
    top: -900px;
  }
  91.58561573% {
    top: -900px;
  }
  91.62561573% {
    top: -925px;
  }
  92.07822657% {
    top: -925px;
  }
  92.11822657% {
    top: -950px;
  }
  93.55605908% {
    top: -950px;
  }
  93.59605908% {
    top: -975px;
  }
  95.03389159% {
    top: -975px;
  }
  95.07389159% {
    top: -1000px;
  }
  96.5117241% {
    top: -1000px;
  }
  96.5517241% {
    top: -1025px;
  }
  97.98955661% {
    top: -1025px;
  }
  98.02955661% {
    top: -1050px;
  }
  99.95999996% {
    top: -1050px;
  }
  to {
    top: -1050px;
  }
}
</style>