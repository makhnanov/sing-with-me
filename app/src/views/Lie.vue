<template>
  <div class="resume">
    <div class="container">
      <YoutubeVue3 ref="youtube" :videoid="play.video_id" :loop="play.loop"
                   :width="'100%'" :height="'100%'"
                   @ended="onEnded" @paused="onPaused" @played="onPlayed"/>
      <div class="text" v-bind:class="{ hidden: !isMusicListen }">
        <div id="list" class="text-block" v-bind:class="{ paused: !isMusicListen }">
          <div v-for="item of textBlock" :key="item.index">
            <span style="background-color: rgba(0, 0, 0, 0.65);">{{ item }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { YoutubeVue3 } from 'youtube-vue3'
import axios from 'axios'

export default {
  name: 'App',
  mounted() {
    axios
        .get('https://sing-with-me.ru/api/lies')
        .then(response => {
          this.timing = response.data;
          const textArray = [];
          this.timing.forEach(function (item) {
            item.forEach(function (item) {
              if (typeof item === 'string') {
                textArray.push(item);
              }
            });
          });
          this.textBlock = textArray;
          this.listAnimateFun();
        })
  },
  data() {
    return {
      play : {
        video_id:"DgyHaHCnhyo",
        // loop:1,
        // origin: 'http://localhost:3000/resume-sv',
        // autoplay: '0',
        // showinfo: 0,
        // rel: 0
      },
      isMusicListen: false,
      textBlock: '',
      timing: [],
      oneRowPxHeight: 25
    }
  },
  components: {
    YoutubeVue3
  },
  methods: {
    listAnimateFun() {
      const pointSize = Object.keys(this.timing).length * this.oneRowPxHeight;
      var maximumSeconds;
      var minuteCounter = 0;
      var previousTo = 0;
      var currentFrom = 0;
      var currentTo = 0;
      var normalized = [];

      this.timing.forEach(function (value, index, array) {
        let currentString = array[index];
        if (
            typeof currentString[0] === 'number'
            && typeof currentString[1] === 'number'
        ) {
          currentFrom = currentString[0];
          currentTo = currentString[1];
        } else if (
            index === 0
            && typeof currentString[0] === 'number'
            && typeof currentString[1] === 'string'
        ) {
          currentFrom = 0;
          currentTo = currentString[0];
        } else if (
            typeof currentString[0] === 'number'
            && typeof currentString[1] === 'string'
        ) {
          currentFrom = previousTo;
          currentTo = currentString[0];
        } else {
          throw new Error('Whoops!')
        }

        currentFrom = parseInt(currentFrom);
        currentTo = parseInt(currentTo);

        if (
            currentFrom < previousTo
        ) {
          ++minuteCounter;
        }

        let currentToSecond;
        let currentFromSecond = minuteCounter * 60 + currentFrom;

        if (currentFrom > currentTo) {
          ++minuteCounter;
        }

        currentToSecond = minuteCounter * 60 + currentTo;

        normalized.push([currentFromSecond, currentToSecond]);

        previousTo = currentTo;

        if (index === array.length - 1) {
          maximumSeconds = currentToSecond;
        }
      });

      // console.log(normalized);

      const that = this;
      const movePercentage = 0.01;
      // var previous;
      var keyFramesBody;
      console.log(normalized);
      normalized.forEach(function (value, index, array) {
        if (0 === index) {
          let percentage = (value[1] * 100 / maximumSeconds) - movePercentage;
          keyFramesBody = `${percentage}% {top: 0;}`;
          return;
        }
        let offset = index * that.oneRowPxHeight;
        let move = (array[index - 1][1] * 100 / maximumSeconds) + movePercentage;
        keyFramesBody += `${move}% {top: -${offset}px;}`;
        let stand = (value[1] * 100 / maximumSeconds) - movePercentage;
        keyFramesBody += `${stand}% {top: -${offset}px;}`;
// console.log(keyFramesBody);
      });

      let tt = document.styleSheets[0];
      tt.deleteRule(0);
      tt.insertRule('@keyframes move {' +
          'from {top: 0;}' +
          keyFramesBody +
          `to {top: -${pointSize}px;}` +
          '}',
          0
      );
      tt.insertRule('.text-block{' +
          'width: 100%;' +
          'white-space: pre;' +
          'position: absolute;' +
          `top: -${pointSize}px;` +
          'left: 0;' +
          'bottom: 20px;' +
          'z-index: 1;' +
          `animation: move ${maximumSeconds}s linear alternate;` +
          '}');
    },
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
      // var path = this.$router.currentRout/e.value.path;
      // this.$router.getRoutes().forEach((function (value, index, array) {
      //   if (value.path === path) {
      // this.$router.push(array[++index].path);
      // }
      // }).bind(this));
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
        currentTimePromise.then(() => {
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
  font-size: 21px;
  line-height: 25px;
  width: 98%;
  height: 150px;
  position: absolute;
  bottom: 60px;
  left: 20px;
  overflow: hidden;
}
.container {
  width: 100%;
  height: 99vh;
}
.resume {
  display: flex;
  justify-content: space-around;
  background-color: black;
}
.hidden {
  /*display: none;*/
}
.paused {
  animation-play-state: paused !important;
}
</style>
