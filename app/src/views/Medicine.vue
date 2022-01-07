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
        video_id: 'cJMSDlWlfMM',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Somebody mixed my medicine\n' +
          'Somebody mixed my medicine\n' +
          'You hurt where you sleep\n' +
          'And you sleep where you lie,\n' +
          'Now you\'re in deep and\n' +
          'Now you\'re gonna cry,\n' +
          'You got a woman to the left\n' +
          'And a boy to the right,\n' +
          'Start to sweat, so hold me tight\n' +
          'Somebody mixed my medicine\n' +
          'I don\'t know what I\'m on,\n' +
          'Somebody mixed my medicine\n' +
          'But baby it\'s all gone,\n' +
          'Somebody mixed my medicine\n' +
          'Somebody\'s in my head again\n' +
          'Somebody mixed my medicine again, again\n' +
          'I\'ll drink what you leak\n' +
          'And I\'ll smoke what you sigh\n' +
          'Straight across the room\n' +
          'With a look in your eye\n' +
          'I got a man to the left\n' +
          'And a girl to the right,\n' +
          'Start to sweat, so hold me tight\n' +
          'Somebody mixed my medicine\n' +
          'I don\'t know what I\'m on,\n' +
          'Somebody mixed my medicine\n' +
          'But baby it\'s all gone,\n' +
          'Somebody mixed my medicine\n' +
          'Somebody\'s in my head again\n' +
          'Somebody mixed my medicine again, again\n' +
          'There\'s a tiger in the room\n' +
          'And a baby in the closet,\n' +
          'Pour another drink mom,\n' +
          'I don\'t even want it\n' +
          'Then I turn around and think I see\n' +
          'Someone that looks like you\n' +
          'You hurt where you sleep\n' +
          'You sleep where you lie,\n' +
          'Now you\'re in deep and\n' +
          'Now you\'re gonna cry,\n' +
          'You got a woman to the left\n' +
          'And a boy to the right,\n' +
          'Start to sweat, so hold me tight\n' +
          'Somebody mixed my medicine\n' +
          'I don\'t know what I\'m on,\n' +
          'Somebody mixed my medicine\n' +
          'But baby it\'s all gone,\n' +
          'Somebody mixed my medicine\n' +
          'Somebody\'s in my head again\n' +
          'Somebody mixed my medicine\n' +
          'Again, again, again...\n' +
          'Again, again, again...\n' +
          'Again, again, again...\n' +
          'Somebody mixed my medicine\n' +
          'Somebody mixed my medicine\n' +
          'Somebody mixed my medicine'
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
  animation: move 261s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  10.30482759% {
    top: 0;
  }
  10.34482759% {
    top: -25px;
  }
  12.98681993% {
    top: -25px;
  }
  13.02681993% {
    top: -50px;
  }
  14.51938698% {
    top: -50px;
  }
  14.55938698% {
    top: -75px;
  }
  15.2856705% {
    top: -75px;
  }
  15.3256705% {
    top: -100px;
  }
  16.05195402% {
    top: -100px;
  }
  16.09195402% {
    top: -125px;
  }
  16.81823754% {
    top: -125px;
  }
  16.85823754% {
    top: -150px;
  }
  17.2013793% {
    top: -150px;
  }
  17.2413793% {
    top: -175px;
  }
  17.96766282% {
    top: -175px;
  }
  18.00766282% {
    top: -200px;
  }
  19.11708811% {
    top: -200px;
  }
  19.15708811% {
    top: -225px;
  }
  20.2665134% {
    top: -225px;
  }
  20.3065134% {
    top: -250px;
  }
  21.79908045% {
    top: -250px;
  }
  21.83908045% {
    top: -275px;
  }
  34.05961685% {
    top: -275px;
  }
  34.09961685% {
    top: -300px;
  }
  47.08643677% {
    top: -300px;
  }
  47.12643677% {
    top: -325px;
  }
  48.23586206% {
    top: -325px;
  }
  48.27586206% {
    top: -350px;
  }
  49.38528735% {
    top: -350px;
  }
  49.42528735% {
    top: -375px;
  }
  51.68413792% {
    top: -375px;
  }
  51.72413792% {
    top: -400px;
  }
  52.45042144% {
    top: -400px;
  }
  52.49042144% {
    top: -425px;
  }
  53.21670496% {
    top: -425px;
  }
  53.25670496% {
    top: -450px;
  }
  53.59984672% {
    top: -450px;
  }
  53.63984672% {
    top: -475px;
  }
  54.36613024% {
    top: -475px;
  }
  54.40613024% {
    top: -500px;
  }
  55.13241376% {
    top: -500px;
  }
  55.17241376% {
    top: -525px;
  }
  55.51555552% {
    top: -525px;
  }
  55.55555552% {
    top: -550px;
  }
  56.66498081% {
    top: -550px;
  }
  56.70498081% {
    top: -575px;
  }
  57.8144061% {
    top: -575px;
  }
  57.8544061% {
    top: -600px;
  }
  59.34697315% {
    top: -600px;
  }
  59.38697315% {
    top: -625px;
  }
  60.49639844% {
    top: -625px;
  }
  60.53639844% {
    top: -650px;
  }
  61.64582373% {
    top: -650px;
  }
  61.68582373% {
    top: -675px;
  }
  62.79524902% {
    top: -675px;
  }
  62.83524902% {
    top: -700px;
  }
  63.94467431% {
    top: -700px;
  }
  63.98467431% {
    top: -725px;
  }
  66.24352488% {
    top: -725px;
  }
  66.28352488% {
    top: -750px;
  }
  67.0098084% {
    top: -750px;
  }
  67.0498084% {
    top: -775px;
  }
  67.77609192% {
    top: -775px;
  }
  67.81609192% {
    top: -800px;
  }
  68.54237544% {
    top: -800px;
  }
  68.58237544% {
    top: -825px;
  }
  69.30865896% {
    top: -825px;
  }
  69.34865896% {
    top: -850px;
  }
  70.07494248% {
    top: -850px;
  }
  70.11494248% {
    top: -875px;
  }
  70.45808424% {
    top: -875px;
  }
  70.49808424% {
    top: -900px;
  }
  72.37379305% {
    top: -900px;
  }
  72.41379305% {
    top: -925px;
  }
  72.75693481% {
    top: -925px;
  }
  72.79693481% {
    top: -950px;
  }
  73.52321833% {
    top: -950px;
  }
  73.56321833% {
    top: -975px;
  }
  73.90636009% {
    top: -975px;
  }
  73.94636009% {
    top: -1000px;
  }
  74.67264361% {
    top: -1000px;
  }
  74.71264361% {
    top: -1025px;
  }
  75.43892713% {
    top: -1025px;
  }
  75.47892713% {
    top: -1050px;
  }
  76.58835242% {
    top: -1050px;
  }
  76.62835242% {
    top: -1075px;
  }
  77.73777771% {
    top: -1075px;
  }
  77.77777771% {
    top: -1100px;
  }
  78.887203% {
    top: -1100px;
  }
  78.927203% {
    top: -1125px;
  }
  80.03662829% {
    top: -1125px;
  }
  80.07662829% {
    top: -1150px;
  }
  81.18605358% {
    top: -1150px;
  }
  81.22605358% {
    top: -1175px;
  }
  82.71862063% {
    top: -1175px;
  }
  82.75862063% {
    top: -1200px;
  }
  83.86804592% {
    top: -1200px;
  }
  83.90804592% {
    top: -1225px;
  }
  85.01747121% {
    top: -1225px;
  }
  85.05747121% {
    top: -1250px;
  }
  86.55003826% {
    top: -1250px;
  }
  86.59003826% {
    top: -1275px;
  }
  89.2320306% {
    top: -1275px;
  }
  89.2720306% {
    top: -1300px;
  }
  91.53088117% {
    top: -1300px;
  }
  91.57088117% {
    top: -1325px;
  }
  94.97915703% {
    top: -1325px;
  }
  95.01915703% {
    top: -1350px;
  }
  97.2780076% {
    top: -1350px;
  }
  97.3180076% {
    top: -1375px;
  }
  99.95999994% {
    top: -1375px;
  }
  to {
    top: -1375px;
  }
}
</style>