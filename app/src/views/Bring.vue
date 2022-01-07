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
        video_id: '3YxaaGgTQYM',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'How can you see into my eyes like open doors\n' +
          'Leading you down into my core\n' +
          'Where I’ve become so numb\n' +
          'Without a soul my spirit sleeping somewhere cold\n' +
          'Until you find it there and lead it back home\n' +
          '(Wake me up)\n' +
          'Wake me up inside\n' +
          '(I can’t wake up)\n' +
          'Wake me up inside\n' +
          '(Save me)\n' +
          'Call my name and save me from the dark\n' +
          '(Wake me up)\n' +
          'Bid my blood to run\n' +
          '(I can’t wake up)\n' +
          'Before I come undone\n' +
          '(Save me)\n' +
          'Save me from the nothing I’ve become\n' +
          'Now that I know what I’m without\n' +
          'You can’t just leave me\n' +
          'Breathe into me and make me real\n' +
          'Bring me to life\n' +
          '(Wake me up)\n' +
          'Wake me up inside\n' +
          '(I can’t wake up)\n' +
          'Wake me up inside\n' +
          '(Save me)\n' +
          'Call my name and save me from the dark\n' +
          '(Wake me up)\n' +
          'Bid my blood to run\n' +
          '(I can’t wake up)\n' +
          'Before I come undone\n' +
          '(Save me)\n' +
          'Save me from the nothing I’ve become\n' +
          'Frozen inside without your touch\n' +
          'Without your love darling\n' +
          'Only you are the life among\n' +
          'The dead\n' +
          'All this time I can’t believe I couldn’t see\n' +
          'Kept in the dark but you were there in front of me\n' +
          'I’ve been sleeping a thousand years it seems\n' +
          'Got to open my eyes to everything\n' +
          'Without a thought without a voice without a soul\n' +
          'Don’t let me die here\n' +
          'There must be something more\n' +
          'Bring me to life\n' +
          '(Wake me up)\n' +
          'Wake me up inside\n' +
          '(I can’t wake up)\n' +
          'Wake me up inside\n' +
          '(Save me)\n' +
          'Call my name and save me from the dark\n' +
          '(Wake me up)\n' +
          'Bid my blood to run\n' +
          '(I can’t wake up)\n' +
          'Before I come undone\n' +
          '(Save me)\n' +
          'Save me from the nothing I’ve become\n' +
          '(Bring me to life)\n' +
          'I’ve been living a lie, there’s nothing inside\n' +
          '(Bring me to life)'
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
  top: -1475px;
  animation: move 235s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  10.59829787% {
    top: 0;
  }
  10.63829787% {
    top: -25px;
  }
  13.57702127% {
    top: -25px;
  }
  13.61702127% {
    top: -50px;
  }
  15.27914893% {
    top: -50px;
  }
  15.31914893% {
    top: -75px;
  }
  20.38553191% {
    top: -75px;
  }
  20.42553191% {
    top: -100px;
  }
  24.64085106% {
    top: -100px;
  }
  24.68085106% {
    top: -125px;
  }
  27.19404255% {
    top: -125px;
  }
  27.23404255% {
    top: -150px;
  }
  27.61957446% {
    top: -150px;
  }
  27.65957446% {
    top: -175px;
  }
  28.04510637% {
    top: -175px;
  }
  28.08510637% {
    top: -200px;
  }
  28.8961702% {
    top: -200px;
  }
  28.9361702% {
    top: -225px;
  }
  29.32170211% {
    top: -225px;
  }
  29.36170211% {
    top: -250px;
  }
  31.02382977% {
    top: -250px;
  }
  31.06382977% {
    top: -275px;
  }
  31.44936168% {
    top: -275px;
  }
  31.48936168% {
    top: -300px;
  }
  31.87489359% {
    top: -300px;
  }
  31.91489359% {
    top: -325px;
  }
  32.3004255% {
    top: -325px;
  }
  32.3404255% {
    top: -350px;
  }
  33.15148933% {
    top: -350px;
  }
  33.19148933% {
    top: -375px;
  }
  33.57702124% {
    top: -375px;
  }
  33.61702124% {
    top: -400px;
  }
  35.70468081% {
    top: -400px;
  }
  35.74468081% {
    top: -425px;
  }
  39.53446804% {
    top: -425px;
  }
  39.57446804% {
    top: -450px;
  }
  40.81106378% {
    top: -450px;
  }
  40.85106378% {
    top: -475px;
  }
  43.78978718% {
    top: -475px;
  }
  43.82978718% {
    top: -500px;
  }
  45.91744675% {
    top: -500px;
  }
  45.95744675% {
    top: -525px;
  }
  47.19404249% {
    top: -525px;
  }
  47.23404249% {
    top: -550px;
  }
  47.6195744% {
    top: -550px;
  }
  47.6595744% {
    top: -575px;
  }
  48.04510631% {
    top: -575px;
  }
  48.08510631% {
    top: -600px;
  }
  48.89617014% {
    top: -600px;
  }
  48.93617014% {
    top: -625px;
  }
  49.32170205% {
    top: -625px;
  }
  49.36170205% {
    top: -650px;
  }
  51.02382971% {
    top: -650px;
  }
  51.06382971% {
    top: -675px;
  }
  51.44936162% {
    top: -675px;
  }
  51.48936162% {
    top: -700px;
  }
  51.87489353% {
    top: -700px;
  }
  51.91489353% {
    top: -725px;
  }
  52.30042544% {
    top: -725px;
  }
  52.34042544% {
    top: -750px;
  }
  53.15148927% {
    top: -750px;
  }
  53.19148927% {
    top: -775px;
  }
  53.57702118% {
    top: -775px;
  }
  53.61702118% {
    top: -800px;
  }
  55.70468075% {
    top: -800px;
  }
  55.74468075% {
    top: -825px;
  }
  66.34297862% {
    top: -825px;
  }
  66.38297862% {
    top: -850px;
  }
  68.04510628% {
    top: -850px;
  }
  68.08510628% {
    top: -875px;
  }
  70.59829777% {
    top: -875px;
  }
  70.63829777% {
    top: -900px;
  }
  72.30042543% {
    top: -900px;
  }
  72.34042543% {
    top: -925px;
  }
  73.57702117% {
    top: -925px;
  }
  73.61702117% {
    top: -950px;
  }
  74.428085% {
    top: -950px;
  }
  74.468085% {
    top: -975px;
  }
  75.70468074% {
    top: -975px;
  }
  75.74468074% {
    top: -1000px;
  }
  76.55574457% {
    top: -1000px;
  }
  76.59574457% {
    top: -1025px;
  }
  77.83234031% {
    top: -1025px;
  }
  77.87234031% {
    top: -1050px;
  }
  78.68340414% {
    top: -1050px;
  }
  78.72340414% {
    top: -1075px;
  }
  79.10893605% {
    top: -1075px;
  }
  79.14893605% {
    top: -1100px;
  }
  81.23659562% {
    top: -1100px;
  }
  81.27659562% {
    top: -1125px;
  }
  81.66212753% {
    top: -1125px;
  }
  81.70212753% {
    top: -1150px;
  }
  82.08765944% {
    top: -1150px;
  }
  82.12765944% {
    top: -1175px;
  }
  82.51319135% {
    top: -1175px;
  }
  82.55319135% {
    top: -1200px;
  }
  82.93872326% {
    top: -1200px;
  }
  82.97872326% {
    top: -1225px;
  }
  83.36425517% {
    top: -1225px;
  }
  83.40425517% {
    top: -1250px;
  }
  85.49191474% {
    top: -1250px;
  }
  85.53191474% {
    top: -1275px;
  }
  85.91744665% {
    top: -1275px;
  }
  85.95744665% {
    top: -1300px;
  }
  86.34297856% {
    top: -1300px;
  }
  86.38297856% {
    top: -1325px;
  }
  86.76851047% {
    top: -1325px;
  }
  86.80851047% {
    top: -1350px;
  }
  87.6195743% {
    top: -1350px;
  }
  87.6595743% {
    top: -1375px;
  }
  88.04510621% {
    top: -1375px;
  }
  88.08510621% {
    top: -1400px;
  }
  90.17276578% {
    top: -1400px;
  }
  90.21276578% {
    top: -1425px;
  }
  92.30042535% {
    top: -1425px;
  }
  92.34042535% {
    top: -1450px;
  }
  94.00255301% {
    top: -1450px;
  }
  94.04255301% {
    top: -1475px;
  }
  99.95999982% {
    top: -1475px;
  }
  to {
    top: -1475px;
  }
}
</style>