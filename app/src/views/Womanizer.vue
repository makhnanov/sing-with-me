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
        video_id: 'rMqayQ-U74s',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Superstar, where you from? How\'s it going?\n' +
          'I know you got a clue what you\'re doing\n' +
          'You can play brand new to all the other chicks out here\n' +
          'But I know what you are, what you are, baby\n' +
          'Look at you gettin\' more than just a re-up\n' +
          'Baby, you got all the puppets with their strings up\n' +
          'Fakin\' like a good one but I call \'em like I see \'em\n' +
          'I know what you are, what you are, baby\n' +
          'Womanizer, woman-womanizer, you\'re a womanizer\n' +
          'Oh, womanizer, oh, you\'re a womanizer, baby\n' +
          'You, you-you are, you, you-you are\n' +
          'Womanizer, womanizer, womanizer\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'You got me goin\'\n' +
          'You\'re oh so charmin\'\n' +
          'But I can\'t do it\n' +
          'You womanizer\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'You say I\'m crazy\n' +
          'I got your crazy\n' +
          'You\'re nothing but a\n' +
          'Womanizer\n' +
          'Daddy-O, you got the swagger of a champion\n' +
          'Too bad for you, you just can\'t find the right companion\n' +
          'I guess when you have one too many, makes it hard, it could be easy\n' +
          'Who you are, that\'s just who you are, baby\n' +
          'Lollipop, must mistake me you\'re the sucker\n' +
          'To think that I would be a victim, not another\n' +
          'Say it, play it, how you want it\n' +
          'But no way I\'m never gonna fall for you, never you, baby\n' +
          'Womanizer, woman-womanizer, you\'re a womanizer\n' +
          'Oh, womanizer, oh, you\'re a womanizer, baby\n' +
          'You, you-you are, you, you-you are\n' +
          'Womanizer, womanizer, womanizer\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'You got me goin\'\n' +
          'You\'re oh so charmin\'\n' +
          'But I can\'t do it\n' +
          'You womanizer\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'You say I\'m crazy\n' +
          'I got your crazy\n' +
          'You\'re nothing but a\n' +
          'Womanizer\n' +
          'Maybe if we both lived in a different world, yeah\n' +
          'It would be all good and maybe I could be your girl\n' +
          'But I can\'t, \'cause we don\'t, you!\n' +
          'Womanizer, woman-womanizer, you\'re a womanizer\n' +
          'Oh, womanizer, oh, you\'re a womanizer, baby\n' +
          'You, you-you are, you, you-you are\n' +
          'Womanizer, womanizer, womanizer\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'You got me goin\'\n' +
          'You\'re oh so charmin\'\n' +
          'But I can\'t do it\n' +
          'You womanizer\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'You say I\'m crazy\n' +
          'I got your crazy\n' +
          'You\'re nothing but a\n' +
          'Womanizer\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'Boy don\'t try to front, I-I\n' +
          'Know just, just, what you are, are-are\n' +
          'Womanizer, woman-womanizer, you\'re a womanizer\n' +
          'Oh, womanizer, oh, you\'re a womanizer, baby'
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
  top: -2100px;
  animation: move 224s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  8.88857143% {
    top: 0;
  }
  8.92857143% {
    top: -25px;
  }
  10.22785714% {
    top: -25px;
  }
  10.26785714% {
    top: -50px;
  }
  11.56714285% {
    top: -50px;
  }
  11.60714285% {
    top: -75px;
  }
  13.35285714% {
    top: -75px;
  }
  13.39285714% {
    top: -100px;
  }
  15.13857143% {
    top: -100px;
  }
  15.17857143% {
    top: -125px;
  }
  16.47785714% {
    top: -125px;
  }
  16.51785714% {
    top: -150px;
  }
  17.81714285% {
    top: -150px;
  }
  17.85714285% {
    top: -175px;
  }
  19.60285714% {
    top: -175px;
  }
  19.64285714% {
    top: -200px;
  }
  21.38857143% {
    top: -200px;
  }
  21.42857143% {
    top: -225px;
  }
  22.72785714% {
    top: -225px;
  }
  22.76785714% {
    top: -250px;
  }
  24.06714285% {
    top: -250px;
  }
  24.10714285% {
    top: -275px;
  }
  25.40642856% {
    top: -275px;
  }
  25.44642856% {
    top: -300px;
  }
  26.74571427% {
    top: -300px;
  }
  26.78571427% {
    top: -325px;
  }
  27.19214284% {
    top: -325px;
  }
  27.23214284% {
    top: -350px;
  }
  28.08499998% {
    top: -350px;
  }
  28.12499998% {
    top: -375px;
  }
  28.97785712% {
    top: -375px;
  }
  29.01785712% {
    top: -400px;
  }
  29.87071426% {
    top: -400px;
  }
  29.91071426% {
    top: -425px;
  }
  30.7635714% {
    top: -425px;
  }
  30.8035714% {
    top: -450px;
  }
  31.20999997% {
    top: -450px;
  }
  31.24999997% {
    top: -475px;
  }
  32.10285711% {
    top: -475px;
  }
  32.14285711% {
    top: -500px;
  }
  32.99571425% {
    top: -500px;
  }
  33.03571425% {
    top: -525px;
  }
  33.44214282% {
    top: -525px;
  }
  33.48214282% {
    top: -550px;
  }
  34.33499996% {
    top: -550px;
  }
  34.37499996% {
    top: -575px;
  }
  35.2278571% {
    top: -575px;
  }
  35.2678571% {
    top: -600px;
  }
  36.12071424% {
    top: -600px;
  }
  36.16071424% {
    top: -625px;
  }
  36.56714281% {
    top: -625px;
  }
  36.60714281% {
    top: -650px;
  }
  37.45999995% {
    top: -650px;
  }
  37.49999995% {
    top: -675px;
  }
  38.35285709% {
    top: -675px;
  }
  38.39285709% {
    top: -700px;
  }
  39.6921428% {
    top: -700px;
  }
  39.7321428% {
    top: -725px;
  }
  41.03142851% {
    top: -725px;
  }
  41.07142851% {
    top: -750px;
  }
  42.37071422% {
    top: -750px;
  }
  42.41071422% {
    top: -775px;
  }
  44.15642851% {
    top: -775px;
  }
  44.19642851% {
    top: -800px;
  }
  45.9421428% {
    top: -800px;
  }
  45.9821428% {
    top: -825px;
  }
  47.28142851% {
    top: -825px;
  }
  47.32142851% {
    top: -850px;
  }
  48.17428565% {
    top: -850px;
  }
  48.21428565% {
    top: -875px;
  }
  50.40642851% {
    top: -875px;
  }
  50.44642851% {
    top: -900px;
  }
  52.1921428% {
    top: -900px;
  }
  52.2321428% {
    top: -925px;
  }
  53.53142851% {
    top: -925px;
  }
  53.57142851% {
    top: -950px;
  }
  54.87071422% {
    top: -950px;
  }
  54.91071422% {
    top: -975px;
  }
  56.20999993% {
    top: -975px;
  }
  56.24999993% {
    top: -1000px;
  }
  57.54928564% {
    top: -1000px;
  }
  57.58928564% {
    top: -1025px;
  }
  58.44214278% {
    top: -1025px;
  }
  58.48214278% {
    top: -1050px;
  }
  58.88857135% {
    top: -1050px;
  }
  58.92857135% {
    top: -1075px;
  }
  59.78142849% {
    top: -1075px;
  }
  59.82142849% {
    top: -1100px;
  }
  60.67428563% {
    top: -1100px;
  }
  60.71428563% {
    top: -1125px;
  }
  61.56714277% {
    top: -1125px;
  }
  61.60714277% {
    top: -1150px;
  }
  62.01357134% {
    top: -1150px;
  }
  62.05357134% {
    top: -1175px;
  }
  62.90642848% {
    top: -1175px;
  }
  62.94642848% {
    top: -1200px;
  }
  63.79928562% {
    top: -1200px;
  }
  63.83928562% {
    top: -1225px;
  }
  64.24571419% {
    top: -1225px;
  }
  64.28571419% {
    top: -1250px;
  }
  65.13857133% {
    top: -1250px;
  }
  65.17857133% {
    top: -1275px;
  }
  66.03142847% {
    top: -1275px;
  }
  66.07142847% {
    top: -1300px;
  }
  66.92428561% {
    top: -1300px;
  }
  66.96428561% {
    top: -1325px;
  }
  67.81714275% {
    top: -1325px;
  }
  67.85714275% {
    top: -1350px;
  }
  68.26357132% {
    top: -1350px;
  }
  68.30357132% {
    top: -1375px;
  }
  69.15642846% {
    top: -1375px;
  }
  69.19642846% {
    top: -1400px;
  }
  71.38857132% {
    top: -1400px;
  }
  71.42857132% {
    top: -1425px;
  }
  74.06714275% {
    top: -1425px;
  }
  74.10714275% {
    top: -1450px;
  }
  74.95999989% {
    top: -1450px;
  }
  74.99999989% {
    top: -1475px;
  }
  76.74571418% {
    top: -1475px;
  }
  76.78571418% {
    top: -1500px;
  }
  78.53142847% {
    top: -1500px;
  }
  78.57142847% {
    top: -1525px;
  }
  79.42428561% {
    top: -1525px;
  }
  79.46428561% {
    top: -1550px;
  }
  81.2099999% {
    top: -1550px;
  }
  81.2499999% {
    top: -1575px;
  }
  82.10285704% {
    top: -1575px;
  }
  82.14285704% {
    top: -1600px;
  }
  82.99571418% {
    top: -1600px;
  }
  83.03571418% {
    top: -1625px;
  }
  83.44214275% {
    top: -1625px;
  }
  83.48214275% {
    top: -1650px;
  }
  84.33499989% {
    top: -1650px;
  }
  84.37499989% {
    top: -1675px;
  }
  85.22785703% {
    top: -1675px;
  }
  85.26785703% {
    top: -1700px;
  }
  86.12071417% {
    top: -1700px;
  }
  86.16071417% {
    top: -1725px;
  }
  87.01357131% {
    top: -1725px;
  }
  87.05357131% {
    top: -1750px;
  }
  87.45999988% {
    top: -1750px;
  }
  87.49999988% {
    top: -1775px;
  }
  88.35285702% {
    top: -1775px;
  }
  88.39285702% {
    top: -1800px;
  }
  89.24571416% {
    top: -1800px;
  }
  89.28571416% {
    top: -1825px;
  }
  89.69214273% {
    top: -1825px;
  }
  89.73214273% {
    top: -1850px;
  }
  90.58499987% {
    top: -1850px;
  }
  90.62499987% {
    top: -1875px;
  }
  91.47785701% {
    top: -1875px;
  }
  91.51785701% {
    top: -1900px;
  }
  92.37071415% {
    top: -1900px;
  }
  92.41071415% {
    top: -1925px;
  }
  92.81714272% {
    top: -1925px;
  }
  92.85714272% {
    top: -1950px;
  }
  93.70999986% {
    top: -1950px;
  }
  93.74999986% {
    top: -1975px;
  }
  94.602857% {
    top: -1975px;
  }
  94.642857% {
    top: -2000px;
  }
  95.04928557% {
    top: -2000px;
  }
  95.08928557% {
    top: -2025px;
  }
  95.94214271% {
    top: -2025px;
  }
  95.98214271% {
    top: -2050px;
  }
  96.83499985% {
    top: -2050px;
  }
  96.87499985% {
    top: -2075px;
  }
  98.17428556% {
    top: -2075px;
  }
  98.21428556% {
    top: -2100px;
  }
  99.95999985% {
    top: -2100px;
  }
  to {
    top: -2100px;
  }
}
</style>