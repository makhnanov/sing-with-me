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
        video_id: 'YpJAmlnBxoA',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Oh, I miss the misery\n' +
          'I\'ve been a mess since you stayed\n' +
          'I\'ve been a wreck since you changed\n' +
          'Don\'t let me get in your way\n' +
          'I miss the lies and the pain\n' +
          'The fights that keep us awake\n' +
          'I\'m telling you\n' +
          'I miss the bad things\n' +
          'The way you hate me\n' +
          'I miss the screaming\n' +
          'The way that you blame me\n' +
          'Miss the phone calls\n' +
          'When it\'s your fault\n' +
          'I miss the late nights\n' +
          'Don\'t miss you at all\n' +
          'I like the kick in the face\n' +
          'And the things you do to me\n' +
          'I love the way that it hurts\n' +
          'I don\'t miss you, I miss the misery\n' +
          'I\'ve tried but I just can\'t take it\n' +
          'I\'d rather fight than just fake it (\'cause I like it rough)\n' +
          'You know that I\'ve had enough\n' +
          'I dare ya to call my bluff\n' +
          'Can\'t take too much of a good thing\n' +
          'I\'m telling you\n' +
          'I miss the bad things\n' +
          'The way you hate me\n' +
          'I miss the screaming\n' +
          'The way that you blame me\n' +
          'Miss the phone calls\n' +
          'When it\'s your fault\n' +
          'I miss the late nights\n' +
          'Don\'t miss you at all\n' +
          'I like the kick in the face\n' +
          'And the things you do to me\n' +
          'I love the way that it hurts\n' +
          'I don\'t miss you, I miss the misery\n' +
          'Just know that I\'ll make you hurt\n' +
          '(I miss the lies and the pain what you did to me)\n' +
          'When you tell me you\'ll make it worse\n' +
          '(I\'d rather fight all night than watch the TV)\n' +
          'I hate that feeling inside\n' +
          'You tell me how hard you\'ll try\n' +
          'But when we\'re at our worst\n' +
          'I miss the misery\n' +
          'I miss the bad things\n' +
          'The way you hate me\n' +
          'I miss the screaming\n' +
          'The way that you blame me\n' +
          'I miss the rough sex\n' +
          'Leaves me a mess\n' +
          'I miss the feeling of pains in my chest\n' +
          'Miss the phone calls\n' +
          'When it\'s your fault\n' +
          'I miss the late nights\n' +
          'Don\'t miss you at all\n' +
          'I like the kick in the face\n' +
          'And the things you do to me\n' +
          'I love the way that it hurts\n' +
          'I don\'t miss you, I miss the misery\n' +
          'I don\'t miss you, I miss the misery\n' +
          'I don\'t miss you, I miss the misery'
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
  top: -1525px;
  animation: move 192s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  7.25166667% {
    top: 0;
  }
  7.29166667% {
    top: -25px;
  }
  16.10583334% {
    top: -25px;
  }
  16.14583334% {
    top: -50px;
  }
  19.23083334% {
    top: -50px;
  }
  19.27083334% {
    top: -75px;
  }
  20.79333334% {
    top: -75px;
  }
  20.83333334% {
    top: -100px;
  }
  22.87666667% {
    top: -100px;
  }
  22.91666667% {
    top: -125px;
  }
  24.43916667% {
    top: -125px;
  }
  24.47916667% {
    top: -150px;
  }
  26.00166667% {
    top: -150px;
  }
  26.04166667% {
    top: -175px;
  }
  26.5225% {
    top: -175px;
  }
  26.5625% {
    top: -200px;
  }
  27.56416667% {
    top: -200px;
  }
  27.60416667% {
    top: -225px;
  }
  28.085% {
    top: -225px;
  }
  28.125% {
    top: -250px;
  }
  28.60583333% {
    top: -250px;
  }
  28.64583333% {
    top: -275px;
  }
  29.6475% {
    top: -275px;
  }
  29.6875% {
    top: -300px;
  }
  30.16833333% {
    top: -300px;
  }
  30.20833333% {
    top: -325px;
  }
  31.21% {
    top: -325px;
  }
  31.25% {
    top: -350px;
  }
  31.73083333% {
    top: -350px;
  }
  31.77083333% {
    top: -375px;
  }
  33.81416666% {
    top: -375px;
  }
  33.85416666% {
    top: -400px;
  }
  34.85583333% {
    top: -400px;
  }
  34.89583333% {
    top: -425px;
  }
  36.41833333% {
    top: -425px;
  }
  36.45833333% {
    top: -450px;
  }
  37.98083333% {
    top: -450px;
  }
  38.02083333% {
    top: -475px;
  }
  43.18916666% {
    top: -475px;
  }
  43.22916666% {
    top: -500px;
  }
  47.35583333% {
    top: -500px;
  }
  47.39583333% {
    top: -525px;
  }
  48.91833333% {
    top: -525px;
  }
  48.95833333% {
    top: -550px;
  }
  49.96% {
    top: -550px;
  }
  50% {
    top: -575px;
  }
  52.04333333% {
    top: -575px;
  }
  52.08333333% {
    top: -600px;
  }
  53.085% {
    top: -600px;
  }
  53.125% {
    top: -625px;
  }
  54.12666667% {
    top: -625px;
  }
  54.16666667% {
    top: -650px;
  }
  54.6475% {
    top: -650px;
  }
  54.6875% {
    top: -675px;
  }
  55.16833333% {
    top: -675px;
  }
  55.20833333% {
    top: -700px;
  }
  56.21% {
    top: -700px;
  }
  56.25% {
    top: -725px;
  }
  57.25166667% {
    top: -725px;
  }
  57.29166667% {
    top: -750px;
  }
  57.7725% {
    top: -750px;
  }
  57.8125% {
    top: -775px;
  }
  58.29333333% {
    top: -775px;
  }
  58.33333333% {
    top: -800px;
  }
  59.335% {
    top: -800px;
  }
  59.375% {
    top: -825px;
  }
  61.41833333% {
    top: -825px;
  }
  61.45833333% {
    top: -850px;
  }
  62.46% {
    top: -850px;
  }
  62.5% {
    top: -875px;
  }
  64.54333333% {
    top: -875px;
  }
  64.58333333% {
    top: -900px;
  }
  65.585% {
    top: -900px;
  }
  65.625% {
    top: -925px;
  }
  67.1475% {
    top: -925px;
  }
  67.1875% {
    top: -950px;
  }
  68.71% {
    top: -950px;
  }
  68.75% {
    top: -975px;
  }
  70.2725% {
    top: -975px;
  }
  70.3125% {
    top: -1000px;
  }
  71.31416667% {
    top: -1000px;
  }
  71.35416667% {
    top: -1025px;
  }
  73.3975% {
    top: -1025px;
  }
  73.4375% {
    top: -1050px;
  }
  74.43916667% {
    top: -1050px;
  }
  74.47916667% {
    top: -1075px;
  }
  77.04333334% {
    top: -1075px;
  }
  77.08333334% {
    top: -1100px;
  }
  77.56416667% {
    top: -1100px;
  }
  77.60416667% {
    top: -1125px;
  }
  78.60583334% {
    top: -1125px;
  }
  78.64583334% {
    top: -1150px;
  }
  79.12666667% {
    top: -1150px;
  }
  79.16666667% {
    top: -1175px;
  }
  79.6475% {
    top: -1175px;
  }
  79.6875% {
    top: -1200px;
  }
  80.68916667% {
    top: -1200px;
  }
  80.72916667% {
    top: -1225px;
  }
  82.25166667% {
    top: -1225px;
  }
  82.29166667% {
    top: -1250px;
  }
  82.7725% {
    top: -1250px;
  }
  82.8125% {
    top: -1275px;
  }
  84.335% {
    top: -1275px;
  }
  84.375% {
    top: -1300px;
  }
  85.37666667% {
    top: -1300px;
  }
  85.41666667% {
    top: -1325px;
  }
  85.8975% {
    top: -1325px;
  }
  85.9375% {
    top: -1350px;
  }
  86.93916667% {
    top: -1350px;
  }
  86.97916667% {
    top: -1375px;
  }
  87.46% {
    top: -1375px;
  }
  87.5% {
    top: -1400px;
  }
  90.06416667% {
    top: -1400px;
  }
  90.10416667% {
    top: -1425px;
  }
  90.585% {
    top: -1425px;
  }
  90.625% {
    top: -1450px;
  }
  92.66833333% {
    top: -1450px;
  }
  92.70833333% {
    top: -1475px;
  }
  93.71% {
    top: -1475px;
  }
  93.75% {
    top: -1500px;
  }
  95.2725% {
    top: -1500px;
  }
  95.3125% {
    top: -1525px;
  }
  99.96% {
    top: -1525px;
  }
  to {
    top: -1525px;
  }
}
</style>