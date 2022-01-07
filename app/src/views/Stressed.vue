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
        video_id: 'pXRviuL6vMY',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I wish I found some better sounds\n' +
          'No one\'s ever heard\n' +
          'I wish I had a better voice\n' +
          'That sang some better words\n' +
          'I wish I found some chords\n' +
          'In an order that is new\n' +
          'I wish I didn\'t have to rhyme\n' +
          'Every time I sang\n' +
          'I was told when I get older\n' +
          'All my fears would shrink\n' +
          'But now I\'m insecure\n' +
          'And I care what people think\n' +
          'My name\'s Blurryface and I care what you think\n' +
          'My name\'s Blurryface and I care what you think\n' +
          'Wish we could turn back time\n' +
          'To the good old days\n' +
          'When our momma sang us to sleep\n' +
          'But now we\'re stressed out\n' +
          'Wish we could turn back time\n' +
          'To the good old days\n' +
          'When our momma sang us to sleep\n' +
          'But now we\'re stressed out\n' +
          'We\'re stressed out\n' +
          'Sometimes a certain smell will\n' +
          'Take me back to when I was young\n' +
          'How come I\'m never able to identify\n' +
          'Where it\'s coming from?\n' +
          'I\'d make a candle out of it\n' +
          'If I ever found it\n' +
          'Try to sell it, never sell out of it\n' +
          'I\'d probably only sell one\n' +
          'It\'d be to my brother, cause we have the same nose\n' +
          'Same clothes, home grown\n' +
          'The stone\'s throw from a creek we used to roam\n' +
          'But it would remind us of when\n' +
          'Nothing really mattered\n' +
          'Out of student loans and tree house homes\n' +
          'We all would take the latter\n' +
          'My name\'s Blurryface and I care what you think\n' +
          'My name\'s Blurryface and I care what you think\n' +
          'Wish we could turn back time\n' +
          'To the good old days\n' +
          'When our momma sang us to sleep\n' +
          'But now we\'re stressed out\n' +
          'Wish we could turn back time\n' +
          'To the good old days\n' +
          'When our momma sang us to sleep\n' +
          'But now we\'re stressed out\n' +
          'Used to play pretend\n' +
          'Give each other different names\n' +
          'We would build a rocket ship and then we\'d fly it far away\n' +
          'Used to dream of outer space\n' +
          'But now they\'re laughing at our face singing\n' +
          '"Wake up, you need to make money", yeah\n' +
          'Used to play pretend\n' +
          'Give each other different names\n' +
          'We would build a rocket ship\n' +
          'And then we\'d fly it far away\n' +
          'Used to dream of outer space\n' +
          'But now they\'re laughing at our face singing\n' +
          '"Wake up, you need to make money", yeah\n' +
          'Wish we could turn back time\n' +
          'To the good old days\n' +
          'When our momma sang us to sleep\n' +
          'But now we\'re stressed out\n' +
          'Wish we could turn back time\n' +
          'To the good old days\n' +
          'When our momma sang us to sleep\n' +
          'But now we\'re stressed out\n' +
          'We used to play pretend, used to play pretend, money\n' +
          'We used to play pretend, wake up you need the money\n' +
          'Used to play pretend, used to play pretend, money\n' +
          'We used to play pretend, wake up you need the money\n' +
          'Used to play pretend\n' +
          'Give each other different names\n' +
          'We would build a rocket ship\n' +
          'And then we\'d fly it far away\n' +
          'Used to dream of outer space\n' +
          'But now they\'re laughing at our face saying\n' +
          '"Wake up, you need to make money", yeah'
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
  top: -1975px;
  animation: move 214s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  8.37121495% {
    top: 0;
  }
  8.41121495% {
    top: -25px;
  }
  8.83850467% {
    top: -25px;
  }
  8.87850467% {
    top: -50px;
  }
  9.30579439% {
    top: -50px;
  }
  9.34579439% {
    top: -75px;
  }
  9.77308411% {
    top: -75px;
  }
  9.81308411% {
    top: -100px;
  }
  10.70766355% {
    top: -100px;
  }
  10.74766355% {
    top: -125px;
  }
  11.17495327% {
    top: -125px;
  }
  11.21495327% {
    top: -150px;
  }
  12.10953271% {
    top: -150px;
  }
  12.14953271% {
    top: -175px;
  }
  12.57682243% {
    top: -175px;
  }
  12.61682243% {
    top: -200px;
  }
  13.51140187% {
    top: -200px;
  }
  13.55140187% {
    top: -225px;
  }
  13.97869159% {
    top: -225px;
  }
  14.01869159% {
    top: -250px;
  }
  14.44598131% {
    top: -250px;
  }
  14.48598131% {
    top: -275px;
  }
  14.91327103% {
    top: -275px;
  }
  14.95327103% {
    top: -300px;
  }
  16.78242991% {
    top: -300px;
  }
  16.82242991% {
    top: -325px;
  }
  19.58616823% {
    top: -325px;
  }
  19.62616823% {
    top: -350px;
  }
  27.06280374% {
    top: -350px;
  }
  27.10280374% {
    top: -375px;
  }
  28.93196262% {
    top: -375px;
  }
  28.97196262% {
    top: -400px;
  }
  29.86654206% {
    top: -400px;
  }
  29.90654206% {
    top: -425px;
  }
  31.26841122% {
    top: -425px;
  }
  31.30841122% {
    top: -450px;
  }
  32.20299066% {
    top: -450px;
  }
  32.24299066% {
    top: -475px;
  }
  34.07214954% {
    top: -475px;
  }
  34.11214954% {
    top: -500px;
  }
  35.4740187% {
    top: -500px;
  }
  35.5140187% {
    top: -525px;
  }
  36.40859814% {
    top: -525px;
  }
  36.44859814% {
    top: -550px;
  }
  39.21233646% {
    top: -550px;
  }
  39.25233646% {
    top: -575px;
  }
  42.24971964% {
    top: -575px;
  }
  42.28971964% {
    top: -600px;
  }
  42.95065422% {
    top: -600px;
  }
  42.99065422% {
    top: -625px;
  }
  43.88523366% {
    top: -625px;
  }
  43.92523366% {
    top: -650px;
  }
  44.35252338% {
    top: -650px;
  }
  44.39252338% {
    top: -675px;
  }
  44.8198131% {
    top: -675px;
  }
  44.8598131% {
    top: -700px;
  }
  45.28710282% {
    top: -700px;
  }
  45.32710282% {
    top: -725px;
  }
  46.22168226% {
    top: -725px;
  }
  46.26168226% {
    top: -750px;
  }
  46.68897198% {
    top: -750px;
  }
  46.72897198% {
    top: -775px;
  }
  48.09084114% {
    top: -775px;
  }
  48.13084114% {
    top: -800px;
  }
  48.55813086% {
    top: -800px;
  }
  48.59813086% {
    top: -825px;
  }
  49.4927103% {
    top: -825px;
  }
  49.5327103% {
    top: -850px;
  }
  49.96000002% {
    top: -850px;
  }
  50.00000002% {
    top: -875px;
  }
  50.42728974% {
    top: -875px;
  }
  50.46728974% {
    top: -900px;
  }
  51.36186918% {
    top: -900px;
  }
  51.40186918% {
    top: -925px;
  }
  51.8291589% {
    top: -925px;
  }
  51.8691589% {
    top: -950px;
  }
  54.1656075% {
    top: -950px;
  }
  54.2056075% {
    top: -975px;
  }
  56.96934582% {
    top: -975px;
  }
  57.00934582% {
    top: -1000px;
  }
  59.30579442% {
    top: -1000px;
  }
  59.34579442% {
    top: -1025px;
  }
  61.1749533% {
    top: -1025px;
  }
  61.2149533% {
    top: -1050px;
  }
  62.57682246% {
    top: -1050px;
  }
  62.61682246% {
    top: -1075px;
  }
  63.5114019% {
    top: -1075px;
  }
  63.5514019% {
    top: -1100px;
  }
  64.44598134% {
    top: -1100px;
  }
  64.48598134% {
    top: -1125px;
  }
  66.31514022% {
    top: -1125px;
  }
  66.35514022% {
    top: -1150px;
  }
  67.71700938% {
    top: -1150px;
  }
  67.75700938% {
    top: -1175px;
  }
  68.65158882% {
    top: -1175px;
  }
  68.69158882% {
    top: -1200px;
  }
  69.11887854% {
    top: -1200px;
  }
  69.15887854% {
    top: -1225px;
  }
  69.58616826% {
    top: -1225px;
  }
  69.62616826% {
    top: -1250px;
  }
  70.98803742% {
    top: -1250px;
  }
  71.02803742% {
    top: -1275px;
  }
  71.45532714% {
    top: -1275px;
  }
  71.49532714% {
    top: -1300px;
  }
  72.38990658% {
    top: -1300px;
  }
  72.42990658% {
    top: -1325px;
  }
  73.79177574% {
    top: -1325px;
  }
  73.83177574% {
    top: -1350px;
  }
  74.25906546% {
    top: -1350px;
  }
  74.29906546% {
    top: -1375px;
  }
  75.1936449% {
    top: -1375px;
  }
  75.2336449% {
    top: -1400px;
  }
  75.66093462% {
    top: -1400px;
  }
  75.70093462% {
    top: -1425px;
  }
  76.12822434% {
    top: -1425px;
  }
  76.16822434% {
    top: -1450px;
  }
  77.06280378% {
    top: -1450px;
  }
  77.10280378% {
    top: -1475px;
  }
  77.99738322% {
    top: -1475px;
  }
  78.03738322% {
    top: -1500px;
  }
  78.93196266% {
    top: -1500px;
  }
  78.97196266% {
    top: -1525px;
  }
  80.33383182% {
    top: -1525px;
  }
  80.37383182% {
    top: -1550px;
  }
  82.2029907% {
    top: -1550px;
  }
  82.2429907% {
    top: -1575px;
  }
  83.60485986% {
    top: -1575px;
  }
  83.64485986% {
    top: -1600px;
  }
  84.5394393% {
    top: -1600px;
  }
  84.5794393% {
    top: -1625px;
  }
  85.94130846% {
    top: -1625px;
  }
  85.98130846% {
    top: -1650px;
  }
  87.34317762% {
    top: -1650px;
  }
  87.38317762% {
    top: -1675px;
  }
  88.74504678% {
    top: -1675px;
  }
  88.78504678% {
    top: -1700px;
  }
  89.67962622% {
    top: -1700px;
  }
  89.71962622% {
    top: -1725px;
  }
  91.08149538% {
    top: -1725px;
  }
  91.12149538% {
    top: -1750px;
  }
  92.01607482% {
    top: -1750px;
  }
  92.05607482% {
    top: -1775px;
  }
  93.41794398% {
    top: -1775px;
  }
  93.45794398% {
    top: -1800px;
  }
  94.81981314% {
    top: -1800px;
  }
  94.85981314% {
    top: -1825px;
  }
  95.28710286% {
    top: -1825px;
  }
  95.32710286% {
    top: -1850px;
  }
  96.2216823% {
    top: -1850px;
  }
  96.2616823% {
    top: -1875px;
  }
  96.68897202% {
    top: -1875px;
  }
  96.72897202% {
    top: -1900px;
  }
  97.62355146% {
    top: -1900px;
  }
  97.66355146% {
    top: -1925px;
  }
  98.09084118% {
    top: -1925px;
  }
  98.13084118% {
    top: -1950px;
  }
  99.02542062% {
    top: -1950px;
  }
  99.06542062% {
    top: -1975px;
  }
  99.96000006% {
    top: -1975px;
  }
  to {
    top: -1975px;
  }
}
</style>