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
        video_id: 's8QYxmpuyxg',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'So much for my happy ending\n' +
          'Oh, oh\n' +
          'So much for my happy ending\n' +
          'Oh, oh, oh, oh\n' +
          'Let\'s talk this over\n' +
          'It\'s not like we\'re dead\n' +
          'Was it something I did?\n' +
          'Was it something you said?\n' +
          'Don\'t leave me hanging\n' +
          'In a city so dead\n' +
          'Held up so high on such a breakable thread (breakable thread)\n' +
          'You were all the things I thought I knew\n' +
          'And I thought we could be\n' +
          'You were everything, everything that I wanted (that I wanted)\n' +
          'We were meant to be, supposed to be, but we lost it (we lost it)\n' +
          'And all of the memories, so close to me, just fade away\n' +
          'All this time you were pretending\n' +
          'So much for my happy ending\n' +
          'Oh, oh\n' +
          'So much for my happy ending\n' +
          'Oh, oh\n' +
          'You\'ve got your dumb friends\n' +
          'I know what they say (know what they say)\n' +
          'They tell you I\'m difficult\n' +
          'But so are they (but so are they)\n' +
          'But they don\'t know me\n' +
          'Do they even know you? (even know you)\n' +
          'All the things you hide from me\n' +
          'All the shit that you do (all the shit that you do)\n' +
          'You were all the things I thought I knew\n' +
          'And I thought we could be\n' +
          'You were everything, everything that I wanted (that I wanted)\n' +
          'We were meant to be, supposed to be, but we lost it (we lost it)\n' +
          'And all of the memories, so close to me, just fade away\n' +
          'All this time you were pretending\n' +
          'So much for my happy ending\n' +
          'It\'s nice to know that you were there\n' +
          'Thanks for acting like you cared\n' +
          'And making me feel like I was the only one\n' +
          'It\'s nice to know we had it all\n' +
          'Thanks for watching as I fall\n' +
          'And letting me know we were done\n' +
          'He was everything, everything that I wanted\n' +
          'We were meant to be, supposed to be, but we lost it\n' +
          'And all of the memories, so close to me just fade away\n' +
          'All this time you were pretending\n' +
          'So much for my happy ending\n' +
          'You were everything, everything that I wanted (that I wanted)\n' +
          'We were meant to be, supposed to be, but we lost it\n' +
          'And all of the memories, so close to me, just fade away\n' +
          'All this time you were pretending\n' +
          'So much for my happy ending\n' +
          'Oh, oh\n' +
          'So much for my happy ending\n' +
          'Oh, oh\n' +
          'So much for my happy ending\n' +
          'Oh, oh, oh, oh'
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
  top: -1400px;
  animation: move 229s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  2.14340611% {
    top: 0;
  }
  2.18340611% {
    top: -25px;
  }
  3.45344978% {
    top: -25px;
  }
  3.49344978% {
    top: -50px;
  }
  4.76349345% {
    top: -50px;
  }
  4.80349345% {
    top: -75px;
  }
  6.94689956% {
    top: -75px;
  }
  6.98689956% {
    top: -100px;
  }
  8.25694323% {
    top: -100px;
  }
  8.29694323% {
    top: -125px;
  }
  9.13030568% {
    top: -125px;
  }
  9.17030568% {
    top: -150px;
  }
  10.44034935% {
    top: -150px;
  }
  10.48034935% {
    top: -175px;
  }
  11.75039302% {
    top: -175px;
  }
  11.79039302% {
    top: -200px;
  }
  13.06043669% {
    top: -200px;
  }
  13.10043669% {
    top: -225px;
  }
  14.37048036% {
    top: -225px;
  }
  14.41048036% {
    top: -250px;
  }
  16.9905677% {
    top: -250px;
  }
  17.0305677% {
    top: -275px;
  }
  19.61065504% {
    top: -275px;
  }
  19.65065504% {
    top: -300px;
  }
  21.79406115% {
    top: -300px;
  }
  21.83406115% {
    top: -325px;
  }
  24.41414849% {
    top: -325px;
  }
  24.45414849% {
    top: -350px;
  }
  27.03423583% {
    top: -350px;
  }
  27.07423583% {
    top: -375px;
  }
  29.65432317% {
    top: -375px;
  }
  29.69432317% {
    top: -400px;
  }
  30.96436684% {
    top: -400px;
  }
  31.00436684% {
    top: -425px;
  }
  32.27441051% {
    top: -425px;
  }
  32.31441051% {
    top: -450px;
  }
  33.58445418% {
    top: -450px;
  }
  33.62445418% {
    top: -475px;
  }
  34.89449785% {
    top: -475px;
  }
  34.93449785% {
    top: -500px;
  }
  36.20454152% {
    top: -500px;
  }
  36.24454152% {
    top: -525px;
  }
  37.95126641% {
    top: -525px;
  }
  37.99126641% {
    top: -550px;
  }
  38.82462886% {
    top: -550px;
  }
  38.86462886% {
    top: -575px;
  }
  40.13467253% {
    top: -575px;
  }
  40.17467253% {
    top: -600px;
  }
  41.4447162% {
    top: -600px;
  }
  41.4847162% {
    top: -625px;
  }
  42.75475987% {
    top: -625px;
  }
  42.79475987% {
    top: -650px;
  }
  43.62812232% {
    top: -650px;
  }
  43.66812232% {
    top: -675px;
  }
  45.37484721% {
    top: -675px;
  }
  45.41484721% {
    top: -700px;
  }
  46.24820966% {
    top: -700px;
  }
  46.28820966% {
    top: -725px;
  }
  49.30497822% {
    top: -725px;
  }
  49.34497822% {
    top: -750px;
  }
  51.48838433% {
    top: -750px;
  }
  51.52838433% {
    top: -775px;
  }
  54.10847167% {
    top: -775px;
  }
  54.14847167% {
    top: -800px;
  }
  56.72855901% {
    top: -800px;
  }
  56.76855901% {
    top: -825px;
  }
  59.34864635% {
    top: -825px;
  }
  59.38864635% {
    top: -850px;
  }
  60.2220088% {
    top: -850px;
  }
  60.2620088% {
    top: -875px;
  }
  61.96873369% {
    top: -875px;
  }
  62.00873369% {
    top: -900px;
  }
  63.27877736% {
    top: -900px;
  }
  63.31877736% {
    top: -925px;
  }
  64.58882103% {
    top: -925px;
  }
  64.62882103% {
    top: -950px;
  }
  66.77222714% {
    top: -950px;
  }
  66.81222714% {
    top: -975px;
  }
  68.51895203% {
    top: -975px;
  }
  68.55895203% {
    top: -1000px;
  }
  69.8289957% {
    top: -1000px;
  }
  69.8689957% {
    top: -1025px;
  }
  71.57572059% {
    top: -1025px;
  }
  71.61572059% {
    top: -1050px;
  }
  73.7591267% {
    top: -1050px;
  }
  73.7991267% {
    top: -1075px;
  }
  76.37921404% {
    top: -1075px;
  }
  76.41921404% {
    top: -1100px;
  }
  78.99930138% {
    top: -1100px;
  }
  79.03930138% {
    top: -1125px;
  }
  80.30934505% {
    top: -1125px;
  }
  80.34934505% {
    top: -1150px;
  }
  81.1827075% {
    top: -1150px;
  }
  81.2227075% {
    top: -1175px;
  }
  83.80279484% {
    top: -1175px;
  }
  83.84279484% {
    top: -1200px;
  }
  85.98620095% {
    top: -1200px;
  }
  86.02620095% {
    top: -1225px;
  }
  89.04296951% {
    top: -1225px;
  }
  89.08296951% {
    top: -1250px;
  }
  89.91633196% {
    top: -1250px;
  }
  89.95633196% {
    top: -1275px;
  }
  91.66305685% {
    top: -1275px;
  }
  91.70305685% {
    top: -1300px;
  }
  92.5364193% {
    top: -1300px;
  }
  92.5764193% {
    top: -1325px;
  }
  94.28314419% {
    top: -1325px;
  }
  94.32314419% {
    top: -1350px;
  }
  95.15650664% {
    top: -1350px;
  }
  95.19650664% {
    top: -1375px;
  }
  96.90323153% {
    top: -1375px;
  }
  96.94323153% {
    top: -1400px;
  }
  99.96000009% {
    top: -1400px;
  }
  to {
    top: -1400px;
  }
}
</style>