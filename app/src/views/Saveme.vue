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
        video_id: 'LYdCzs5uPrI',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'I feel my wings\n' +
          'Have broken in your hands\n' +
          'I feel the words unspoken inside\n' +
          'When they pull you under\n' +
          'And I will give you anything you want, oh\n' +
          'You were all I wanted\n' +
          'And all my dreams are fallen down\n' +
          'Crawlin\' around\n' +
          'Somebody save me\n' +
          'Let your warm hands break right through\n' +
          'Somebody save me\n' +
          'I don\'t care how you do it, just stay, stay\n' +
          'C\'mon, I\'ve been waiting for you\n' +
          'I see the world has folded in your heart\n' +
          'I feel the waves crash down inside\n' +
          'And they pull me under\n' +
          'And I would give you anything you want, oh\n' +
          'You were all I wanted\n' +
          'And all my dreams have fallen down\n' +
          'Crawlin\' around\n' +
          'Somebody save me\n' +
          'Let your warm hands break right through\n' +
          'Somebody save me\n' +
          'I don\'t care how you do it, just stay, stay\n' +
          'C\'mon, I\'ve been waiting for you\n' +
          'And all my dreams are on the ground\n' +
          'Crawlin\' around\n' +
          'Somebody save me\n' +
          'Let your warm hands break right through\n' +
          'Somebody save me\n' +
          'I don\'t care how you do it, just stay (Stay with me)\n' +
          'I made this whole world shine for you\n' +
          'Just stay, stay\n' +
          'C\'mon, I\'m still waiting for you'
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
  animation: move 246s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  9.3095935% {
    top: 0;
  }
  9.3495935% {
    top: -25px;
  }
  11.34211383% {
    top: -25px;
  }
  11.38211383% {
    top: -50px;
  }
  15.40715448% {
    top: -50px;
  }
  15.44715448% {
    top: -75px;
  }
  16.62666668% {
    top: -75px;
  }
  16.66666668% {
    top: -100px;
  }
  19.47219514% {
    top: -100px;
  }
  19.51219514% {
    top: -125px;
  }
  20.69170734% {
    top: -125px;
  }
  20.73170734% {
    top: -150px;
  }
  23.13073173% {
    top: -150px;
  }
  23.17073173% {
    top: -175px;
  }
  25.97626019% {
    top: -175px;
  }
  26.01626019% {
    top: -200px;
  }
  28.41528458% {
    top: -200px;
  }
  28.45528458% {
    top: -225px;
  }
  30.04130084% {
    top: -225px;
  }
  30.08130084% {
    top: -250px;
  }
  32.48032523% {
    top: -250px;
  }
  32.52032523% {
    top: -275px;
  }
  36.54536588% {
    top: -275px;
  }
  36.58536588% {
    top: -300px;
  }
  38.98439027% {
    top: -300px;
  }
  39.02439027% {
    top: -325px;
  }
  45.89495938% {
    top: -325px;
  }
  45.93495938% {
    top: -350px;
  }
  49.55349597% {
    top: -350px;
  }
  49.59349597% {
    top: -375px;
  }
  51.17951223% {
    top: -375px;
  }
  51.21951223% {
    top: -400px;
  }
  54.02504069% {
    top: -400px;
  }
  54.06504069% {
    top: -425px;
  }
  55.24455289% {
    top: -425px;
  }
  55.28455289% {
    top: -450px;
  }
  57.68357728% {
    top: -450px;
  }
  57.72357728% {
    top: -475px;
  }
  60.52910574% {
    top: -475px;
  }
  60.56910574% {
    top: -500px;
  }
  62.96813013% {
    top: -500px;
  }
  63.00813013% {
    top: -525px;
  }
  64.59414639% {
    top: -525px;
  }
  64.63414639% {
    top: -550px;
  }
  66.62666672% {
    top: -550px;
  }
  66.66666672% {
    top: -575px;
  }
  70.69170737% {
    top: -575px;
  }
  70.73170737% {
    top: -600px;
  }
  73.53723583% {
    top: -600px;
  }
  73.57723583% {
    top: -625px;
  }
  80.04130087% {
    top: -625px;
  }
  80.08130087% {
    top: -650px;
  }
  82.88682933% {
    top: -650px;
  }
  82.92682933% {
    top: -675px;
  }
  85.32585372% {
    top: -675px;
  }
  85.36585372% {
    top: -700px;
  }
  86.95186998% {
    top: -700px;
  }
  86.99186998% {
    top: -725px;
  }
  88.98439031% {
    top: -725px;
  }
  89.02439031% {
    top: -750px;
  }
  93.04943096% {
    top: -750px;
  }
  93.08943096% {
    top: -775px;
  }
  95.48845535% {
    top: -775px;
  }
  95.52845535% {
    top: -800px;
  }
  97.11447161% {
    top: -800px;
  }
  97.15447161% {
    top: -825px;
  }
  99.96000007% {
    top: -825px;
  }
  to {
    top: -825px;
  }
}
</style>