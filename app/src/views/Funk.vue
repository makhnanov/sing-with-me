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
        video_id: 'OPf0YbXqDm0',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Doh\n' +
          'Doh doh doh, doh doh doh\n' +
          'Doh doh\n' +
          'Doh doh doh, doh doh doh\n' +
          'Doh doh\n' +
          'Doh doh doh, doh doh doh\n' +
          'Doh doh\n' +
          'Aaaaaow!\n' +
          'This hit, that ice cold\n' +
          'Michelle Pfeiffer, that white gold\n' +
          'This one, for them hood girls\n' +
          'Them good girls, straight masterpieces\n' +
          'Stylin\', wildin\'\n' +
          'Livin\' it up in the city\n' +
          'Got Chucks on with Saint Laurent\n' +
          'Gotta kiss myself, I\'m so pretty\n' +
          'I\'m too hot (hot damn)\n' +
          'Called a police and a fireman\n' +
          'I\'m too hot (hot damn)\n' +
          'Make a dragon wanna retire, man\n' +
          'I\'m too hot (hot damn)\n' +
          'Say my name, you know who I am\n' +
          'I\'m too hot (hot damn)\n' +
          'Am I bad \'bout that money?\n' +
          'Break it down\n' +
          'Girls hit your hallelujah (wooh)\n' +
          'Girls hit your hallelujah (wooh)\n' +
          'Girls hit your hallelujah (wooh)\n' +
          '\'Cause Uptown Funk gon\' give it to you (wooh)\n' +
          '\'Cause Uptown Funk gon\' give it to you\n' +
          '\'Cause Uptown Funk gon\' give it to you\n' +
          'Saturday night, and we in the spot\n' +
          'Don\'t believe me, just watch, come on!\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Hey, hey, hey, oh!\n' +
          'Stop\n' +
          'Wait a minute\n' +
          'Fill my cup, put some liquor in it\n' +
          'Take a sip, sign a check\n' +
          'Julio, get the stretch\n' +
          'Ride to Harlem, Hollywood, Jackson, Mississippi\n' +
          'If we show up, we gon\' show out\n' +
          'Smoother than a fresh jar of Skippy\n' +
          'I\'m too hot (hot damn)\n' +
          'Called a police and a fireman\n' +
          'I\'m too hot (hot damn)\n' +
          'Make a dragon wanna retire, man\n' +
          'I\'m too hot (hot damn, hot damn)\n' +
          'Bitch, say my name, you know who I am\n' +
          'I\'m too hot (hot damn)\n' +
          'Am I bad \'bout that money?\n' +
          'Break it down\n' +
          'Girls hit your hallelujah (wooh)\n' +
          'Girls hit your hallelujah (wooh)\n' +
          'Girls hit your hallelujah (wooh)\n' +
          '\'Cause Uptown Funk gon\' give it to you (wooh)\n' +
          '\'Cause Uptown Funk gon\' give it to you\n' +
          '\'Cause Uptown Funk gon\' give it to you\n' +
          'Saturday night, and we in the spot\n' +
          'Don\'t believe me, just watch, come on!\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Hey, hey, hey, oh!\n' +
          'Before we leave\n' +
          'I\'mma tell y\'all a lil\' something\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'I said Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Come on, dance, jump on it\n' +
          'If you sexy than flaunt it\n' +
          'If you freaky then own it\n' +
          'Don\'t brag about it, come show me\n' +
          'Come on, dance, jump on it\n' +
          'If you sexy than flaunt it\n' +
          'Well, it\'s Saturday night, and we in the spot\n' +
          'Don\'t believe me, just watch, come on!\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Don\'t believe me, just watch\n' +
          'Hey, hey, hey, oh!\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up (say what?)\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up (say what?)\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up (say what?)\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up\n' +
          'Uptown Funk you up (say what?)\n' +
          'Uptown Funk you up'
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
  top: -2700px;
  animation: move 264s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  0.33878788% {
    top: 0;
  }
  0.37878788% {
    top: -25px;
  }
  1.09636364% {
    top: -25px;
  }
  1.13636364% {
    top: -50px;
  }
  1.47515152% {
    top: -50px;
  }
  1.51515152% {
    top: -75px;
  }
  2.99030304% {
    top: -75px;
  }
  3.03030304% {
    top: -100px;
  }
  3.36909092% {
    top: -100px;
  }
  3.40909092% {
    top: -125px;
  }
  4.50545456% {
    top: -125px;
  }
  4.54545456% {
    top: -150px;
  }
  4.88424244% {
    top: -150px;
  }
  4.92424244% {
    top: -175px;
  }
  6.02060608% {
    top: -175px;
  }
  6.06060608% {
    top: -200px;
  }
  6.77818184% {
    top: -200px;
  }
  6.81818184% {
    top: -225px;
  }
  7.5357576% {
    top: -225px;
  }
  7.5757576% {
    top: -250px;
  }
  8.29333336% {
    top: -250px;
  }
  8.33333336% {
    top: -275px;
  }
  9.05090912% {
    top: -275px;
  }
  9.09090912% {
    top: -300px;
  }
  9.80848488% {
    top: -300px;
  }
  9.84848488% {
    top: -325px;
  }
  10.56606064% {
    top: -325px;
  }
  10.60606064% {
    top: -350px;
  }
  11.70242428% {
    top: -350px;
  }
  11.74242428% {
    top: -375px;
  }
  12.46000004% {
    top: -375px;
  }
  12.50000004% {
    top: -400px;
  }
  12.83878792% {
    top: -400px;
  }
  12.87878792% {
    top: -425px;
  }
  13.97515156% {
    top: -425px;
  }
  14.01515156% {
    top: -450px;
  }
  14.73272732% {
    top: -450px;
  }
  14.77272732% {
    top: -475px;
  }
  15.49030308% {
    top: -475px;
  }
  15.53030308% {
    top: -500px;
  }
  16.24787884% {
    top: -500px;
  }
  16.28787884% {
    top: -525px;
  }
  17.0054546% {
    top: -525px;
  }
  17.0454546% {
    top: -550px;
  }
  17.76303036% {
    top: -550px;
  }
  17.80303036% {
    top: -575px;
  }
  18.52060612% {
    top: -575px;
  }
  18.56060612% {
    top: -600px;
  }
  18.899394% {
    top: -600px;
  }
  18.939394% {
    top: -625px;
  }
  19.65696976% {
    top: -625px;
  }
  19.69696976% {
    top: -650px;
  }
  20.41454552% {
    top: -650px;
  }
  20.45454552% {
    top: -675px;
  }
  21.17212128% {
    top: -675px;
  }
  21.21212128% {
    top: -700px;
  }
  21.92969704% {
    top: -700px;
  }
  21.96969704% {
    top: -725px;
  }
  22.6872728% {
    top: -725px;
  }
  22.7272728% {
    top: -750px;
  }
  23.44484856% {
    top: -750px;
  }
  23.48484856% {
    top: -775px;
  }
  24.20242432% {
    top: -775px;
  }
  24.24242432% {
    top: -800px;
  }
  24.96000008% {
    top: -800px;
  }
  25.00000008% {
    top: -825px;
  }
  27.99030311% {
    top: -825px;
  }
  28.03030311% {
    top: -850px;
  }
  31.39939402% {
    top: -850px;
  }
  31.43939402% {
    top: -875px;
  }
  32.15696978% {
    top: -875px;
  }
  32.19696978% {
    top: -900px;
  }
  32.91454554% {
    top: -900px;
  }
  32.95454554% {
    top: -925px;
  }
  33.6721213% {
    top: -925px;
  }
  33.7121213% {
    top: -950px;
  }
  34.42969706% {
    top: -950px;
  }
  34.46969706% {
    top: -975px;
  }
  34.80848494% {
    top: -975px;
  }
  34.84848494% {
    top: -1000px;
  }
  35.18727282% {
    top: -1000px;
  }
  35.22727282% {
    top: -1025px;
  }
  35.94484858% {
    top: -1025px;
  }
  35.98484858% {
    top: -1050px;
  }
  36.70242434% {
    top: -1050px;
  }
  36.74242434% {
    top: -1075px;
  }
  37.4600001% {
    top: -1075px;
  }
  37.5000001% {
    top: -1100px;
  }
  38.97515162% {
    top: -1100px;
  }
  39.01515162% {
    top: -1125px;
  }
  40.11151526% {
    top: -1125px;
  }
  40.15151526% {
    top: -1150px;
  }
  40.86909102% {
    top: -1150px;
  }
  40.90909102% {
    top: -1175px;
  }
  41.62666678% {
    top: -1175px;
  }
  41.66666678% {
    top: -1200px;
  }
  42.38424254% {
    top: -1200px;
  }
  42.42424254% {
    top: -1225px;
  }
  43.1418183% {
    top: -1225px;
  }
  43.1818183% {
    top: -1250px;
  }
  43.89939406% {
    top: -1250px;
  }
  43.93939406% {
    top: -1275px;
  }
  44.65696982% {
    top: -1275px;
  }
  44.69696982% {
    top: -1300px;
  }
  45.41454558% {
    top: -1300px;
  }
  45.45454558% {
    top: -1325px;
  }
  46.17212134% {
    top: -1325px;
  }
  46.21212134% {
    top: -1350px;
  }
  46.9296971% {
    top: -1350px;
  }
  46.9696971% {
    top: -1375px;
  }
  47.30848498% {
    top: -1375px;
  }
  47.34848498% {
    top: -1400px;
  }
  48.06606074% {
    top: -1400px;
  }
  48.10606074% {
    top: -1425px;
  }
  48.8236365% {
    top: -1425px;
  }
  48.8636365% {
    top: -1450px;
  }
  49.58121226% {
    top: -1450px;
  }
  49.62121226% {
    top: -1475px;
  }
  50.33878802% {
    top: -1475px;
  }
  50.37878802% {
    top: -1500px;
  }
  51.09636378% {
    top: -1500px;
  }
  51.13636378% {
    top: -1525px;
  }
  51.85393954% {
    top: -1525px;
  }
  51.89393954% {
    top: -1550px;
  }
  52.6115153% {
    top: -1550px;
  }
  52.6515153% {
    top: -1575px;
  }
  53.36909106% {
    top: -1575px;
  }
  53.40909106% {
    top: -1600px;
  }
  56.77818197% {
    top: -1600px;
  }
  56.81818197% {
    top: -1625px;
  }
  59.808485% {
    top: -1625px;
  }
  59.848485% {
    top: -1650px;
  }
  60.56606076% {
    top: -1650px;
  }
  60.60606076% {
    top: -1675px;
  }
  61.32363652% {
    top: -1675px;
  }
  61.36363652% {
    top: -1700px;
  }
  62.08121228% {
    top: -1700px;
  }
  62.12121228% {
    top: -1725px;
  }
  62.83878804% {
    top: -1725px;
  }
  62.87878804% {
    top: -1750px;
  }
  64.73272743% {
    top: -1750px;
  }
  64.77272743% {
    top: -1775px;
  }
  66.24787895% {
    top: -1775px;
  }
  66.28787895% {
    top: -1800px;
  }
  67.00545471% {
    top: -1800px;
  }
  67.04545471% {
    top: -1825px;
  }
  67.38424259% {
    top: -1825px;
  }
  67.42424259% {
    top: -1850px;
  }
  68.52060623% {
    top: -1850px;
  }
  68.56060623% {
    top: -1875px;
  }
  69.27818199% {
    top: -1875px;
  }
  69.31818199% {
    top: -1900px;
  }
  70.03575775% {
    top: -1900px;
  }
  70.07575775% {
    top: -1925px;
  }
  70.79333351% {
    top: -1925px;
  }
  70.83333351% {
    top: -1950px;
  }
  71.55090927% {
    top: -1950px;
  }
  71.59090927% {
    top: -1975px;
  }
  72.30848503% {
    top: -1975px;
  }
  72.34848503% {
    top: -2000px;
  }
  73.06606079% {
    top: -2000px;
  }
  73.10606079% {
    top: -2025px;
  }
  73.82363655% {
    top: -2025px;
  }
  73.86363655% {
    top: -2050px;
  }
  74.58121231% {
    top: -2050px;
  }
  74.62121231% {
    top: -2075px;
  }
  75.33878807% {
    top: -2075px;
  }
  75.37878807% {
    top: -2100px;
  }
  76.47515171% {
    top: -2100px;
  }
  76.51515171% {
    top: -2125px;
  }
  77.23272747% {
    top: -2125px;
  }
  77.27272747% {
    top: -2150px;
  }
  77.99030323% {
    top: -2150px;
  }
  78.03030323% {
    top: -2175px;
  }
  78.74787899% {
    top: -2175px;
  }
  78.78787899% {
    top: -2200px;
  }
  81.77818202% {
    top: -2200px;
  }
  81.81818202% {
    top: -2225px;
  }
  85.18727293% {
    top: -2225px;
  }
  85.22727293% {
    top: -2250px;
  }
  85.94484869% {
    top: -2250px;
  }
  85.98484869% {
    top: -2275px;
  }
  86.70242445% {
    top: -2275px;
  }
  86.74242445% {
    top: -2300px;
  }
  87.46000021% {
    top: -2300px;
  }
  87.50000021% {
    top: -2325px;
  }
  88.21757597% {
    top: -2325px;
  }
  88.25757597% {
    top: -2350px;
  }
  88.97515173% {
    top: -2350px;
  }
  89.01515173% {
    top: -2375px;
  }
  90.11151537% {
    top: -2375px;
  }
  90.15151537% {
    top: -2400px;
  }
  90.49030325% {
    top: -2400px;
  }
  90.53030325% {
    top: -2425px;
  }
  91.24787901% {
    top: -2425px;
  }
  91.28787901% {
    top: -2450px;
  }
  92.38424265% {
    top: -2450px;
  }
  92.42424265% {
    top: -2475px;
  }
  93.14181841% {
    top: -2475px;
  }
  93.18181841% {
    top: -2500px;
  }
  93.89939417% {
    top: -2500px;
  }
  93.93939417% {
    top: -2525px;
  }
  94.65696993% {
    top: -2525px;
  }
  94.69696993% {
    top: -2550px;
  }
  95.41454569% {
    top: -2550px;
  }
  95.45454569% {
    top: -2575px;
  }
  96.17212145% {
    top: -2575px;
  }
  96.21212145% {
    top: -2600px;
  }
  96.92969721% {
    top: -2600px;
  }
  96.96969721% {
    top: -2625px;
  }
  97.68727297% {
    top: -2625px;
  }
  97.72727297% {
    top: -2650px;
  }
  98.44484873% {
    top: -2650px;
  }
  98.48484873% {
    top: -2675px;
  }
  99.20242449% {
    top: -2675px;
  }
  99.24242449% {
    top: -2700px;
  }
  99.96000025% {
    top: -2700px;
  }
  to {
    top: -2700px;
  }
}
</style>