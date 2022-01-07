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
        video_id: 'Bznxx12Ptl0',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Mesdames et Messieurs\n' +
          'S\'il vous plaît\n' +
          'Soyez prêts pour AronChupa et Albatraoz\n' +
          'C\'est parti\n' +
          'Let me tell you all a story about a mouse named Lorry\n' +
          'Yeah, Lorry was a mouse in a big brown house\n' +
          'She called herself the hoe, with the money money flow\n' +
          'But fuck that little mouse \'cause I\'m an albatraoz\n' +
          'Wooh!\n' +
          'I\'m an albatraoz\n' +
          'I\'m an albatraoz\n' +
          'Yeah, Lorry said she was a mouse, smoked that cheesn\' like a baoz\n' +
          'Monilie money money hoe, chinka chinka chingka-flow\n' +
          'Lorry was a witch, yeah, a sneaky little bitch\n' +
          'So fuck that little mouse \'cause I\'m an albatraoz\n' +
          'Wooh!\n' +
          'I\'m, I\'m\n' +
          'I\'m an albatraoz'
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
  top: -425px;
  animation: move 89s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  2.20719101% {
    top: 0;
  }
  2.24719101% {
    top: -25px;
  }
  3.33078652% {
    top: -25px;
  }
  3.37078652% {
    top: -50px;
  }
  5.57797753% {
    top: -50px;
  }
  5.61797753% {
    top: -75px;
  }
  7.82516854% {
    top: -75px;
  }
  7.86516854% {
    top: -100px;
  }
  44.90382023% {
    top: -100px;
  }
  44.94382023% {
    top: -125px;
  }
  49.39820225% {
    top: -125px;
  }
  49.43820225% {
    top: -150px;
  }
  53.89258427% {
    top: -150px;
  }
  53.93258427% {
    top: -175px;
  }
  57.26337079% {
    top: -175px;
  }
  57.30337079% {
    top: -200px;
  }
  58.3869663% {
    top: -200px;
  }
  58.4269663% {
    top: -225px;
  }
  66.25213484% {
    top: -225px;
  }
  66.29213484% {
    top: -250px;
  }
  74.11730338% {
    top: -250px;
  }
  74.15730338% {
    top: -275px;
  }
  78.6116854% {
    top: -275px;
  }
  78.6516854% {
    top: -300px;
  }
  83.10606742% {
    top: -300px;
  }
  83.14606742% {
    top: -325px;
  }
  87.60044944% {
    top: -325px;
  }
  87.64044944% {
    top: -350px;
  }
  90.97123596% {
    top: -350px;
  }
  91.01123596% {
    top: -375px;
  }
  92.09483147% {
    top: -375px;
  }
  92.13483147% {
    top: -400px;
  }
  97.712809% {
    top: -400px;
  }
  97.752809% {
    top: -425px;
  }
  99.96000001% {
    top: -425px;
  }
  to {
    top: -425px;
  }
}
</style>