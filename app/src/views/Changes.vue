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
        video_id: 'eXvBjCO19QY',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Come on, come on\n' +
          'I see no changes, wake up in the morning, and I ask myself\n' +
          'Is life worth living, should I blast myself?\n' +
          'I\'m tired of bein\' poor, and even worse I\'m black\n' +
          'My stomach hurts, so I\'m lookin\' for a purse to snatch\n' +
          'Cops give a damn about a negro\n' +
          'Pull the trigger, kill a nigga, he\'s a hero\n' +
          'Give the crack to the kids who the hell cares\n' +
          'One less hungry mouth on the welfare\n' +
          'First, ship \'em dope and let \'em deal the brothers\n' +
          'Give \'em guns, step back, watch \'em kill each other\n' +
          'It\'s time to fight back, that\'s what Huey said\n' +
          'Two shots in the dark, now Huey\'s dead\n' +
          'I got love for my brother, but we can never go nowhere\n' +
          'Unless we share with each other\n' +
          'We gotta start makin\' changes\n' +
          'Learn to see me as a brother instead of two distant strangers\n' +
          'And that\'s how it\'s supposed to be\n' +
          'How can the devil take a brother, if he\'s close to me?\n' +
          'I\'d love to go back to when we played as kids\n' +
          'But things changed, and that\'s the way it is\n' +
          'Come on, come on\n' +
          'That\'s just the way it is\n' +
          'Things will never be the same\n' +
          'That\'s just the way it is\n' +
          'Ooh, yeah\n' +
          'Come on, come on\n' +
          'That\'s just the way it is\n' +
          'Things will never be the same\n' +
          'That\'s just the way it is\n' +
          'Aww, yeah\n' +
          'I see no changes, all I see is racist faces\n' +
          'Misplaced hate makes disgrace to races\n' +
          'We under, I wonder what it takes to make this\n' +
          'One better place, let\'s erase the wasted\n' +
          'Take the evil out the people, they\'ll be acting right\n' +
          '\'Cause mo\' black and white is smokin\' crack tonight\n' +
          'And only time we chill is when we kill each other\n' +
          'It takes skill to be real, time to heal each other\n' +
          'And although it seems heaven sent\n' +
          'We ain\'t ready, to see a black President\n' +
          'It ain\'t a secret, don\'t conceal the fact\n' +
          'The penitentiary\'s packed, and it\'s filled with blacks\n' +
          'But some things will never change\n' +
          'Try to show another way but you stayin\' in the dope game\n' +
          'Now tell me, what\'s a mother to do?\n' +
          'Bein\' real don\'t appeal to the brother in you\n' +
          'You gotta operate the easy way\n' +
          '(I made a G today) But you made it in a sleazy way\n' +
          'Sellin\' crack to the kid (I gotta get paid)\n' +
          'Well, hey, well, that\'s the way it is\n' +
          'Come on, come on\n' +
          'That\'s just the way it is\n' +
          'Things will never be the same\n' +
          'That\'s just the way it is\n' +
          'Aww, yeah\n' +
          'Come on, come on\n' +
          'That\'s just the way it is\n' +
          'Things will never be the same\n' +
          'That\'s just the way it is\n' +
          'Aww, yeah\n' +
          'We gotta make a change\n' +
          'It\'s time for us as a people to start makin\' some changes\n' +
          'Let\'s change the way we eat\n' +
          'Let\'s change the way we live\n' +
          'And let\'s change the way we treat each other\n' +
          'You see, the old way wasn\'t working so it\'s on us to do\n' +
          'What we gotta do, to survive\n' +
          'And still I see no changes, can\'t a brother get a little peace?\n' +
          'There\'s war in the streets and war in the Middle East\n' +
          'Instead of war on poverty, they got a war on drugs\n' +
          'So the police can bother me\n' +
          'And I ain\'t never did a crime, I ain\'t have to do\n' +
          'But now, I\'m back with the facts givin\' \'em back to you\n' +
          'Don\'t let \'em jack you up, back you up\n' +
          'Crack you up and pimps smack you up\n' +
          'You gotta learn to hold ya own\n' +
          'They get jealous when they see ya, with ya mobile phone\n' +
          'But tell the cops, they can\'t touch this\n' +
          'I don\'t trust this, when they try to rush, I bust this\n' +
          'That\'s the sound of my tool, you say it ain\'t cool?\n' +
          'But mama didn\'t raise no fool\n' +
          'And as long as I stay black, I gotta stay strapped\n' +
          'And I never get to lay back\n' +
          '\'Cause I always got to worry \'bout the pay backs\n' +
          'Some buck that I roughed up way back\n' +
          'Comin\' back after all these years\n' +
          'Rat-a-tat, tat, tat, tat, that\'s the way it is\n' +
          'That\'s just the way it is\n' +
          'Things will never be the same\n' +
          'That\'s just the way it is (Way it is)\n' +
          'Aww, yeah\n' +
          'That\'s just the way it is\n' +
          'Things will never be the same\n' +
          'That\'s just the way it is\n' +
          'Aww, yeah'
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
  top: -2375px;
  animation: move 267s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  6.3270412% {
    top: 0;
  }
  6.3670412% {
    top: -25px;
  }
  7.07610487% {
    top: -25px;
  }
  7.11610487% {
    top: -50px;
  }
  8.19970038% {
    top: -50px;
  }
  8.23970038% {
    top: -75px;
  }
  8.94876405% {
    top: -75px;
  }
  8.98876405% {
    top: -100px;
  }
  9.69782772% {
    top: -100px;
  }
  9.73782772% {
    top: -125px;
  }
  10.44689139% {
    top: -125px;
  }
  10.48689139% {
    top: -150px;
  }
  11.19595506% {
    top: -150px;
  }
  11.23595506% {
    top: -175px;
  }
  11.94501873% {
    top: -175px;
  }
  11.98501873% {
    top: -200px;
  }
  12.6940824% {
    top: -200px;
  }
  12.7340824% {
    top: -225px;
  }
  13.44314607% {
    top: -225px;
  }
  13.48314607% {
    top: -250px;
  }
  14.56674158% {
    top: -250px;
  }
  14.60674158% {
    top: -275px;
  }
  15.31580525% {
    top: -275px;
  }
  15.35580525% {
    top: -300px;
  }
  16.06486892% {
    top: -300px;
  }
  16.10486892% {
    top: -325px;
  }
  17.18846443% {
    top: -325px;
  }
  17.22846443% {
    top: -350px;
  }
  17.56299627% {
    top: -350px;
  }
  17.60299627% {
    top: -375px;
  }
  18.31205994% {
    top: -375px;
  }
  18.35205994% {
    top: -400px;
  }
  19.43565545% {
    top: -400px;
  }
  19.47565545% {
    top: -425px;
  }
  19.81018729% {
    top: -425px;
  }
  19.85018729% {
    top: -450px;
  }
  20.9337828% {
    top: -450px;
  }
  20.9737828% {
    top: -475px;
  }
  21.68284647% {
    top: -475px;
  }
  21.72284647% {
    top: -500px;
  }
  22.43191014% {
    top: -500px;
  }
  22.47191014% {
    top: -525px;
  }
  23.55550565% {
    top: -525px;
  }
  23.59550565% {
    top: -550px;
  }
  24.30456932% {
    top: -550px;
  }
  24.34456932% {
    top: -575px;
  }
  26.1772285% {
    top: -575px;
  }
  26.2172285% {
    top: -600px;
  }
  27.67535584% {
    top: -600px;
  }
  27.71535584% {
    top: -625px;
  }
  28.79895135% {
    top: -625px;
  }
  28.83895135% {
    top: -650px;
  }
  30.29707869% {
    top: -650px;
  }
  30.33707869% {
    top: -675px;
  }
  30.67161053% {
    top: -675px;
  }
  30.71161053% {
    top: -700px;
  }
  32.54426971% {
    top: -700px;
  }
  32.58426971% {
    top: -725px;
  }
  34.41692889% {
    top: -725px;
  }
  34.45692889% {
    top: -750px;
  }
  35.16599256% {
    top: -750px;
  }
  35.20599256% {
    top: -775px;
  }
  36.28958807% {
    top: -775px;
  }
  36.32958807% {
    top: -800px;
  }
  37.03865174% {
    top: -800px;
  }
  37.07865174% {
    top: -825px;
  }
  37.78771541% {
    top: -825px;
  }
  37.82771541% {
    top: -850px;
  }
  38.53677908% {
    top: -850px;
  }
  38.57677908% {
    top: -875px;
  }
  39.66037459% {
    top: -875px;
  }
  39.70037459% {
    top: -900px;
  }
  40.40943826% {
    top: -900px;
  }
  40.44943826% {
    top: -925px;
  }
  41.15850193% {
    top: -925px;
  }
  41.19850193% {
    top: -950px;
  }
  41.9075656% {
    top: -950px;
  }
  41.9475656% {
    top: -975px;
  }
  42.65662927% {
    top: -975px;
  }
  42.69662927% {
    top: -1000px;
  }
  43.40569294% {
    top: -1000px;
  }
  43.44569294% {
    top: -1025px;
  }
  44.15475661% {
    top: -1025px;
  }
  44.19475661% {
    top: -1050px;
  }
  44.90382028% {
    top: -1050px;
  }
  44.94382028% {
    top: -1075px;
  }
  46.02741579% {
    top: -1075px;
  }
  46.06741579% {
    top: -1100px;
  }
  46.77647946% {
    top: -1100px;
  }
  46.81647946% {
    top: -1125px;
  }
  47.52554313% {
    top: -1125px;
  }
  47.56554313% {
    top: -1150px;
  }
  48.2746068% {
    top: -1150px;
  }
  48.3146068% {
    top: -1175px;
  }
  49.02367047% {
    top: -1175px;
  }
  49.06367047% {
    top: -1200px;
  }
  50.14726598% {
    top: -1200px;
  }
  50.18726598% {
    top: -1225px;
  }
  50.89632965% {
    top: -1225px;
  }
  50.93632965% {
    top: -1250px;
  }
  51.64539332% {
    top: -1250px;
  }
  51.68539332% {
    top: -1275px;
  }
  52.39445699% {
    top: -1275px;
  }
  52.43445699% {
    top: -1300px;
  }
  53.14352066% {
    top: -1300px;
  }
  53.18352066% {
    top: -1325px;
  }
  55.01617984% {
    top: -1325px;
  }
  55.05617984% {
    top: -1350px;
  }
  56.88883902% {
    top: -1350px;
  }
  56.92883902% {
    top: -1375px;
  }
  58.01243453% {
    top: -1375px;
  }
  58.05243453% {
    top: -1400px;
  }
  59.13603004% {
    top: -1400px;
  }
  59.17603004% {
    top: -1425px;
  }
  59.88509371% {
    top: -1425px;
  }
  59.92509371% {
    top: -1450px;
  }
  61.75775289% {
    top: -1450px;
  }
  61.79775289% {
    top: -1475px;
  }
  63.63041207% {
    top: -1475px;
  }
  63.67041207% {
    top: -1500px;
  }
  64.37947574% {
    top: -1500px;
  }
  64.41947574% {
    top: -1525px;
  }
  64.75400758% {
    top: -1525px;
  }
  64.79400758% {
    top: -1550px;
  }
  66.25213492% {
    top: -1550px;
  }
  66.29213492% {
    top: -1575px;
  }
  67.00119859% {
    top: -1575px;
  }
  67.04119859% {
    top: -1600px;
  }
  67.75026226% {
    top: -1600px;
  }
  67.79026226% {
    top: -1625px;
  }
  68.87385777% {
    top: -1625px;
  }
  68.91385777% {
    top: -1650px;
  }
  69.62292144% {
    top: -1650px;
  }
  69.66292144% {
    top: -1675px;
  }
  70.74651695% {
    top: -1675px;
  }
  70.78651695% {
    top: -1700px;
  }
  71.87011246% {
    top: -1700px;
  }
  71.91011246% {
    top: -1725px;
  }
  72.61917613% {
    top: -1725px;
  }
  72.65917613% {
    top: -1750px;
  }
  73.74277164% {
    top: -1750px;
  }
  73.78277164% {
    top: -1775px;
  }
  74.11730348% {
    top: -1775px;
  }
  74.15730348% {
    top: -1800px;
  }
  75.24089899% {
    top: -1800px;
  }
  75.28089899% {
    top: -1825px;
  }
  75.98996266% {
    top: -1825px;
  }
  76.02996266% {
    top: -1850px;
  }
  76.73902633% {
    top: -1850px;
  }
  76.77902633% {
    top: -1875px;
  }
  77.48809% {
    top: -1875px;
  }
  77.52809% {
    top: -1900px;
  }
  78.23715367% {
    top: -1900px;
  }
  78.27715367% {
    top: -1925px;
  }
  78.98621734% {
    top: -1925px;
  }
  79.02621734% {
    top: -1950px;
  }
  79.73528101% {
    top: -1950px;
  }
  79.77528101% {
    top: -1975px;
  }
  80.85887652% {
    top: -1975px;
  }
  80.89887652% {
    top: -2000px;
  }
  81.60794019% {
    top: -2000px;
  }
  81.64794019% {
    top: -2025px;
  }
  82.35700386% {
    top: -2025px;
  }
  82.39700386% {
    top: -2050px;
  }
  83.48059937% {
    top: -2050px;
  }
  83.52059937% {
    top: -2075px;
  }
  84.22966304% {
    top: -2075px;
  }
  84.26966304% {
    top: -2100px;
  }
  84.97872671% {
    top: -2100px;
  }
  85.01872671% {
    top: -2125px;
  }
  85.72779038% {
    top: -2125px;
  }
  85.76779038% {
    top: -2150px;
  }
  86.47685405% {
    top: -2150px;
  }
  86.51685405% {
    top: -2175px;
  }
  87.22591772% {
    top: -2175px;
  }
  87.26591772% {
    top: -2200px;
  }
  89.0985769% {
    top: -2200px;
  }
  89.1385769% {
    top: -2225px;
  }
  90.97123608% {
    top: -2225px;
  }
  91.01123608% {
    top: -2250px;
  }
  92.46936342% {
    top: -2250px;
  }
  92.50936342% {
    top: -2275px;
  }
  93.21842709% {
    top: -2275px;
  }
  93.25842709% {
    top: -2300px;
  }
  95.4656181% {
    top: -2300px;
  }
  95.5056181% {
    top: -2325px;
  }
  97.33827728% {
    top: -2325px;
  }
  97.37827728% {
    top: -2350px;
  }
  99.21093646% {
    top: -2350px;
  }
  99.25093646% {
    top: -2375px;
  }
  99.96000013% {
    top: -2375px;
  }
  to {
    top: -2375px;
  }
}
</style>