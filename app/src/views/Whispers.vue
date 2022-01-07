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
        video_id: 'B58OBfM-8A4',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Despite the lies that you\'re making\n' +
          'Your love is mine for the taking\n' +
          'My love is\n' +
          'Just waiting\n' +
          'To turn your tears to roses\n' +
          'Despite the lies that you\'re making\n' +
          'Your love is mine for the taking\n' +
          'My love is\n' +
          'Just waiting\n' +
          'To turn your tears to roses\n' +
          'I will be the one that\'s gonna hold you\n' +
          'I will be the one that you run to\n' +
          'My love is\n' +
          'A burning, consuming fire\n' +
          'No\n' +
          'You\'ll never be alone\n' +
          'When darkness comes, I\'ll light the night with stars\n' +
          'Hear the whispers in the dark\n' +
          'No\n' +
          'You\'ll never be alone\n' +
          'When darkness comes, you know I\'m never far\n' +
          'Hear the whispers in the dark\n' +
          'You feel so lonely and ragged\n' +
          'You lay here broken and naked\n' +
          'My love is\n' +
          'Just waiting\n' +
          'To clothe you in crimson roses\n' +
          'I will be the one that\'s gonna find you\n' +
          'I will be the one that\'s gonna guide you\n' +
          'My love is\n' +
          'A burning, consuming fire\n' +
          'No\n' +
          'You\'ll never be alone\n' +
          'When darkness comes, I\'ll light the night with stars\n' +
          'Hear the whispers in the dark\n' +
          'No\n' +
          'You\'ll never be alone\n' +
          'When darkness comes, you know I\'m never far\n' +
          'Hear the whispers in the dark\n' +
          'No\n' +
          'You\'ll never be alone\n' +
          'When darkness comes, I\'ll light the night with stars\n' +
          'Hear the whispers in the dark\n' +
          'No\n' +
          'You\'ll never be alone\n' +
          'When darkness comes, you know I\'m never far\n' +
          'Hear the whispers in the dark\n' +
          'Whispers in the dark\n' +
          'Whispers in the dark\n' +
          'Whispers in the dark'
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
  top: -1225px;
  animation: move 189s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  6.83830688% {
    top: 0;
  }
  6.87830688% {
    top: -25px;
  }
  7.89650794% {
    top: -25px;
  }
  7.93650794% {
    top: -50px;
  }
  8.42560847% {
    top: -50px;
  }
  8.46560847% {
    top: -75px;
  }
  9.48380953% {
    top: -75px;
  }
  9.52380953% {
    top: -100px;
  }
  10.54201059% {
    top: -100px;
  }
  10.58201059% {
    top: -125px;
  }
  17.42031747% {
    top: -125px;
  }
  17.46031747% {
    top: -150px;
  }
  19.00761906% {
    top: -150px;
  }
  19.04761906% {
    top: -175px;
  }
  19.53671959% {
    top: -175px;
  }
  19.57671959% {
    top: -200px;
  }
  20.06582012% {
    top: -200px;
  }
  20.10582012% {
    top: -225px;
  }
  21.65312171% {
    top: -225px;
  }
  21.69312171% {
    top: -250px;
  }
  22.71132277% {
    top: -250px;
  }
  22.75132277% {
    top: -275px;
  }
  24.29862436% {
    top: -275px;
  }
  24.33862436% {
    top: -300px;
  }
  24.82772489% {
    top: -300px;
  }
  24.86772489% {
    top: -325px;
  }
  26.94412701% {
    top: -325px;
  }
  26.98412701% {
    top: -350px;
  }
  28.5314286% {
    top: -350px;
  }
  28.5714286% {
    top: -375px;
  }
  30.11873019% {
    top: -375px;
  }
  30.15873019% {
    top: -400px;
  }
  32.23513231% {
    top: -400px;
  }
  32.27513231% {
    top: -425px;
  }
  33.29333337% {
    top: -425px;
  }
  33.33333337% {
    top: -450px;
  }
  33.8224339% {
    top: -450px;
  }
  33.8624339% {
    top: -475px;
  }
  34.88063496% {
    top: -475px;
  }
  34.92063496% {
    top: -500px;
  }
  38.05523813% {
    top: -500px;
  }
  38.09523813% {
    top: -525px;
  }
  39.11343919% {
    top: -525px;
  }
  39.15343919% {
    top: -550px;
  }
  45.99174607% {
    top: -550px;
  }
  46.03174607% {
    top: -575px;
  }
  47.04994713% {
    top: -575px;
  }
  47.08994713% {
    top: -600px;
  }
  48.10814819% {
    top: -600px;
  }
  48.14814819% {
    top: -625px;
  }
  48.63724872% {
    top: -625px;
  }
  48.67724872% {
    top: -650px;
  }
  49.69544978% {
    top: -650px;
  }
  49.73544978% {
    top: -675px;
  }
  51.28275137% {
    top: -675px;
  }
  51.32275137% {
    top: -700px;
  }
  52.34095243% {
    top: -700px;
  }
  52.38095243% {
    top: -725px;
  }
  53.39915349% {
    top: -725px;
  }
  53.43915349% {
    top: -750px;
  }
  55.51555561% {
    top: -750px;
  }
  55.55555561% {
    top: -775px;
  }
  57.1028572% {
    top: -775px;
  }
  57.1428572% {
    top: -800px;
  }
  58.16105826% {
    top: -800px;
  }
  58.20105826% {
    top: -825px;
  }
  60.80656091% {
    top: -825px;
  }
  60.84656091% {
    top: -850px;
  }
  61.86476197% {
    top: -850px;
  }
  61.90476197% {
    top: -875px;
  }
  62.3938625% {
    top: -875px;
  }
  62.4338625% {
    top: -900px;
  }
  63.45206356% {
    top: -900px;
  }
  63.49206356% {
    top: -925px;
  }
  66.09756621% {
    top: -925px;
  }
  66.13756621% {
    top: -950px;
  }
  67.6848678% {
    top: -950px;
  }
  67.7248678% {
    top: -975px;
  }
  84.0869842% {
    top: -975px;
  }
  84.1269842% {
    top: -1000px;
  }
  85.67428579% {
    top: -1000px;
  }
  85.71428579% {
    top: -1025px;
  }
  87.79068791% {
    top: -1025px;
  }
  87.83068791% {
    top: -1050px;
  }
  88.84888897% {
    top: -1050px;
  }
  88.88888897% {
    top: -1075px;
  }
  89.3779895% {
    top: -1075px;
  }
  89.4179895% {
    top: -1100px;
  }
  90.96529109% {
    top: -1100px;
  }
  91.00529109% {
    top: -1125px;
  }
  93.08169321% {
    top: -1125px;
  }
  93.12169321% {
    top: -1150px;
  }
  94.6689948% {
    top: -1150px;
  }
  94.7089948% {
    top: -1175px;
  }
  96.25629639% {
    top: -1175px;
  }
  96.29629639% {
    top: -1200px;
  }
  97.31449745% {
    top: -1200px;
  }
  97.35449745% {
    top: -1225px;
  }
  99.9600001% {
    top: -1225px;
  }
  to {
    top: -1225px;
  }
}
</style>