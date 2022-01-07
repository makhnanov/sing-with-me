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
        video_id: '7iNbnineUCI',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'When we were young, the future was so bright\n' +
          'Woah-oh\n' +
          'The old neighborhood was so alive\n' +
          'Woah-oh\n' +
          'And every kid on the whole damn street\n' +
          'Woah-oh\n' +
          'Was gonna make it big and not be beat\n' +
          'Now the neighborhood\'s cracked and torn\n' +
          'Woah-oh\n' +
          'The kids are grown up, but their lives are worn\n' +
          'Woah-oh\n' +
          'How can one little street swallow so many lives?\n' +
          'Chances thrown\n' +
          'Nothing\'s free\n' +
          'Longing for used to be\n' +
          'Still it\'s hard, hard to see\n' +
          'Fragile lives\n' +
          'Shattered dreams (Go!)\n' +
          'Jamie had a chance, well she really did\n' +
          'Woah-oh\n' +
          'Instead she dropped out and had a couple of kids\n' +
          'Woah-oh\n' +
          'Mark still lives at home \'cause he\'s got no job\n' +
          'Woah-oh\n' +
          'He just plays guitar and smokes a lot of pot\n' +
          'Jay commited suicide\n' +
          'Woah-oh\n' +
          'Brandon OD\'d and died\n' +
          'Woah-oh\n' +
          'What the hell is going on?\n' +
          'The cruelest dream, reality\n' +
          'Chances thrown\n' +
          'Nothing\'s free\n' +
          'Longing for used to be\n' +
          'Still it\'s hard, hard to see\n' +
          'Fragile lives\n' +
          'Shattered dreams (Go!)\n' +
          'Chances thrown\n' +
          'Nothing\'s free\n' +
          'Longing for (what) used to be\n' +
          'Still it\'s hard, hard to see\n' +
          'Fragile lives\n' +
          'Shattered dreams'
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
  animation: move 173s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  23.08138728% {
    top: 0;
  }
  23.12138728% {
    top: -25px;
  }
  23.65942196% {
    top: -25px;
  }
  23.69942196% {
    top: -50px;
  }
  24.23745664% {
    top: -50px;
  }
  24.27745664% {
    top: -75px;
  }
  24.81549132% {
    top: -75px;
  }
  24.85549132% {
    top: -100px;
  }
  25.97156068% {
    top: -100px;
  }
  26.01156068% {
    top: -125px;
  }
  26.54959536% {
    top: -125px;
  }
  26.58959536% {
    top: -150px;
  }
  27.70566472% {
    top: -150px;
  }
  27.74566472% {
    top: -175px;
  }
  28.86173408% {
    top: -175px;
  }
  28.90173408% {
    top: -200px;
  }
  29.43976876% {
    top: -200px;
  }
  29.47976876% {
    top: -225px;
  }
  30.59583812% {
    top: -225px;
  }
  30.63583812% {
    top: -250px;
  }
  31.1738728% {
    top: -250px;
  }
  31.2138728% {
    top: -275px;
  }
  32.32994216% {
    top: -275px;
  }
  32.36994216% {
    top: -300px;
  }
  34.06404621% {
    top: -300px;
  }
  34.10404621% {
    top: -325px;
  }
  35.79815026% {
    top: -325px;
  }
  35.83815026% {
    top: -350px;
  }
  38.11028899% {
    top: -350px;
  }
  38.15028899% {
    top: -375px;
  }
  41.0004624% {
    top: -375px;
  }
  41.0404624% {
    top: -400px;
  }
  42.73456645% {
    top: -400px;
  }
  42.77456645% {
    top: -425px;
  }
  44.4686705% {
    top: -425px;
  }
  44.5086705% {
    top: -450px;
  }
  56.60739882% {
    top: -450px;
  }
  56.64739882% {
    top: -475px;
  }
  57.1854335% {
    top: -475px;
  }
  57.2254335% {
    top: -500px;
  }
  57.76346818% {
    top: -500px;
  }
  57.80346818% {
    top: -525px;
  }
  58.34150286% {
    top: -525px;
  }
  58.38150286% {
    top: -550px;
  }
  59.49757222% {
    top: -550px;
  }
  59.53757222% {
    top: -575px;
  }
  60.0756069% {
    top: -575px;
  }
  60.1156069% {
    top: -600px;
  }
  61.23167626% {
    top: -600px;
  }
  61.27167626% {
    top: -625px;
  }
  62.38774562% {
    top: -625px;
  }
  62.42774562% {
    top: -650px;
  }
  62.9657803% {
    top: -650px;
  }
  63.0057803% {
    top: -675px;
  }
  63.54381498% {
    top: -675px;
  }
  63.58381498% {
    top: -700px;
  }
  64.12184966% {
    top: -700px;
  }
  64.16184966% {
    top: -725px;
  }
  65.27791902% {
    top: -725px;
  }
  65.31791902% {
    top: -750px;
  }
  65.8559537% {
    top: -750px;
  }
  65.8959537% {
    top: -775px;
  }
  67.59005775% {
    top: -775px;
  }
  67.63005775% {
    top: -800px;
  }
  68.74612711% {
    top: -800px;
  }
  68.78612711% {
    top: -825px;
  }
  71.63630052% {
    top: -825px;
  }
  71.67630052% {
    top: -850px;
  }
  74.52647393% {
    top: -850px;
  }
  74.56647393% {
    top: -875px;
  }
  75.68254329% {
    top: -875px;
  }
  75.72254329% {
    top: -900px;
  }
  77.99468202% {
    top: -900px;
  }
  78.03468202% {
    top: -925px;
  }
  89.55537566% {
    top: -925px;
  }
  89.59537566% {
    top: -950px;
  }
  91.28947971% {
    top: -950px;
  }
  91.32947971% {
    top: -975px;
  }
  94.17965312% {
    top: -975px;
  }
  94.21965312% {
    top: -1000px;
  }
  96.49179185% {
    top: -1000px;
  }
  96.53179185% {
    top: -1025px;
  }
  98.2258959% {
    top: -1025px;
  }
  98.2658959% {
    top: -1050px;
  }
  99.95999995% {
    top: -1050px;
  }
  to {
    top: -1050px;
  }
}
</style>