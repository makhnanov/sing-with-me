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
        video_id: 'uGcsIdGOuZY',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I\'m just a step away\n' +
          'I\'m just a breath away\n' +
          'Losin\' my faith today\n' +
          '(Fallin\' off the edge today)\n' +
          'I am just a man\n' +
          'Not superhuman\n' +
          '(I\'m not superhuman)\n' +
          'Someone save me from the hate\n' +
          'It\'s just another war\n' +
          'Just another family torn\n' +
          '(Falling from my faith today)\n' +
          'Just a step from the edge\n' +
          'Just another day in the world we live\n' +
          'I need a hero to save me now\n' +
          'I need a hero (save me now)\n' +
          'I need a hero to save my life\n' +
          'A hero\'ll save me (just in time)\n' +
          'I\'ve gotta fight today\n' +
          'To live another day\n' +
          'Speakin\' my mind today\n' +
          '(My voice will be heard today)\n' +
          'I\'ve gotta make a stand\n' +
          'But I am just a man\n' +
          '(I\'m not superhuman)\n' +
          'My voice will be heard today\n' +
          'It\'s just another war\n' +
          'Just another family torn\n' +
          '(My voice will be heard today)\n' +
          'It\'s just another kill\n' +
          'The countdown begins to destroy ourselves\n' +
          'I need a hero to save me now\n' +
          'I need a hero (save me now)\n' +
          'I need a hero to save my life\n' +
          'A hero\'ll save me (just in time)\n' +
          'I need a hero to save my life\n' +
          'I need a hero just in time\n' +
          'Save me just in time\n' +
          'Save me just in time\n' +
          'Who\'s gonna fight for what\'s right\n' +
          'Who\'s gonna help us survive\n' +
          'We\'re in the fight of our lives\n' +
          '(And we\'re not ready to die)\n' +
          'Who\'s gonna fight for the weak\n' +
          'Who\'s gonna make \'em believe\n' +
          'I\'ve got a hero (I\'ve got a hero)\n' +
          'Livin\' in me\n' +
          'I\'m gonna fight for what\'s right\n' +
          'Today I\'m speaking my mind\n' +
          'And if it kills me tonight\n' +
          '(I will be ready to die)\n' +
          'A hero\'s not afraid to give his life\n' +
          'A hero\'s gonna save me just in time\n' +
          'I need a hero to save me now\n' +
          'I need a hero (save me now)\n' +
          'I need a hero to save my life\n' +
          'A hero\'ll save me (just in time)\n' +
          'I need a hero\n' +
          'Who\'s gonna fight for what\'s right\n' +
          'Who\'s gonna help us survive\n' +
          'I need a hero\n' +
          'Who\'s gonna fight for the weak\n' +
          'Who\'s gonna make \'em believe\n' +
          'I need a hero\n' +
          'I need a hero\n' +
          'A hero\'s gonna save me just in time'
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
  top: -1600px;
  animation: move 244s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  10.20590164% {
    top: 0;
  }
  10.24590164% {
    top: -25px;
  }
  11.02557377% {
    top: -25px;
  }
  11.06557377% {
    top: -50px;
  }
  11.43540984% {
    top: -50px;
  }
  11.47540984% {
    top: -75px;
  }
  12.25508197% {
    top: -75px;
  }
  12.29508197% {
    top: -100px;
  }
  13.0747541% {
    top: -100px;
  }
  13.1147541% {
    top: -125px;
  }
  13.48459017% {
    top: -125px;
  }
  13.52459017% {
    top: -150px;
  }
  14.3042623% {
    top: -150px;
  }
  14.3442623% {
    top: -175px;
  }
  15.12393443% {
    top: -175px;
  }
  15.16393443% {
    top: -200px;
  }
  15.94360656% {
    top: -200px;
  }
  15.98360656% {
    top: -225px;
  }
  17.17311476% {
    top: -225px;
  }
  17.21311476% {
    top: -250px;
  }
  17.58295083% {
    top: -250px;
  }
  17.62295083% {
    top: -275px;
  }
  18.81245903% {
    top: -275px;
  }
  18.85245903% {
    top: -300px;
  }
  20.45180329% {
    top: -300px;
  }
  20.49180329% {
    top: -325px;
  }
  22.09114755% {
    top: -325px;
  }
  22.13114755% {
    top: -350px;
  }
  23.32065575% {
    top: -350px;
  }
  23.36065575% {
    top: -375px;
  }
  24.55016395% {
    top: -375px;
  }
  24.59016395% {
    top: -400px;
  }
  26.18950821% {
    top: -400px;
  }
  26.22950821% {
    top: -425px;
  }
  27.00918034% {
    top: -425px;
  }
  27.04918034% {
    top: -450px;
  }
  27.41901641% {
    top: -450px;
  }
  27.45901641% {
    top: -475px;
  }
  28.23868854% {
    top: -475px;
  }
  28.27868854% {
    top: -500px;
  }
  29.05836067% {
    top: -500px;
  }
  29.09836067% {
    top: -525px;
  }
  29.8780328% {
    top: -525px;
  }
  29.9180328% {
    top: -550px;
  }
  30.28786887% {
    top: -550px;
  }
  30.32786887% {
    top: -575px;
  }
  31.107541% {
    top: -575px;
  }
  31.147541% {
    top: -600px;
  }
  31.92721313% {
    top: -600px;
  }
  31.96721313% {
    top: -625px;
  }
  32.74688526% {
    top: -625px;
  }
  32.78688526% {
    top: -650px;
  }
  33.97639346% {
    top: -650px;
  }
  34.01639346% {
    top: -675px;
  }
  34.38622953% {
    top: -675px;
  }
  34.42622953% {
    top: -700px;
  }
  35.61573773% {
    top: -700px;
  }
  35.65573773% {
    top: -725px;
  }
  36.84524593% {
    top: -725px;
  }
  36.88524593% {
    top: -750px;
  }
  38.48459019% {
    top: -750px;
  }
  38.52459019% {
    top: -775px;
  }
  39.71409839% {
    top: -775px;
  }
  39.75409839% {
    top: -800px;
  }
  41.35344265% {
    top: -800px;
  }
  41.39344265% {
    top: -825px;
  }
  42.58295085% {
    top: -825px;
  }
  42.62295085% {
    top: -850px;
  }
  44.22229511% {
    top: -850px;
  }
  44.26229511% {
    top: -875px;
  }
  45.45180331% {
    top: -875px;
  }
  45.49180331% {
    top: -900px;
  }
  47.09114757% {
    top: -900px;
  }
  47.13114757% {
    top: -925px;
  }
  48.32065577% {
    top: -925px;
  }
  48.36065577% {
    top: -950px;
  }
  49.1403279% {
    top: -950px;
  }
  49.1803279% {
    top: -975px;
  }
  49.96000003% {
    top: -975px;
  }
  50.00000003% {
    top: -1000px;
  }
  50.3698361% {
    top: -1000px;
  }
  50.4098361% {
    top: -1025px;
  }
  51.18950823% {
    top: -1025px;
  }
  51.22950823% {
    top: -1050px;
  }
  52.00918036% {
    top: -1050px;
  }
  52.04918036% {
    top: -1075px;
  }
  52.41901643% {
    top: -1075px;
  }
  52.45901643% {
    top: -1100px;
  }
  53.64852463% {
    top: -1100px;
  }
  53.68852463% {
    top: -1125px;
  }
  54.0583607% {
    top: -1125px;
  }
  54.0983607% {
    top: -1150px;
  }
  54.46819677% {
    top: -1150px;
  }
  54.50819677% {
    top: -1175px;
  }
  55.2878689% {
    top: -1175px;
  }
  55.3278689% {
    top: -1200px;
  }
  56.10754103% {
    top: -1200px;
  }
  56.14754103% {
    top: -1225px;
  }
  56.92721316% {
    top: -1225px;
  }
  56.96721316% {
    top: -1250px;
  }
  57.74688529% {
    top: -1250px;
  }
  57.78688529% {
    top: -1275px;
  }
  59.38622955% {
    top: -1275px;
  }
  59.42622955% {
    top: -1300px;
  }
  62.25508201% {
    top: -1300px;
  }
  62.29508201% {
    top: -1325px;
  }
  83.97639349% {
    top: -1325px;
  }
  84.01639349% {
    top: -1350px;
  }
  89.30426234% {
    top: -1350px;
  }
  89.34426234% {
    top: -1375px;
  }
  90.9436066% {
    top: -1375px;
  }
  90.9836066% {
    top: -1400px;
  }
  91.35344267% {
    top: -1400px;
  }
  91.39344267% {
    top: -1425px;
  }
  91.76327874% {
    top: -1425px;
  }
  91.80327874% {
    top: -1450px;
  }
  92.58295087% {
    top: -1450px;
  }
  92.62295087% {
    top: -1475px;
  }
  93.81245907% {
    top: -1475px;
  }
  93.85245907% {
    top: -1500px;
  }
  94.6321312% {
    top: -1500px;
  }
  94.6721312% {
    top: -1525px;
  }
  95.04196727% {
    top: -1525px;
  }
  95.08196727% {
    top: -1550px;
  }
  95.8616394% {
    top: -1550px;
  }
  95.9016394% {
    top: -1575px;
  }
  97.50098366% {
    top: -1575px;
  }
  97.54098366% {
    top: -1600px;
  }
  99.96000005% {
    top: -1600px;
  }
  to {
    top: -1600px;
  }
}
</style>