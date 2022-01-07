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
        video_id: 'd8ekz_CSBVg',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Every time we lie awake\n' +
          'After every hit we take\n' +
          'Every feeling that I get\n' +
          'But I haven\'t missed you yet\n' +
          'Every roommate kept awake\n' +
          'By every sigh and scream we make\n' +
          'All the feelings that I get\n' +
          'But I still don\'t miss you yet\n' +
          'Only when I stop to think about it\n' +
          'I hate everything about you\n' +
          'Why do I love you\n' +
          'I hate everything about you\n' +
          'Why do I love you\n' +
          'Every time we lie awake\n' +
          'After every hit we take\n' +
          'Every feeling that I get\n' +
          'But I haven\'t missed you yet\n' +
          'Only when I stop to think about it\n' +
          'I hate everything about you\n' +
          'Why do I love you\n' +
          'I hate everything about you\n' +
          'Why do I love you\n' +
          'Only when I stop to think\n' +
          'About you, I know\n' +
          'Only when you stop to think\n' +
          'About me, do you know\n' +
          'I hate everything about you\n' +
          'Why do I love you\n' +
          'You hate everything about me\n' +
          'Why do you love me\n' +
          'I hate\n' +
          'You hate\n' +
          'I hate\n' +
          'You love me\n' +
          'I hate everything about you\n' +
          'Why do I love you'
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
  top: -875px;
  animation: move 213s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  4.65483568% {
    top: 0;
  }
  4.69483568% {
    top: -25px;
  }
  7.00225352% {
    top: -25px;
  }
  7.04225352% {
    top: -50px;
  }
  9.34967136% {
    top: -50px;
  }
  9.38967136% {
    top: -75px;
  }
  11.6970892% {
    top: -75px;
  }
  11.7370892% {
    top: -100px;
  }
  14.51399061% {
    top: -100px;
  }
  14.55399061% {
    top: -125px;
  }
  16.86140845% {
    top: -125px;
  }
  16.90140845% {
    top: -150px;
  }
  19.67830986% {
    top: -150px;
  }
  19.71830986% {
    top: -175px;
  }
  22.0257277% {
    top: -175px;
  }
  22.0657277% {
    top: -200px;
  }
  25.31211268% {
    top: -200px;
  }
  25.35211268% {
    top: -225px;
  }
  29.53746479% {
    top: -225px;
  }
  29.57746479% {
    top: -250px;
  }
  31.88488263% {
    top: -250px;
  }
  31.92488263% {
    top: -275px;
  }
  34.70178404% {
    top: -275px;
  }
  34.74178404% {
    top: -300px;
  }
  37.04920188% {
    top: -300px;
  }
  37.08920188% {
    top: -325px;
  }
  45.03042254% {
    top: -325px;
  }
  45.07042254% {
    top: -350px;
  }
  47.37784038% {
    top: -350px;
  }
  47.41784038% {
    top: -375px;
  }
  49.72525822% {
    top: -375px;
  }
  49.76525822% {
    top: -400px;
  }
  52.54215963% {
    top: -400px;
  }
  52.58215963% {
    top: -425px;
  }
  55.82854461% {
    top: -425px;
  }
  55.86854461% {
    top: -450px;
  }
  60.05389672% {
    top: -450px;
  }
  60.09389672% {
    top: -475px;
  }
  62.40131456% {
    top: -475px;
  }
  62.44131456% {
    top: -500px;
  }
  64.7487324% {
    top: -500px;
  }
  64.7887324% {
    top: -525px;
  }
  67.09615024% {
    top: -525px;
  }
  67.13615024% {
    top: -550px;
  }
  70.38253522% {
    top: -550px;
  }
  70.42253522% {
    top: -575px;
  }
  72.26046949% {
    top: -575px;
  }
  72.30046949% {
    top: -600px;
  }
  75.0773709% {
    top: -600px;
  }
  75.1173709% {
    top: -625px;
  }
  77.42478874% {
    top: -625px;
  }
  77.46478874% {
    top: -650px;
  }
  82.58910799% {
    top: -650px;
  }
  82.62910799% {
    top: -675px;
  }
  84.93652583% {
    top: -675px;
  }
  84.97652583% {
    top: -700px;
  }
  87.75342724% {
    top: -700px;
  }
  87.79342724% {
    top: -725px;
  }
  90.10084508% {
    top: -725px;
  }
  90.14084508% {
    top: -750px;
  }
  91.03981222% {
    top: -750px;
  }
  91.07981222% {
    top: -775px;
  }
  92.44826292% {
    top: -775px;
  }
  92.48826292% {
    top: -800px;
  }
  93.85671362% {
    top: -800px;
  }
  93.89671362% {
    top: -825px;
  }
  95.26516432% {
    top: -825px;
  }
  95.30516432% {
    top: -850px;
  }
  97.61258216% {
    top: -850px;
  }
  97.65258216% {
    top: -875px;
  }
  99.96% {
    top: -875px;
  }
  to {
    top: -875px;
  }
}
</style>