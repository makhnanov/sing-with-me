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
        video_id: 'vxc1ufJxPGM',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Un jom Era\n' +
          'Un jom Era, and I\'m coming for the light\n' +
          'All or nothing\n' +
          'Now or never\n' +
          'Coming straight from the KO\n' +
          'And my heart knows the way, oh\n' +
          'Never get in my way, oh\n' +
          'Sun e bon sun e bon sun e bon sun e bonbon\n' +
          'Bonbon, I know what you want\n' +
          'Bonbon, bet you wanna taste it\n' +
          'Bonbon, bet you wanna taste it\n' +
          'I know what you want, want, want\n' +
          'Bonbon, can you get it done, done?\n' +
          'Bonbon, bet you wanna taste it\n' +
          'Bonbon, my sip will get you wasted\n' +
          'I know what you want, want, want\n' +
          'Nice to, nice to meet ya\n' +
          'Mister, I\'ma teach ya\n' +
          'King but you met your first Queen, ya\n' +
          'Nice to, nice to meet ya\n' +
          'Mister, I\'ma teach ya\n' +
          'King but you met your first Queen, ya\n' +
          'Sunday night, I put a light in my blunt right\n' +
          'In my blunt right\n' +
          'Spending dough til we all go broke that is our M.O\n' +
          'Let it go if you wanna ride\n' +
          'Gonna be alright\n' +
          'Bounce to the rhythm while we pour some more\n' +
          'Cause my time has come and I\'m bossin\'\n' +
          'Them wanna, wanna flex with us\n' +
          'Cause we higher than the limit, high and mellow\n' +
          'Ooh, all the lines we crossin\'\n' +
          'Ooh, the drama we be causin\'\n' +
          'So sick like we got that flu\n' +
          'I\'ma switch it up, my hair turn blue\n' +
          'Nice to, nice to meet ya\n' +
          'Mister, I\'ma teach ya\n' +
          'King, but you met your first Queen, ya\n' +
          'Nice to, nice to meet ya\n' +
          'Mister, I\'ma teach ya\n' +
          'King, but you met your first Queen, ya\n' +
          'I\'ma let you out here if you cross the seas\n' +
          'If you wanna melt, you gotta heat the freeze\n' +
          'Nothing\'s sweet like my honey\n' +
          'That you\'ll have to lick, before you can taste'
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
  top: -1100px;
  animation: move 162s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  0.57728395% {
    top: 0;
  }
  0.61728395% {
    top: -25px;
  }
  4.8982716% {
    top: -25px;
  }
  4.9382716% {
    top: -50px;
  }
  6.75012345% {
    top: -50px;
  }
  6.79012345% {
    top: -75px;
  }
  10.45382715% {
    top: -75px;
  }
  10.49382715% {
    top: -100px;
  }
  13.5402469% {
    top: -100px;
  }
  13.5802469% {
    top: -125px;
  }
  15.39209875% {
    top: -125px;
  }
  15.43209875% {
    top: -150px;
  }
  16.62666665% {
    top: -150px;
  }
  16.66666665% {
    top: -175px;
  }
  18.4785185% {
    top: -175px;
  }
  18.5185185% {
    top: -200px;
  }
  20.33037035% {
    top: -200px;
  }
  20.37037035% {
    top: -225px;
  }
  22.1822222% {
    top: -225px;
  }
  22.2222222% {
    top: -250px;
  }
  23.4167901% {
    top: -250px;
  }
  23.4567901% {
    top: -275px;
  }
  24.651358% {
    top: -275px;
  }
  24.691358% {
    top: -300px;
  }
  26.50320985% {
    top: -300px;
  }
  26.54320985% {
    top: -325px;
  }
  28.3550617% {
    top: -325px;
  }
  28.3950617% {
    top: -350px;
  }
  29.5896296% {
    top: -350px;
  }
  29.6296296% {
    top: -375px;
  }
  31.44148145% {
    top: -375px;
  }
  31.48148145% {
    top: -400px;
  }
  37.61432096% {
    top: -400px;
  }
  37.65432096% {
    top: -425px;
  }
  38.84888886% {
    top: -425px;
  }
  38.88888886% {
    top: -450px;
  }
  40.08345676% {
    top: -450px;
  }
  40.12345676% {
    top: -475px;
  }
  40.70074071% {
    top: -475px;
  }
  40.74074071% {
    top: -500px;
  }
  41.93530861% {
    top: -500px;
  }
  41.97530861% {
    top: -525px;
  }
  43.78716046% {
    top: -525px;
  }
  43.82716046% {
    top: -550px;
  }
  52.42913577% {
    top: -550px;
  }
  52.46913577% {
    top: -575px;
  }
  54.28098762% {
    top: -575px;
  }
  54.32098762% {
    top: -600px;
  }
  57.98469132% {
    top: -600px;
  }
  58.02469132% {
    top: -625px;
  }
  59.83654317% {
    top: -625px;
  }
  59.87654317% {
    top: -650px;
  }
  61.07111107% {
    top: -650px;
  }
  61.11111107% {
    top: -675px;
  }
  63.54024687% {
    top: -675px;
  }
  63.58024687% {
    top: -700px;
  }
  65.39209872% {
    top: -700px;
  }
  65.43209872% {
    top: -725px;
  }
  66.62666662% {
    top: -725px;
  }
  66.66666662% {
    top: -750px;
  }
  68.47851847% {
    top: -750px;
  }
  68.51851847% {
    top: -775px;
  }
  69.71308637% {
    top: -775px;
  }
  69.75308637% {
    top: -800px;
  }
  71.56493822% {
    top: -800px;
  }
  71.60493822% {
    top: -825px;
  }
  72.79950612% {
    top: -825px;
  }
  72.83950612% {
    top: -850px;
  }
  74.65135797% {
    top: -850px;
  }
  74.69135797% {
    top: -875px;
  }
  81.44148143% {
    top: -875px;
  }
  81.48148143% {
    top: -900px;
  }
  82.67604933% {
    top: -900px;
  }
  82.71604933% {
    top: -925px;
  }
  83.91061723% {
    top: -925px;
  }
  83.95061723% {
    top: -950px;
  }
  84.52790118% {
    top: -950px;
  }
  84.56790118% {
    top: -975px;
  }
  85.76246908% {
    top: -975px;
  }
  85.80246908% {
    top: -1000px;
  }
  88.23160488% {
    top: -1000px;
  }
  88.27160488% {
    top: -1025px;
  }
  95.02172834% {
    top: -1025px;
  }
  95.06172834% {
    top: -1050px;
  }
  96.87358019% {
    top: -1050px;
  }
  96.91358019% {
    top: -1075px;
  }
  98.10814809% {
    top: -1075px;
  }
  98.14814809% {
    top: -1100px;
  }
  99.95999994% {
    top: -1100px;
  }
  to {
    top: -1100px;
  }
}
</style>