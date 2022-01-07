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
        video_id: '_CL6n0FJZpk',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Still Snoop Dogg and D-R-E\n' +
          'Guess who\'s back?\n' +
          'Still, doing that shit Andre?\n' +
          '(Oh for sho\', check me out)\n' +
          'It\'s still Dre Day nigga, AK nigga\n' +
          'Though I\'ve grown a lot, can\'t keep it home a lot\n' +
          '\'Cause when I frequent the spots that I\'m known to rock\n' +
          'You hear the bass from the truck when I\'m on the block\n' +
          'Ladies they pay homage, but haters say Dre fell off\n' +
          'How nigga? My last album was The Chronic (Nigga)\n' +
          'They want to know if he still got it\n' +
          'They say rap\'s changed\n' +
          'They wanna know how I feel about it\n' +
          '(If you ain\'t up on thangs)\n' +
          'Dr. Dre is the name\n' +
          'I\'m ahead of my game\n' +
          'Still puffing my leafs\n' +
          'Still fuck with the beats, still not loving police\n' +
          'Still rock my khakis with a cuff and a crease\n' +
          'Still got love for the streets, reppin\' 213 (For life)\n' +
          'Still the beats bang, still doing my thang\n' +
          'Since I left ain\'t too much changed, still\n' +
          'I\'m representing for them gangstas all across the world\n' +
          '(Still) Hitting them corners in them low-lows, girl\n' +
          'Still taking my time to perfect the beat\n' +
          'And I still got love for the streets, it\'s the D-R-E\n' +
          'I\'m representing for them gangstas all across the world\n' +
          '(Still) Hitting them corners in them low-lows, girl\n' +
          'Still taking my time to perfect the beat\n' +
          'And I still got love for the streets, it\'s the D-R-E\n' +
          'Since the last time you heard from me, I lost some friends\n' +
          'Well, hell, me and Snoop, we dippin\' again\n' +
          'Kept my ear to the streets, signed Eminem\n' +
          'He\'s triple platinum, doing 50 a week\n' +
          'Still, I stay close to the heat\n' +
          'And even when I was close to defeat, I rose to my feet\n' +
          'My life\'s like a soundtrack I wrote to the beat\n' +
          'Treat rap like Cali\' weed, I smoke \'til I sleep\n' +
          'Wake up in the a.m., compose a beat\n' +
          'I bring the fire \'til you\'re soaking in your seat\n' +
          'It\'s not a fluke, it\'s been tried, I\'m the truth\n' +
          'Since "Turn Out the Lights" from the World Class Wreckin Cru\n' +
          'I\'m still at it, after-mathematics\n' +
          'In the home of drive-bys and ak-matics\n' +
          'Swap meets, sticky green, and bad traffic\n' +
          'I dip through, then I give you (Still) D-R-E\n' +
          'I\'m representing for them gangstas all across the world\n' +
          '(Still) Hitting them corners in them low-lows, girl\n' +
          'Still taking my time to perfect the beat\n' +
          'And I still got love for the streets, it\'s the D-R-E\n' +
          'I\'m representing for them gangstas all across the world\n' +
          '(Still) Hitting them corners in them low-lows, girl\n' +
          'Still taking my time to perfect the beat\n' +
          'And I still got love for the streets, it\'s the D-R-E\n' +
          'It ain\'t nothing but more hot shit\n' +
          'Another classic CD for y\'all to vibe with\n' +
          'Whether you\'re cooling on the corner with your fly bitch (Biatch)\n' +
          'Laid back in the shack, play this track\n' +
          'I\'m representing for the gangstas all across the world\n' +
          'Still (Hittin\' them corners in them low-lows, girl)\n' +
          'I\'ll break your neck, damn near put your face in your lap\n' +
          'Niggas try to be the king but the ace is back\n' +
          'So if you ain\'t up on thangs\n' +
          'Dr. Dre be the name still running the game\n' +
          'Still, got it wrapped like a mummy\n' +
          'Still ain\'t tripping, love to see young blacks get money\n' +
          'Spend time out the hood, take they moms out the hood\n' +
          'Hit my boys off with jobs, no more living hard\n' +
          'Barbeques every day, driving fancy cars\n' +
          'Still gon\' get mine regardless\n' +
          'I\'m representing for them gangstas all across the world\n' +
          '(Still) Hitting them corners in them low-lows, girl\n' +
          'Still taking my time to perfect the beat\n' +
          'And I still got love for the streets, it\'s the D-R-E\n' +
          'I\'m representing for them gangstas all across the world\n' +
          '(Still) Hitting them corners in them low-lows, girl\n' +
          'Still taking my time to perfect the beat\n' +
          'And I still got love for the streets, it\'s the D-R-E\n' +
          'I\'m representing for them gangstas all across the world\n' +
          '(Still) Hitting them corners in them low-lows, girl\n' +
          'Still taking my time to perfect the beat\n' +
          'And I still got love for the streets, it\'s the D-R-E\n' +
          'Right back up in your motherfuckin\' ass\n' +
          'Nine-five plus four pennies, add that shit up\n' +
          'D.R.E. right back up on top of thangs\n' +
          'Smoke some wit\' your Dogg\n' +
          'No stress, no seeds, no stems, no sticks!\n' +
          'Some of that real sticky-icky-icky\n' +
          'Ooh wee! Put it in the air!\n' +
          'Well, you\'s a fool, D-R, ha-ha'
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
  top: -2225px;
  animation: move 263s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  11.36684411% {
    top: 0;
  }
  11.40684411% {
    top: -25px;
  }
  11.74707225% {
    top: -25px;
  }
  11.78707225% {
    top: -50px;
  }
  13.64821293% {
    top: -50px;
  }
  13.68821293% {
    top: -75px;
  }
  14.78889734% {
    top: -75px;
  }
  14.82889734% {
    top: -100px;
  }
  16.69003802% {
    top: -100px;
  }
  16.73003802% {
    top: -125px;
  }
  17.45049429% {
    top: -125px;
  }
  17.49049429% {
    top: -150px;
  }
  18.5911787% {
    top: -150px;
  }
  18.6311787% {
    top: -175px;
  }
  19.35163497% {
    top: -175px;
  }
  19.39163497% {
    top: -200px;
  }
  20.49231938% {
    top: -200px;
  }
  20.53231938% {
    top: -225px;
  }
  21.63300379% {
    top: -225px;
  }
  21.67300379% {
    top: -250px;
  }
  22.39346006% {
    top: -250px;
  }
  22.43346006% {
    top: -275px;
  }
  22.7736882% {
    top: -275px;
  }
  22.8136882% {
    top: -300px;
  }
  23.53414447% {
    top: -300px;
  }
  23.57414447% {
    top: -325px;
  }
  24.29460074% {
    top: -325px;
  }
  24.33460074% {
    top: -350px;
  }
  25.05505701% {
    top: -350px;
  }
  25.09505701% {
    top: -375px;
  }
  25.43528515% {
    top: -375px;
  }
  25.47528515% {
    top: -400px;
  }
  25.81551329% {
    top: -400px;
  }
  25.85551329% {
    top: -425px;
  }
  26.9561977% {
    top: -425px;
  }
  26.9961977% {
    top: -450px;
  }
  28.09688211% {
    top: -450px;
  }
  28.13688211% {
    top: -475px;
  }
  29.23756652% {
    top: -475px;
  }
  29.27756652% {
    top: -500px;
  }
  29.99802279% {
    top: -500px;
  }
  30.03802279% {
    top: -525px;
  }
  31.1387072% {
    top: -525px;
  }
  31.1787072% {
    top: -550px;
  }
  32.27939161% {
    top: -550px;
  }
  32.31939161% {
    top: -575px;
  }
  33.03984788% {
    top: -575px;
  }
  33.07984788% {
    top: -600px;
  }
  34.18053229% {
    top: -600px;
  }
  34.22053229% {
    top: -625px;
  }
  35.3212167% {
    top: -625px;
  }
  35.3612167% {
    top: -650px;
  }
  36.08167297% {
    top: -650px;
  }
  36.12167297% {
    top: -675px;
  }
  36.84212924% {
    top: -675px;
  }
  36.88212924% {
    top: -700px;
  }
  37.22235738% {
    top: -700px;
  }
  37.26235738% {
    top: -725px;
  }
  38.74326993% {
    top: -725px;
  }
  38.78326993% {
    top: -750px;
  }
  39.88395434% {
    top: -750px;
  }
  39.92395434% {
    top: -775px;
  }
  41.02463875% {
    top: -775px;
  }
  41.06463875% {
    top: -800px;
  }
  41.78509502% {
    top: -800px;
  }
  41.82509502% {
    top: -825px;
  }
  42.92577943% {
    top: -825px;
  }
  42.96577943% {
    top: -850px;
  }
  43.6862357% {
    top: -850px;
  }
  43.7262357% {
    top: -875px;
  }
  44.82692011% {
    top: -875px;
  }
  44.86692011% {
    top: -900px;
  }
  45.96760452% {
    top: -900px;
  }
  46.00760452% {
    top: -925px;
  }
  46.72806079% {
    top: -925px;
  }
  46.76806079% {
    top: -950px;
  }
  47.8687452% {
    top: -950px;
  }
  47.9087452% {
    top: -975px;
  }
  49.00942961% {
    top: -975px;
  }
  49.04942961% {
    top: -1000px;
  }
  49.76988588% {
    top: -1000px;
  }
  49.80988588% {
    top: -1025px;
  }
  50.91057029% {
    top: -1025px;
  }
  50.95057029% {
    top: -1050px;
  }
  51.67102656% {
    top: -1050px;
  }
  51.71102656% {
    top: -1075px;
  }
  52.81171097% {
    top: -1075px;
  }
  52.85171097% {
    top: -1100px;
  }
  53.95239538% {
    top: -1100px;
  }
  53.99239538% {
    top: -1125px;
  }
  54.71285165% {
    top: -1125px;
  }
  54.75285165% {
    top: -1150px;
  }
  55.47330792% {
    top: -1150px;
  }
  55.51330792% {
    top: -1175px;
  }
  56.61399233% {
    top: -1175px;
  }
  56.65399233% {
    top: -1200px;
  }
  57.3744486% {
    top: -1200px;
  }
  57.4144486% {
    top: -1225px;
  }
  58.51513301% {
    top: -1225px;
  }
  58.55513301% {
    top: -1250px;
  }
  59.27558928% {
    top: -1250px;
  }
  59.31558928% {
    top: -1275px;
  }
  60.41627369% {
    top: -1275px;
  }
  60.45627369% {
    top: -1300px;
  }
  61.5569581% {
    top: -1300px;
  }
  61.5969581% {
    top: -1325px;
  }
  62.69764251% {
    top: -1325px;
  }
  62.73764251% {
    top: -1350px;
  }
  63.45809878% {
    top: -1350px;
  }
  63.49809878% {
    top: -1375px;
  }
  64.21855505% {
    top: -1375px;
  }
  64.25855505% {
    top: -1400px;
  }
  65.35923946% {
    top: -1400px;
  }
  65.39923946% {
    top: -1425px;
  }
  66.11969573% {
    top: -1425px;
  }
  66.15969573% {
    top: -1450px;
  }
  67.26038014% {
    top: -1450px;
  }
  67.30038014% {
    top: -1475px;
  }
  68.40106455% {
    top: -1475px;
  }
  68.44106455% {
    top: -1500px;
  }
  69.16152082% {
    top: -1500px;
  }
  69.20152082% {
    top: -1525px;
  }
  70.30220523% {
    top: -1525px;
  }
  70.34220523% {
    top: -1550px;
  }
  71.0626615% {
    top: -1550px;
  }
  71.1026615% {
    top: -1575px;
  }
  72.20334591% {
    top: -1575px;
  }
  72.24334591% {
    top: -1600px;
  }
  72.96380218% {
    top: -1600px;
  }
  73.00380218% {
    top: -1625px;
  }
  74.10448659% {
    top: -1625px;
  }
  74.14448659% {
    top: -1650px;
  }
  75.245171% {
    top: -1650px;
  }
  75.285171% {
    top: -1675px;
  }
  76.00562727% {
    top: -1675px;
  }
  76.04562727% {
    top: -1700px;
  }
  77.14631168% {
    top: -1700px;
  }
  77.18631168% {
    top: -1725px;
  }
  77.90676795% {
    top: -1725px;
  }
  77.94676795% {
    top: -1750px;
  }
  79.04745236% {
    top: -1750px;
  }
  79.08745236% {
    top: -1775px;
  }
  79.80790863% {
    top: -1775px;
  }
  79.84790863% {
    top: -1800px;
  }
  80.94859304% {
    top: -1800px;
  }
  80.98859304% {
    top: -1825px;
  }
  82.08927745% {
    top: -1825px;
  }
  82.12927745% {
    top: -1850px;
  }
  82.84973372% {
    top: -1850px;
  }
  82.88973372% {
    top: -1875px;
  }
  83.99041813% {
    top: -1875px;
  }
  84.03041813% {
    top: -1900px;
  }
  84.7508744% {
    top: -1900px;
  }
  84.7908744% {
    top: -1925px;
  }
  85.89155881% {
    top: -1925px;
  }
  85.93155881% {
    top: -1950px;
  }
  86.65201508% {
    top: -1950px;
  }
  86.69201508% {
    top: -1975px;
  }
  87.79269949% {
    top: -1975px;
  }
  87.83269949% {
    top: -2000px;
  }
  88.55315576% {
    top: -2000px;
  }
  88.59315576% {
    top: -2025px;
  }
  90.07406831% {
    top: -2025px;
  }
  90.11406831% {
    top: -2050px;
  }
  90.83452458% {
    top: -2050px;
  }
  90.87452458% {
    top: -2075px;
  }
  92.35543713% {
    top: -2075px;
  }
  92.39543713% {
    top: -2100px;
  }
  93.49612154% {
    top: -2100px;
  }
  93.53612154% {
    top: -2125px;
  }
  94.25657781% {
    top: -2125px;
  }
  94.29657781% {
    top: -2150px;
  }
  95.39726222% {
    top: -2150px;
  }
  95.43726222% {
    top: -2175px;
  }
  96.53794663% {
    top: -2175px;
  }
  96.57794663% {
    top: -2200px;
  }
  97.67863104% {
    top: -2200px;
  }
  97.71863104% {
    top: -2225px;
  }
  99.95999986% {
    top: -2225px;
  }
  to {
    top: -2225px;
  }
}
</style>