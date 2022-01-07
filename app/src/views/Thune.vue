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
        video_id: 'm3YX8zlR4BU',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Tout le monde il veut seulement la thune\n' +
          'Et seulement ça, ça les fait bander\n' +
          'Tout le monde il veut seulement la fame\n' +
          'Et seulement ça, ça les fait bouger\n' +
          'Bouger leur culs le temps d\'un verre\n' +
          'Photo sur Insta\', c\'est obligé\n' +
          'Sinon, au fond, à quoi ça sert?\n' +
          'Si c\'est même pas pour leur montrer\n' +
          'Et puis à quoi bon?\n' +
          'T\'es tellement seul derrière ton écran\n' +
          'Tu penses à c\'que vont penser les gens\n' +
          'Mais tu les laisses tous indifférents, oh, oh\n' +
          'Peut-être, je devrais m\'éloigner\n' +
          'Loin du game, loin du danger\n' +
          'Mais j\'avoue, j\'aime bien jouer\n' +
          'Si c\'est de moi dont on va parler\n' +
          'Où j\'oublie tout et je m\'en vais\n' +
          'Moi, je m\'en vais marcher\n' +
          'Naïve comme jamais\n' +
          'Loin des regards amers\n' +
          'À quoi bon?\n' +
          'T\'es tellement seul derrière ton écran\n' +
          'Tu penses à c\'que vont penser les gens\n' +
          'Mais tu les laisses tous indifférents\n' +
          'Et puis à quoi bon?\n' +
          'T\'es tellement seul avec ton argent\n' +
          'Tu sais même pas pourquoi t\'es tout l\'temps\n' +
          'Avec des michtos sans sentiments\n' +
          'Au fond, j\'avoue que même moi\n' +
          'Je fais partie de ces gens-là\n' +
          'Rassurée quand les gens, ils m\'aiment\n' +
          'Et si c\'est très superficiel\n' +
          'Tout le monde, il veut seulement la thune\n' +
          '(tout le monde il veut seulement la thune)\n' +
          'Et seulement ça, ça les fait bander\n' +
          '(tout le monde il veut seulement la thune)\n' +
          'Tout le monde, il veut seulement la fame\n' +
          '(tout le monde il veut seulement la fame)\n' +
          'Et seulement ça, ça les fait bouger\n' +
          '(tout le monde il veut seulement la fame)\n' +
          'Et puis à quoi bon?\n' +
          '(tout le monde, il veut seulement la thune)\n' +
          'T\'es tellement seul derrière ton écran\n' +
          '(tout le monde, il veut seulement la thune)\n' +
          'Tu penses à ce que vont penser les gens\n' +
          '(tout le monde, il veut seulement la fame)\n' +
          'Mais tu les laisses tous indifférents\n' +
          '(tout le monde, il veut seulement la fame)\n' +
          'À quoi bon?\n' +
          'À quoi bon?\n' +
          'À quoi bon?'
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
  top: -1250px;
  animation: move 206s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  20.83378641% {
    top: 0;
  }
  20.87378641% {
    top: -25px;
  }
  22.77553398% {
    top: -25px;
  }
  22.81553398% {
    top: -50px;
  }
  24.23184466% {
    top: -50px;
  }
  24.27184466% {
    top: -75px;
  }
  26.17359223% {
    top: -75px;
  }
  26.21359223% {
    top: -100px;
  }
  27.62990291% {
    top: -100px;
  }
  27.66990291% {
    top: -125px;
  }
  29.08621359% {
    top: -125px;
  }
  29.12621359% {
    top: -150px;
  }
  30.54252427% {
    top: -150px;
  }
  30.58252427% {
    top: -175px;
  }
  32.48427184% {
    top: -175px;
  }
  32.52427184% {
    top: -200px;
  }
  33.94058252% {
    top: -200px;
  }
  33.98058252% {
    top: -225px;
  }
  35.88233009% {
    top: -225px;
  }
  35.92233009% {
    top: -250px;
  }
  37.33864077% {
    top: -250px;
  }
  37.37864077% {
    top: -275px;
  }
  39.76582524% {
    top: -275px;
  }
  39.80582524% {
    top: -300px;
  }
  46.56194174% {
    top: -300px;
  }
  46.60194174% {
    top: -325px;
  }
  48.50368931% {
    top: -325px;
  }
  48.54368931% {
    top: -350px;
  }
  49.95999999% {
    top: -350px;
  }
  49.99999999% {
    top: -375px;
  }
  51.90174756% {
    top: -375px;
  }
  51.94174756% {
    top: -400px;
  }
  53.84349513% {
    top: -400px;
  }
  53.88349513% {
    top: -425px;
  }
  54.81436892% {
    top: -425px;
  }
  54.85436892% {
    top: -450px;
  }
  56.75611649% {
    top: -450px;
  }
  56.79611649% {
    top: -475px;
  }
  58.21242717% {
    top: -475px;
  }
  58.25242717% {
    top: -500px;
  }
  59.66873785% {
    top: -500px;
  }
  59.70873785% {
    top: -525px;
  }
  61.61048542% {
    top: -525px;
  }
  61.65048542% {
    top: -550px;
  }
  63.0667961% {
    top: -550px;
  }
  63.1067961% {
    top: -575px;
  }
  64.52310678% {
    top: -575px;
  }
  64.56310678% {
    top: -600px;
  }
  66.46485435% {
    top: -600px;
  }
  66.50485435% {
    top: -625px;
  }
  67.92116503% {
    top: -625px;
  }
  67.96116503% {
    top: -650px;
  }
  69.37747571% {
    top: -650px;
  }
  69.41747571% {
    top: -675px;
  }
  71.31922328% {
    top: -675px;
  }
  71.35922328% {
    top: -700px;
  }
  72.29009707% {
    top: -700px;
  }
  72.33009707% {
    top: -725px;
  }
  74.23184464% {
    top: -725px;
  }
  74.27184464% {
    top: -750px;
  }
  75.68815532% {
    top: -750px;
  }
  75.72815532% {
    top: -775px;
  }
  77.62990289% {
    top: -775px;
  }
  77.66990289% {
    top: -800px;
  }
  78.60077668% {
    top: -800px;
  }
  78.64077668% {
    top: -825px;
  }
  79.57165047% {
    top: -825px;
  }
  79.61165047% {
    top: -850px;
  }
  80.54252426% {
    top: -850px;
  }
  80.58252426% {
    top: -875px;
  }
  81.02796115% {
    top: -875px;
  }
  81.06796115% {
    top: -900px;
  }
  81.99883494% {
    top: -900px;
  }
  82.03883494% {
    top: -925px;
  }
  82.48427183% {
    top: -925px;
  }
  82.52427183% {
    top: -950px;
  }
  83.45514562% {
    top: -950px;
  }
  83.49514562% {
    top: -975px;
  }
  83.94058251% {
    top: -975px;
  }
  83.98058251% {
    top: -1000px;
  }
  85.39689319% {
    top: -1000px;
  }
  85.43689319% {
    top: -1025px;
  }
  85.88233008% {
    top: -1025px;
  }
  85.92233008% {
    top: -1050px;
  }
  87.33864076% {
    top: -1050px;
  }
  87.37864076% {
    top: -1075px;
  }
  87.82407765% {
    top: -1075px;
  }
  87.86407765% {
    top: -1100px;
  }
  88.30951454% {
    top: -1100px;
  }
  88.34951454% {
    top: -1125px;
  }
  89.28038833% {
    top: -1125px;
  }
  89.32038833% {
    top: -1150px;
  }
  90.25126212% {
    top: -1150px;
  }
  90.29126212% {
    top: -1175px;
  }
  90.73669901% {
    top: -1175px;
  }
  90.77669901% {
    top: -1200px;
  }
  93.64932037% {
    top: -1200px;
  }
  93.68932037% {
    top: -1225px;
  }
  98.9891262% {
    top: -1225px;
  }
  99.0291262% {
    top: -1250px;
  }
  99.95999999% {
    top: -1250px;
  }
  to {
    top: -1250px;
  }
}
</style>
