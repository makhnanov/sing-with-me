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
        video_id:"5RDSkR8_AQ0",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id:"5RDSkR8_AQ0",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          '\n' +
          '[50 Cent:] Something special,\n' +
          'Unforgettable,\n' +
          '50 Cent (cent),\n' +
          'Justin (tin),\n' +
          'Timbaland (land), god damn (damn)\n' +
          'She she, she want it, I want to give it to her\n' +
          'She know that, it\'s right here for her\n' +
          'I want to, see you break it down\n' +
          'I\'m ballin\', throw\'n money around\n' +
          '[Verse 1: 50 Cent:] She work it girl, she work the pole\n' +
          'She break it down, she take it low\n' +
          'She fine as hell, she about the dough\n' +
          'She doing her thing out on the floor\n' +
          'Her money money, she makin\' makin\'\n' +
          'Look at the way she shakin\' shakin\'\n' +
          'Make you want to touch it, make you want to taste it\n' +
          'Have you lustin\' for her, go crazy face it\n' +
          'Now don\'t stop, get it, get it\n' +
          'The way she shakin\' make you want to hit it\n' +
          'Think she double jointed from the way she splitted\n' +
          'Got you\'re head f**ked up from the way she did it\n' +
          'She\'s so much more than you\'re used to\n' +
          'She knows just how to move to seduce you\n' +
          'She gon do the right thing and touch the right spot\n' +
          'Dance in your lap\n' +
          'Till you\'re ready to pop\n' +
          'She always ready, when you want it she want it\n' +
          'Like a nympho, the info, I show you where to meet her\n' +
          'On the late night, till daylight the club jumpin\'\n' +
          'If you want a good time, she gone give you what you want\n' +
          '[Justin Timberlake] Baby this a new age, you like my new craze\n' +
          'Let\'s get together maybe we can start a new phase\n' +
          'The smokes got the club all hazy, spotlights don\'t do you justice baby\n' +
          'Why don\'t you come over here, you got me saying\n' +
          'Ayo,\n' +
          'I\'m tired of using technology, \n' +
          'why don\'t you sit down on top of me\n' +
          'Ayo,\n' +
          'I\'m tired of using technology, I need you right in front of me\n' +
          'Ooh, she wants it, uh uh, she wants it\n' +
          'Ooh, she wants it, uh uh (soo), I got to give it to her\n' +
          'Ooh, she wants it, uh uh, she wants it\n' +
          'Ooh, she wants it, uh uh (soo), I got to give it to her\n' +
          '[Timbaland:] Your hips, your thighs, you got me hypnotized, let me tell you\n' +
          'Your hips, your thighs, you got me hypnotized, let me tell you\n' +
          'Your hips, your thighs, you got me hypnotized, let me tell you\n' +
          'Your hips, your thighs, you got me hypnotized, let me tell you\n' +
          '[Verse 2: 50 Cent] Got a thing for that thing she got\n' +
          'The way she make it shake, the way she make it pop\n' +
          'Make it rain for us so she don\'t stop\n' +
          'I ain\'t got to move, I can sit and watch\n' +
          'In her fantasy, there\'s plain to see\n' +
          'Just how it be, on me, backstrokin\', sweat soaking\n' +
          'All into my set sheets\n' +
          'When she ready to ride, I\'m ready to roll\n' +
          'I\'ll be in this bitch till the club close\n' +
          'What should I do, one thing on all fours\n' +
          'Now that that shit should be against the law\n' +
          'From side to side, let the ride, break it down (down down)\n' +
          'You know I like, when you hike and you throw it all around\n' +
          'Different style, different move,\n' +
          'Damn I like the way you move\n' +
          'Girl you got me thinking about, all the things I do to you\n' +
          'Let\'s get it poppin\' shorty we can switch positions\n' +
          'From the couch to the counters in my kitchen\n' +
          '[Chorus: Justin Timberlake] Baby this a new age, you like my new craze\n' +
          'Let\'s get together maybe we can start a new phase\n' +
          'The smokes got the club all hazy, spotlights don\'t do you justice baby\n' +
          'Why don\'t you come over here, you got me saying\n' +
          'Ayo,\n' +
          'I\'m tired of using technology, why don\'t you sit down on top of me\n' +
          'Ayo,\n' +
          'I\'m tired of using technology, I need you right in front of me\n' +
          'Ooh, she wants it, uh uh, she wants it\n' +
          'Ooh, she wants it, uh uh (soo), I got to give it to her\n' +
          'Ooh, she wants it, uh uh, she wants it\n' +
          'Ooh, she wants it, uh uh (soo), I got to give it to her\n' +
          '[Timbaland:] Your hips, your thighs, you got me hypnotized, let me tell you\n' +
          'Your hips, your thighs, you got me hypnotized, let me tell you\n' +
          'Your hips, your thighs, you got me hypnotized, let me tell you\n' +
          'Your hips, your thighs, you got me hypnotized, let me tell you',
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

  top: -2000px;
  animation: move 217s linear alternate;
  /*+ 2s */
}

