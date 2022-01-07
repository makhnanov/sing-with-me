<template>
  <div class="resume">
    <div class="container">
      <YoutubeVue3 ref="youtube" :videoid="play.video_id" :loop="play.loop" :width="854" :height="480"
                   @ended="onEnded" @paused="onPaused" @played="onPlayed"/>
      <div class="text" v-bind:class="{ hidden: !isMusicListen }">

        <div class="text-block" v-bind:class="{ paused: !isMusicListen }">
          {{ textBlock }}
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
        video_id:"qrOeGCJdZe4",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id:"qrOeGCJdZe4",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '' +
          'All the right friends in all the wrong places\n' +
          'So yeah, we\'re going down\n' +
          'They\'ve got all the right moves and all the right faces\n' +
          'So yeah, we\'re going down\n' +
          'Paint a picture of a perfect place\n' +
          'They\'ve got it better than what anyone\'s told you\n' +
          'They\'ll be the King of Hearts, and you\'ll be the Queen of Spades\n' +
          'And we\'ll fight for you like we were your soldiers\n' +
          'I know we\'ve got it good\n' +
          'But they\'ve got it made\n' +
          'And the grass is getting greener each day\n' +
          'I know things are looking up\n' +
          'But soon they\'ll take us down\n' +
          'Before everybody\'s knowing our name.\n' +
          'They\'ve got all the right friends in all the right places\n' +
          'So yeah, we\'re going down\n' +
          'They\'ve got all the right moves and all the wrong faces\n' +
          'So yeah, we\'re going down\n' +
          'They said, everybody knows, everybody knows where we\'re going\n' +
          'Yeah, we\'re going down\n' +
          'They said, everybody knows, everybody knows where we\'re going\n' +
          'Yeah, we\'re going down\n' +
          'Do you think I\'m special?\n' +
          'Do you think I\'m nice?\n' +
          'Am I bright enough to shine in your spaces?\n' +
          'Between the noise you hear\n' +
          'And the sound you like\n' +
          'Are we just sinking in an ocean of faces?\n' +
          'It can be possible to make you fall,\n' +
          'Only when it\'s over our heads\n' +
          'The sun is shining everyday, but it\'s far away\n' +
          'All the world is dead.\n' +
          'They\'ve got. They\'ve got\n' +
          'All the right friends in all the wrong places\n' +
          'So yeah, we\'re going down\n' +
          'They\'ve got all the right moves and all the wrong faces\n' +
          'So yeah, we\'re going down\n' +
          'They said, everybody knows, everybody knows where we\'re going\n' +
          'Yeah, we\'re going down\n' +
          'They said, everybody knows, everybody knows where we\'re going\n' +
          'Yeah, we\'re going down\n' +
          'It doesn\'t matter what you see.\n' +
          'I know I could never be\n' +
          'Someone that looks like you.\n' +
          'It doesn\'t matter what you say\n' +
          'I know I could never face\n' +
          'Someone that could sound like you.\n' +
          'All the right friends in all the wrong places,\n' +
          'So yeah, we\'re going down\n' +
          'They\'ve got all the right moves and all the wrong faces\n' +
          'So yeah, we\'re going down\n' +
          'All the right friends in all the wrong places,\n' +
          'So yeah, we\'re going down\n' +
          'They\'ve got all the right moves and all the wrong faces\n' +
          'So yeah, we\'re going down\n' +
          'They said, everybody knows everybody knows where we\'re going\n' +
          'Yeah we\'re going down\n' +
          'They said, everybody knows everybody knows where we\'re going\n' +
          'Yeah we\'re going down\n' +
          'Yeah we\'re going down\n' +
          'Yeah we\'re going down\n' +
          'All the right moves\n' +
          'Yeah, we\'re going down\n' +
          'All the right moves\n' +
          'Yeah, we\'re going down',
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
  /*background-color: white;*/
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
  animation: move 251s linear alternate;
}

