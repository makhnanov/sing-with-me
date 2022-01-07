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
        video_id: 'auzfTPp4moA',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Off with your head\n' +
          'Dance \'til you\'re dead\n' +
          'Heads will roll\n' +
          'Heads will roll\n' +
          'Heads will roll\n' +
          'On the floor\n' +
          'Glitter on the west streets\n' +
          'Silver over everything\n' +
          'The river\'s all wet\n' +
          'You\'re all chrome\n' +
          'Dripping with alchemy\n' +
          'Shiver stop shivering\n' +
          'The glitter\'s all wet\n' +
          'You\'re all chrome\n' +
          'The men cry out, the girls cry out\n' +
          'The men cry out, the girls cry out\n' +
          'The men cry out, oh no\n' +
          'The men cry out,  the girls cry out\n' +
          'The men cry out,  the girls cry out\n' +
          'The men cry out, oh no\n' +
          'Off off with your head\n' +
          'Dance dance \'til you\'re dead dead\n' +
          'Heads will roll\n' +
          'Heads will roll\n' +
          'Heads will roll\n' +
          'On the floor\n' +
          'Looking glass\n' +
          'Take the past\n' +
          'Shut your eyes\n' +
          'Realize\n' +
          'Realize\n' +
          'Glitter on the west streets\n' +
          'Silver over everything\n' +
          'The glitter\'s all wet\n' +
          'You\'re all chrome\n' +
          'You\'re all chrome\n' +
          'Off off off with your head\n' +
          'Dance dance dance \'til you\'re dead'
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
  top: -925px;
  animation: move 184s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  8.65565217% {
    top: 0;
  }
  8.69565217% {
    top: -25px;
  }
  10.82956521% {
    top: -25px;
  }
  10.86956521% {
    top: -50px;
  }
  12.45999999% {
    top: -50px;
  }
  12.49999999% {
    top: -75px;
  }
  13.54695651% {
    top: -75px;
  }
  13.58695651% {
    top: -100px;
  }
  14.63391303% {
    top: -100px;
  }
  14.67391303% {
    top: -125px;
  }
  15.72086955% {
    top: -125px;
  }
  15.76086955% {
    top: -150px;
  }
  17.35130433% {
    top: -150px;
  }
  17.39130433% {
    top: -175px;
  }
  18.98173911% {
    top: -175px;
  }
  19.02173911% {
    top: -200px;
  }
  20.61217389% {
    top: -200px;
  }
  20.65217389% {
    top: -225px;
  }
  22.24260867% {
    top: -225px;
  }
  22.28260867% {
    top: -250px;
  }
  24.95999997% {
    top: -250px;
  }
  24.99999997% {
    top: -275px;
  }
  26.59043475% {
    top: -275px;
  }
  26.63043475% {
    top: -300px;
  }
  28.76434779% {
    top: -300px;
  }
  28.80434779% {
    top: -325px;
  }
  29.85130431% {
    top: -325px;
  }
  29.89130431% {
    top: -350px;
  }
  32.56869561% {
    top: -350px;
  }
  32.60869561% {
    top: -375px;
  }
  33.65565213% {
    top: -375px;
  }
  33.69565213% {
    top: -400px;
  }
  34.74260865% {
    top: -400px;
  }
  34.78260865% {
    top: -425px;
  }
  36.37304343% {
    top: -425px;
  }
  36.41304343% {
    top: -450px;
  }
  37.45999995% {
    top: -450px;
  }
  37.49999995% {
    top: -475px;
  }
  39.09043473% {
    top: -475px;
  }
  39.13043473% {
    top: -500px;
  }
  48.32956516% {
    top: -500px;
  }
  48.36956516% {
    top: -525px;
  }
  50.5034782% {
    top: -525px;
  }
  50.5434782% {
    top: -550px;
  }
  52.13391298% {
    top: -550px;
  }
  52.17391298% {
    top: -575px;
  }
  53.2208695% {
    top: -575px;
  }
  53.2608695% {
    top: -600px;
  }
  54.30782602% {
    top: -600px;
  }
  54.34782602% {
    top: -625px;
  }
  54.85130428% {
    top: -625px;
  }
  54.89130428% {
    top: -650px;
  }
  57.56869558% {
    top: -650px;
  }
  57.60869558% {
    top: -675px;
  }
  59.19913036% {
    top: -675px;
  }
  59.23913036% {
    top: -700px;
  }
  61.3730434% {
    top: -700px;
  }
  61.4130434% {
    top: -725px;
  }
  63.00347818% {
    top: -725px;
  }
  63.04347818% {
    top: -750px;
  }
  65.17739122% {
    top: -750px;
  }
  65.21739122% {
    top: -775px;
  }
  80.39478252% {
    top: -775px;
  }
  80.43478252% {
    top: -800px;
  }
  82.56869556% {
    top: -800px;
  }
  82.60869556% {
    top: -825px;
  }
  84.7426086% {
    top: -825px;
  }
  84.7826086% {
    top: -850px;
  }
  85.28608686% {
    top: -850px;
  }
  85.32608686% {
    top: -875px;
  }
  87.4599999% {
    top: -875px;
  }
  87.4999999% {
    top: -900px;
  }
  97.78608686% {
    top: -900px;
  }
  97.82608686% {
    top: -925px;
  }
  99.9599999% {
    top: -925px;
  }
  to {
    top: -925px;
  }
}
</style>