@keyframes move {
  from {
    top: 0;
  }
  0.87324201% {
    top: 0;
  }
  0.91324201% {
    top: -25px;
  }
  2.69972603% {
    top: -25px;
  }
  2.73972603% {
    top: -50px;
  }
  3.61296804% {
    top: -50px;
  }
  3.65296804% {
    top: -75px;
  }
  4.06958904% {
    top: -75px;
  }
  4.10958904% {
    top: -100px;
  }
  5.89607306% {
    top: -100px;
  }
  5.93607306% {
    top: -125px;
  }
  7.72255708% {
    top: -125px;
  }
  7.76255708% {
    top: -150px;
  }
  9.09242009% {
    top: -150px;
  }
  9.13242009% {
    top: -175px;
  }
  10.91890411% {
    top: -175px;
  }
  10.95890411% {
    top: -200px;
  }
  12.28876712% {
    top: -200px;
  }
  12.32876712% {
    top: -225px;
  }
  13.20200913% {
    top: -225px;
  }
  13.24200913% {
    top: -250px;
  }
  13.65863013% {
    top: -250px;
  }
  13.69863013% {
    top: -275px;
  }
  14.57187214% {
    top: -275px;
  }
  14.61187214% {
    top: -300px;
  }
  15.48511415% {
    top: -300px;
  }
  15.52511415% {
    top: -325px;
  }
  16.39835616% {
    top: -325px;
  }
  16.43835616% {
    top: -350px;
  }
  16.85497716% {
    top: -350px;
  }
  16.89497716% {
    top: -375px;
  }
  17.76821917% {
    top: -375px;
  }
  17.80821917% {
    top: -400px;
  }
  18.68146118% {
    top: -400px;
  }
  18.72146118% {
    top: -425px;
  }
  19.13808218% {
    top: -425px;
  }
  19.17808218% {
    top: -450px;
  }
  20.05132419% {
    top: -450px;
  }
  20.09132419% {
    top: -475px;
  }
  20.9645662% {
    top: -475px;
  }
  21.0045662% {
    top: -500px;
  }
  21.87780821% {
    top: -500px;
  }
  21.91780821% {
    top: -525px;
  }
  22.33442921% {
    top: -525px;
  }
  22.37442921% {
    top: -550px;
  }
  23.24767122% {
    top: -550px;
  }
  23.28767122% {
    top: -575px;
  }
  24.16091323% {
    top: -575px;
  }
  24.20091323% {
    top: -600px;
  }
  24.61753423% {
    top: -600px;
  }
  24.65753423% {
    top: -625px;
  }
  25.07415523% {
    top: -625px;
  }
  25.11415523% {
    top: -650px;
  }
  26.44401824% {
    top: -650px;
  }
  26.48401824% {
    top: -675px;
  }
  27.81388125% {
    top: -675px;
  }
  27.85388125% {
    top: -700px;
  }
  29.18374426% {
    top: -700px;
  }
  29.22374426% {
    top: -725px;
  }
  31.46684928% {
    top: -725px;
  }
  31.50684928% {
    top: -750px;
  }
  32.83671229% {
    top: -750px;
  }
  32.87671229% {
    top: -775px;
  }
  34.2065753% {
    top: -775px;
  }
  34.2465753% {
    top: -800px;
  }
  36.03305932% {
    top: -800px;
  }
  36.07305932% {
    top: -825px;
  }
  37.40292233% {
    top: -825px;
  }
  37.44292233% {
    top: -850px;
  }
  37.85954333% {
    top: -850px;
  }
  37.89954333% {
    top: -875px;
  }
  39.22940634% {
    top: -875px;
  }
  39.26940634% {
    top: -900px;
  }
  40.59926935% {
    top: -900px;
  }
  40.63926935% {
    top: -925px;
  }
  41.05589035% {
    top: -925px;
  }
  41.09589035% {
    top: -950px;
  }
  43.79561638% {
    top: -950px;
  }
  43.83561638% {
    top: -975px;
  }
  45.16547939% {
    top: -975px;
  }
  45.20547939% {
    top: -1000px;
  }
  46.99196341% {
    top: -1000px;
  }
  47.03196341% {
    top: -1025px;
  }
  48.36182642% {
    top: -1025px;
  }
  48.40182642% {
    top: -1050px;
  }
  49.73168943% {
    top: -1050px;
  }
  49.77168943% {
    top: -1075px;
  }
  51.55817345% {
    top: -1075px;
  }
  51.59817345% {
    top: -1100px;
  }
  52.92803646% {
    top: -1100px;
  }
  52.96803646% {
    top: -1125px;
  }
  54.29789947% {
    top: -1125px;
  }
  54.33789947% {
    top: -1150px;
  }
  56.12438349% {
    top: -1150px;
  }
  56.16438349% {
    top: -1175px;
  }
  56.58100449% {
    top: -1175px;
  }
  56.62100449% {
    top: -1200px;
  }
  57.4942465% {
    top: -1200px;
  }
  57.5342465% {
    top: -1225px;
  }
  58.40748851% {
    top: -1225px;
  }
  58.44748851% {
    top: -1250px;
  }
  59.32073052% {
    top: -1250px;
  }
  59.36073052% {
    top: -1275px;
  }
  59.77735152% {
    top: -1275px;
  }
  59.81735152% {
    top: -1300px;
  }
  61.60383554% {
    top: -1300px;
  }
  61.64383554% {
    top: -1325px;
  }
  62.06045654% {
    top: -1325px;
  }
  62.10045654% {
    top: -1350px;
  }
  62.97369855% {
    top: -1350px;
  }
  63.01369855% {
    top: -1375px;
  }
  63.88694056% {
    top: -1375px;
  }
  63.92694056% {
    top: -1400px;
  }
  64.80018257% {
    top: -1400px;
  }
  64.84018257% {
    top: -1425px;
  }
  65.25680357% {
    top: -1425px;
  }
  65.29680357% {
    top: -1450px;
  }
  67.08328759% {
    top: -1450px;
  }
  67.12328759% {
    top: -1475px;
  }
  68.90977161% {
    top: -1475px;
  }
  68.94977161% {
    top: -1500px;
  }
  69.36639261% {
    top: -1500px;
  }
  69.40639261% {
    top: -1525px;
  }
  70.27963462% {
    top: -1525px;
  }
  70.31963462% {
    top: -1550px;
  }
  72.10611864% {
    top: -1550px;
  }
  72.14611864% {
    top: -1575px;
  }
  73.47598165% {
    top: -1575px;
  }
  73.51598165% {
    top: -1600px;
  }
  74.84584466% {
    top: -1600px;
  }
  74.88584466% {
    top: -1625px;
  }
  76.67232868% {
    top: -1625px;
  }
  76.71232868% {
    top: -1650px;
  }
  78.04219169% {
    top: -1650px;
  }
  78.08219169% {
    top: -1675px;
  }
  79.86867571% {
    top: -1675px;
  }
  79.90867571% {
    top: -1700px;
  }
  81.23853872% {
    top: -1700px;
  }
  81.27853872% {
    top: -1725px;
  }
  81.69515972% {
    top: -1725px;
  }
  81.73515972% {
    top: -1750px;
  }
  84.43488575% {
    top: -1750px;
  }
  84.47488575% {
    top: -1775px;
  }
  84.89150675% {
    top: -1775px;
  }
  84.93150675% {
    top: -1800px;
  }
  87.63123278% {
    top: -1800px;
  }
  87.67123278% {
    top: -1825px;
  }
  89.00109579% {
    top: -1825px;
  }
  89.04109579% {
    top: -1850px;
  }
  90.82757981% {
    top: -1850px;
  }
  90.86757981% {
    top: -1875px;
  }
  92.19744282% {
    top: -1875px;
  }
  92.23744282% {
    top: -1900px;
  }
  93.56730583% {
    top: -1900px;
  }
  93.60730583% {
    top: -1925px;
  }
  95.39378985% {
    top: -1925px;
  }
  95.43378985% {
    top: -1950px;
  }
  96.76365286% {
    top: -1950px;
  }
  96.80365286% {
    top: -1975px;
  }
  98.59013688% {
    top: -1975px;
  }
  98.63013688% {
    top: -2000px;
  }
  99.95999989% {
    top: -2000px;
  }
  to {
    top: -2000px;
  }
}
</style>
