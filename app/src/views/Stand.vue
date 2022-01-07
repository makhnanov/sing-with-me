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
      temp: {
        video_id:"Y96WY5Do_bs",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id:"Y96WY5Do_bs",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'One more depending on a prayer\n' +
          'And we all look away\n' +
          'People pretending everywhere\n' +
          'It\'s just another day\n' +
          'There\'s bullets flying through the air\n' +
          'And they still carry on\n' +
          'We watch it happen over there\n' +
          'And then just turn it off\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'We must stand together\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'There\'s no giving in\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'A hand in hand forever\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'That\'s when we all win\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'That\'s, that\'s, that\'s when we all win\n' +
          'That\'s, that\'s, that\'s when we all win\n' +
          'They tell us everything\'s alright\n' +
          'And we just go along\n' +
          'How can we fall asleep at night\n' +
          'When something\'s clearly wrong?\n' +
          'When we could feed a starving world\n' +
          'With what we throw away\n' +
          'But all we serve are empty words\n' +
          'That always taste the same\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'We must stand together\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'There\'s no giving in\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'A hand in hand forever\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'That\'s when we all win\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'That\'s, that\'s, that\'s when we all win\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'That\'s, that\'s, that\'s when we all win\n' +
          'The right thing to guide us\n' +
          'Is right here inside us\n' +
          'No one can divide us\n' +
          'When the light is nearly gone\n' +
          'But just like a heartbeat\n' +
          'The drumbeat carries on\n' +
          'And the drumbeat carries on\n' +
          '(Just like a heart beat)\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'We must stand together\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'There\'s no giving in\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'A hand in hand forever\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'That\'s when we all win\n' +
          'Hey, yeah, yeah, hey, yeah\n' +
          'That\'s, that\'s, that\'s when we all win\n' +
          'That\'s, that\'s, that\'s when we all win'

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

  top: -1425px;
  animation: move 181s linear alternate;
}

