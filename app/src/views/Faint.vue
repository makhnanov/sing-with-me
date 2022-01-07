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
      temp: {
        video_id:"LYU-8IFcDPw",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id:"LYU-8IFcDPw",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I am a little bit of loneliness, a little bit of disregard\n' +
          'Handful of complaints, but I can help the fact, that everyone can see these scars\n' +
          'I am what I want you to want, what I want you to feel\n' +
          'But it\'s like no matter what I do, I can\'t convince you, to just believe this is real\n' +
          'So I let go, watching you, turn your back like you always do\n' +
          'Face away and pretend that I\'m not\n' +
          'But I\'ll be here \'cause you\'re all that I got\n' +
          'I can\'t feel the way I did before\n' +
          'Don\'t turn your back on me\n' +
          'I won\'t be ignored\n' +
          'Time won\'t heal this damage anymore\n' +
          'Don\'t turn your back on me\n' +
          'I won\'t be ignored\n' +
          'I am a little bit insecure, a little unconfident\n' +
          '\'Cause you don\'t understand, I do what I can, but sometimes I don\'t make sense\n' +
          'I am what you never wanna say, but I\'ve never had a doubt\n' +
          'It\'s like no matter what I do, I can\'t convince you, for once just to hear me out\n' +
          'So I let go, watching you, turn your back like you always do\n' +
          'Face away and pretend that I\'m not\n' +
          'But I\'ll be here \'cause you\'re all that I got\n' +
          'I can\'t feel the way I did before\n' +
          'Don\'t turn your back on me\n' +
          'I won\'t be ignored\n' +
          'Time won\'t heal this damage anymore\n' +
          'Don\'t turn your back on me\n' +
          'I won\'t be ignored\n' +
          'No\n' +
          'Hear me out now\n' +
          'You\'re gonna listen to me, like it or not\n' +
          'Right now\n' +
          'Hear me out now\n' +
          'You\'re gonna listen to me, like it or not\n' +
          'Right now\n' +
          'I can\'t feel the way I did before\n' +
          'Don\'t turn your back on me\n' +
          'I won\'t be ignored\n' +
          'I can\'t feel the way I did before\n' +
          'Don\'t turn your back on me\n' +
          'I won\'t be ignored\n' +
          'Time won\'t heal this damage anymore\n' +
          'Don\'t turn your back on me\n' +
          'I won\'t be ignored\n' +
          'I can\'t feel\n' +
          'Don\'t turn your back on me\n' +
          'I won\'t be ignored\n' +
          'Time won\'t heal\n' +
          'Don\'t turn your back on me\n' +
          'I won\'t be ignored\n'
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

  top: -1175px;
  animation: move 160s linear alternate;
}

@keyframes move {
  from {
    top: 0;
  }
  19.96% {
    top: 0;
  }
  20% {
    top: -25px;
  }
  22.46% {
    top: -25px;
  }
  22.5% {
    top: -50px;
  }
  24.335% {
    top: -50px;
  }
  24.375% {
    top: -75px;
  }
  26.835% {
    top: -75px;
  }
  26.875% {
    top: -100px;
  }
  29.335% {
    top: -100px;
  }
  29.375% {
    top: -125px;
  }
  30.585% {
    top: -125px;
  }
  30.625% {
    top: -150px;
  }
  31.835% {
    top: -150px;
  }
  31.875% {
    top: -175px;
  }
  33.71% {
    top: -175px;
  }
  33.75% {
    top: -200px;
  }
  34.96% {
    top: -200px;
  }
  35% {
    top: -225px;
  }
  36.21% {
    top: -225px;
  }
  36.25% {
    top: -250px;
  }
  38.71% {
    top: -250px;
  }
  38.75% {
    top: -275px;
  }
  39.335% {
    top: -275px;
  }
  39.375% {
    top: -300px;
  }
  41.21% {
    top: -300px;
  }
  41.25% {
    top: -325px;
  }
  43.71% {
    top: -325px;
  }
  43.75% {
    top: -350px;
  }
  45.585% {
    top: -350px;
  }
  45.625% {
    top: -375px;
  }
  48.085% {
    top: -375px;
  }
  48.125% {
    top: -400px;
  }
  49.96% {
    top: -400px;
  }
  50% {
    top: -425px;
  }
  52.46% {
    top: -425px;
  }
  52.5% {
    top: -450px;
  }
  53.71% {
    top: -450px;
  }
  53.75% {
    top: -475px;
  }
  54.96% {
    top: -475px;
  }
  55% {
    top: -500px;
  }
  58.085% {
    top: -500px;
  }
  58.125% {
    top: -525px;
  }
  59.335% {
    top: -525px;
  }
  59.375% {
    top: -550px;
  }
  60.585% {
    top: -550px;
  }
  60.625% {
    top: -575px;
  }
  63.085% {
    top: -575px;
  }
  63.125% {
    top: -600px;
  }
  63.71% {
    top: -600px;
  }
  63.75% {
    top: -625px;
  }
  66.21% {
    top: -625px;
  }
  66.25% {
    top: -650px;
  }
  66.835% {
    top: -650px;
  }
  66.875% {
    top: -675px;
  }
  68.71% {
    top: -675px;
  }
  68.75% {
    top: -700px;
  }
  69.96% {
    top: -700px;
  }
  70% {
    top: -725px;
  }
  71.21% {
    top: -725px;
  }
  71.25% {
    top: -750px;
  }
  72.46% {
    top: -750px;
  }
  72.5% {
    top: -775px;
  }
  74.96% {
    top: -775px;
  }
  75% {
    top: -800px;
  }
  75.585% {
    top: -800px;
  }
  75.625% {
    top: -825px;
  }
  77.46% {
    top: -825px;
  }
  77.5% {
    top: -850px;
  }
  78.085% {
    top: -850px;
  }
  78.125% {
    top: -875px;
  }
  80.585% {
    top: -875px;
  }
  80.625% {
    top: -900px;
  }
  83.085% {
    top: -900px;
  }
  83.125% {
    top: -925px;
  }
  83.71% {
    top: -925px;
  }
  83.75% {
    top: -950px;
  }
  84.96% {
    top: -950px;
  }
  85% {
    top: -975px;
  }
  87.46% {
    top: -975px;
  }
  87.5% {
    top: -1000px;
  }
  88.085% {
    top: -1000px;
  }
  88.125% {
    top: -1025px;
  }
  89.335% {
    top: -1025px;
  }
  89.375% {
    top: -1050px;
  }
  91.835% {
    top: -1050px;
  }
  91.875% {
    top: -1075px;
  }
  92.46% {
    top: -1075px;
  }
  92.5% {
    top: -1100px;
  }
  93.71% {
    top: -1100px;
  }
  93.75% {
    top: -1125px;
  }
  96.835% {
    top: -1125px;
  }
  96.875% {
    top: -1150px;
  }
  98.085% {
    top: -1150px;
  }
  98.125% {
    top: -1175px;
  }
  99.96% {
    top: -1175px;
  }
  to {
    top: -1175px;
  }
}
</style>
