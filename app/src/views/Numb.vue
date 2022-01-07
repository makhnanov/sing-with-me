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
        video_id: 'kXYiU_JCYtU',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id: 'kXYiU_JCYtU',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I\'m tired of being what you want me to be\n' +
          'Feeling so faithless lost under the surface\n' +
          'Don\'t know what you\'re expecting of me\n' +
          'Put under the pressure of walking in your shoes\n' +
          '(Caught in the undertow just caught in the undertow)\n' +
          'Every step that I take is another mistake to you\n' +
          '(Caught in the undertow just caught in the undertow)\n' +
          'I\'ve become so numb I can\'t feel you there\n' +
          'I\'ve become so tired so much more aware\n' +
          'I\'m becoming this. All I want to do\n' +
          'Is be more like me and be less like you\n' +
          'Can\'t you see that you\'re smothering me\n' +
          'Holding too tightly afraid to lose control\n' +
          'Cause everything that you thought I would be\n' +
          'Has fallen apart right in front of you\n' +
          '(Caught in the undertow just caught in the undertow)\n' +
          'Every step that I take is another mistake to you\n' +
          '(Caught in the undertow just caught in the undertow)\n' +
          'And every second I waste is more than I can take\n' +
          'I\'ve become so numb I can\'t feel you there\n' +
          'I\'ve become so tired so much more aware\n' +
          'I\'m becoming this. All I want to do\n' +
          'Is be more like me and be less like you\n' +
          'And I know\n' +
          'I may end up failing too\n' +
          'But I know\n' +
          'You were just like me with someone disappointed in you\n' +
          'I\'ve become so numb I can\'t feel you there\n' +
          'I\'ve become so tired so much more aware\n' +
          'I\'m becoming this. All I want to do\n' +
          'Is be more like me and be less like you\n' +
          'I\'ve become so numb I can\'t feel you there\n' +
          '[I\'m tired of being what you want me to be]\n' +
          'I\'ve become so numb I can\'t feel you there\n' +
          '[I\'m tired of being what you want me to be]'

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

  top: -850px;
  animation: move 176s linear alternate;
}

@keyframes move {
  from {
    top: 0;
  }
  14.16454545% {
    top: 0;
  }
  14.20454545% {
    top: -25px;
  }
  17.00545454% {
    top: -25px;
  }
  17.04545454% {
    top: -50px;
  }
  19.27818181% {
    top: -50px;
  }
  19.31818181% {
    top: -75px;
  }
  22.1190909% {
    top: -75px;
  }
  22.1590909% {
    top: -100px;
  }
  24.39181817% {
    top: -100px;
  }
  24.43181817% {
    top: -125px;
  }
  27.23272726% {
    top: -125px;
  }
  27.27272726% {
    top: -150px;
  }
  29.50545453% {
    top: -150px;
  }
  29.54545453% {
    top: -175px;
  }
  32.34636362% {
    top: -175px;
  }
  32.38636362% {
    top: -200px;
  }
  34.61909089% {
    top: -200px;
  }
  34.65909089% {
    top: -225px;
  }
  36.89181816% {
    top: -225px;
  }
  36.93181816% {
    top: -250px;
  }
  39.73272725% {
    top: -250px;
  }
  39.77272725% {
    top: -275px;
  }
  41.4372727% {
    top: -275px;
  }
  41.4772727% {
    top: -300px;
  }
  44.27818179% {
    top: -300px;
  }
  44.31818179% {
    top: -325px;
  }
  46.55090906% {
    top: -325px;
  }
  46.59090906% {
    top: -350px;
  }
  49.39181815% {
    top: -350px;
  }
  49.43181815% {
    top: -375px;
  }
  51.0963636% {
    top: -375px;
  }
  51.1363636% {
    top: -400px;
  }
  54.50545451% {
    top: -400px;
  }
  54.54545451% {
    top: -425px;
  }
  56.20999996% {
    top: -425px;
  }
  56.24999996% {
    top: -450px;
  }
  59.05090905% {
    top: -450px;
  }
  59.09090905% {
    top: -475px;
  }
  61.89181814% {
    top: -475px;
  }
  61.93181814% {
    top: -500px;
  }
  64.16454541% {
    top: -500px;
  }
  64.20454541% {
    top: -525px;
  }
  67.0054545% {
    top: -525px;
  }
  67.0454545% {
    top: -550px;
  }
  69.84636359% {
    top: -550px;
  }
  69.88636359% {
    top: -575px;
  }
  70.98272723% {
    top: -575px;
  }
  71.02272723% {
    top: -600px;
  }
  74.95999996% {
    top: -600px;
  }
  74.99999996% {
    top: -625px;
  }
  76.0963636% {
    top: -625px;
  }
  76.1363636% {
    top: -650px;
  }
  80.07363633% {
    top: -650px;
  }
  80.11363633% {
    top: -675px;
  }
  82.91454542% {
    top: -675px;
  }
  82.95454542% {
    top: -700px;
  }
  85.75545451% {
    top: -700px;
  }
  85.79545451% {
    top: -725px;
  }
  88.02818178% {
    top: -725px;
  }
  88.06818178% {
    top: -750px;
  }
  90.30090905% {
    top: -750px;
  }
  90.34090905% {
    top: -775px;
  }
  92.57363632% {
    top: -775px;
  }
  92.61363632% {
    top: -800px;
  }
  94.84636359% {
    top: -800px;
  }
  94.88636359% {
    top: -825px;
  }
  97.68727268% {
    top: -825px;
  }
  97.72727268% {
    top: -850px;
  }
  99.95999995% {
    top: -850px;
  }
  to {
    top: -850px;
  }
}
</style>
