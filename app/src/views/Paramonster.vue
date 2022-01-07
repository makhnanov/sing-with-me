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
        video_id: 'PoTEnaAI9Fo',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'You were my conscience, so solid, now you\'re like water\n' +
          'We started drowning, not like we\'d sink any further\n' +
          'But I let my heart go, it\'s somewhere down at the bottom\n' +
          'But I\'ll get a new one and come back for the hope that you\'ve stolen\n' +
          'I\'ll stop the whole world, I\'ll stop the whole world\n' +
          'From turning into a monster and eating us alive\n' +
          'Don\'t you ever wonder how we survive?\n' +
          'Well now that your gone, the world is ours\n' +
          'I\'m only human, I\'ve got a skeleton in me\n' +
          'But I\'m not the villain, despite what you\'re always preaching\n' +
          'Call me a traitor, I\'m just collecting your victims\n' +
          'They\'re getting stronger, I hear them calling\n' +
          'I\'ll stop the whole world, I\'ll stop the whole world\n' +
          'From turning into a monster and eating us alive\n' +
          'Don\'t you ever wonder how we survive?\n' +
          'Well now that your gone, the world is ours\n' +
          'Well you find your strength in solutions\n' +
          'But I liked the tension\n' +
          'And not always knowing the answers\n' +
          'But you\'re gonna lose it, you\'re gonna lose it\n' +
          'I\'ll stop the whole world, I\'ll stop the whole world\n' +
          'From turning into a monster, and eating us alive\n' +
          'Don\'t you ever wonder how we survive?\n' +
          'Well now that your gone, the world\n' +
          'I\'ll stop the whole world, I\'ll stop the whole world\n' +
          'From turning into a monster, eating us alive\n' +
          'Don\'t you ever wonder how we survive?\n' +
          'Now that your gone, the world is ours'
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
  top: -675px;
  animation: move 192s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  9.335% {
    top: 0;
  }
  9.375% {
    top: -25px;
  }
  12.46% {
    top: -25px;
  }
  12.5% {
    top: -50px;
  }
  15.585% {
    top: -50px;
  }
  15.625% {
    top: -75px;
  }
  18.71% {
    top: -75px;
  }
  18.75% {
    top: -100px;
  }
  22.87666667% {
    top: -100px;
  }
  22.91666667% {
    top: -125px;
  }
  25.48083334% {
    top: -125px;
  }
  25.52083334% {
    top: -150px;
  }
  28.60583334% {
    top: -150px;
  }
  28.64583334% {
    top: -175px;
  }
  31.21000001% {
    top: -175px;
  }
  31.25000001% {
    top: -200px;
  }
  40.06416668% {
    top: -200px;
  }
  40.10416668% {
    top: -225px;
  }
  42.66833335% {
    top: -225px;
  }
  42.70833335% {
    top: -250px;
  }
  45.79333335% {
    top: -250px;
  }
  45.83333335% {
    top: -275px;
  }
  48.91833335% {
    top: -275px;
  }
  48.95833335% {
    top: -300px;
  }
  53.08500002% {
    top: -300px;
  }
  53.12500002% {
    top: -325px;
  }
  55.68916669% {
    top: -325px;
  }
  55.72916669% {
    top: -350px;
  }
  58.81416669% {
    top: -350px;
  }
  58.85416669% {
    top: -375px;
  }
  61.41833336% {
    top: -375px;
  }
  61.45833336% {
    top: -400px;
  }
  68.71000003% {
    top: -400px;
  }
  68.75000003% {
    top: -425px;
  }
  69.7516667% {
    top: -425px;
  }
  69.7916667% {
    top: -450px;
  }
  71.83500003% {
    top: -450px;
  }
  71.87500003% {
    top: -475px;
  }
  74.96000003% {
    top: -475px;
  }
  75.00000003% {
    top: -500px;
  }
  80.6891667% {
    top: -500px;
  }
  80.7291667% {
    top: -525px;
  }
  82.77250003% {
    top: -525px;
  }
  82.81250003% {
    top: -550px;
  }
  86.41833336% {
    top: -550px;
  }
  86.45833336% {
    top: -575px;
  }
  87.98083336% {
    top: -575px;
  }
  88.02083336% {
    top: -600px;
  }
  91.10583336% {
    top: -600px;
  }
  91.14583336% {
    top: -625px;
  }
  93.71000003% {
    top: -625px;
  }
  93.75000003% {
    top: -650px;
  }
  96.83500003% {
    top: -650px;
  }
  96.87500003% {
    top: -675px;
  }
  99.96000003% {
    top: -675px;
  }
  to {
    top: -675px;
  }
}
</style>