@keyframes move {
  from {
    top: 0;
  }
  9.90475138% {
    top: 0;
  }
  9.94475138% {
    top: -25px;
  }
  11.00972376% {
    top: -25px;
  }
  11.04972376% {
    top: -50px;
  }
  12.66718232% {
    top: -50px;
  }
  12.70718232% {
    top: -75px;
  }
  13.7721547% {
    top: -75px;
  }
  13.8121547% {
    top: -100px;
  }
  15.42961326% {
    top: -100px;
  }
  15.46961326% {
    top: -125px;
  }
  16.53458564% {
    top: -125px;
  }
  16.57458564% {
    top: -150px;
  }
  18.1920442% {
    top: -150px;
  }
  18.2320442% {
    top: -175px;
  }
  19.29701658% {
    top: -175px;
  }
  19.33701658% {
    top: -200px;
  }
  20.95447514% {
    top: -200px;
  }
  20.99447514% {
    top: -225px;
  }
  22.6119337% {
    top: -225px;
  }
  22.6519337% {
    top: -250px;
  }
  23.71690608% {
    top: -250px;
  }
  23.75690608% {
    top: -275px;
  }
  25.37436464% {
    top: -275px;
  }
  25.41436464% {
    top: -300px;
  }
  26.47933702% {
    top: -300px;
  }
  26.51933702% {
    top: -325px;
  }
  28.13679558% {
    top: -325px;
  }
  28.17679558% {
    top: -350px;
  }
  29.79425414% {
    top: -350px;
  }
  29.83425414% {
    top: -375px;
  }
  30.89922652% {
    top: -375px;
  }
  30.93922652% {
    top: -400px;
  }
  32.55668508% {
    top: -400px;
  }
  32.59668508% {
    top: -425px;
  }
  34.21414364% {
    top: -425px;
  }
  34.25414364% {
    top: -450px;
  }
  36.97657458% {
    top: -450px;
  }
  37.01657458% {
    top: -475px;
  }
  40.84397789% {
    top: -475px;
  }
  40.88397789% {
    top: -500px;
  }
  41.94895027% {
    top: -500px;
  }
  41.98895027% {
    top: -525px;
  }
  43.60640883% {
    top: -525px;
  }
  43.64640883% {
    top: -550px;
  }
  44.71138121% {
    top: -550px;
  }
  44.75138121% {
    top: -575px;
  }
  46.92132596% {
    top: -575px;
  }
  46.96132596% {
    top: -600px;
  }
  48.02629834% {
    top: -600px;
  }
  48.06629834% {
    top: -625px;
  }
  49.6837569% {
    top: -625px;
  }
  49.7237569% {
    top: -650px;
  }
  50.78872928% {
    top: -650px;
  }
  50.82872928% {
    top: -675px;
  }
  51.89370166% {
    top: -675px;
  }
  51.93370166% {
    top: -700px;
  }
  54.10364641% {
    top: -700px;
  }
  54.14364641% {
    top: -725px;
  }
  54.6561326% {
    top: -725px;
  }
  54.6961326% {
    top: -750px;
  }
  56.31359116% {
    top: -750px;
  }
  56.35359116% {
    top: -775px;
  }
  57.97104972% {
    top: -775px;
  }
  58.01104972% {
    top: -800px;
  }
  59.0760221% {
    top: -800px;
  }
  59.1160221% {
    top: -825px;
  }
  60.73348066% {
    top: -825px;
  }
  60.77348066% {
    top: -850px;
  }
  62.39093922% {
    top: -850px;
  }
  62.43093922% {
    top: -875px;
  }
  63.4959116% {
    top: -875px;
  }
  63.5359116% {
    top: -900px;
  }
  65.15337016% {
    top: -900px;
  }
  65.19337016% {
    top: -925px;
  }
  66.25834254% {
    top: -925px;
  }
  66.29834254% {
    top: -950px;
  }
  67.9158011% {
    top: -950px;
  }
  67.9558011% {
    top: -975px;
  }
  69.02077348% {
    top: -975px;
  }
  69.06077348% {
    top: -1000px;
  }
  70.67823204% {
    top: -1000px;
  }
  70.71823204% {
    top: -1025px;
  }
  71.78320442% {
    top: -1025px;
  }
  71.82320442% {
    top: -1050px;
  }
  73.44066298% {
    top: -1050px;
  }
  73.48066298% {
    top: -1075px;
  }
  75.09812154% {
    top: -1075px;
  }
  75.13812154% {
    top: -1100px;
  }
  76.20309392% {
    top: -1100px;
  }
  76.24309392% {
    top: -1125px;
  }
  78.96552486% {
    top: -1125px;
  }
  79.00552486% {
    top: -1150px;
  }
  80.62298342% {
    top: -1150px;
  }
  80.66298342% {
    top: -1175px;
  }
  83.93790055% {
    top: -1175px;
  }
  83.97790055% {
    top: -1200px;
  }
  85.59535911% {
    top: -1200px;
  }
  85.63535911% {
    top: -1225px;
  }
  86.70033149% {
    top: -1225px;
  }
  86.74033149% {
    top: -1250px;
  }
  88.35779005% {
    top: -1250px;
  }
  88.39779005% {
    top: -1275px;
  }
  89.46276243% {
    top: -1275px;
  }
  89.50276243% {
    top: -1300px;
  }
  91.12022099% {
    top: -1300px;
  }
  91.16022099% {
    top: -1325px;
  }
  92.22519337% {
    top: -1325px;
  }
  92.26519337% {
    top: -1350px;
  }
  93.88265193% {
    top: -1350px;
  }
  93.92265193% {
    top: -1375px;
  }
  94.98762431% {
    top: -1375px;
  }
  95.02762431% {
    top: -1400px;
  }
  97.19756906% {
    top: -1400px;
  }
  97.23756906% {
    top: -1425px;
  }
  99.96% {
    top: -1425px;
  }
  to {
    top: -1425px;
  }
}
</style>
