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
        video_id: 'Fp0BScQSSvg',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Oh my God, Ronny\n' +
          'Ayy, somebody grab him some clippers (zzzzt)\n' +
          'His fuckin\' beard is weird\n' +
          'Tough talk from a rapper payin\' millions for security a year\n' +
          '"I think my dad\'s gone crazy, " yeah, Hailie, you right\n' +
          'Dad\'s always mad cooped up in the studio, yellin\' at the mic\n' +
          'You\'re sober and bored, huh? (I know)\n' +
          'About to be 46 years old, dog\n' +
          'Talkin\' \'bout "I\'ma call up Trick Trick"\n' +
          'Man, you sound like a bitch, bitch\n' +
          'Man up and handle your shit (ugh)\n' +
          'Mad about somethin\' I said in 2012\n' +
          'Took you six years and a surprise album just to come with a diss\n' +
          'Homie, we get it, we know that you\'re the greatest rapper alive\n' +
          'Fuckin\' dweeb, all you do is read the dictionary and stay inside\n' +
          'Fuck Rap God, I\'m the Rap Devil\n' +
          'Comin\' bare-faced with a black shovel\n' +
          'Like the Armageddon when the smoke settle\n' +
          'His body next to this instrumental, I\'m sayin\'\n' +
          'I\'m sick of them sweatsuits and them corny hats, let\'s talk about it\n' +
          'I\'m sick of you bein\' rich and you still mad, let\'s talk about it\n' +
          'Both of us single dads from the Midwest, we can talk about it\n' +
          'Or we could get gully, I\'ll size up your body\n' +
          'And put some white chalk around it\n' +
          'Let\'s talk about the fact you actually blackballed a rapper\n' +
          'That\'s twice as young as you (let\'s talk about it)\n' +
          'Let\'s call Sway\n' +
          'Ask why I can\'t go on Shade 45 because of you (brrt)\n' +
          'Let\'s ask Interscope\n' +
          'How you had Paul Rosenberg tryin\' to shelf me (huh?)\n' +
          'Still can\'t cover up the fact\n' +
          'Your last four albums is as bad as your selfie\n' +
          'Now tell me, what do you stand for? (what?)\n' +
          'I know you can\'t stand yourself (no)\n' +
          'Tryin\' to be the old you so bad, you Stan yourself (ha)\n' +
          'Let\'s leave all the beefin\' to 50 (please)\n' +
          'Em, you\'re pushin\' 50\n' +
          'Why you claimin\' that I\'ma call Puff?\n' +
          'When you the one that called Diddy (facts)\n' +
          'Then you went and called Jimmy (facts)\n' +
          'They conference called me in the morning (what?)\n' +
          'They told me you mad about a tweet\n' +
          'You wanted me to say sorry (what?)\n' +
          'I swear to God, I ain\'t believe him (nah)\n' +
          'Please say it ain\'t so (no)\n' +
          'The big bad bully of the rap game can\'t take a fuckin\' joke\n' +
          'Oh you want some fuckin\' smoke (what?)\n' +
          'But not literally, you\'ll choke\n' +
          'Yeah, I\'ll acknowledge you\'re the GOAT\n' +
          'But I\'m The Gunner, bitch, I got you in the scope (brra)\n' +
          'Don\'t have a heart attack now (no)\n' +
          'Somebody help your mans up (help)\n' +
          'Knees weak of old age, the real Slim Shady can\'t stand up\n' +
          'I\'m sick of them sweatsuits and them corny hats, let\'s talk about it\n' +
          'I\'m sick of you bein\' rich and you still mad, let\'s talk about it\n' +
          'Both of us single dads from the Midwest, we can talk about it\n' +
          'Or we could get gully, I\'ll size up your body\n' +
          'And put some white chalk around it\n' +
          'Hello Marshall, my name\'s Colson\n' +
          'You should go back to Recovery\n' +
          'I know your ego is hurtin\'\n' +
          'Just knowin\' that all of your fans discovered me (hi)\n' +
          'He like, "Damn, he a younger me\n' +
          'Except he dresses better and I\'m ugly\n' +
          'Always making fun of me."\n' +
          'Stop all the thuggery, Marshall, you livin\' in luxury (damn)\n' +
          'Look what you done to me\n' +
          'Dropped an album just because of me\n' +
          'Damn, you in love with me!\n' +
          'You got money but I\'m hungry\n' +
          'I like the diss but you won\'t say them lyrics out in front of me\n' +
          'Shout out to every rapper that\'s up under me\n' +
          'Know that I\'ll never do you like this fuckery\n' +
          'Still bitter after everyone loves you\n' +
          'Pull that wedgie out your dungarees (hey)\n' +
          'I gotta respect the OGs and I know most of \'em personally (ayy)\n' +
          'But you\'re just a bully actin\' like a baby\n' +
          'So I gotta read you a nursery (nursery)\n' +
          'I\'m the ghost of the future\n' +
          'And you\'re just Ebenezer Scrooge (facts)\n' +
          'I said on Flex anyone could get it\n' +
          'I ain\'t know it would be you\n' +
          'I\'m sick of them sweatsuits and them corny hats, let\'s talk about it\n' +
          'I\'m sick of you bein\' rich and you still mad, let\'s talk about it\n' +
          'Both of us single dads from the Midwest, we can talk about it\n' +
          'Or we could get gully, I\'ll size up your body\n' +
          'And put some white chalk around it\n' +
          'Ayy, ridin\' shotty \'cause I gotta roll this dope\n' +
          'It\'s a fast road when your idols become your rivals, yeah\n' +
          'Never hesitate to say it to your face, I\'m a asshole\n' +
          'Bitch-ass motherfucker (Oh my God, Ronny)\n' +
          'We know you get nervous, Rabbit\n' +
          'I see Momma\'s spaghetti all over your sweater\n' +
          'I wish you would lose yourself on the records\n' +
          'That you made a decade ago, they were better\n' +
          'Accordin\' to them, you\'re a national treasure\n' +
          'To me, you\'re as soft as a feather\n' +
          'The type to be scared to ask Rihanna for her number\n' +
          'Just hold her umbrella-ella-ella\n' +
          '"I\'m not afraid, " okay Oscar the Grouch, chill on the couch (fuck)\n' +
          'You got an Oscar, damn\n' +
          'Can anyone else get some food in their mouth? (For real)\n' +
          'They made a movie about you, you\'re in everybody\'s top ten\n' +
          'You\'re not getting better with time\n' +
          'It\'s fine, Eminem, put down the pen\n' +
          'Or write an apology\n' +
          'Over the simple fact you had to diss to acknowledge me\n' +
          'I am the prodigy\n' +
          'How could I even look up to you? You ain\'t as tall as me\n' +
          '5\'8" and I\'m 6\'4", seven punches hold your head still\n' +
          'Last time you saw 8 Mile was at home on a treadmill\n' +
          'You were named after a candy\n' +
          'I was named after a gangster (brr)\n' +
          'And don\'t be a sucker and take my verse\n' +
          'Off of Yelawolf\'s album, thank you (thank you)\n' +
          'I just wanna feed my daughter\n' +
          'You tryna stop the money to support her\n' +
          'You the one always talkin\' \'bout the action\n' +
          'Text me the addy, I\'m pullin\' up scrappin\'\n' +
          'And I\'m by my fuckin\' self, what\'s happenin\'?\n' +
          'EST captain, salute me or shoot me\n' +
          'That\'s what he\'s gonna have to do to me\n' +
          'When he realizes there ain\'t shit he could do to me\n' +
          'Everybody always hated me, this isn\'t anything new to me\n' +
          'Yeah, there\'s a difference between us\n' +
          'I got all of my shit without Dre producin\' me (ayy)\n' +
          'I know you\'re not used to me\n' +
          'Usually one of your disses should ruin me\n' +
          'But bitch I\'m from Cleveland\n' +
          'Everybody quiet this evenin\', I\'m readin\' the eulogy (shh)\n' +
          'Dropped an album called Kamikaze\n' +
          'So that means he killed him\n' +
          'Already fucked one rapper\'s girl this week\n' +
          'Don\'t make me call Kim\n' +
          'I\'m sick of them sweatsuits and them corny hats, let\'s talk about it\n' +
          'I\'m sick of you bein\' rich and you still mad, let\'s talk about it\n' +
          'Both of us single dads from the Midwest, we can talk about it\n' +
          'Or we could get gully, I\'ll size up your body\n' +
          'And put some white chalk around it'
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
  top: -3450px;
  animation: move 285s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  5.57403509% {
    top: 0;
  }
  5.61403509% {
    top: -25px;
  }
  6.27578948% {
    top: -25px;
  }
  6.31578948% {
    top: -50px;
  }
  6.62666667% {
    top: -50px;
  }
  6.66666667% {
    top: -75px;
  }
  8.03017544% {
    top: -75px;
  }
  8.07017544% {
    top: -100px;
  }
  9.08280702% {
    top: -100px;
  }
  9.12280702% {
    top: -125px;
  }
  10.1354386% {
    top: -125px;
  }
  10.1754386% {
    top: -150px;
  }
  10.83719299% {
    top: -150px;
  }
  10.87719299% {
    top: -175px;
  }
  11.53894738% {
    top: -175px;
  }
  11.57894738% {
    top: -200px;
  }
  11.88982457% {
    top: -200px;
  }
  11.92982457% {
    top: -225px;
  }
  12.59157896% {
    top: -225px;
  }
  12.63157896% {
    top: -250px;
  }
  12.94245615% {
    top: -250px;
  }
  12.98245615% {
    top: -275px;
  }
  13.64421054% {
    top: -275px;
  }
  13.68421054% {
    top: -300px;
  }
  14.69684212% {
    top: -300px;
  }
  14.73684212% {
    top: -325px;
  }
  15.7494737% {
    top: -325px;
  }
  15.7894737% {
    top: -350px;
  }
  16.80210528% {
    top: -350px;
  }
  16.84210528% {
    top: -375px;
  }
  17.50385967% {
    top: -375px;
  }
  17.54385967% {
    top: -400px;
  }
  17.85473686% {
    top: -400px;
  }
  17.89473686% {
    top: -425px;
  }
  18.55649125% {
    top: -425px;
  }
  18.59649125% {
    top: -450px;
  }
  19.25824564% {
    top: -450px;
  }
  19.29824564% {
    top: -475px;
  }
  20.31087722% {
    top: -475px;
  }
  20.35087722% {
    top: -500px;
  }
  21.3635088% {
    top: -500px;
  }
  21.4035088% {
    top: -525px;
  }
  22.41614038% {
    top: -525px;
  }
  22.45614038% {
    top: -550px;
  }
  23.11789477% {
    top: -550px;
  }
  23.15789477% {
    top: -575px;
  }
  23.46877196% {
    top: -575px;
  }
  23.50877196% {
    top: -600px;
  }
  24.52140354% {
    top: -600px;
  }
  24.56140354% {
    top: -625px;
  }
  24.87228073% {
    top: -625px;
  }
  24.91228073% {
    top: -650px;
  }
  25.22315792% {
    top: -650px;
  }
  25.26315792% {
    top: -675px;
  }
  25.92491231% {
    top: -675px;
  }
  25.96491231% {
    top: -700px;
  }
  26.2757895% {
    top: -700px;
  }
  26.3157895% {
    top: -725px;
  }
  26.97754389% {
    top: -725px;
  }
  27.01754389% {
    top: -750px;
  }
  27.67929828% {
    top: -750px;
  }
  27.71929828% {
    top: -775px;
  }
  28.03017547% {
    top: -775px;
  }
  28.07017547% {
    top: -800px;
  }
  28.73192986% {
    top: -800px;
  }
  28.77192986% {
    top: -825px;
  }
  29.43368425% {
    top: -825px;
  }
  29.47368425% {
    top: -850px;
  }
  30.13543864% {
    top: -850px;
  }
  30.17543864% {
    top: -875px;
  }
  30.83719303% {
    top: -875px;
  }
  30.87719303% {
    top: -900px;
  }
  31.53894742% {
    top: -900px;
  }
  31.57894742% {
    top: -925px;
  }
  32.24070181% {
    top: -925px;
  }
  32.28070181% {
    top: -950px;
  }
  32.591579% {
    top: -950px;
  }
  32.631579% {
    top: -975px;
  }
  33.29333339% {
    top: -975px;
  }
  33.33333339% {
    top: -1000px;
  }
  33.64421058% {
    top: -1000px;
  }
  33.68421058% {
    top: -1025px;
  }
  34.34596497% {
    top: -1025px;
  }
  34.38596497% {
    top: -1050px;
  }
  35.04771936% {
    top: -1050px;
  }
  35.08771936% {
    top: -1075px;
  }
  35.39859655% {
    top: -1075px;
  }
  35.43859655% {
    top: -1100px;
  }
  35.74947374% {
    top: -1100px;
  }
  35.78947374% {
    top: -1125px;
  }
  37.15298251% {
    top: -1125px;
  }
  37.19298251% {
    top: -1150px;
  }
  37.8547369% {
    top: -1150px;
  }
  37.8947369% {
    top: -1175px;
  }
  38.20561409% {
    top: -1175px;
  }
  38.24561409% {
    top: -1200px;
  }
  38.90736848% {
    top: -1200px;
  }
  38.94736848% {
    top: -1225px;
  }
  39.25824567% {
    top: -1225px;
  }
  39.29824567% {
    top: -1250px;
  }
  39.96000006% {
    top: -1250px;
  }
  40.00000006% {
    top: -1275px;
  }
  40.66175445% {
    top: -1275px;
  }
  40.70175445% {
    top: -1300px;
  }
  41.71438603% {
    top: -1300px;
  }
  41.75438603% {
    top: -1325px;
  }
  42.76701761% {
    top: -1325px;
  }
  42.80701761% {
    top: -1350px;
  }
  43.81964919% {
    top: -1350px;
  }
  43.85964919% {
    top: -1375px;
  }
  44.87228077% {
    top: -1375px;
  }
  44.91228077% {
    top: -1400px;
  }
  45.57403516% {
    top: -1400px;
  }
  45.61403516% {
    top: -1425px;
  }
  45.92491235% {
    top: -1425px;
  }
  45.96491235% {
    top: -1450px;
  }
  46.62666674% {
    top: -1450px;
  }
  46.66666674% {
    top: -1475px;
  }
  47.32842113% {
    top: -1475px;
  }
  47.36842113% {
    top: -1500px;
  }
  47.67929832% {
    top: -1500px;
  }
  47.71929832% {
    top: -1525px;
  }
  48.38105271% {
    top: -1525px;
  }
  48.42105271% {
    top: -1550px;
  }
  49.0828071% {
    top: -1550px;
  }
  49.1228071% {
    top: -1575px;
  }
  49.43368429% {
    top: -1575px;
  }
  49.47368429% {
    top: -1600px;
  }
  49.78456148% {
    top: -1600px;
  }
  49.82456148% {
    top: -1625px;
  }
  50.48631587% {
    top: -1625px;
  }
  50.52631587% {
    top: -1650px;
  }
  51.18807026% {
    top: -1650px;
  }
  51.22807026% {
    top: -1675px;
  }
  51.53894745% {
    top: -1675px;
  }
  51.57894745% {
    top: -1700px;
  }
  51.88982464% {
    top: -1700px;
  }
  51.92982464% {
    top: -1725px;
  }
  52.24070183% {
    top: -1725px;
  }
  52.28070183% {
    top: -1750px;
  }
  52.94245622% {
    top: -1750px;
  }
  52.98245622% {
    top: -1775px;
  }
  53.29333341% {
    top: -1775px;
  }
  53.33333341% {
    top: -1800px;
  }
  53.9950878% {
    top: -1800px;
  }
  54.0350878% {
    top: -1825px;
  }
  54.69684219% {
    top: -1825px;
  }
  54.73684219% {
    top: -1850px;
  }
  55.04771938% {
    top: -1850px;
  }
  55.08771938% {
    top: -1875px;
  }
  56.10035096% {
    top: -1875px;
  }
  56.14035096% {
    top: -1900px;
  }
  56.80210535% {
    top: -1900px;
  }
  56.84210535% {
    top: -1925px;
  }
  57.15298254% {
    top: -1925px;
  }
  57.19298254% {
    top: -1950px;
  }
  57.85473693% {
    top: -1950px;
  }
  57.89473693% {
    top: -1975px;
  }
  58.55649132% {
    top: -1975px;
  }
  58.59649132% {
    top: -2000px;
  }
  58.90736851% {
    top: -2000px;
  }
  58.94736851% {
    top: -2025px;
  }
  59.6091229% {
    top: -2025px;
  }
  59.6491229% {
    top: -2050px;
  }
  60.66175448% {
    top: -2050px;
  }
  60.70175448% {
    top: -2075px;
  }
  61.71438606% {
    top: -2075px;
  }
  61.75438606% {
    top: -2100px;
  }
  62.76701764% {
    top: -2100px;
  }
  62.80701764% {
    top: -2125px;
  }
  63.46877203% {
    top: -2125px;
  }
  63.50877203% {
    top: -2150px;
  }
  64.17052642% {
    top: -2150px;
  }
  64.21052642% {
    top: -2175px;
  }
  65.223158% {
    top: -2175px;
  }
  65.263158% {
    top: -2200px;
  }
  66.27578958% {
    top: -2200px;
  }
  66.31578958% {
    top: -2225px;
  }
  68.03017554% {
    top: -2225px;
  }
  68.07017554% {
    top: -2250px;
  }
  68.38105273% {
    top: -2250px;
  }
  68.42105273% {
    top: -2275px;
  }
  69.08280712% {
    top: -2275px;
  }
  69.12280712% {
    top: -2300px;
  }
  69.78456151% {
    top: -2300px;
  }
  69.82456151% {
    top: -2325px;
  }
  70.1354387% {
    top: -2325px;
  }
  70.1754387% {
    top: -2350px;
  }
  70.83719309% {
    top: -2350px;
  }
  70.87719309% {
    top: -2375px;
  }
  71.18807028% {
    top: -2375px;
  }
  71.22807028% {
    top: -2400px;
  }
  71.88982467% {
    top: -2400px;
  }
  71.92982467% {
    top: -2425px;
  }
  72.59157906% {
    top: -2425px;
  }
  72.63157906% {
    top: -2450px;
  }
  72.94245625% {
    top: -2450px;
  }
  72.98245625% {
    top: -2475px;
  }
  73.99508783% {
    top: -2475px;
  }
  74.03508783% {
    top: -2500px;
  }
  74.69684222% {
    top: -2500px;
  }
  74.73684222% {
    top: -2525px;
  }
  75.39859661% {
    top: -2525px;
  }
  75.43859661% {
    top: -2550px;
  }
  76.45122819% {
    top: -2550px;
  }
  76.49122819% {
    top: -2575px;
  }
  76.80210538% {
    top: -2575px;
  }
  76.84210538% {
    top: -2600px;
  }
  77.50385977% {
    top: -2600px;
  }
  77.54385977% {
    top: -2625px;
  }
  77.85473696% {
    top: -2625px;
  }
  77.89473696% {
    top: -2650px;
  }
  78.55649135% {
    top: -2650px;
  }
  78.59649135% {
    top: -2675px;
  }
  78.90736854% {
    top: -2675px;
  }
  78.94736854% {
    top: -2700px;
  }
  79.96000012% {
    top: -2700px;
  }
  80.00000012% {
    top: -2725px;
  }
  81.0126317% {
    top: -2725px;
  }
  81.0526317% {
    top: -2750px;
  }
  82.06526328% {
    top: -2750px;
  }
  82.10526328% {
    top: -2775px;
  }
  82.41614047% {
    top: -2775px;
  }
  82.45614047% {
    top: -2800px;
  }
  83.11789486% {
    top: -2800px;
  }
  83.15789486% {
    top: -2825px;
  }
  83.81964925% {
    top: -2825px;
  }
  83.85964925% {
    top: -2850px;
  }
  84.17052644% {
    top: -2850px;
  }
  84.21052644% {
    top: -2875px;
  }
  84.87228083% {
    top: -2875px;
  }
  84.91228083% {
    top: -2900px;
  }
  85.22315802% {
    top: -2900px;
  }
  85.26315802% {
    top: -2925px;
  }
  85.92491241% {
    top: -2925px;
  }
  85.96491241% {
    top: -2950px;
  }
  86.6266668% {
    top: -2950px;
  }
  86.6666668% {
    top: -2975px;
  }
  86.97754399% {
    top: -2975px;
  }
  87.01754399% {
    top: -3000px;
  }
  87.67929838% {
    top: -3000px;
  }
  87.71929838% {
    top: -3025px;
  }
  88.03017557% {
    top: -3025px;
  }
  88.07017557% {
    top: -3050px;
  }
  88.73192996% {
    top: -3050px;
  }
  88.77192996% {
    top: -3075px;
  }
  89.78456154% {
    top: -3075px;
  }
  89.82456154% {
    top: -3100px;
  }
  90.48631593% {
    top: -3100px;
  }
  90.52631593% {
    top: -3125px;
  }
  91.18807032% {
    top: -3125px;
  }
  91.22807032% {
    top: -3150px;
  }
  91.53894751% {
    top: -3150px;
  }
  91.57894751% {
    top: -3175px;
  }
  92.2407019% {
    top: -3175px;
  }
  92.2807019% {
    top: -3200px;
  }
  92.59157909% {
    top: -3200px;
  }
  92.63157909% {
    top: -3225px;
  }
  93.29333348% {
    top: -3225px;
  }
  93.33333348% {
    top: -3250px;
  }
  93.99508787% {
    top: -3250px;
  }
  94.03508787% {
    top: -3275px;
  }
  94.34596506% {
    top: -3275px;
  }
  94.38596506% {
    top: -3300px;
  }
  95.04771945% {
    top: -3300px;
  }
  95.08771945% {
    top: -3325px;
  }
  95.74947384% {
    top: -3325px;
  }
  95.78947384% {
    top: -3350px;
  }
  96.45122823% {
    top: -3350px;
  }
  96.49122823% {
    top: -3375px;
  }
  97.854737% {
    top: -3375px;
  }
  97.894737% {
    top: -3400px;
  }
  98.90736858% {
    top: -3400px;
  }
  98.94736858% {
    top: -3425px;
  }
  99.60912297% {
    top: -3425px;
  }
  99.64912297% {
    top: -3450px;
  }
  99.96000016% {
    top: -3450px;
  }
  to {
    top: -3450px;
  }
}
</style>