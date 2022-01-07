<template>
  <div class="resume">
    <div class="container">
      <YoutubeVue3 ref="youtube" :videoid="play.video_id" :loop="play.loop" :width="854" :height="480"
                   @ended="onEnded" @paused="onPaused" @played="onPlayed"/>
      <div class="text" v-bind:class="{ hidden: !isMusicListen }">

        <div class="text-block"
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
        video_id: 'q5SG7U76tls',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'To these rappers I apologize, I know it ain\'t fair\n' +
          'Only ball I drop, New Year\'s Times Square\n' +
          'The world is mine, sixth sense, I see the seventh sense\n' +
          'Now baby, let\'s get started for life\n' +
          'Every time I look into your eyes\n' +
          'I feel like I could stare in them for a lifetime\n' +
          'We can get started for life (tonight)\n' +
          'For life (tonight) for life (tonight)\n' +
          'We can get started for life (tonight)\n' +
          'For life (tonight) for life (tonight)\n' +
          'We can get started\n' +
          'Big news, Pitbull, Tom Cruise, Mumbai\n' +
          'A lit up their December night like the fourth of July, vanilla sky\n' +
          'Thriller in Manila, knocking them out like Pacquiao\n' +
          'No Ali, no Frasier, but for now it\'s off to Malaysia\n' +
          'Two passports, three cities, two countries, one day\n' +
          'Now that\'s worldwide, if you think it\'s a game, let\'s play, dale\n' +
          'Every time I look into your eyes\n' +
          'I feel like I could stare in them for a lifetime\n' +
          'We can get started for life (tonight)\n' +
          'For life (tonight) for life (tonight)\n' +
          'We can get started for life (tonight)\n' +
          'For life (tonight) for life (tonight)\n' +
          'We can get started\n' +
          'I am what they thought I\'d never become\n' +
          'I believe and became it\n' +
          'Now I\'m here to claim it\n' +
          'I hustle anything you name it, name it\n' +
          'I went from eviction to food stamps\n' +
          'To baggin work, wet & damp\n' +
          'To a passport flooded with stamps\n' +
          'Now it\'s Volì everywhere I land\n' +
          'Two passports, three cities, two countries, one day\n' +
          'Now that\'s worldwide, if you think it\'s a game, let\'s play, dale\n' +
          'Cause if it feels right (you know it feels right)\n' +
          'We shouldn\'t waste anymore time\n' +
          'Let\'s get it started (let\'s get it started)\n' +
          'Don\'t think about it (let\'s get it started)\n' +
          'You know I\'m gonna make it alright, alright (let\'s go)\n' +
          'Cause if it feels right\n' +
          'You know I made up my mind\n' +
          'Let\'s get it started (let\'s get it started)\n' +
          'Don\'t think about it (let\'s get it started)\n' +
          'I know that we can make it alight, alright\n' +
          'Every time I look into your eyes\n' +
          'I feel like I could stare in them for a lifetime\n' +
          'We can get started for life (tonight)\n' +
          'For life (tonight) for life (tonight)\n' +
          'We can get started for life (tonight)\n' +
          'For life (tonight) for life (tonight)\n' +
          'We can get started\n' +
          'Don\'t stop if you can finish'
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
  top: -1275px;
  animation: move 221s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  6.29484163% {
    top: 0;
  }
  6.33484163% {
    top: -25px;
  }
  7.65230769% {
    top: -25px;
  }
  7.69230769% {
    top: -50px;
  }
  9.91475113% {
    top: -50px;
  }
  9.95475113% {
    top: -75px;
  }
  10.81972851% {
    top: -75px;
  }
  10.85972851% {
    top: -100px;
  }
  13.53466064% {
    top: -100px;
  }
  13.57466064% {
    top: -125px;
  }
  16.70208145% {
    top: -125px;
  }
  16.74208145% {
    top: -150px;
  }
  18.05954751% {
    top: -150px;
  }
  18.09954751% {
    top: -175px;
  }
  19.86950226% {
    top: -175px;
  }
  19.90950226% {
    top: -200px;
  }
  21.67945701% {
    top: -200px;
  }
  21.71945701% {
    top: -225px;
  }
  23.48941176% {
    top: -225px;
  }
  23.52941176% {
    top: -250px;
  }
  24.39438914% {
    top: -250px;
  }
  24.43438914% {
    top: -275px;
  }
  32.99167421% {
    top: -275px;
  }
  33.03167421% {
    top: -300px;
  }
  34.80162896% {
    top: -300px;
  }
  34.84162896% {
    top: -325px;
  }
  36.15909502% {
    top: -325px;
  }
  36.19909502% {
    top: -350px;
  }
  37.96904977% {
    top: -350px;
  }
  38.00904977% {
    top: -375px;
  }
  39.77900452% {
    top: -375px;
  }
  39.81900452% {
    top: -400px;
  }
  41.58895927% {
    top: -400px;
  }
  41.62895927% {
    top: -425px;
  }
  43.85140271% {
    top: -425px;
  }
  43.89140271% {
    top: -450px;
  }
  47.01882352% {
    top: -450px;
  }
  47.05882352% {
    top: -475px;
  }
  48.82877827% {
    top: -475px;
  }
  48.86877827% {
    top: -500px;
  }
  50.18624433% {
    top: -500px;
  }
  50.22624433% {
    top: -525px;
  }
  51.99619908% {
    top: -525px;
  }
  52.03619908% {
    top: -550px;
  }
  53.80615383% {
    top: -550px;
  }
  53.84615383% {
    top: -575px;
  }
  54.71113121% {
    top: -575px;
  }
  54.75113121% {
    top: -600px;
  }
  62.4034389% {
    top: -600px;
  }
  62.4434389% {
    top: -625px;
  }
  63.30841628% {
    top: -625px;
  }
  63.34841628% {
    top: -650px;
  }
  63.76090497% {
    top: -650px;
  }
  63.80090497% {
    top: -675px;
  }
  65.11837103% {
    top: -675px;
  }
  65.15837103% {
    top: -700px;
  }
  66.02334841% {
    top: -700px;
  }
  66.06334841% {
    top: -725px;
  }
  66.92832579% {
    top: -725px;
  }
  66.96832579% {
    top: -750px;
  }
  67.38081448% {
    top: -750px;
  }
  67.42081448% {
    top: -775px;
  }
  68.28579186% {
    top: -775px;
  }
  68.32579186% {
    top: -800px;
  }
  70.09574661% {
    top: -800px;
  }
  70.13574661% {
    top: -825px;
  }
  71.45321267% {
    top: -825px;
  }
  71.49321267% {
    top: -850px;
  }
  73.71565611% {
    top: -850px;
  }
  73.75565611% {
    top: -875px;
  }
  75.07312217% {
    top: -875px;
  }
  75.11312217% {
    top: -900px;
  }
  75.97809955% {
    top: -900px;
  }
  76.01809955% {
    top: -925px;
  }
  76.88307693% {
    top: -925px;
  }
  76.92307693% {
    top: -950px;
  }
  78.24054299% {
    top: -950px;
  }
  78.28054299% {
    top: -975px;
  }
  80.05049774% {
    top: -975px;
  }
  80.09049774% {
    top: -1000px;
  }
  81.86045249% {
    top: -1000px;
  }
  81.90045249% {
    top: -1025px;
  }
  82.76542987% {
    top: -1025px;
  }
  82.80542987% {
    top: -1050px;
  }
  83.67040725% {
    top: -1050px;
  }
  83.71040725% {
    top: -1075px;
  }
  85.93285069% {
    top: -1075px;
  }
  85.97285069% {
    top: -1100px;
  }
  88.19529413% {
    top: -1100px;
  }
  88.23529413% {
    top: -1125px;
  }
  91.81520363% {
    top: -1125px;
  }
  91.85520363% {
    top: -1150px;
  }
  93.17266969% {
    top: -1150px;
  }
  93.21266969% {
    top: -1175px;
  }
  95.43511313% {
    top: -1175px;
  }
  95.47511313% {
    top: -1200px;
  }
  96.79257919% {
    top: -1200px;
  }
  96.83257919% {
    top: -1225px;
  }
  98.60253394% {
    top: -1225px;
  }
  98.64253394% {
    top: -1250px;
  }
  99.50751132% {
    top: -1250px;
  }
  99.54751132% {
    top: -1275px;
  }
  99.96000001% {
    top: -1275px;
  }
  to {
    top: -1275px;
  }
}
</style>