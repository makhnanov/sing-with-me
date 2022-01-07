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
        video_id:"SiAuAJBZuGs",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id:"SiAuAJBZuGs",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I can\'t focus on what needs to get done\n' +
          'I\'m on notice hoping that you don\'t run\n' +
          'You think I\'m tepid but I\'m misdiagnosed\n' +
          '\'Cause I\'m a stalker I seen all of your posts\n' +
          'Ah\n' +
          'And I\'m just tryna play it cool now\n' +
          'But that\'s not what I wanna do now\n' +
          'And I\'m not tryna be with you now, you now\n' +
          'You make it difficult to not overthink\n' +
          'And when I\'m with you I turn all shades of pink\n' +
          'I wanna touch you but don\'t wanna be weird\n' +
          'It\'s such a rush, I\'m thinking wish you were here\n' +
          'Ah\n' +
          'And I\'m just tryna play it cool now\n' +
          'But that\'s not what I wanna do now\n' +
          'And I\'m not tryna be with you now, you now\n' +
          'But I could be your crush, like\n' +
          'Throw you for a rush, like\n' +
          'Hoping you\'d text me so I could tell you\n' +
          'I been thinking \'bout your touch like\n' +
          'Touch, touch, touch, touch, touch\n' +
          'I could be your crush, crush, crush, crush, crush\n' +
          'I got a fascination with your presentation\n' +
          'Making me feel like you\'re on my island,\n' +
          'You\'re my permanent vacation\n' +
          'Touch, touch, touch, touch, touch\n' +
          'I could be your crush, crush, crush, crush, crush\n' +
          'Sorry\n' +
          'I fill my calendar with stuff I can do\n' +
          'Maybe if I\'m busy it could keep me from you\n' +
          'And I\'m pretending you ain\'t been on my mind\n' +
          'But I took an interest in the things that you like\n' +
          'Ah\n' +
          'And I\'m just tryna play it cool now\n' +
          'But that\'s not what I wanna do now\n' +
          'And I\'m not tryna be with you now, you now\n' +
          'But I could be your crush, like\n' +
          'Throw you for a rush, like\n' +
          'Hoping you\'d text me so I could tell you\n' +
          'I been thinking \'bout your touch like\n' +
          'Touch, touch, touch, touch, touch\n' +
          'I could be your crush, crush, crush, crush, crush\n' +
          'I got a fascination with your presentation\n' +
          'Making me feel like you\'re on my island,\n' +
          'You\'re my permanent vacation\n' +
          'Touch, touch, touch, touch, touch\n' +
          'I could be your crush, crush, crush, crush, crush\n' +
          'And yeah it\'s true that I\'m a little bit intense, right\n' +
          'But can you blame me when you keep me on the fence, like\n' +
          'And I\'ve been waiting, hoping that you\'d wanna text, like\n' +
          'Text like "It\'s what I was born to do"\n' +
          'And yeah it\'s true that I\'m a little bit intense, right\n' +
          'But can you blame me when you keep me on the fence, like\n' +
          'And I\'ve been waiting, hoping that you\'d wanna text, like\n' +
          'Text like [whistling]\n' +
          'Ugh\n' +
          'And I\'m just tryna play it cool now\n' +
          'But that\'s not what I wanna do now\n' +
          'And I\'m not tryna be with you now, you now\n' +
          'But I could be your crush, like\n' +
          'Throw you for a rush, like\n' +
          'Hoping you\'d text me so I could tell you\n' +
          'I been thinking \'bout your touch like\n' +
          'Touch, touch, touch, touch, touch\n' +
          'I could be your crush, crush, crush, crush, crush\n' +
          'I got a fascination with your presentation\n' +
          'Making me feel like you\'re on my island,\n' +
          'You\'re my permanent vacation\n' +
          'Touch, touch, touch, touch, touch\n' +
          'I could be your crush, crush, crush, crush, crush\n' +
          'Sorry'

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

  top: -1750px;
  animation: move 246s linear alternate;
}

