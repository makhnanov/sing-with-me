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
        video_id: 'vNoKguSdy4Y',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I think - I think when it\'s all over,\n' +
          'It just comes back in flashes, you know?\n' +
          'It\'s like a kaleidoscope of memories.\n' +
          'It just all comes back. But he never does.\n' +
          'I think part of me knew the second I saw him\n' +
          'that this would happen.\n' +
          'It\'s not really anything he said or anything he did,\n' +
          'It was the feeling that came along with it.\n' +
          'And the crazy thing is\n' +
          'I don\'t know if I\'m ever gonna feel that way again.\n' +
          'But I don\'t know if I should.\n' +
          'I knew his world moved too fast and burned too bright.\n' +
          'But I just thought,\n' +
          'how can the devil be pulling you toward someone\n' +
          'who looks so much like an angel when he smiles at you?\n' +
          'Maybe he knew that when he saw me.\n' +
          'I guess I just lost my balance.\n' +
          'I think that the worst part of it all wasn\'t losing him.\n' +
          'It was losing me.\n' +
          'Once upon a time a few mistakes ago\n' +
          'I was in your sights, you got me alone\n' +
          'You found me, you found me, you found me\n' +
          'I guess you didn\'t care, and I guess I liked that\n' +
          'And when I fell hard you took a step back\n' +
          'Without me, without me, without me\n' +
          'And he\'s long gone when he\'s next to me\n' +
          'And I realize the blame is on me\n' +
          '\'Cause I knew you were trouble when you walked in\n' +
          'So shame on me now\n' +
          'Flew me to places I\'d never been\n' +
          '\'Til you put me down, oh\n' +
          'I knew you were trouble when you walked in\n' +
          'So shame on me now\n' +
          'Flew me to places I\'d never been\n' +
          'Now I\'m lying on the cold hard ground\n' +
          'Oh, oh, trouble, trouble, trouble\n' +
          'Oh, oh, trouble, trouble, trouble\n' +
          'No apologies. He\'ll never see you cry,\n' +
          'Pretends he doesn\'t know that he\'s the reason why\n' +
          'You\'re drowning, you\'re drowning, you\'re drowning\n' +
          'Now I heard you moved on from whispers on the street\n' +
          'A new notch in your belt is all I\'ll ever be\n' +
          'And now I see, now I see, now I see\n' +
          'He was long gone when he met me\n' +
          'And I realize the joke is on me, yeah!\n' +
          'I knew you were trouble when you walked in\n' +
          'So shame on me now\n' +
          'Flew me to places I\'d never been\n' +
          '\'Til you put me down, oh\n' +
          'I knew you were trouble when you walked in\n' +
          'So shame on me now\n' +
          'Flew me to places I\'d never been\n' +
          'Now I\'m lying on the cold hard ground\n' +
          'Oh, oh, trouble, trouble, trouble\n' +
          'Oh, oh, trouble, trouble, trouble\n' +
          'And the saddest fear comes creeping in\n' +
          'That you never loved me or her, or anyone, or anything, yeah\n' +
          'I knew you were trouble when you walked in\n' +
          'So shame on me now\n' +
          'Flew me to places I\'d never been\n' +
          '\'Til you put me down, oh\n' +
          'I knew you were trouble when you walked in\n' +
          '(you were right there, you were right there)\n' +
          'So shame on me now\n' +
          'Flew me to places I\'d never been\n' +
          'Now I\'m lying on the cold hard ground\n' +
          'Oh, oh, trouble, trouble, trouble\n' +
          'Oh, oh, trouble, trouble, trouble\n' +
          'I knew you were trouble when you walked in\n' +
          'Trouble, trouble, trouble\n' +
          'I knew you were trouble when you walked in\n' +
          'Trouble, trouble, trouble\n' +
          'I don\'t know if you know who you are\n' +
          'until you lose who you are.'
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
  top: -1825px;
  animation: move 386s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  7.99108808% {
    top: 0;
  }
  8.03108808% {
    top: -25px;
  }
  8.76829015% {
    top: -25px;
  }
  8.80829015% {
    top: -50px;
  }
  9.54549222% {
    top: -50px;
  }
  9.58549222% {
    top: -75px;
  }
  11.09989637% {
    top: -75px;
  }
  11.13989637% {
    top: -100px;
  }
  12.65430052% {
    top: -100px;
  }
  12.69430052% {
    top: -125px;
  }
  12.91336788% {
    top: -125px;
  }
  12.95336788% {
    top: -150px;
  }
  14.72683938% {
    top: -150px;
  }
  14.76683938% {
    top: -175px;
  }
  15.76310881% {
    top: -175px;
  }
  15.80310881% {
    top: -200px;
  }
  16.79937824% {
    top: -200px;
  }
  16.83937824% {
    top: -225px;
  }
  17.57658031% {
    top: -225px;
  }
  17.61658031% {
    top: -250px;
  }
  18.35378238% {
    top: -250px;
  }
  18.39378238% {
    top: -275px;
  }
  21.72165803% {
    top: -275px;
  }
  21.76165803% {
    top: -300px;
  }
  22.23979275% {
    top: -300px;
  }
  22.27979275% {
    top: -325px;
  }
  23.7941969% {
    top: -325px;
  }
  23.8341969% {
    top: -350px;
  }
  25.08953369% {
    top: -350px;
  }
  25.12953369% {
    top: -375px;
  }
  27.68020727% {
    top: -375px;
  }
  27.72020727% {
    top: -400px;
  }
  29.23461142% {
    top: -400px;
  }
  29.27461142% {
    top: -425px;
  }
  30.78901557% {
    top: -425px;
  }
  30.82901557% {
    top: -450px;
  }
  31.56621764% {
    top: -450px;
  }
  31.60621764% {
    top: -475px;
  }
  33.37968914% {
    top: -475px;
  }
  33.41968914% {
    top: -500px;
  }
  34.15689121% {
    top: -500px;
  }
  34.19689121% {
    top: -525px;
  }
  35.19316064% {
    top: -525px;
  }
  35.23316064% {
    top: -550px;
  }
  36.48849743% {
    top: -550px;
  }
  36.52849743% {
    top: -575px;
  }
  37.2656995% {
    top: -575px;
  }
  37.3056995% {
    top: -600px;
  }
  38.56103629% {
    top: -600px;
  }
  38.60103629% {
    top: -625px;
  }
  40.89264251% {
    top: -625px;
  }
  40.93264251% {
    top: -650px;
  }
  41.92891194% {
    top: -650px;
  }
  41.96891194% {
    top: -675px;
  }
  43.22424873% {
    top: -675px;
  }
  43.26424873% {
    top: -700px;
  }
  43.74238345% {
    top: -700px;
  }
  43.78238345% {
    top: -725px;
  }
  44.77865288% {
    top: -725px;
  }
  44.81865288% {
    top: -750px;
  }
  45.55585495% {
    top: -750px;
  }
  45.59585495% {
    top: -775px;
  }
  46.33305702% {
    top: -775px;
  }
  46.37305702% {
    top: -800px;
  }
  47.11025909% {
    top: -800px;
  }
  47.15025909% {
    top: -825px;
  }
  48.14652852% {
    top: -825px;
  }
  48.18652852% {
    top: -850px;
  }
  48.92373059% {
    top: -850px;
  }
  48.96373059% {
    top: -875px;
  }
  50.47813474% {
    top: -875px;
  }
  50.51813474% {
    top: -900px;
  }
  51.77347153% {
    top: -900px;
  }
  51.81347153% {
    top: -925px;
  }
  52.5506736% {
    top: -925px;
  }
  52.5906736% {
    top: -950px;
  }
  53.58694303% {
    top: -950px;
  }
  53.62694303% {
    top: -975px;
  }
  54.62321246% {
    top: -975px;
  }
  54.66321246% {
    top: -1000px;
  }
  55.91854925% {
    top: -1000px;
  }
  55.95854925% {
    top: -1025px;
  }
  56.69575132% {
    top: -1025px;
  }
  56.73575132% {
    top: -1050px;
  }
  57.99108811% {
    top: -1050px;
  }
  58.03108811% {
    top: -1075px;
  }
  60.06362697% {
    top: -1075px;
  }
  60.10362697% {
    top: -1100px;
  }
  61.61803112% {
    top: -1100px;
  }
  61.65803112% {
    top: -1125px;
  }
  62.65430055% {
    top: -1125px;
  }
  62.69430055% {
    top: -1150px;
  }
  63.17243527% {
    top: -1150px;
  }
  63.21243527% {
    top: -1175px;
  }
  64.2087047% {
    top: -1175px;
  }
  64.2487047% {
    top: -1200px;
  }
  64.98590677% {
    top: -1200px;
  }
  65.02590677% {
    top: -1225px;
  }
  65.76310884% {
    top: -1225px;
  }
  65.80310884% {
    top: -1250px;
  }
  66.54031091% {
    top: -1250px;
  }
  66.58031091% {
    top: -1275px;
  }
  67.57658034% {
    top: -1275px;
  }
  67.61658034% {
    top: -1300px;
  }
  68.35378241% {
    top: -1300px;
  }
  68.39378241% {
    top: -1325px;
  }
  69.6491192% {
    top: -1325px;
  }
  69.6891192% {
    top: -1350px;
  }
  71.20352335% {
    top: -1350px;
  }
  71.24352335% {
    top: -1375px;
  }
  72.49886014% {
    top: -1375px;
  }
  72.53886014% {
    top: -1400px;
  }
  74.83046636% {
    top: -1400px;
  }
  74.87046636% {
    top: -1425px;
  }
  76.12580315% {
    top: -1425px;
  }
  76.16580315% {
    top: -1450px;
  }
  76.64393787% {
    top: -1450px;
  }
  76.68393787% {
    top: -1475px;
  }
  77.6802073% {
    top: -1475px;
  }
  77.7202073% {
    top: -1500px;
  }
  78.19834202% {
    top: -1500px;
  }
  78.23834202% {
    top: -1525px;
  }
  78.97554409% {
    top: -1525px;
  }
  79.01554409% {
    top: -1550px;
  }
  79.23461145% {
    top: -1550px;
  }
  79.27461145% {
    top: -1575px;
  }
  79.75274617% {
    top: -1575px;
  }
  79.79274617% {
    top: -1600px;
  }
  80.7890156% {
    top: -1600px;
  }
  80.8290156% {
    top: -1625px;
  }
  81.56621767% {
    top: -1625px;
  }
  81.60621767% {
    top: -1650px;
  }
  82.86155446% {
    top: -1650px;
  }
  82.90155446% {
    top: -1675px;
  }
  84.67502596% {
    top: -1675px;
  }
  84.71502596% {
    top: -1700px;
  }
  85.71129539% {
    top: -1700px;
  }
  85.75129539% {
    top: -1725px;
  }
  86.22943011% {
    top: -1725px;
  }
  86.26943011% {
    top: -1750px;
  }
  87.26569954% {
    top: -1750px;
  }
  87.30569954% {
    top: -1775px;
  }
  87.78383426% {
    top: -1775px;
  }
  87.82383426% {
    top: -1800px;
  }
  88.82010369% {
    top: -1800px;
  }
  88.86010369% {
    top: -1825px;
  }
  99.96000006% {
    top: -1825px;
  }
  to {
    top: -1825px;
  }
}
</style>