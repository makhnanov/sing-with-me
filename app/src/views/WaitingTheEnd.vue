<template>
  <div class="resume">
    <div class="container">
      <YoutubeVue3 ref="youtube" :videoid="play.video_id" :loop="play.loop" :width="854" :height="480"
                   @ended="onEnded" @paused="onPaused" @played="onPlayed"/>
      <div class="text" v-bind:class="{ hidden: !isMusicListen }">

        <div class="text-block" v-bind:class="{ paused: !isMusicListen }">
          {{ textBlock }}
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
        video_id:"5qF_qbaWt3Q",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id:"5qF_qbaWt3Q",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '' +
          'This is not the end, this is not the beginning\n' +
          'Just a voice like a riot rocking every revision\n' +
          'But you listen through the tone and the violent rhythm\n' +
          'And though the words sound steady, something empty\'s within \'em\n' +
          'We say yeah / with fists flying up in the air\n' +
          'Like we\'re holding onto something that\'s invisible there\n' +
          '\'Cause we\'re living at the mercy of the pain and the fear\n' +
          'Until we dead it / forget it / let it all disappear\n' +
          'Waiting for the end to come / wishing I had strength to stand\n' +
          'This is not what I had planned\n' +
          'It\'s out of my control\n' +
          'Flying at the speed of light / thoughts were spinning in my head\n' +
          'So many things were left unsaid\n' +
          'It\'s hard to let you go\n' +
          'I know what it takes to move on\n' +
          'I know how it feels to lie\n' +
          'All I want to do is trade this life for something new\n' +
          'Holding on to what I haven\'t got\n' +
          'Sitting in an empty room\n' +
          'Trying to forget the past\n' +
          'This was never meant to last\n' +
          'I wish it wasn\'t so\n' +
          'I know what it takes to move on\n' +
          'I know how it feels to lie\n' +
          'All I want to do is trade this life for something new\n' +
          'Holding on to what I haven\'t got\n' +
          'What was left when that fire was gone\n' +
          'I thought it felt right but that right was wrong\n' +
          'All caught up in the eye of the storm\n' +
          'And trying to figure out what it\'s like moving on\n' +
          'And I don\'t even know what kind of things I said\n' +
          'My mouth kept moving and my mind went dead so\n' +
          'Picking up the pieces now where to begin\n' +
          'The hardest part of ending is starting again\n' +
          'All I want to do is trade this life for something new\n' +
          'Holding on to what I haven\'t got\n' +
          'This is not the end, this is not the beginning\n' +
          'Just a voice like a riot rocking every revision\n' +
          '(I\'m holding on to what I haven\'t got)\n' +
          'But you listen through the tone and the violent rhythm\n' +
          'And though the words sound steady, something empty\'s within \'em\n' +
          'We say yeah / with fists flying up in the air\n' +
          'Like we\'re holding onto something that\'s invisible there\n' +
          '(Holding on to what I haven\'t got)\n' +
          '\'Cause we\'re living at the mercy of the pain and the fear\n' +
          'Until we dead it / forget it / let it all disappear\n',
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
  /*background-color: white;*/
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

  top: -1125px;
  animation: move 229s linear alternate;
  /*+ 2s */
}