@keyframes move {
  from {
    top: 0;
  }
  15.00065041% {
    top: 0;
  }
  15.04065041% {
    top: -25px;
  }
  16.22016261% {
    top: -25px;
  }
  16.26016261% {
    top: -50px;
  }
  17.84617887% {
    top: -50px;
  }
  17.88617887% {
    top: -75px;
  }
  19.06569107% {
    top: -75px;
  }
  19.10569107% {
    top: -100px;
  }
  19.47219514% {
    top: -100px;
  }
  19.51219514% {
    top: -125px;
  }
  20.69170734% {
    top: -125px;
  }
  20.73170734% {
    top: -150px;
  }
  22.3177236% {
    top: -150px;
  }
  22.3577236% {
    top: -175px;
  }
  23.94373986% {
    top: -175px;
  }
  23.98373986% {
    top: -200px;
  }
  26.38276425% {
    top: -200px;
  }
  26.42276425% {
    top: -225px;
  }
  27.60227645% {
    top: -225px;
  }
  27.64227645% {
    top: -250px;
  }
  29.22829271% {
    top: -250px;
  }
  29.26829271% {
    top: -275px;
  }
  30.44780491% {
    top: -275px;
  }
  30.48780491% {
    top: -300px;
  }
  30.85430898% {
    top: -300px;
  }
  30.89430898% {
    top: -325px;
  }
  32.07382118% {
    top: -325px;
  }
  32.11382118% {
    top: -350px;
  }
  33.69983744% {
    top: -350px;
  }
  33.73983744% {
    top: -375px;
  }
  35.73235777% {
    top: -375px;
  }
  35.77235777% {
    top: -400px;
  }
  36.95186997% {
    top: -400px;
  }
  36.99186997% {
    top: -425px;
  }
  37.7648781% {
    top: -425px;
  }
  37.8048781% {
    top: -450px;
  }
  38.57788623% {
    top: -450px;
  }
  38.61788623% {
    top: -475px;
  }
  39.39089436% {
    top: -475px;
  }
  39.43089436% {
    top: -500px;
  }
  40.20390249% {
    top: -500px;
  }
  40.24390249% {
    top: -525px;
  }
  41.82991875% {
    top: -525px;
  }
  41.86991875% {
    top: -550px;
  }
  43.45593501% {
    top: -550px;
  }
  43.49593501% {
    top: -575px;
  }
  44.26894314% {
    top: -575px;
  }
  44.30894314% {
    top: -600px;
  }
  45.08195127% {
    top: -600px;
  }
  45.12195127% {
    top: -625px;
  }
  46.30146347% {
    top: -625px;
  }
  46.34146347% {
    top: -650px;
  }
  47.52097567% {
    top: -650px;
  }
  47.56097567% {
    top: -675px;
  }
  47.92747974% {
    top: -675px;
  }
  47.96747974% {
    top: -700px;
  }
  49.14699194% {
    top: -700px;
  }
  49.18699194% {
    top: -725px;
  }
  50.36650414% {
    top: -725px;
  }
  50.40650414% {
    top: -750px;
  }
  51.9925204% {
    top: -750px;
  }
  52.0325204% {
    top: -775px;
  }
  53.61853666% {
    top: -775px;
  }
  53.65853666% {
    top: -800px;
  }
  54.02504073% {
    top: -800px;
  }
  54.06504073% {
    top: -825px;
  }
  55.24455293% {
    top: -825px;
  }
  55.28455293% {
    top: -850px;
  }
  56.87056919% {
    top: -850px;
  }
  56.91056919% {
    top: -875px;
  }
  58.49658545% {
    top: -875px;
  }
  58.53658545% {
    top: -900px;
  }
  59.71609765% {
    top: -900px;
  }
  59.75609765% {
    top: -925px;
  }
  60.52910578% {
    top: -925px;
  }
  60.56910578% {
    top: -950px;
  }
  61.34211391% {
    top: -950px;
  }
  61.38211391% {
    top: -975px;
  }
  62.15512204% {
    top: -975px;
  }
  62.19512204% {
    top: -1000px;
  }
  63.37463424% {
    top: -1000px;
  }
  63.41463424% {
    top: -1025px;
  }
  64.59414644% {
    top: -1025px;
  }
  64.63414644% {
    top: -1050px;
  }
  66.2201627% {
    top: -1050px;
  }
  66.2601627% {
    top: -1075px;
  }
  67.03317083% {
    top: -1075px;
  }
  67.07317083% {
    top: -1100px;
  }
  67.84617896% {
    top: -1100px;
  }
  67.88617896% {
    top: -1125px;
  }
  69.06569116% {
    top: -1125px;
  }
  69.10569116% {
    top: -1150px;
  }
  70.69170742% {
    top: -1150px;
  }
  70.73170742% {
    top: -1175px;
  }
  72.31772368% {
    top: -1175px;
  }
  72.35772368% {
    top: -1200px;
  }
  73.53723588% {
    top: -1200px;
  }
  73.57723588% {
    top: -1225px;
  }
  75.16325214% {
    top: -1225px;
  }
  75.20325214% {
    top: -1250px;
  }
  76.7892684% {
    top: -1250px;
  }
  76.8292684% {
    top: -1275px;
  }
  78.0087806% {
    top: -1275px;
  }
  78.0487806% {
    top: -1300px;
  }
  79.63479686% {
    top: -1300px;
  }
  79.67479686% {
    top: -1325px;
  }
  81.26081312% {
    top: -1325px;
  }
  81.30081312% {
    top: -1350px;
  }
  81.66731719% {
    top: -1350px;
  }
  81.70731719% {
    top: -1375px;
  }
  82.07382126% {
    top: -1375px;
  }
  82.11382126% {
    top: -1400px;
  }
  84.10634159% {
    top: -1400px;
  }
  84.14634159% {
    top: -1425px;
  }
  85.32585379% {
    top: -1425px;
  }
  85.36585379% {
    top: -1450px;
  }
  87.35837412% {
    top: -1450px;
  }
  87.39837412% {
    top: -1475px;
  }
  88.57788632% {
    top: -1475px;
  }
  88.61788632% {
    top: -1500px;
  }
  88.98439039% {
    top: -1500px;
  }
  89.02439039% {
    top: -1525px;
  }
  90.20390259% {
    top: -1525px;
  }
  90.24390259% {
    top: -1550px;
  }
  91.01691072% {
    top: -1550px;
  }
  91.05691072% {
    top: -1575px;
  }
  91.82991885% {
    top: -1575px;
  }
  91.86991885% {
    top: -1600px;
  }
  93.45593511% {
    top: -1600px;
  }
  93.49593511% {
    top: -1625px;
  }
  95.08195137% {
    top: -1625px;
  }
  95.12195137% {
    top: -1650px;
  }
  95.8949595% {
    top: -1650px;
  }
  95.9349595% {
    top: -1675px;
  }
  96.70796763% {
    top: -1675px;
  }
  96.74796763% {
    top: -1700px;
  }
  97.92747983% {
    top: -1700px;
  }
  97.96747983% {
    top: -1725px;
  }
  99.14699203% {
    top: -1725px;
  }
  99.18699203% {
    top: -1750px;
  }
  99.96000016% {
    top: -1750px;
  }
  to {
    top: -1750px;
  }
}
</style>
