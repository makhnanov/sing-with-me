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
        video_id: 'tLNOce4Y4uc',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Oh-oh (ooh, ooh)\n' +
          '(Lil Pump, Maluma, baby)\n' +
          'Mally, Mally Mall\n' +
          'Arms around you\n' +
          'Te amo mami, let me hold you\n' +
          'Wrap me arms right around you, girl, oh yeah\n' +
          'Good lovin\' got all around you\n' +
          'To make sure no one could harm you\n' +
          'Dale, mami, let me have you, ooyy\n' +
          'Yeah, she drivin\' me crazy (Yeah)\n' +
          'I take drugs on the daily (Ooh)\n' +
          'Pull out the \'Rari or the Mercedes (Which one?)\n' +
          'Yeah, she got my heart racing, racing (Yeah)\n' +
          'Foreign cars, foreign hoes\n' +
          'Yeah, we got a lot of those (Ooh)\n' +
          '10 bands on my Gucci coat (Ooh)\n' +
          'Ten hoes in the studio (Huh)\n' +
          'Guess I\'m gonna miss you though (Yuh)\n' +
          'But I got a lot of dope (Brr)\n' +
          'Spanish bitch, she love the coke (Brrt)\n' +
          'Put my dick straight down her throat\n' +
          'I know that your baby daddy broke (Broke)\n' +
          'Take your wife backstage at a festival\n' +
          'Penthouse, fifty-fourth flo\', let\'s go (Let\'s go)\n' +
          'And my hotel came with a stripper pole\n' +
          'Arms around you\n' +
          'Te amo mami, let me hold you\n' +
          'Wrap me arms right around you, girl, oh yeah (Oh)\n' +
          'Good lovin\' got all around you\n' +
          'To make sure no one could harm you\n' +
          'Dale, mami, let me have you, oh yeah\n' +
          'If you ever get to feel my touch\n' +
          'Then you might never get enough\n' +
          'Yes, I know you feel the ambiance (Ambiance, hey)\n' +
          'Love you like I\'ll never see you again\n' +
          'Only real cause I\'m not for pretend (No)\n' +
          'Reaching out with your arms extended (Yeah, yeah)\n' +
          'My love, is emergency\n' +
          'And I can sense the urgency (Ya-aah)\n' +
          'Come, let me, woah-oh-ooh\n' +
          'Your body is just for me (for me)\n' +
          'It was like sorcery\n' +
          'She left me like an alcoholic (Woah-oh-ooh)\n' +
          'Arms around you\n' +
          'Te amo mami, let me hold you\n' +
          'Wrap me arms right around you, girl, oh yeah (Oh)\n' +
          'Good lovin\' got all around you\n' +
          'To make sure no one could harm you\n' +
          'Dale, mami, let me have you, oh yeah\n' +
          'Yeah, Maluma baby (Dice)\n' +
          'Ey, mamá (Mamá), te espera un party en mi cama (Cama)\n' +
          'Me encanta la forma en que me hablas (Hablas)\n' +
          'Invita a tu amiga la buena\n' +
          'Pa\' que fumemos como fumamos en La Habana\n' +
          'Siempre andamos positivos\n' +
          'Esa es la forma en que vivo, activo\n' +
          'Que se joda quien no esté en lo mismo\n' +
          'Yo disfruto mientras siga vivo\n' +
          'Di que sí que no te cuesta\n' +
          'Si conmigo estás vestida de Chanel (Oh, yeah)\n' +
          'Hasta los pies (Oh, yeah)\n' +
          'Si tú te pones pa\'l problema\n' +
          'Yo me pongo como se tiene que ser\n' +
          'De una vez, bebé, bebé (Maluma, baby)\n' +
          'Arms around you\n' +
          'Te amo mami, let me hold you\n' +
          'Wrap me arms right around you, girl, oh yeah (Oh-ooh)\n' +
          'Good lovin\' got all around you\n' +
          'To make sure no one could harm you\n' +
          'Dale, mami, let me have you (Have you), oh yeah'
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
  top: -1725px;
  animation: move 191s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  6.76628272% {
    top: 0;
  }
  6.80628272% {
    top: -25px;
  }
  8.33696335% {
    top: -25px;
  }
  8.37696335% {
    top: -50px;
  }
  9.38408377% {
    top: -50px;
  }
  9.42408377% {
    top: -75px;
  }
  10.43120419% {
    top: -75px;
  }
  10.47120419% {
    top: -100px;
  }
  11.47832461% {
    top: -100px;
  }
  11.51832461% {
    top: -125px;
  }
  13.57256545% {
    top: -125px;
  }
  13.61256545% {
    top: -150px;
  }
  15.14324608% {
    top: -150px;
  }
  15.18324608% {
    top: -175px;
  }
  16.1903665% {
    top: -175px;
  }
  16.2303665% {
    top: -200px;
  }
  18.28460734% {
    top: -200px;
  }
  18.32460734% {
    top: -225px;
  }
  19.85528797% {
    top: -225px;
  }
  19.89528797% {
    top: -250px;
  }
  20.90240839% {
    top: -250px;
  }
  20.94240839% {
    top: -275px;
  }
  22.47308902% {
    top: -275px;
  }
  22.51308902% {
    top: -300px;
  }
  24.04376965% {
    top: -300px;
  }
  24.08376965% {
    top: -325px;
  }
  24.56732986% {
    top: -325px;
  }
  24.60732986% {
    top: -350px;
  }
  25.09089007% {
    top: -350px;
  }
  25.13089007% {
    top: -375px;
  }
  26.13801049% {
    top: -375px;
  }
  26.17801049% {
    top: -400px;
  }
  26.6615707% {
    top: -400px;
  }
  26.7015707% {
    top: -425px;
  }
  27.18513091% {
    top: -425px;
  }
  27.22513091% {
    top: -450px;
  }
  27.70869112% {
    top: -450px;
  }
  27.74869112% {
    top: -475px;
  }
  28.23225133% {
    top: -475px;
  }
  28.27225133% {
    top: -500px;
  }
  28.75581154% {
    top: -500px;
  }
  28.79581154% {
    top: -525px;
  }
  29.80293196% {
    top: -525px;
  }
  29.84293196% {
    top: -550px;
  }
  30.85005238% {
    top: -550px;
  }
  30.89005238% {
    top: -575px;
  }
  32.42073301% {
    top: -575px;
  }
  32.46073301% {
    top: -600px;
  }
  33.46785343% {
    top: -600px;
  }
  33.50785343% {
    top: -625px;
  }
  33.99141364% {
    top: -625px;
  }
  34.03141364% {
    top: -650px;
  }
  35.56209427% {
    top: -650px;
  }
  35.60209427% {
    top: -675px;
  }
  37.65633511% {
    top: -675px;
  }
  37.69633511% {
    top: -700px;
  }
  38.70345553% {
    top: -700px;
  }
  38.74345553% {
    top: -725px;
  }
  40.27413616% {
    top: -725px;
  }
  40.31413616% {
    top: -750px;
  }
  41.84481679% {
    top: -750px;
  }
  41.88481679% {
    top: -775px;
  }
  44.46261784% {
    top: -775px;
  }
  44.50261784% {
    top: -800px;
  }
  46.03329847% {
    top: -800px;
  }
  46.07329847% {
    top: -825px;
  }
  47.6039791% {
    top: -825px;
  }
  47.6439791% {
    top: -850px;
  }
  49.17465973% {
    top: -850px;
  }
  49.21465973% {
    top: -875px;
  }
  50.74534036% {
    top: -875px;
  }
  50.78534036% {
    top: -900px;
  }
  52.31602099% {
    top: -900px;
  }
  52.35602099% {
    top: -925px;
  }
  53.88670162% {
    top: -925px;
  }
  53.92670162% {
    top: -950px;
  }
  55.45738225% {
    top: -950px;
  }
  55.49738225% {
    top: -975px;
  }
  56.50450267% {
    top: -975px;
  }
  56.54450267% {
    top: -1000px;
  }
  59.12230372% {
    top: -1000px;
  }
  59.16230372% {
    top: -1025px;
  }
  60.16942414% {
    top: -1025px;
  }
  60.20942414% {
    top: -1050px;
  }
  61.74010477% {
    top: -1050px;
  }
  61.78010477% {
    top: -1075px;
  }
  62.78722519% {
    top: -1075px;
  }
  62.82722519% {
    top: -1100px;
  }
  63.83434561% {
    top: -1100px;
  }
  63.87434561% {
    top: -1125px;
  }
  66.45214666% {
    top: -1125px;
  }
  66.49214666% {
    top: -1150px;
  }
  67.49926708% {
    top: -1150px;
  }
  67.53926708% {
    top: -1175px;
  }
  69.06994771% {
    top: -1175px;
  }
  69.10994771% {
    top: -1200px;
  }
  70.64062834% {
    top: -1200px;
  }
  70.68062834% {
    top: -1225px;
  }
  71.16418855% {
    top: -1225px;
  }
  71.20418855% {
    top: -1250px;
  }
  73.7819896% {
    top: -1250px;
  }
  73.8219896% {
    top: -1275px;
  }
  74.82911002% {
    top: -1275px;
  }
  74.86911002% {
    top: -1300px;
  }
  75.87623044% {
    top: -1300px;
  }
  75.91623044% {
    top: -1325px;
  }
  76.92335086% {
    top: -1325px;
  }
  76.96335086% {
    top: -1350px;
  }
  77.97047128% {
    top: -1350px;
  }
  78.01047128% {
    top: -1375px;
  }
  79.0175917% {
    top: -1375px;
  }
  79.0575917% {
    top: -1400px;
  }
  80.06471212% {
    top: -1400px;
  }
  80.10471212% {
    top: -1425px;
  }
  81.11183254% {
    top: -1425px;
  }
  81.15183254% {
    top: -1450px;
  }
  82.68251317% {
    top: -1450px;
  }
  82.72251317% {
    top: -1475px;
  }
  84.77675401% {
    top: -1475px;
  }
  84.81675401% {
    top: -1500px;
  }
  85.82387443% {
    top: -1500px;
  }
  85.86387443% {
    top: -1525px;
  }
  86.87099485% {
    top: -1525px;
  }
  86.91099485% {
    top: -1550px;
  }
  88.96523569% {
    top: -1550px;
  }
  89.00523569% {
    top: -1575px;
  }
  91.05947653% {
    top: -1575px;
  }
  91.09947653% {
    top: -1600px;
  }
  91.58303674% {
    top: -1600px;
  }
  91.62303674% {
    top: -1625px;
  }
  92.63015716% {
    top: -1625px;
  }
  92.67015716% {
    top: -1650px;
  }
  95.24795821% {
    top: -1650px;
  }
  95.28795821% {
    top: -1675px;
  }
  96.29507863% {
    top: -1675px;
  }
  96.33507863% {
    top: -1700px;
  }
  97.86575926% {
    top: -1700px;
  }
  97.90575926% {
    top: -1725px;
  }
  99.9600001% {
    top: -1725px;
  }
  to {
    top: -1725px;
  }
}
</style>