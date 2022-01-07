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
        video_id: 'RvnkAtWcKYg',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'How can I decide what\'s right?\n' +
          'When you\'re clouding up my mind\n' +
          'I can\'t win your losing fight\n' +
          'All the time\n' +
          'Nor could I ever own what\'s mine\n' +
          'When you\'re always taking sides\n' +
          'But you won\'t take away my pride\n' +
          'No, not this time\n' +
          'Not this time\n' +
          'How did we get here\n' +
          'When I used to know you so well?\n' +
          'How did we get here?\n' +
          'Well, I think I know\n' +
          'The truth is hiding in your eyes\n' +
          'And it\'s hanging on your tongue\n' +
          'Just boiling in my blood\n' +
          'But you think that I can\'t see\n' +
          'What kind of man that you are\n' +
          'If you\'re a man at all\n' +
          'Well, I will figure this one out\n' +
          'On my own (I\'m screaming, I love you so)\n' +
          'On my own (but my thoughts you can\'t decode)\n' +
          'How did we get here?\n' +
          'When I used to know you so well?\n' +
          'Yeah, hw did we get here?\n' +
          'Well, I think I know\n' +
          'Do you see what we\'ve done?\n' +
          'We\'re gonna make such fools of ourselves\n' +
          'Do you see what we\'ve done?\n' +
          'We\'re gonna make such fools of ourselves\n' +
          'Yeah, yeah\n' +
          'How did we get here\n' +
          'When I used to know you so well? Yeah\n' +
          'How did we get here\n' +
          'When I used to know you so well?\n' +
          'I think I know, I think I know\n' +
          'There is something I see in you\n' +
          'It might kill me, I want it to be true'
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
  animation: move 242s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  6.15834711% {
    top: 0;
  }
  6.19834711% {
    top: -25px;
  }
  7.39801653% {
    top: -25px;
  }
  7.43801653% {
    top: -50px;
  }
  8.63768595% {
    top: -50px;
  }
  8.67768595% {
    top: -75px;
  }
  9.46413223% {
    top: -75px;
  }
  9.50413223% {
    top: -100px;
  }
  10.70380165% {
    top: -100px;
  }
  10.74380165% {
    top: -125px;
  }
  12.35669421% {
    top: -125px;
  }
  12.39669421% {
    top: -150px;
  }
  13.18314049% {
    top: -150px;
  }
  13.22314049% {
    top: -175px;
  }
  15.66247933% {
    top: -175px;
  }
  15.70247933% {
    top: -200px;
  }
  18.96826445% {
    top: -200px;
  }
  19.00826445% {
    top: -225px;
  }
  20.20793387% {
    top: -225px;
  }
  20.24793387% {
    top: -250px;
  }
  23.51371899% {
    top: -250px;
  }
  23.55371899% {
    top: -275px;
  }
  25.16661155% {
    top: -275px;
  }
  25.20661155% {
    top: -300px;
  }
  28.88561981% {
    top: -300px;
  }
  28.92561981% {
    top: -325px;
  }
  33.01785121% {
    top: -325px;
  }
  33.05785121% {
    top: -350px;
  }
  33.84429749% {
    top: -350px;
  }
  33.88429749% {
    top: -375px;
  }
  35.08396691% {
    top: -375px;
  }
  35.12396691% {
    top: -400px;
  }
  35.91041319% {
    top: -400px;
  }
  35.95041319% {
    top: -425px;
  }
  37.56330575% {
    top: -425px;
  }
  37.60330575% {
    top: -450px;
  }
  38.80297517% {
    top: -450px;
  }
  38.84297517% {
    top: -475px;
  }
  40.04264459% {
    top: -475px;
  }
  40.08264459% {
    top: -500px;
  }
  42.93520657% {
    top: -500px;
  }
  42.97520657% {
    top: -525px;
  }
  45.82776855% {
    top: -525px;
  }
  45.86776855% {
    top: -550px;
  }
  47.06743797% {
    top: -550px;
  }
  47.10743797% {
    top: -575px;
  }
  49.54677681% {
    top: -575px;
  }
  49.58677681% {
    top: -600px;
  }
  51.61289251% {
    top: -600px;
  }
  51.65289251% {
    top: -625px;
  }
  55.33190077% {
    top: -625px;
  }
  55.37190077% {
    top: -650px;
  }
  66.9021487% {
    top: -650px;
  }
  66.9421487% {
    top: -675px;
  }
  69.38148754% {
    top: -675px;
  }
  69.42148754% {
    top: -700px;
  }
  71.44760324% {
    top: -700px;
  }
  71.48760324% {
    top: -725px;
  }
  74.75338836% {
    top: -725px;
  }
  74.79338836% {
    top: -750px;
  }
  79.71206605% {
    top: -750px;
  }
  79.75206605% {
    top: -775px;
  }
  80.53851233% {
    top: -775px;
  }
  80.57851233% {
    top: -800px;
  }
  83.84429745% {
    top: -800px;
  }
  83.88429745% {
    top: -825px;
  }
  85.49719001% {
    top: -825px;
  }
  85.53719001% {
    top: -850px;
  }
  92.10876026% {
    top: -850px;
  }
  92.14876026% {
    top: -875px;
  }
  92.5219834% {
    top: -875px;
  }
  92.5619834% {
    top: -900px;
  }
  96.6542148% {
    top: -900px;
  }
  96.6942148% {
    top: -925px;
  }
  99.95999992% {
    top: -925px;
  }
  to {
    top: -925px;
  }
}
</style>