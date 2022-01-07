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
        video_id: 'kJQP7kiw5Fk',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Ay\n' +
          'Fonsi\n' +
          'DY\n' +
          'Oh-oh\n' +
          'Oh no, oh no (oh)\n' +
          'Hey yeah\n' +
          'Diridiri, dirididi Daddy\n' +
          'Go\n' +
          'Sí, sabes que ya llevo un rato mirándote\n' +
          'Tengo que bailar contigo hoy (DY)\n' +
          'Vi que tu mirada ya estaba llamándome\n' +
          'Muéstrame el camino que yo voy\n' +
          'Oh\n' +
          'Tú, tú eres el imán y yo soy el metal\n' +
          'Me voy acercando y voy armando el plan\n' +
          'Solo con pensarlo se acelera el pulso\n' +
          'Oh yeah\n' +
          'Ya, ya me está gustando más de lo normal\n' +
          'Todos mis sentidos van pidiendo más\n' +
          'Esto hay que tomarlo sin ningún apuro\n' +
          'Despacito\n' +
          'Quiero respirar tu cuello despacito\n' +
          'Deja que te diga cosas al oído\n' +
          'Para que te acuerdes si no estás conmigo\n' +
          'Despacito\n' +
          'Quiero desnudarte a besos despacito\n' +
          'Firmar las paredes de tu laberinto\n' +
          'Y hacer de tu cuerpo todo un manuscrito (sube, sube, sube)\n' +
          '(Sube, sube) Oh\n' +
          'Quiero ver bailar tu pelo\n' +
          'Quiero ser tu ritmo (eh-oh) (uh-oh, uh-oh)\n' +
          'Que le enseñes a mi boca (eh-oh) (uh-oh, uh-oh)\n' +
          'Tus lugares favoritos (eh-oh) (favoritos, favoritos baby)\n' +
          'Déjame sobrepasar\n' +
          'Tus zonas de peligro (eh-oh) (uh-oh, uh-oh)\n' +
          'Hasta provocar tus gritos (uh-oh, uh-oh)\n' +
          'Y que olvides tu apellido (diridiri, dirididi Daddy)\n' +
          'Yo sé que estás pensándolo (yeh)\n' +
          'Llevo tiempo intentándolo (yeh)\n' +
          'Mami, esto es dando y dándolo\n' +
          'Sabes que tu corazón conmigo te hace bam bam\n' +
          'Sabe que esa beba \'tá buscando de mi bam bam\n' +
          'Ven prueba de mi boca para ver cómo te sabe (eh-eh)\n' +
          'Quiero, quiero, quiero ver cuánto amor a ti te cabe\n' +
          'Yo no tengo prisa, yo me quiero dar el viaje\n' +
          'Empezamo\' lento, después salvaje\n' +
          'Pasito a pasito, suave suavecito\n' +
          'Nos vamos pegando poquito a poquito\n' +
          'Cuando tú me besas con esa destreza\n' +
          'Veo que eres malicia con delicadeza\n' +
          'Pasito a pasito, suave suavecito\n' +
          'Nos vamos pegando, poquito a poquito (oh oh)\n' +
          'Y es que esa belleza es un rompecabezas (oh no)\n' +
          'Pero pa montarlo aquí tengo la pieza (slow, oh yeah)\n' +
          'Despacito (yeh, go)\n' +
          'Quiero respirar tu cuello despacito (yeh)\n' +
          'Deja que te diga cosas al oído (yeh)\n' +
          'Para que te acuerdes si no estás conmigo\n' +
          'Despacito\n' +
          'Quiero desnudarte a besos despacito (yeh)\n' +
          'Firmar las paredes de tu laberinto\n' +
          'Y hacer de tu cuerpo todo un manuscrito (sube, sube, sube)\n' +
          '(Sube, sube) Oh\n' +
          'Quiero ver bailar tu pelo\n' +
          'Quiero ser tu ritmo (eh-oh) (uh-oh, uh-oh)\n' +
          'Que le enseñes a mi boca (eh-oh) (uh-oh, uh-oh)\n' +
          'Tus lugares favoritos (eh-oh) (favoritos, favoritos baby)\n' +
          'Déjame sobrepasar\n' +
          'Tus zonas de peligro (eh-oh) (uh-oh, uh-oh)\n' +
          'Hasta provocar tus gritos (uh-oh, uh-oh)\n' +
          'Y que olvides tu apellido (eh-oh)\n' +
          'Despacito\n' +
          'Vamo\' a hacerlo en una playa en Puerto Rico\n' +
          'Hasta que las olas griten "Ay, bendito"\n' +
          'Para que mi sello se quede contigo (báilalo)\n' +
          'Pasito a pasito, suave suavecito (hey yeah, yeah)\n' +
          'Nos vamos pegando, poquito a poquito (oh no)\n' +
          'Que le enseñes a mi boca (eh-oh) (uh-oh, uh-oh)\n' +
          'Tus lugares favoritos (eh-oh) (favoritos, favoritos baby)\n' +
          'Pasito a pasito, suave suavecito\n' +
          'Nos vamos pegando, poquito a poquito (eh-oh)\n' +
          'Hasta provocar tus gritos (eh-oh) (Fonsi)\n' +
          'Y que olvides tu apellido (DY)\n' +
          'Despacito'
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
  top: -2075px;
  animation: move 248s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  11.65354839% {
    top: 0;
  }
  11.69354839% {
    top: -25px;
  }
  12.0567742% {
    top: -25px;
  }
  12.0967742% {
    top: -50px;
  }
  12.46000001% {
    top: -50px;
  }
  12.50000001% {
    top: -75px;
  }
  13.66967743% {
    top: -75px;
  }
  13.70967743% {
    top: -100px;
  }
  14.87935485% {
    top: -100px;
  }
  14.91935485% {
    top: -125px;
  }
  15.28258066% {
    top: -125px;
  }
  15.32258066% {
    top: -150px;
  }
  16.08903227% {
    top: -150px;
  }
  16.12903227% {
    top: -175px;
  }
  16.49225808% {
    top: -175px;
  }
  16.53225808% {
    top: -200px;
  }
  18.50838711% {
    top: -200px;
  }
  18.54838711% {
    top: -225px;
  }
  20.12129034% {
    top: -225px;
  }
  20.16129034% {
    top: -250px;
  }
  22.94387099% {
    top: -250px;
  }
  22.98387099% {
    top: -275px;
  }
  24.55677422% {
    top: -275px;
  }
  24.59677422% {
    top: -300px;
  }
  24.96000003% {
    top: -300px;
  }
  25.00000003% {
    top: -325px;
  }
  26.57290326% {
    top: -325px;
  }
  26.61290326% {
    top: -350px;
  }
  27.37935487% {
    top: -350px;
  }
  27.41935487% {
    top: -375px;
  }
  28.9922581% {
    top: -375px;
  }
  29.0322581% {
    top: -400px;
  }
  29.39548391% {
    top: -400px;
  }
  29.43548391% {
    top: -425px;
  }
  31.00838714% {
    top: -425px;
  }
  31.04838714% {
    top: -450px;
  }
  31.81483875% {
    top: -450px;
  }
  31.85483875% {
    top: -475px;
  }
  33.42774198% {
    top: -475px;
  }
  33.46774198% {
    top: -500px;
  }
  34.23419359% {
    top: -500px;
  }
  34.27419359% {
    top: -525px;
  }
  35.44387101% {
    top: -525px;
  }
  35.48387101% {
    top: -550px;
  }
  36.65354843% {
    top: -550px;
  }
  36.69354843% {
    top: -575px;
  }
  37.86322585% {
    top: -575px;
  }
  37.90322585% {
    top: -600px;
  }
  38.66967746% {
    top: -600px;
  }
  38.70967746% {
    top: -625px;
  }
  39.87935488% {
    top: -625px;
  }
  39.91935488% {
    top: -650px;
  }
  40.68580649% {
    top: -650px;
  }
  40.72580649% {
    top: -675px;
  }
  42.29870972% {
    top: -675px;
  }
  42.33870972% {
    top: -700px;
  }
  42.70193553% {
    top: -700px;
  }
  42.74193553% {
    top: -725px;
  }
  43.50838714% {
    top: -725px;
  }
  43.54838714% {
    top: -750px;
  }
  44.31483875% {
    top: -750px;
  }
  44.35483875% {
    top: -775px;
  }
  45.12129036% {
    top: -775px;
  }
  45.16129036% {
    top: -800px;
  }
  47.13741939% {
    top: -800px;
  }
  47.17741939% {
    top: -825px;
  }
  47.943871% {
    top: -825px;
  }
  47.983871% {
    top: -850px;
  }
  48.75032261% {
    top: -850px;
  }
  48.79032261% {
    top: -875px;
  }
  49.55677422% {
    top: -875px;
  }
  49.59677422% {
    top: -900px;
  }
  50.76645164% {
    top: -900px;
  }
  50.80645164% {
    top: -925px;
  }
  51.57290325% {
    top: -925px;
  }
  51.61290325% {
    top: -950px;
  }
  52.37935486% {
    top: -950px;
  }
  52.41935486% {
    top: -975px;
  }
  53.18580647% {
    top: -975px;
  }
  53.22580647% {
    top: -1000px;
  }
  54.39548389% {
    top: -1000px;
  }
  54.43548389% {
    top: -1025px;
  }
  55.60516131% {
    top: -1025px;
  }
  55.64516131% {
    top: -1050px;
  }
  56.41161292% {
    top: -1050px;
  }
  56.45161292% {
    top: -1075px;
  }
  57.62129034% {
    top: -1075px;
  }
  57.66129034% {
    top: -1100px;
  }
  58.83096776% {
    top: -1100px;
  }
  58.87096776% {
    top: -1125px;
  }
  60.04064518% {
    top: -1125px;
  }
  60.08064518% {
    top: -1150px;
  }
  60.84709679% {
    top: -1150px;
  }
  60.88709679% {
    top: -1175px;
  }
  62.05677421% {
    top: -1175px;
  }
  62.09677421% {
    top: -1200px;
  }
  63.26645163% {
    top: -1200px;
  }
  63.30645163% {
    top: -1225px;
  }
  64.07290324% {
    top: -1225px;
  }
  64.11290324% {
    top: -1250px;
  }
  65.28258066% {
    top: -1250px;
  }
  65.32258066% {
    top: -1275px;
  }
  66.49225808% {
    top: -1275px;
  }
  66.53225808% {
    top: -1300px;
  }
  67.29870969% {
    top: -1300px;
  }
  67.33870969% {
    top: -1325px;
  }
  68.50838711% {
    top: -1325px;
  }
  68.54838711% {
    top: -1350px;
  }
  69.71806453% {
    top: -1350px;
  }
  69.75806453% {
    top: -1375px;
  }
  70.92774195% {
    top: -1375px;
  }
  70.96774195% {
    top: -1400px;
  }
  71.73419356% {
    top: -1400px;
  }
  71.77419356% {
    top: -1425px;
  }
  72.94387098% {
    top: -1425px;
  }
  72.98387098% {
    top: -1450px;
  }
  74.1535484% {
    top: -1450px;
  }
  74.1935484% {
    top: -1475px;
  }
  74.96000001% {
    top: -1475px;
  }
  75.00000001% {
    top: -1500px;
  }
  76.16967743% {
    top: -1500px;
  }
  76.20967743% {
    top: -1525px;
  }
  77.78258066% {
    top: -1525px;
  }
  77.82258066% {
    top: -1550px;
  }
  78.18580647% {
    top: -1550px;
  }
  78.22580647% {
    top: -1575px;
  }
  78.99225808% {
    top: -1575px;
  }
  79.03225808% {
    top: -1600px;
  }
  79.79870969% {
    top: -1600px;
  }
  79.83870969% {
    top: -1625px;
  }
  80.6051613% {
    top: -1625px;
  }
  80.6451613% {
    top: -1650px;
  }
  82.21806453% {
    top: -1650px;
  }
  82.25806453% {
    top: -1675px;
  }
  83.02451614% {
    top: -1675px;
  }
  83.06451614% {
    top: -1700px;
  }
  83.83096775% {
    top: -1700px;
  }
  83.87096775% {
    top: -1725px;
  }
  85.04064517% {
    top: -1725px;
  }
  85.08064517% {
    top: -1750px;
  }
  86.25032259% {
    top: -1750px;
  }
  86.29032259% {
    top: -1775px;
  }
  87.0567742% {
    top: -1775px;
  }
  87.0967742% {
    top: -1800px;
  }
  88.26645162% {
    top: -1800px;
  }
  88.30645162% {
    top: -1825px;
  }
  89.07290323% {
    top: -1825px;
  }
  89.11290323% {
    top: -1850px;
  }
  90.28258065% {
    top: -1850px;
  }
  90.32258065% {
    top: -1875px;
  }
  91.89548388% {
    top: -1875px;
  }
  91.93548388% {
    top: -1900px;
  }
  93.1051613% {
    top: -1900px;
  }
  93.1451613% {
    top: -1925px;
  }
  93.50838711% {
    top: -1925px;
  }
  93.54838711% {
    top: -1950px;
  }
  94.71806453% {
    top: -1950px;
  }
  94.75806453% {
    top: -1975px;
  }
  96.33096776% {
    top: -1975px;
  }
  96.37096776% {
    top: -2000px;
  }
  97.54064518% {
    top: -2000px;
  }
  97.58064518% {
    top: -2025px;
  }
  97.94387099% {
    top: -2025px;
  }
  97.98387099% {
    top: -2050px;
  }
  99.15354841% {
    top: -2050px;
  }
  99.19354841% {
    top: -2075px;
  }
  99.96000002% {
    top: -2075px;
  }
  to {
    top: -2075px;
  }
}
</style>