@keyframes move {
  from {
    top: 0;
  }
  17.48988048% {
    top: 0;
  }
  17.52988048% {
    top: -25px;
  }
  18.28669323% {
    top: -25px;
  }
  18.32669323% {
    top: -50px;
  }
  19.88031873% {
    top: -50px;
  }
  19.92031873% {
    top: -75px;
  }
  21.47394423% {
    top: -75px;
  }
  21.51394423% {
    top: -100px;
  }
  22.66916335% {
    top: -100px;
  }
  22.70916335% {
    top: -125px;
  }
  23.86438247% {
    top: -125px;
  }
  23.90438247% {
    top: -150px;
  }
  25.05960159% {
    top: -150px;
  }
  25.09960159% {
    top: -175px;
  }
  26.25482071% {
    top: -175px;
  }
  26.29482071% {
    top: -200px;
  }
  27.05163346% {
    top: -200px;
  }
  27.09163346% {
    top: -225px;
  }
  27.84844621% {
    top: -225px;
  }
  27.88844621% {
    top: -250px;
  }
  29.04366533% {
    top: -250px;
  }
  29.08366533% {
    top: -275px;
  }
  29.84047808% {
    top: -275px;
  }
  29.88047808% {
    top: -300px;
  }
  30.63729083% {
    top: -300px;
  }
  30.67729083% {
    top: -325px;
  }
  31.43410358% {
    top: -325px;
  }
  31.47410358% {
    top: -350px;
  }
  33.42613545% {
    top: -350px;
  }
  33.46613545% {
    top: -375px;
  }
  34.2229482% {
    top: -375px;
  }
  34.2629482% {
    top: -400px;
  }
  35.8165737% {
    top: -400px;
  }
  35.8565737% {
    top: -425px;
  }
  37.01179282% {
    top: -425px;
  }
  37.05179282% {
    top: -450px;
  }
  38.60541832% {
    top: -450px;
  }
  38.64541832% {
    top: -475px;
  }
  39.40223107% {
    top: -475px;
  }
  39.44223107% {
    top: -500px;
  }
  41.39426294% {
    top: -500px;
  }
  41.43426294% {
    top: -525px;
  }
  42.19107569% {
    top: -525px;
  }
  42.23107569% {
    top: -550px;
  }
  42.98788844% {
    top: -550px;
  }
  43.02788844% {
    top: -575px;
  }
  43.38629481% {
    top: -575px;
  }
  43.42629481% {
    top: -600px;
  }
  44.58151393% {
    top: -600px;
  }
  44.62151393% {
    top: -625px;
  }
  45.37832668% {
    top: -625px;
  }
  45.41832668% {
    top: -650px;
  }
  45.77673305% {
    top: -650px;
  }
  45.81673305% {
    top: -675px;
  }
  47.37035855% {
    top: -675px;
  }
  47.41035855% {
    top: -700px;
  }
  48.96398405% {
    top: -700px;
  }
  49.00398405% {
    top: -725px;
  }
  49.7607968% {
    top: -725px;
  }
  49.8007968% {
    top: -750px;
  }
  51.3544223% {
    top: -750px;
  }
  51.3944223% {
    top: -775px;
  }
  52.15123505% {
    top: -775px;
  }
  52.19123505% {
    top: -800px;
  }
  52.9480478% {
    top: -800px;
  }
  52.9880478% {
    top: -825px;
  }
  54.14326692% {
    top: -825px;
  }
  54.18326692% {
    top: -850px;
  }
  55.33848604% {
    top: -850px;
  }
  55.37848604% {
    top: -875px;
  }
  56.93211154% {
    top: -875px;
  }
  56.97211154% {
    top: -900px;
  }
  57.72892429% {
    top: -900px;
  }
  57.76892429% {
    top: -925px;
  }
  59.72095616% {
    top: -925px;
  }
  59.76095616% {
    top: -950px;
  }
  60.51776891% {
    top: -950px;
  }
  60.55776891% {
    top: -975px;
  }
  62.11139441% {
    top: -975px;
  }
  62.15139441% {
    top: -1000px;
  }
  63.30661353% {
    top: -1000px;
  }
  63.34661353% {
    top: -1025px;
  }
  69.28270915% {
    top: -1025px;
  }
  69.32270915% {
    top: -1050px;
  }
  69.68111552% {
    top: -1050px;
  }
  69.72111552% {
    top: -1075px;
  }
  70.87633464% {
    top: -1075px;
  }
  70.91633464% {
    top: -1100px;
  }
  72.07155376% {
    top: -1100px;
  }
  72.11155376% {
    top: -1125px;
  }
  72.46996013% {
    top: -1125px;
  }
  72.50996013% {
    top: -1150px;
  }
  73.26677288% {
    top: -1150px;
  }
  73.30677288% {
    top: -1175px;
  }
  75.25880475% {
    top: -1175px;
  }
  75.29880475% {
    top: -1200px;
  }
  76.0556175% {
    top: -1200px;
  }
  76.0956175% {
    top: -1225px;
  }
  77.649243% {
    top: -1225px;
  }
  77.689243% {
    top: -1250px;
  }
  78.84446212% {
    top: -1250px;
  }
  78.88446212% {
    top: -1275px;
  }
  80.43808762% {
    top: -1275px;
  }
  80.47808762% {
    top: -1300px;
  }
  81.63330674% {
    top: -1300px;
  }
  81.67330674% {
    top: -1325px;
  }
  83.22693224% {
    top: -1325px;
  }
  83.26693224% {
    top: -1350px;
  }
  84.02374499% {
    top: -1350px;
  }
  84.06374499% {
    top: -1375px;
  }
  86.01577686% {
    top: -1375px;
  }
  86.05577686% {
    top: -1400px;
  }
  86.81258961% {
    top: -1400px;
  }
  86.85258961% {
    top: -1425px;
  }
  88.40621511% {
    top: -1425px;
  }
  88.44621511% {
    top: -1450px;
  }
  89.60143423% {
    top: -1450px;
  }
  89.64143423% {
    top: -1475px;
  }
  91.99187248% {
    top: -1475px;
  }
  92.03187248% {
    top: -1500px;
  }
  94.7807171% {
    top: -1500px;
  }
  94.8207171% {
    top: -1525px;
  }
  95.57752985% {
    top: -1525px;
  }
  95.61752985% {
    top: -1550px;
  }
  97.17115535% {
    top: -1550px;
  }
  97.21115535% {
    top: -1575px;
  }
  98.36637447% {
    top: -1575px;
  }
  98.40637447% {
    top: -1600px;
  }
  99.95999997% {
    top: -1600px;
  }
  to {
    top: -1600px;
  }
}
</style>
