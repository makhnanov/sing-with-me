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
        video_id: 'WO9ewCO7TYI',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id: 'WO9ewCO7TYI',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I was alone, falling free\n' +
          'Trying my best not to forget\n' +
          'What happened to us, what happened to me\n' +
          'What happened as I let it slip\n' +
          'I was confused by the powers that be\n' +
          'Forgetting names and faces\n' +
          'Passers by were looking at me\n' +
          'As if they could erase it\n' +
          'Baby, did you forget to take your meds?\n' +
          'Baby, did you forget to take your meds?\n' +
          'I was alone staring over the ledge\n' +
          'Trying my best not to forget\n' +
          'All manner of joy, all manner of glee\n' +
          'And our one heroic pledge\n' +
          'How it mattered to us, how it mattered to me\n' +
          'And the consequences\n' +
          'I was confused by the birds and the bees\n' +
          'Forgetting if I meant it\n' +
          'Baby, did you forget to take your meds?\n' +
          'Baby, did you forget to take your meds?\n' +
          'Baby, did you forget to take your meds?\n' +
          'Baby, did you forget to take your meds?\n' +
          'All the sex all the drugs all the complications\n' +
          'All the sex all the drugs all the complications\n' +
          'All the sex all the drugs all the complications\n' +
          'All the sex all the drugs all the complications\n' +
          'Baby did you forget to take your meds?!\n' +
          'Baby did you forget to take your meds?!\n' +
          'Baby did you forget to take your meds?!\n' +
          'Baby did you forget to take your meds?!\n' +
          'Baby did you forget to take your meds?!\n' +
          'Baby did you forget to take your meds?!\n' +
          'I was alone falling free\n' +
          'Trying my best not to forget'
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

  top: -825px;
  animation: move 170s linear alternate;
}

@keyframes move {
  from {
    top: 0;
  }
  9.96% {
    top: 0;
  }
  10% {
    top: -25px;
  }
  11.72470588% {
    top: -25px;
  }
  11.76470588% {
    top: -50px;
  }
  13.48941176% {
    top: -50px;
  }
  13.52941176% {
    top: -75px;
  }
  15.25411764% {
    top: -75px;
  }
  15.29411764% {
    top: -100px;
  }
  17.60705882% {
    top: -100px;
  }
  17.64705882% {
    top: -125px;
  }
  19.3717647% {
    top: -125px;
  }
  19.4117647% {
    top: -150px;
  }
  21.13647058% {
    top: -150px;
  }
  21.17647058% {
    top: -175px;
  }
  22.90117646% {
    top: -175px;
  }
  22.94117646% {
    top: -200px;
  }
  27.01882352% {
    top: -200px;
  }
  27.05882352% {
    top: -225px;
  }
  30.54823528% {
    top: -225px;
  }
  30.58823528% {
    top: -250px;
  }
  32.31294116% {
    top: -250px;
  }
  32.35294116% {
    top: -275px;
  }
  34.07764704% {
    top: -275px;
  }
  34.11764704% {
    top: -300px;
  }
  35.84235292% {
    top: -300px;
  }
  35.88235292% {
    top: -325px;
  }
  37.6070588% {
    top: -325px;
  }
  37.6470588% {
    top: -350px;
  }
  39.37176468% {
    top: -350px;
  }
  39.41176468% {
    top: -375px;
  }
  41.13647056% {
    top: -375px;
  }
  41.17647056% {
    top: -400px;
  }
  42.90117644% {
    top: -400px;
  }
  42.94117644% {
    top: -425px;
  }
  44.66588232% {
    top: -425px;
  }
  44.70588232% {
    top: -450px;
  }
  48.78352938% {
    top: -450px;
  }
  48.82352938% {
    top: -475px;
  }
  52.31294114% {
    top: -475px;
  }
  52.35294114% {
    top: -500px;
  }
  55.8423529% {
    top: -500px;
  }
  55.8823529% {
    top: -525px;
  }
  59.37176466% {
    top: -525px;
  }
  59.41176466% {
    top: -550px;
  }
  62.90117642% {
    top: -550px;
  }
  62.94117642% {
    top: -575px;
  }
  66.43058818% {
    top: -575px;
  }
  66.47058818% {
    top: -600px;
  }
  70.54823524% {
    top: -600px;
  }
  70.58823524% {
    top: -625px;
  }
  74.077647% {
    top: -625px;
  }
  74.117647% {
    top: -650px;
  }
  78.19529406% {
    top: -650px;
  }
  78.23529406% {
    top: -675px;
  }
  81.72470582% {
    top: -675px;
  }
  81.76470582% {
    top: -700px;
  }
  85.25411758% {
    top: -700px;
  }
  85.29411758% {
    top: -725px;
  }
  88.78352934% {
    top: -725px;
  }
  88.82352934% {
    top: -750px;
  }
  92.3129411% {
    top: -750px;
  }
  92.3529411% {
    top: -775px;
  }
  95.84235286% {
    top: -775px;
  }
  95.88235286% {
    top: -800px;
  }
  97.60705874% {
    top: -800px;
  }
  97.64705874% {
    top: -825px;
  }
  99.95999992% {
    top: -825px;
  }
  to {
    top: -825px;
  }
}
</style>
