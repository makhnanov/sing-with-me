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
        video_id: 'MEg-oqI9qmw',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Astro-naut\n' +
          'What you know about rollin\' down in the deep?\n' +
          'When your brain goes numb, you can call that mental freeze\n' +
          'When these people talk too much, put that shit in slow motion, yeah\n' +
          'I feel like an astronaut in the ocean, ayy\n' +
          'What you know about rollin\' down in the deep?\n' +
          'When your brain goes numb, you can call that mental freeze\n' +
          'When these people talk too much, put that shit in slow motion, yeah\n' +
          'I feel like an astronaut in the ocean\n' +
          'She say that I\'m cool (damn straight)\n' +
          'I\'m like "yeah, that\'s true" (that\'s true)\n' +
          'I believe in G-O-D (ayy)\n' +
          'Don\'t believe in T-H-O-T\n' +
          'She keep playing me dumb (play me)\n' +
          'I\'ma play her for fun (uh-huh)\n' +
          'Y\'all don\'t really know my mental\n' +
          'Lemme give you the picture like stencil\n' +
          'Falling out, in a drought\n' +
          'No flow, rain wasn\'t pouring down (pouring down)\n' +
          'See, that pain was all around\n' +
          'See, my mode was kinda lounged\n' +
          'Didn\'t know which-which way to turn\n' +
          'Flow was cool but I still felt burnt\n' +
          'Energy up, you can feel my surge\n' +
          'I\'ma kill everything like this purge (ayy)\n' +
          'Let\'s just get this straight for a second, I\'ma work\n' +
          'Even if I don\'t get paid for progression, I\'ma get it (get it)\n' +
          'Everything that I do is electric\n' +
          'I\'ma keep it in a motion, keep it moving like kinetic, ayy (yeah, yeah, yeah, yeah)\n' +
          'Put this shit in a frame, better know I don\'t blame\n' +
          'Everything that I say, man I seen you deflate\n' +
          'Let me elevate, this ain\'t a prank\n' +
          'Have you walkin\' on a plank, la-la-la-la-la, like\n' +
          'Both hands together, God, let me pray (now let me pray)\n' +
          'Uh, I\'ve been going right, right around, call that relay (Masked Wolf)\n' +
          'Pass the baton, back and I\'m on\n' +
          'Swimming in the pool, Kendrick Lamar, uh\n' +
          'Want a piece of this, a piece of mine, my peace a sign\n' +
          'Can you please read between the lines?\n' +
          'My rhyme\'s inclined to break your spine\n' +
          'They say that I\'m so fine\n' +
          'You could never match my grind\n' +
          'Please do not, not waste my time\n' +
          'What you know about rollin\' down in the deep?\n' +
          'When your brain goes numb, you can call that mental freeze\n' +
          'When these people talk too much, put that shit in slow motion, yeah\n' +
          'I feel like an astronaut in the ocean, ayy\n' +
          'What you know about rollin\' down in the deep?\n' +
          'When your brain goes numb, you can call that mental freeze\n' +
          'When these people talk too much, put that shit in slow motion, yeah\n' +
          'I feel like an astronaut in the ocean'
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
  animation: move 142s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  12.63605634% {
    top: 0;
  }
  12.67605634% {
    top: -25px;
  }
  20.38253521% {
    top: -25px;
  }
  20.42253521% {
    top: -50px;
  }
  23.19943662% {
    top: -50px;
  }
  23.23943662% {
    top: -75px;
  }
  26.01633803% {
    top: -75px;
  }
  26.05633803% {
    top: -100px;
  }
  28.12901409% {
    top: -100px;
  }
  28.16901409% {
    top: -125px;
  }
  30.24169015% {
    top: -125px;
  }
  30.28169015% {
    top: -150px;
  }
  32.35436621% {
    top: -150px;
  }
  32.39436621% {
    top: -175px;
  }
  34.46704227% {
    top: -175px;
  }
  34.50704227% {
    top: -200px;
  }
  36.57971833% {
    top: -200px;
  }
  36.61971833% {
    top: -225px;
  }
  37.28394368% {
    top: -225px;
  }
  37.32394368% {
    top: -250px;
  }
  38.69239438% {
    top: -250px;
  }
  38.73239438% {
    top: -275px;
  }
  40.10084508% {
    top: -275px;
  }
  40.14084508% {
    top: -300px;
  }
  41.50929578% {
    top: -300px;
  }
  41.54929578% {
    top: -325px;
  }
  42.21352113% {
    top: -325px;
  }
  42.25352113% {
    top: -350px;
  }
  43.62197183% {
    top: -350px;
  }
  43.66197183% {
    top: -375px;
  }
  44.32619718% {
    top: -375px;
  }
  44.36619718% {
    top: -400px;
  }
  45.73464788% {
    top: -400px;
  }
  45.77464788% {
    top: -425px;
  }
  46.43887323% {
    top: -425px;
  }
  46.47887323% {
    top: -450px;
  }
  47.84732393% {
    top: -450px;
  }
  47.88732393% {
    top: -475px;
  }
  49.25577463% {
    top: -475px;
  }
  49.29577463% {
    top: -500px;
  }
  49.95999998% {
    top: -500px;
  }
  49.99999998% {
    top: -525px;
  }
  51.36845068% {
    top: -525px;
  }
  51.40845068% {
    top: -550px;
  }
  52.07267603% {
    top: -550px;
  }
  52.11267603% {
    top: -575px;
  }
  53.48112673% {
    top: -575px;
  }
  53.52112673% {
    top: -600px;
  }
  54.88957743% {
    top: -600px;
  }
  54.92957743% {
    top: -625px;
  }
  57.00225349% {
    top: -625px;
  }
  57.04225349% {
    top: -650px;
  }
  59.11492955% {
    top: -650px;
  }
  59.15492955% {
    top: -675px;
  }
  61.22760561% {
    top: -675px;
  }
  61.26760561% {
    top: -700px;
  }
  63.34028167% {
    top: -700px;
  }
  63.38028167% {
    top: -725px;
  }
  64.74873237% {
    top: -725px;
  }
  64.78873237% {
    top: -750px;
  }
  66.15718307% {
    top: -750px;
  }
  66.19718307% {
    top: -775px;
  }
  66.86140842% {
    top: -775px;
  }
  66.90140842% {
    top: -800px;
  }
  68.26985912% {
    top: -800px;
  }
  68.30985912% {
    top: -825px;
  }
  69.67830982% {
    top: -825px;
  }
  69.71830982% {
    top: -850px;
  }
  72.49521123% {
    top: -850px;
  }
  72.53521123% {
    top: -875px;
  }
  73.19943658% {
    top: -875px;
  }
  73.23943658% {
    top: -900px;
  }
  74.60788728% {
    top: -900px;
  }
  74.64788728% {
    top: -925px;
  }
  76.01633798% {
    top: -925px;
  }
  76.05633798% {
    top: -950px;
  }
  76.72056333% {
    top: -950px;
  }
  76.76056333% {
    top: -975px;
  }
  78.12901403% {
    top: -975px;
  }
  78.16901403% {
    top: -1000px;
  }
  79.53746473% {
    top: -1000px;
  }
  79.57746473% {
    top: -1025px;
  }
  80.24169008% {
    top: -1025px;
  }
  80.28169008% {
    top: -1050px;
  }
  81.65014078% {
    top: -1050px;
  }
  81.69014078% {
    top: -1075px;
  }
  83.76281684% {
    top: -1075px;
  }
  83.80281684% {
    top: -1100px;
  }
  86.57971825% {
    top: -1100px;
  }
  86.61971825% {
    top: -1125px;
  }
  88.69239431% {
    top: -1125px;
  }
  88.73239431% {
    top: -1150px;
  }
  90.80507037% {
    top: -1150px;
  }
  90.84507037% {
    top: -1175px;
  }
  92.91774643% {
    top: -1175px;
  }
  92.95774643% {
    top: -1200px;
  }
  95.03042249% {
    top: -1200px;
  }
  95.07042249% {
    top: -1225px;
  }
  97.8473239% {
    top: -1225px;
  }
  97.8873239% {
    top: -1250px;
  }
  99.95999996% {
    top: -1250px;
  }
  to {
    top: -1250px;
  }
}
</style>