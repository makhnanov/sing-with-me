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
        video_id: 'xVPvzX-AeSM',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Thumbing through the pages of my fantasies\n' +
          'Pushing all the mercy down, down, down\n' +
          'I wanna see you try to take a swing at me\n' +
          'Come on, gonna put you on the ground, ground, ground\n' +
          'Why are you trying to make fun of me?\n' +
          'You think it\'s funny? What the fuck you think it\'s doing to me?\n' +
          'You take your turn lashing out at me\n' +
          'I want you crying with your dirty ass in front of me\n' +
          'All of my hate cannot be found (hate cannot be found)\n' +
          'I will not be drowned (I will not be drowned)\n' +
          'By your thoughtless scheming\n' +
          'So you can try to tear me down (try to tear me down)\n' +
          'Beat me to the ground (beat me to the ground)\n' +
          'I will see you screaming\n' +
          'Thumbing through the pages of my fantasies\n' +
          'I\'m above you, smiling at you, drown, drown, drown\n' +
          'I wanna kill and rape you the way you raped me\n' +
          'And I\'ll pull the trigger and you\'re down, down, down\n' +
          'Why are you trying to make fun of me?\n' +
          'You think it\'s funny? What the fuck you think it\'s doing to me?\n' +
          'You take your turn lashing out at me\n' +
          'I want you crying with your dirty ass in front of me\n' +
          'All of my hate cannot be found (hate cannot be found)\n' +
          'I will not be drowned (I will not be drowned)\n' +
          'By your thoughtless scheming\n' +
          'So you can try to tear me down (try to tear me down)\n' +
          'Beat me to the ground (beat me to the ground)\n' +
          'I will see you screaming\n' +
          'All my friends are gone, they died (gonna take you down!)\n' +
          'They all screamed and cried (gonna take you down!)\n' +
          'I\'ve got my body, got my body back against the wall!\n' +
          'I\'ve got my body, got my body back against the wall!\n' +
          'I\'ve got my body, got my body back against the wall!\n' +
          'I\'ve got my body, got my body back against the wall!\n' +
          'I\'ve got my body, got my body back against the wall!\n' +
          'I\'ve got my body, got my body back against the wall!\n' +
          'I\'ve got my body, got my body back against the wall!\n' +
          'I\'ve got my body, got my body back against the wall!\n' +
          'All of my hate cannot be found (hate cannot be found)\n' +
          'I will not be drowned (I will not be drowned)\n' +
          'By your thoughtless scheming\n' +
          'So you can try to tear me down (try to tear me down)\n' +
          'Beat me to the ground (beat me to the ground)\n' +
          'I will see you screaming\n' +
          'All of my hate cannot be found (hate cannot be found)\n' +
          'I will not be drowned (I will not be drowned)\n' +
          'By your thoughtless scheming\n' +
          'So you can try to tear me down (try to tear me down)\n' +
          'Beat me to the ground (beat me to the ground)\n' +
          'I will see you screaming'
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
  top: -1225px;
  animation: move 272s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  16.87176471% {
    top: 0;
  }
  16.91176471% {
    top: -25px;
  }
  19.44529412% {
    top: -25px;
  }
  19.48529412% {
    top: -50px;
  }
  21.28352941% {
    top: -50px;
  }
  21.32352941% {
    top: -75px;
  }
  23.85705882% {
    top: -75px;
  }
  23.89705882% {
    top: -100px;
  }
  25.32764706% {
    top: -100px;
  }
  25.36764706% {
    top: -125px;
  }
  26.7982353% {
    top: -125px;
  }
  26.8382353% {
    top: -150px;
  }
  27.53352942% {
    top: -150px;
  }
  27.57352942% {
    top: -175px;
  }
  29.00411766% {
    top: -175px;
  }
  29.04411766% {
    top: -200px;
  }
  31.57764707% {
    top: -200px;
  }
  31.61764707% {
    top: -225px;
  }
  32.68058825% {
    top: -225px;
  }
  32.72058825% {
    top: -250px;
  }
  33.41588237% {
    top: -250px;
  }
  33.45588237% {
    top: -275px;
  }
  35.62176472% {
    top: -275px;
  }
  35.66176472% {
    top: -300px;
  }
  36.7247059% {
    top: -300px;
  }
  36.7647059% {
    top: -325px;
  }
  38.19529414% {
    top: -325px;
  }
  38.23529414% {
    top: -350px;
  }
  39.66588238% {
    top: -350px;
  }
  39.70588238% {
    top: -375px;
  }
  42.60705885% {
    top: -375px;
  }
  42.64705885% {
    top: -400px;
  }
  44.07764709% {
    top: -400px;
  }
  44.11764709% {
    top: -425px;
  }
  47.01882356% {
    top: -425px;
  }
  47.05882356% {
    top: -450px;
  }
  48.4894118% {
    top: -450px;
  }
  48.5294118% {
    top: -475px;
  }
  49.59235298% {
    top: -475px;
  }
  49.63235298% {
    top: -500px;
  }
  50.69529416% {
    top: -500px;
  }
  50.73529416% {
    top: -525px;
  }
  51.79823534% {
    top: -525px;
  }
  51.83823534% {
    top: -550px;
  }
  53.63647063% {
    top: -550px;
  }
  53.67647063% {
    top: -575px;
  }
  54.73941181% {
    top: -575px;
  }
  54.77941181% {
    top: -600px;
  }
  56.21000005% {
    top: -600px;
  }
  56.25000005% {
    top: -625px;
  }
  58.78352946% {
    top: -625px;
  }
  58.82352946% {
    top: -650px;
  }
  59.51882358% {
    top: -650px;
  }
  59.55882358% {
    top: -675px;
  }
  61.35705887% {
    top: -675px;
  }
  61.39705887% {
    top: -700px;
  }
  66.50411769% {
    top: -700px;
  }
  66.54411769% {
    top: -725px;
  }
  70.18058828% {
    top: -725px;
  }
  70.22058828% {
    top: -750px;
  }
  71.28352946% {
    top: -750px;
  }
  71.32352946% {
    top: -775px;
  }
  72.38647064% {
    top: -775px;
  }
  72.42647064% {
    top: -800px;
  }
  73.48941182% {
    top: -800px;
  }
  73.52941182% {
    top: -825px;
  }
  74.592353% {
    top: -825px;
  }
  74.632353% {
    top: -850px;
  }
  76.06294124% {
    top: -850px;
  }
  76.10294124% {
    top: -875px;
  }
  77.16588242% {
    top: -875px;
  }
  77.20588242% {
    top: -900px;
  }
  78.2688236% {
    top: -900px;
  }
  78.3088236% {
    top: -925px;
  }
  79.37176478% {
    top: -925px;
  }
  79.41176478% {
    top: -950px;
  }
  83.78352949% {
    top: -950px;
  }
  83.82352949% {
    top: -975px;
  }
  84.51882361% {
    top: -975px;
  }
  84.55882361% {
    top: -1000px;
  }
  85.98941185% {
    top: -1000px;
  }
  86.02941185% {
    top: -1025px;
  }
  88.56294126% {
    top: -1025px;
  }
  88.60294126% {
    top: -1050px;
  }
  89.29823538% {
    top: -1050px;
  }
  89.33823538% {
    top: -1075px;
  }
  90.76882362% {
    top: -1075px;
  }
  90.80882362% {
    top: -1100px;
  }
  93.34235303% {
    top: -1100px;
  }
  93.38235303% {
    top: -1125px;
  }
  94.07764715% {
    top: -1125px;
  }
  94.11764715% {
    top: -1150px;
  }
  95.54823539% {
    top: -1150px;
  }
  95.58823539% {
    top: -1175px;
  }
  97.75411774% {
    top: -1175px;
  }
  97.79411774% {
    top: -1200px;
  }
  98.85705892% {
    top: -1200px;
  }
  98.89705892% {
    top: -1225px;
  }
  99.9600001% {
    top: -1225px;
  }
  to {
    top: -1225px;
  }
}
</style>