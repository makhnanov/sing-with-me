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
        video_id: 'aJOTlE1K90k',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Spent 24 hours\n' +
          'I need more hours with you\n' +
          'You spent the weekend\n' +
          'Getting even, ooh\n' +
          'We spent the late nights\n' +
          'Making things right between us\n' +
          'But now it\'s all good, babe\n' +
          'Roll that backwood, babe, and play me close\n' +
          '\'Cause girls like you\n' +
          'Run \'round with guys like me\n' +
          '\'Til sundown when I come through\n' +
          'I need a girl like you, yeah, yeah\n' +
          'Girls like you\n' +
          'Love fun, and yeah, me too\n' +
          'What I want when I come through\n' +
          'I need a girl like you, yeah, yeah\n' +
          'Yeah, yeah, yeah, yeah, yeah, yeah\n' +
          'I need a girl like you, yeah, yeah\n' +
          'Yeah yeah yeah, yeah, yeah, yeah\n' +
          'I need a girl like you\n' +
          'I spent last night\n' +
          'On the last flight to you (Ay)\n' +
          'Took a whole day up\n' +
          'Tryna get way up, ooh\n' +
          'We spent the daylight\n' +
          'Tryna make things right between us\n' +
          'And now it\'s all good, babe\n' +
          'Roll that backwood, babe, and play me close (Yeah)\n' +
          '\'Cause girls like you\n' +
          'Run \'round with guys like me\n' +
          '\'Til sundown when I come through\n' +
          'I need a girl like you, yeah, yeah\n' +
          'Girls like you\n' +
          'Love fun, and yeah, me too\n' +
          'What I want when I come through\n' +
          'I need a girl like you, yeah, yeah\n' +
          'Yeah, yeah, yeah, yeah, yeah, yeah\n' +
          'I need a girl like you, yeah, yeah\n' +
          'Yeah, yeah, yeah, yeah, yeah, yeah\n' +
          'I need a girl like you, yeah, yeah\n' +
          'I need a girl like you, yeah, yeah\n' +
          'I need a girl like you\n' +
          'Maybe it\'s six forty-five, maybe I\'m barely alive\n' +
          'Maybe you\'ve taken my shit for the last time, yeah\n' +
          'Maybe I know that I\'m drunk, maybe I know you\'re the one\n' +
          'Maybe I\'m thinking it\'s better if you drive\n' +
          'Girls like you\n' +
          'Run \'round with guys like me\n' +
          '\'Til sundown when I come through\n' +
          'I need a girl like you, yeah\n' +
          'Not too long ago, I was dancing for dollars (Eeoow)\n' +
          'Know it\'s really real if I let you meet my mama (Eeoow)\n' +
          'You don\'t want a girl like me, I\'m too crazy\n' +
          'But every other girl you meet is fugazy (Okurrrt)\n' +
          'I\'m sure them other girls were nice enough\n' +
          'But you need someone to spice it up\n' +
          'So who you gonna call? Cardi, Cardi\n' +
          'Come and rev it up like a Harley, Harley\n' +
          'Why is the best fruit always forbidden? (Huh?)\n' +
          'I\'m coming to you now doin\' 20 over the limit (Wooh)\n' +
          'The red light, red light stop, stop (Skrrt)\n' +
          'I don\'t play when it comes to my heart, let\'s get it though\n' +
          'I don\'t really want a white horse and a carriage (Carriage)\n' +
          'I\'m thinkin\' more a white Porsches and carats\n' +
          'I need you right here \'cause every time you\'re far\n' +
          'I play with this kitty like you play wit\' your guitar, ah\n' +
          '\'Cause girls like you\n' +
          'Run \'round with guys like me\n' +
          '\'Til sundown when I come through\n' +
          'I need a girl like you, yeah, yeah\n' +
          'Girls like you\n' +
          'Love fun, and yeah, me too\n' +
          'What I want when I come through\n' +
          'I need a girl like you, yeah, yeah'
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
  top: -1825px;
  animation: move 219s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  4.06958904% {
    top: 0;
  }
  4.10958904% {
    top: -25px;
  }
  5.43945205% {
    top: -25px;
  }
  5.47945205% {
    top: -50px;
  }
  7.72255707% {
    top: -50px;
  }
  7.76255707% {
    top: -75px;
  }
  9.09242008% {
    top: -75px;
  }
  9.13242008% {
    top: -100px;
  }
  11.3755251% {
    top: -100px;
  }
  11.4155251% {
    top: -125px;
  }
  12.74538811% {
    top: -125px;
  }
  12.78538811% {
    top: -150px;
  }
  14.57187213% {
    top: -150px;
  }
  14.61187213% {
    top: -175px;
  }
  16.39835615% {
    top: -175px;
  }
  16.43835615% {
    top: -200px;
  }
  18.22484017% {
    top: -200px;
  }
  18.26484017% {
    top: -225px;
  }
  19.13808218% {
    top: -225px;
  }
  19.17808218% {
    top: -250px;
  }
  20.05132419% {
    top: -250px;
  }
  20.09132419% {
    top: -275px;
  }
  20.9645662% {
    top: -275px;
  }
  21.0045662% {
    top: -300px;
  }
  21.87780821% {
    top: -300px;
  }
  21.91780821% {
    top: -325px;
  }
  22.79105022% {
    top: -325px;
  }
  22.83105022% {
    top: -350px;
  }
  23.70429223% {
    top: -350px;
  }
  23.74429223% {
    top: -375px;
  }
  24.61753424% {
    top: -375px;
  }
  24.65753424% {
    top: -400px;
  }
  26.90063926% {
    top: -400px;
  }
  26.94063926% {
    top: -425px;
  }
  28.27050227% {
    top: -425px;
  }
  28.31050227% {
    top: -450px;
  }
  30.09698629% {
    top: -450px;
  }
  30.13698629% {
    top: -475px;
  }
  31.4668493% {
    top: -475px;
  }
  31.5068493% {
    top: -500px;
  }
  32.38009131% {
    top: -500px;
  }
  32.42009131% {
    top: -525px;
  }
  33.74995432% {
    top: -525px;
  }
  33.78995432% {
    top: -550px;
  }
  35.57643834% {
    top: -550px;
  }
  35.61643834% {
    top: -575px;
  }
  36.94630135% {
    top: -575px;
  }
  36.98630135% {
    top: -600px;
  }
  39.22940637% {
    top: -600px;
  }
  39.26940637% {
    top: -625px;
  }
  40.59926938% {
    top: -625px;
  }
  40.63926938% {
    top: -650px;
  }
  42.8823744% {
    top: -650px;
  }
  42.9223744% {
    top: -675px;
  }
  45.16547942% {
    top: -675px;
  }
  45.20547942% {
    top: -700px;
  }
  46.07872143% {
    top: -700px;
  }
  46.11872143% {
    top: -725px;
  }
  46.99196344% {
    top: -725px;
  }
  47.03196344% {
    top: -750px;
  }
  47.90520545% {
    top: -750px;
  }
  47.94520545% {
    top: -775px;
  }
  49.27506846% {
    top: -775px;
  }
  49.31506846% {
    top: -800px;
  }
  49.73168946% {
    top: -800px;
  }
  49.77168946% {
    top: -825px;
  }
  50.64493147% {
    top: -825px;
  }
  50.68493147% {
    top: -850px;
  }
  51.55817348% {
    top: -850px;
  }
  51.59817348% {
    top: -875px;
  }
  52.92803649% {
    top: -875px;
  }
  52.96803649% {
    top: -900px;
  }
  54.75452051% {
    top: -900px;
  }
  54.79452051% {
    top: -925px;
  }
  56.12438352% {
    top: -925px;
  }
  56.16438352% {
    top: -950px;
  }
  58.40748854% {
    top: -950px;
  }
  58.44748854% {
    top: -975px;
  }
  59.77735155% {
    top: -975px;
  }
  59.81735155% {
    top: -1000px;
  }
  63.43031959% {
    top: -1000px;
  }
  63.47031959% {
    top: -1025px;
  }
  66.62666662% {
    top: -1025px;
  }
  66.66666662% {
    top: -1050px;
  }
  68.45315064% {
    top: -1050px;
  }
  68.49315064% {
    top: -1075px;
  }
  69.82301365% {
    top: -1075px;
  }
  69.86301365% {
    top: -1100px;
  }
  72.10611867% {
    top: -1100px;
  }
  72.14611867% {
    top: -1125px;
  }
  73.47598168% {
    top: -1125px;
  }
  73.51598168% {
    top: -1150px;
  }
  75.3024657% {
    top: -1150px;
  }
  75.3424657% {
    top: -1175px;
  }
  76.21570771% {
    top: -1175px;
  }
  76.25570771% {
    top: -1200px;
  }
  77.12894972% {
    top: -1200px;
  }
  77.16894972% {
    top: -1225px;
  }
  78.04219173% {
    top: -1225px;
  }
  78.08219173% {
    top: -1250px;
  }
  79.86867575% {
    top: -1250px;
  }
  79.90867575% {
    top: -1275px;
  }
  80.78191776% {
    top: -1275px;
  }
  80.82191776% {
    top: -1300px;
  }
  81.69515977% {
    top: -1300px;
  }
  81.73515977% {
    top: -1325px;
  }
  82.60840178% {
    top: -1325px;
  }
  82.64840178% {
    top: -1350px;
  }
  83.52164379% {
    top: -1350px;
  }
  83.56164379% {
    top: -1375px;
  }
  83.97826479% {
    top: -1375px;
  }
  84.01826479% {
    top: -1400px;
  }
  84.8915068% {
    top: -1400px;
  }
  84.9315068% {
    top: -1425px;
  }
  85.80474881% {
    top: -1425px;
  }
  85.84474881% {
    top: -1450px;
  }
  86.71799082% {
    top: -1450px;
  }
  86.75799082% {
    top: -1475px;
  }
  87.63123283% {
    top: -1475px;
  }
  87.67123283% {
    top: -1500px;
  }
  88.54447484% {
    top: -1500px;
  }
  88.58447484% {
    top: -1525px;
  }
  89.45771685% {
    top: -1525px;
  }
  89.49771685% {
    top: -1550px;
  }
  90.37095886% {
    top: -1550px;
  }
  90.41095886% {
    top: -1575px;
  }
  91.28420087% {
    top: -1575px;
  }
  91.32420087% {
    top: -1600px;
  }
  92.19744288% {
    top: -1600px;
  }
  92.23744288% {
    top: -1625px;
  }
  93.11068489% {
    top: -1625px;
  }
  93.15068489% {
    top: -1650px;
  }
  93.56730589% {
    top: -1650px;
  }
  93.60730589% {
    top: -1675px;
  }
  94.4805479% {
    top: -1675px;
  }
  94.5205479% {
    top: -1700px;
  }
  95.39378991% {
    top: -1700px;
  }
  95.43378991% {
    top: -1725px;
  }
  96.30703192% {
    top: -1725px;
  }
  96.34703192% {
    top: -1750px;
  }
  97.22027393% {
    top: -1750px;
  }
  97.26027393% {
    top: -1775px;
  }
  98.13351594% {
    top: -1775px;
  }
  98.17351594% {
    top: -1800px;
  }
  99.04675795% {
    top: -1800px;
  }
  99.08675795% {
    top: -1825px;
  }
  99.95999996% {
    top: -1825px;
  }
  to {
    top: -1825px;
  }
}
</style>