@keyframes move {
  from {
    top: 0;
  }
  11.31371179% {
    top: 0;
  }
  11.35371179% {
    top: -25px;
  }
  12.62375546% {
    top: -25px;
  }
  12.66375546% {
    top: -50px;
  }
  13.49711791% {
    top: -50px;
  }
  13.53711791% {
    top: -75px;
  }
  14.80716158% {
    top: -75px;
  }
  14.84716158% {
    top: -100px;
  }
  16.11720525% {
    top: -100px;
  }
  16.15720525% {
    top: -125px;
  }
  17.42724892% {
    top: -125px;
  }
  17.46724892% {
    top: -150px;
  }
  18.30061137% {
    top: -150px;
  }
  18.34061137% {
    top: -175px;
  }
  20.04733626% {
    top: -175px;
  }
  20.08733626% {
    top: -200px;
  }
  23.97746726% {
    top: -200px;
  }
  24.01746726% {
    top: -225px;
  }
  26.16087337% {
    top: -225px;
  }
  26.20087337% {
    top: -250px;
  }
  29.65432315% {
    top: -250px;
  }
  29.69432315% {
    top: -275px;
  }
  33.58445415% {
    top: -275px;
  }
  33.62445415% {
    top: -300px;
  }
  36.20454149% {
    top: -300px;
  }
  36.24454149% {
    top: -325px;
  }
  39.69799127% {
    top: -325px;
  }
  39.73799127% {
    top: -350px;
  }
  41.88139738% {
    top: -350px;
  }
  41.92139738% {
    top: -375px;
  }
  44.50148472% {
    top: -375px;
  }
  44.54148472% {
    top: -400px;
  }
  47.12157206% {
    top: -400px;
  }
  47.16157206% {
    top: -425px;
  }
  50.61502184% {
    top: -425px;
  }
  50.65502184% {
    top: -450px;
  }
  52.36174673% {
    top: -450px;
  }
  52.40174673% {
    top: -475px;
  }
  54.98183407% {
    top: -475px;
  }
  55.02183407% {
    top: -500px;
  }
  57.16524018% {
    top: -500px;
  }
  57.20524018% {
    top: -525px;
  }
  60.22200874% {
    top: -525px;
  }
  60.26200874% {
    top: -550px;
  }
  62.84209608% {
    top: -550px;
  }
  62.88209608% {
    top: -575px;
  }
  65.46218342% {
    top: -575px;
  }
  65.50218342% {
    top: -600px;
  }
  68.08227076% {
    top: -600px;
  }
  68.12227076% {
    top: -625px;
  }
  70.26567687% {
    top: -625px;
  }
  70.30567687% {
    top: -650px;
  }
  71.57572054% {
    top: -650px;
  }
  71.61572054% {
    top: -675px;
  }
  72.88576421% {
    top: -675px;
  }
  72.92576421% {
    top: -700px;
  }
  74.19580788% {
    top: -700px;
  }
  74.23580788% {
    top: -725px;
  }
  75.50585155% {
    top: -725px;
  }
  75.54585155% {
    top: -750px;
  }
  76.81589522% {
    top: -750px;
  }
  76.85589522% {
    top: -775px;
  }
  77.68925767% {
    top: -775px;
  }
  77.72925767% {
    top: -800px;
  }
  78.99930134% {
    top: -800px;
  }
  79.03930134% {
    top: -825px;
  }
  80.30934501% {
    top: -825px;
  }
  80.34934501% {
    top: -850px;
  }
  87.7329258% {
    top: -850px;
  }
  87.7729258% {
    top: -875px;
  }
  90.35301314% {
    top: -875px;
  }
  90.39301314% {
    top: -900px;
  }
  91.22637559% {
    top: -900px;
  }
  91.26637559% {
    top: -925px;
  }
  92.53641926% {
    top: -925px;
  }
  92.57641926% {
    top: -950px;
  }
  92.97310048% {
    top: -950px;
  }
  93.01310048% {
    top: -975px;
  }
  93.84646293% {
    top: -975px;
  }
  93.88646293% {
    top: -1000px;
  }
  94.71982538% {
    top: -1000px;
  }
  94.75982538% {
    top: -1025px;
  }
  96.02986905% {
    top: -1025px;
  }
  96.06986905% {
    top: -1050px;
  }
  97.33991272% {
    top: -1050px;
  }
  97.37991272% {
    top: -1075px;
  }
  97.77659394% {
    top: -1075px;
  }
  97.81659394% {
    top: -1100px;
  }
  98.64995639% {
    top: -1100px;
  }
  98.68995639% {
    top: -1125px;
  }
  99.96000006% {
    top: -1125px;
  }
  to {
    top: -1125px;
  }
}
</style>
