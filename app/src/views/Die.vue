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
        video_id: 'txBfhpm1jI0',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Take me I\'m alive\n' +
          'Never was a girl with a wicked mind\n' +
          'But everything looks better when the sun goes down\n' +
          'I had everything\n' +
          'Opportunities for eternity\n' +
          'And I could belong to the night\n' +
          'Then your eyes\n' +
          'I can see in your eyes\n' +
          'Your eyes\n' +
          'You make me wanna die\n' +
          'I\'ll never be good enough\n' +
          'You make me wanna die\n' +
          'And everything you love will burn up in the light\n' +
          'And every time I look inside your eyes\n' +
          'You make me wanna die\n' +
          'Taste me drink my soul\n' +
          'Show me all the things that I shouldn\'t know\n' +
          'When there\'s a blue moon on the rise\n' +
          'I had everything\n' +
          'Opportunities for eternity\n' +
          'And I could belong to the night\n' +
          'Then your eyes\n' +
          'I can see in your eyes\n' +
          'Your eyes\n' +
          'Everything in your eyes\n' +
          'Your eyes\n' +
          'You make me wanna die\n' +
          'I\'ll never be good enough\n' +
          'You make me wanna die\n' +
          'And everything you love will burn up in the light\n' +
          'And every time I look inside your eyes\n' +
          'You make me wanna die\n' +
          'I would die for you my love\n' +
          'My love\n' +
          'I would lie for you my love\n' +
          'My love (You make me wanna die)\n' +
          'I would steal for you my love\n' +
          'My love (You make me wanna die)\n' +
          'And I would die for you my love, my love\n' +
          'We\'ll burn up in the light\n' +
          'And every time I look inside your eyes\n' +
          'I\'m burning in the light, look inside your eyes\n' +
          'I\'m burning in the light, look inside your eyes\n' +
          'You make me wanna die'
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
  top: -1075px;
  animation: move 214s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  15.38056075% {
    top: 0;
  }
  15.42056075% {
    top: -25px;
  }
  16.31514019% {
    top: -25px;
  }
  16.35514019% {
    top: -50px;
  }
  18.65158879% {
    top: -50px;
  }
  18.69158879% {
    top: -75px;
  }
  19.58616823% {
    top: -75px;
  }
  19.62616823% {
    top: -100px;
  }
  20.98803739% {
    top: -100px;
  }
  21.02803739% {
    top: -125px;
  }
  22.85719627% {
    top: -125px;
  }
  22.89719627% {
    top: -150px;
  }
  24.25906543% {
    top: -150px;
  }
  24.29906543% {
    top: -175px;
  }
  26.12822431% {
    top: -175px;
  }
  26.16822431% {
    top: -200px;
  }
  26.59551403% {
    top: -200px;
  }
  26.63551403% {
    top: -225px;
  }
  28.46467291% {
    top: -225px;
  }
  28.50467291% {
    top: -250px;
  }
  29.39925235% {
    top: -250px;
  }
  29.43925235% {
    top: -275px;
  }
  30.80112151% {
    top: -275px;
  }
  30.84112151% {
    top: -300px;
  }
  33.13757011% {
    top: -300px;
  }
  33.17757011% {
    top: -325px;
  }
  35.94130843% {
    top: -325px;
  }
  35.98130843% {
    top: -350px;
  }
  37.81046731% {
    top: -350px;
  }
  37.85046731% {
    top: -375px;
  }
  42.95065423% {
    top: -375px;
  }
  42.99065423% {
    top: -400px;
  }
  43.88523367% {
    top: -400px;
  }
  43.92523367% {
    top: -425px;
  }
  46.22168227% {
    top: -425px;
  }
  46.26168227% {
    top: -450px;
  }
  47.62355143% {
    top: -450px;
  }
  47.66355143% {
    top: -475px;
  }
  48.55813087% {
    top: -475px;
  }
  48.59813087% {
    top: -500px;
  }
  50.89457947% {
    top: -500px;
  }
  50.93457947% {
    top: -525px;
  }
  52.29644863% {
    top: -525px;
  }
  52.33644863% {
    top: -550px;
  }
  54.16560751% {
    top: -550px;
  }
  54.20560751% {
    top: -575px;
  }
  54.63289723% {
    top: -575px;
  }
  54.67289723% {
    top: -600px;
  }
  56.03476639% {
    top: -600px;
  }
  56.07476639% {
    top: -625px;
  }
  57.43663555% {
    top: -625px;
  }
  57.47663555% {
    top: -650px;
  }
  58.37121499% {
    top: -650px;
  }
  58.41121499% {
    top: -675px;
  }
  59.77308415% {
    top: -675px;
  }
  59.81308415% {
    top: -700px;
  }
  60.70766359% {
    top: -700px;
  }
  60.74766359% {
    top: -725px;
  }
  63.04411219% {
    top: -725px;
  }
  63.08411219% {
    top: -750px;
  }
  66.78242995% {
    top: -750px;
  }
  66.82242995% {
    top: -775px;
  }
  67.71700939% {
    top: -775px;
  }
  67.75700939% {
    top: -800px;
  }
  74.72635518% {
    top: -800px;
  }
  74.76635518% {
    top: -825px;
  }
  76.12822434% {
    top: -825px;
  }
  76.16822434% {
    top: -850px;
  }
  79.39925238% {
    top: -850px;
  }
  79.43925238% {
    top: -875px;
  }
  81.73570098% {
    top: -875px;
  }
  81.77570098% {
    top: -900px;
  }
  84.07214958% {
    top: -900px;
  }
  84.11214958% {
    top: -925px;
  }
  86.40859818% {
    top: -925px;
  }
  86.44859818% {
    top: -950px;
  }
  89.67962622% {
    top: -950px;
  }
  89.71962622% {
    top: -975px;
  }
  91.08149538% {
    top: -975px;
  }
  91.12149538% {
    top: -1000px;
  }
  93.41794398% {
    top: -1000px;
  }
  93.45794398% {
    top: -1025px;
  }
  95.75439258% {
    top: -1025px;
  }
  95.79439258% {
    top: -1050px;
  }
  98.09084118% {
    top: -1050px;
  }
  98.13084118% {
    top: -1075px;
  }
  99.96000006% {
    top: -1075px;
  }
  to {
    top: -1075px;
  }
}
</style>