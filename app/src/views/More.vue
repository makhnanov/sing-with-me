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
        video_id: 'Py9paavgZ-0',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I just need to get it off my chest\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'You should know that baby you\'re the best\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'I saw it coming, from miles away\n' +
          'I better speak up if I got something to say\n' +
          '\'Cause it ain\'t over, until she sings\n' +
          'You had your reasons, you had a few\n' +
          'But you knew that I would go anywhere for you\n' +
          '\'Cause it ain\'t over, until she sings\n' +
          'I just need to get it off my chest\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'You should know that baby you\'re the best\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'I just...\n' +
          'I just...\n' +
          'Your good intentions are sweet and pure\n' +
          'But they can never tame a fire like yours\n' +
          'No it ain\'t over, until she sings\n' +
          'Right where you wanted, down on my knees\n' +
          'You got me begging, pretty baby set me free\n' +
          '\'Cause it ain\'t over, until she sings\n' +
          'Come a little closer, let me taste your smile\n' +
          'Until the morning lights\n' +
          'Ain\'t no going back the way you look tonight\n' +
          'I see it in your eyes\n' +
          'I just need to get it off my chest\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'You should know that baby you\'re the best\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'I just...\n' +
          'I just need to get it off my chest\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'You should know that baby you\'re the best\n' +
          'Yeah, more than you know\n' +
          'Yeah, more than you know\n' +
          'Baby, I\'m a renegade\n' +
          'Baby, you\'re a firestorm\n' +
          'Move your body close to mine\n' +
          'We can dance until the dawn\n' +
          'I can see we\'re getting late\n' +
          'The way you, the way you, the way you look tonight\n' +
          'And I could lose a year of sleep\n' +
          'The way you, the way you, the way you look tonight\n' +
          'Shoot me straight into my heart\n' +
          'We don\'t have to take it slow\n' +
          'Love me like we\'re out of time\n' +
          'Easy come and easy go\n' +
          'Cut me deep into the bone\n' +
          'You\'re my perfect getaway\n' +
          'I am right where I belong\n' +
          'We got more than words can say\n' +
          'Baby, I\'m a renegade\n' +
          'Baby, you\'re a firestorm\n' +
          'Move your body close to mine\n' +
          'We can dance until the dawn\n' +
          'I can see we\'re getting late\n' +
          'The way you, the way you, the way you look tonight\n' +
          'And I could lose a year of sleep\n' +
          'The way you, the way you, the way you look tonight\n' +
          'The way you, the way you, the way you look tonight [2x]\n' +
          'The way you, the way you, the way you look tonight [2x]\n' +
          'How do you feel right now'
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
  top: -1925px;
  animation: move 381s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  2.58467192% {
    top: 0;
  }
  2.62467192% {
    top: -25px;
  }
  3.1096063% {
    top: -25px;
  }
  3.1496063% {
    top: -50px;
  }
  3.63454068% {
    top: -50px;
  }
  3.67454068% {
    top: -75px;
  }
  4.68440945% {
    top: -75px;
  }
  4.72440945% {
    top: -100px;
  }
  5.20934383% {
    top: -100px;
  }
  5.24934383% {
    top: -125px;
  }
  5.73427821% {
    top: -125px;
  }
  5.77427821% {
    top: -150px;
  }
  7.04661417% {
    top: -150px;
  }
  7.08661417% {
    top: -175px;
  }
  8.09648294% {
    top: -175px;
  }
  8.13648294% {
    top: -200px;
  }
  9.14635171% {
    top: -200px;
  }
  9.18635171% {
    top: -225px;
  }
  11.24608924% {
    top: -225px;
  }
  11.28608924% {
    top: -250px;
  }
  12.29595801% {
    top: -250px;
  }
  12.33595801% {
    top: -275px;
  }
  13.34582678% {
    top: -275px;
  }
  13.38582678% {
    top: -300px;
  }
  14.92062993% {
    top: -300px;
  }
  14.96062993% {
    top: -325px;
  }
  15.44556431% {
    top: -325px;
  }
  15.48556431% {
    top: -350px;
  }
  15.97049869% {
    top: -350px;
  }
  16.01049869% {
    top: -375px;
  }
  17.02036746% {
    top: -375px;
  }
  17.06036746% {
    top: -400px;
  }
  17.54530184% {
    top: -400px;
  }
  17.58530184% {
    top: -425px;
  }
  18.07023622% {
    top: -425px;
  }
  18.11023622% {
    top: -450px;
  }
  18.33270341% {
    top: -450px;
  }
  18.37270341% {
    top: -475px;
  }
  20.43244094% {
    top: -475px;
  }
  20.47244094% {
    top: -500px;
  }
  23.31958005% {
    top: -500px;
  }
  23.35958005% {
    top: -525px;
  }
  24.63191601% {
    top: -525px;
  }
  24.67191601% {
    top: -550px;
  }
  25.41931758% {
    top: -550px;
  }
  25.45931758% {
    top: -575px;
  }
  27.51905511% {
    top: -575px;
  }
  27.55905511% {
    top: -600px;
  }
  28.56892388% {
    top: -600px;
  }
  28.60892388% {
    top: -625px;
  }
  29.61879265% {
    top: -625px;
  }
  29.65879265% {
    top: -650px;
  }
  31.71853018% {
    top: -650px;
  }
  31.75853018% {
    top: -675px;
  }
  32.50593175% {
    top: -675px;
  }
  32.54593175% {
    top: -700px;
  }
  33.81826771% {
    top: -700px;
  }
  33.85826771% {
    top: -725px;
  }
  34.34320209% {
    top: -725px;
  }
  34.38320209% {
    top: -750px;
  }
  35.39307086% {
    top: -750px;
  }
  35.43307086% {
    top: -775px;
  }
  35.91800524% {
    top: -775px;
  }
  35.95800524% {
    top: -800px;
  }
  36.44293962% {
    top: -800px;
  }
  36.48293962% {
    top: -825px;
  }
  37.49280839% {
    top: -825px;
  }
  37.53280839% {
    top: -850px;
  }
  38.01774277% {
    top: -850px;
  }
  38.05774277% {
    top: -875px;
  }
  38.54267715% {
    top: -875px;
  }
  38.58267715% {
    top: -900px;
  }
  38.80514434% {
    top: -900px;
  }
  38.84514434% {
    top: -925px;
  }
  39.33007872% {
    top: -925px;
  }
  39.37007872% {
    top: -950px;
  }
  39.8550131% {
    top: -950px;
  }
  39.8950131% {
    top: -975px;
  }
  40.37994748% {
    top: -975px;
  }
  40.41994748% {
    top: -1000px;
  }
  40.90488186% {
    top: -1000px;
  }
  40.94488186% {
    top: -1025px;
  }
  41.42981624% {
    top: -1025px;
  }
  41.46981624% {
    top: -1050px;
  }
  41.95475062% {
    top: -1050px;
  }
  41.99475062% {
    top: -1075px;
  }
  42.479685% {
    top: -1075px;
  }
  42.519685% {
    top: -1100px;
  }
  43.00461938% {
    top: -1100px;
  }
  43.04461938% {
    top: -1125px;
  }
  47.72902883% {
    top: -1125px;
  }
  47.76902883% {
    top: -1150px;
  }
  48.25396321% {
    top: -1150px;
  }
  48.29396321% {
    top: -1175px;
  }
  48.77889759% {
    top: -1175px;
  }
  48.81889759% {
    top: -1200px;
  }
  49.82876636% {
    top: -1200px;
  }
  49.86876636% {
    top: -1225px;
  }
  50.09123355% {
    top: -1225px;
  }
  50.13123355% {
    top: -1250px;
  }
  50.61616793% {
    top: -1250px;
  }
  50.65616793% {
    top: -1275px;
  }
  59.01511806% {
    top: -1275px;
  }
  59.05511806% {
    top: -1300px;
  }
  60.06498683% {
    top: -1300px;
  }
  60.10498683% {
    top: -1325px;
  }
  61.1148556% {
    top: -1325px;
  }
  61.1548556% {
    top: -1350px;
  }
  62.16472437% {
    top: -1350px;
  }
  62.20472437% {
    top: -1375px;
  }
  63.21459314% {
    top: -1375px;
  }
  63.25459314% {
    top: -1400px;
  }
  64.5269291% {
    top: -1400px;
  }
  64.5669291% {
    top: -1425px;
  }
  65.31433067% {
    top: -1425px;
  }
  65.35433067% {
    top: -1450px;
  }
  66.88913382% {
    top: -1450px;
  }
  66.92913382% {
    top: -1475px;
  }
  71.61354327% {
    top: -1475px;
  }
  71.65354327% {
    top: -1500px;
  }
  72.66341204% {
    top: -1500px;
  }
  72.70341204% {
    top: -1525px;
  }
  73.71328081% {
    top: -1525px;
  }
  73.75328081% {
    top: -1550px;
  }
  74.76314958% {
    top: -1550px;
  }
  74.80314958% {
    top: -1575px;
  }
  75.81301835% {
    top: -1575px;
  }
  75.85301835% {
    top: -1600px;
  }
  76.86288712% {
    top: -1600px;
  }
  76.90288712% {
    top: -1625px;
  }
  77.91275589% {
    top: -1625px;
  }
  77.95275589% {
    top: -1650px;
  }
  78.96262466% {
    top: -1650px;
  }
  79.00262466% {
    top: -1675px;
  }
  80.01249343% {
    top: -1675px;
  }
  80.05249343% {
    top: -1700px;
  }
  81.32482939% {
    top: -1700px;
  }
  81.36482939% {
    top: -1725px;
  }
  82.37469816% {
    top: -1725px;
  }
  82.41469816% {
    top: -1750px;
  }
  83.42456693% {
    top: -1750px;
  }
  83.46456693% {
    top: -1775px;
  }
  84.4744357% {
    top: -1775px;
  }
  84.5144357% {
    top: -1800px;
  }
  85.78677166% {
    top: -1800px;
  }
  85.82677166% {
    top: -1825px;
  }
  86.57417323% {
    top: -1825px;
  }
  86.61417323% {
    top: -1850px;
  }
  87.88650919% {
    top: -1850px;
  }
  87.92650919% {
    top: -1875px;
  }
  89.98624672% {
    top: -1875px;
  }
  90.02624672% {
    top: -1900px;
  }
  92.08598425% {
    top: -1900px;
  }
  92.12598425% {
    top: -1925px;
  }
  99.96% {
    top: -1925px;
  }
  to {
    top: -1925px;
  }
}
</style>