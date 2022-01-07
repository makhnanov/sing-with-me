<template>
  <div class="resume">
    <div class="container">
      <YoutubeVue3 ref="youtube" :videoid="play.video_id" :loop="play.loop" :width="854" :height="480"
                   @ended="onEnded" @paused="onPaused" @played="onPlayed"/>
      <div class="text" v-bind:class="{ hidden: !isMusicListen }">

        <div class="text-block" v-bind:class="{ paused: !isMusicListen }">
          {{ textBlock }}
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
        video_id:"XbGs_qK2PQA",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      play : {
        video_id:"XbGs_qK2PQA",
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Look, I was gonna go easy on you and not to hurt your feelings\n' +
          'But I\'m only going to get this one chance\n' +
          'Something\'s wrong, I can feel it\n' +
          'Just a feeling I\'ve got,\n' +
          'Like something\'s about to happen, but I don\'t know what\n' +
          'If that means, what I think it means, we\'re in trouble, big trouble,\n' +
          'And if he is as bananas as you say, I\'m not taking any chances\n' +
          'You were just what the doctor ordered\n' +
          'I\'m beginning to feel like a Rap God, Rap God\n' +
          'All my people from the front to the back nod, back nod\n' +
          'Now who thinks their arms are long enough to slapbox, slapbox?\n' +
          'They said I rap like a robot, so call me Rapbot\n' +
          'But for me to rap like a computer must be in my genes\n' +
          'I got a laptop in my back pocket\n' +
          'My pen\'ll go off when I half-cock it\n' +
          'Got a fat knot from that rap profit\n' +
          'Made a living and a killing off it\n' +
          'Ever since Bill Clinton was still in office\n' +
          'With Monica Lewinsky feeling on his nut-sack\n' +
          'I\'m an MC still as honest\n' +
          'But as rude and as indecent as all hell\n' +
          'Syllables, killaholic (Kill \'em all with)\n' +
          'This slickety, gibbedy, hibbedy hip-hop\n' +
          'You don\'t really wanna get into a pissing match with this rappidy rap\n' +
          'Packing a Mac in the back of the Ac,\n' +
          'Backpack rap crap, yep, yep, yackity-yak\n' +
          'Now at the exact same time\n' +
          'I attempt these lyrical acrobat stunts while I\'m practicing that\n' +
          'I\'ll still be able to break a motherfuckin\' table\n' +
          'Over the back of a couple of faggots and crack it in half\n' +
          'Only realized it was ironic\n' +
          'I was signed to Aftermath after the fact\n' +
          'How could I not blow?\n' +
          'All I do is drop F-bombs, feel my wrath of attack\n' +
          'Rappers are having a rough time period, here\'s a maxipad\n' +
          'It\'s actually disastrously bad for the wack\n' +
          'While I\'m masterfully constructing this masterpiece as\n' +
          'I\'m beginning to feel like a Rap God, Rap God\n' +
          'All my people from the front to the back nod, back nod\n' +
          'Now who thinks their arms are long enough to slapbox, slapbox?\n' +
          'Let me show you maintaining this shit ain\'t that hard, that hard\n' +
          'Everybody want the key and the secret to rap immortality like I have got\n' +
          'Well, to be truthful the blueprint\'s simply rage and youthful exuberance\n' +
          'Everybody loves to root for a nuisance\n' +
          'Hit the earth like an asteroid, did nothing but shoot for the moon since\n' +
          'MC\'s get taken to school with this music\n' +
          'Cause I use it as a vehicle to bust a rhyme\n' +
          'Now I lead a new school full of students\n' +
          'Me? I\'m a product of Rakim, Lakim Shabazz, 2Pac N-\n' +
          '-W.A, Cube, Hey Doc, Ren, Yella, Eazy, thank you, they got Slim\n' +
          'Inspired enough to one day grow up, blow up and be in a position\n' +
          'To meet Run DMC, induct them, into the motherfuckin\' Rock n\' Roll Hall of Fame\n' +
          'Even though I walk in the church and burst in a ball of flames\n' +
          'Only Hall of Fame I be inducted in is the alcohol of fame\n' +
          'On the wall of shame\n' +
          'You fags think it\'s all a game \'til I walk a flock of flames\n' +
          'Off a plank, and tell me what in the fuck are you thinking?\n' +
          'Little gay looking boy\n' +
          'So gay I can barely say it with a straight face looking boy (haha!)\n' +
          'You witnessing a massacre\n' +
          'Like you watching a church gathering take place looking boy\n' +
          'Oy vey, that boy\'s gay, that\'s all they say looking boy\n' +
          'You get a thumbs up, pat on the back\n' +
          'And a way to go from your label everyday looking boy\n' +
          'Hey, looking boy, what you say looking boy?\n' +
          'I get a "hell yeah" from Dre looking boy\n' +
          'I\'mma work for everything I have\n' +
          'Never ask nobody for shit, get outta my face looking boy\n' +
          'Basically boy you\'re never gonna be capable\n' +
          'To keeping up with the same pace looking boy\n' +
          'I\'m beginning to feel like a Rap God, Rap God\n' +
          'All my people from the front to the back nod, back nod\n' +
          'The way I\'m racing around the track, call me Nascar, Nascar\n' +
          'Dale Earnhardt of the trailer park, the White Trash God\n' +
          'Kneel before General Zod this planet\'s Krypton, no Asgard, Asgard\n' +
          'So you be Thor and I\'ll be Odin, you rodent, I\'m omnipotent\n' +
          'Let off then I\'m reloading immediately with these bombs I\'m totin\'\n' +
          'And I should not be woken\n' +
          'I\'m the walking dead, but I\'m just a talking head, a zombie floating\n' +
          'But I got your mom deep throating\n' +
          'I\'m out my ramen noodle, we have nothing in common, poodle\n' +
          'I\'m a doberman, pinch yourself in the arm and pay homage, pupil\n' +
          'It\'s me, my honesty\'s brutal\n' +
          'But it\'s honestly futile if I don\'t utilize what I do though\n' +
          'For good at least once in a while\n' +
          'So I wanna make sure somewhere\n' +
          'In this chicken scratch I scribble and doodle\n' +
          'Enough rhymes to maybe try to help\n' +
          'Get some people through tough times\n' +
          'But I gotta keep a few punchlines just in case cause even you unsigned\n' +
          'Rappers are hungry looking at me like it\'s lunchtime\n' +
          'I know there was a time where once I\n' +
          'Was king of the underground,\n' +
          'But I still rap like I\'m on my Pharoahe Monch grind\n' +
          'So I crunch rhymes, but sometimes when you combine\n' +
          'Appeal with the skin color of mine\n' +
          'You get too big and here they come trying to censor you\n' +
          'Like that one line I said\n' +
          'On "I\'m Back" from the Mathers LP1\n' +
          'Where I tried to say I take seven kids from Columbine\n' +
          'Put \'em all in a line, add an AK-47, a revolver and a nine\n' +
          'See if I get away with it now that I ain\'t as big as I was\n' +
          'But I\'ve morphed into an immortal coming through the portal\n' +
          'You\'re stuck in a timewarp from 2004 though\n' +
          'And I don\'t know what the fuck that you rhyme for\n' +
          'You\'re pointless as Rapunzel with fucking cornrows\n' +
          'You\'re like normal, fuck being normal\n' +
          'And I just bought a new Raygun from the future\n' +
          'To just come and shoot ya like when Fabolous made Ray J mad\n' +
          'Cause Fab said he looked like a fag at Mayweather\'s pad\n' +
          'Singin\' to a man while they played piano\n' +
          'Man, oh man, that was a 24/7 special on the cable channel\n' +
          'So Ray J went straight to the radio station the very next day\n' +
          '\'\'Hey, Fab, I\'mma kill you\'\'\n' +
          'Lyrics coming at you at supersonic speed, (JJ Fad)\n' +
          'Uh, sama lamaa duma lamaa you assuming I\'m a human\n' +
          'What I gotta do to get it through to you I\'m superhuman\n' +
          'Innovative and I\'m made of rubber\n' +
          'So that anything you say is ricocheting off of me and it\'ll glue to you\n' +
          'I\'m devastating, more than ever demonstrating\n' +
          'How to give a motherfuckin\' audience a feeling like it\'s levitating\n' +
          'Never fading, and I know the haters are forever waiting\n' +
          'For the day that they can say I fell off, they\'d be celebrating\n' +
          'Cause I know the way to get \'em motivated\n' +
          'I make elevating music, you make elevator music\n' +
          'Oh, he\'s too mainstream\n' +
          'Well, that\'s what they do when they get jealous, they confuse it\n' +
          'It\'s not hip hop, it\'s pop, cause I found a hella way to fuse it\n' +
          'With rock, shock rap with Doc\n' +
          'Throw on Lose Yourself and make \'em lose it\n' +
          'I don\'t know how to make songs like that\n' +
          'I don\'t know what words to use\n' +
          'Let me know when it occurs to you\n' +
          'While I\'m ripping any one of these verses, that versus you\n' +
          'It\'s curtains, I\'m inadvertently hurtin\' you\n' +
          'How many verses I gotta murder to prove\n' +
          'That if you were half as nice at songs,\n' +
          'You can sacrifice virgins to (ughhh)\n' +
          'School flunkie, pill junky\n' +
          'But look at the accolades the skills brung me\n' +
          'Full of myself, but still hungry\n' +
          'I bully myself cause I make me do what I put my mind to\n' +
          'And I\'m a million leagues above you,\n' +
          'Ill when I speak in tongues\n' +
          'But it\'s still tongue in cheek, fuck you\n' +
          'I\'m drunk so Satan take the fucking wheel,\n' +
          'I\'m asleep in the front seat\n' +
          'Bumping Heavy D and the Boys, still chunky, but funky\n' +
          'But in my head there\'s something I can feel tugging and struggling\n' +
          'Angels fight with devils and here\'s what they want from me\n' +
          'They\'re asking me to eliminate some of the women hate\n' +
          'But if you take into consideration the bitter hatred I had\n' +
          'Then you may be a little patient and more sympathetic to the situation\n' +
          'And understand the discrimination\n' +
          'But fuck it, life\'s handing you lemons, make lemonade then\n' +
          'But if I can\'t batter the women how the fuck am I supposed to bake them a cake then?\n' +
          'Don\'t mistake it for Satan\n' +
          'It\'s a fatal mistake if you think I need to be overseas\n' +
          'And take a vacation to trip abroad\n' +
          'And make her fall on her face and don\'t be a retard\n' +
          'Be a king? Think not — why be a king when you can be a God?\n',
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
  /*background-color: white;*/
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

  top: -4000px;
  animation: move 361s linear alternate;
  /*+ 2s */
}

@keyframes move {
  from {
    top: 0;
  }
  1.06803324% {
    top: 0;
  }
  1.10803324% {
    top: -25px;
  }
  2.17606648% {
    top: -25px;
  }
  2.21606648% {
    top: -50px;
  }
  3.00709141% {
    top: -50px;
  }
  3.04709141% {
    top: -75px;
  }
  3.56110803% {
    top: -75px;
  }
  3.60110803% {
    top: -100px;
  }
  4.66914127% {
    top: -100px;
  }
  4.70914127% {
    top: -125px;
  }
  5.77717451% {
    top: -125px;
  }
  5.81717451% {
    top: -150px;
  }
  6.60819944% {
    top: -150px;
  }
  6.64819944% {
    top: -175px;
  }
  7.16221606% {
    top: -175px;
  }
  7.20221606% {
    top: -200px;
  }
  7.99324099% {
    top: -200px;
  }
  8.03324099% {
    top: -225px;
  }
  8.82426592% {
    top: -225px;
  }
  8.86426592% {
    top: -250px;
  }
  9.65529085% {
    top: -250px;
  }
  9.69529085% {
    top: -275px;
  }
  10.48631578% {
    top: -275px;
  }
  10.52631578% {
    top: -300px;
  }
  11.0403324% {
    top: -300px;
  }
  11.0803324% {
    top: -325px;
  }
  11.59434902% {
    top: -325px;
  }
  11.63434902% {
    top: -350px;
  }
  11.87135733% {
    top: -350px;
  }
  11.91135733% {
    top: -375px;
  }
  12.42537395% {
    top: -375px;
  }
  12.46537395% {
    top: -400px;
  }
  12.70238226% {
    top: -400px;
  }
  12.74238226% {
    top: -425px;
  }
  13.25639888% {
    top: -425px;
  }
  13.29639888% {
    top: -450px;
  }
  13.8104155% {
    top: -450px;
  }
  13.8504155% {
    top: -475px;
  }
  14.08742381% {
    top: -475px;
  }
  14.12742381% {
    top: -500px;
  }
  14.36443212% {
    top: -500px;
  }
  14.40443212% {
    top: -525px;
  }
  14.91844874% {
    top: -525px;
  }
  14.95844874% {
    top: -550px;
  }
  15.47246536% {
    top: -550px;
  }
  15.51246536% {
    top: -575px;
  }
  16.02648198% {
    top: -575px;
  }
  16.06648198% {
    top: -600px;
  }
  16.30349029% {
    top: -600px;
  }
  16.34349029% {
    top: -625px;
  }
  16.85750691% {
    top: -625px;
  }
  16.89750691% {
    top: -650px;
  }
  17.13451522% {
    top: -650px;
  }
  17.17451522% {
    top: -675px;
  }
  17.68853184% {
    top: -675px;
  }
  17.72853184% {
    top: -700px;
  }
  18.24254846% {
    top: -700px;
  }
  18.28254846% {
    top: -725px;
  }
  18.79656508% {
    top: -725px;
  }
  18.83656508% {
    top: -750px;
  }
  19.07357339% {
    top: -750px;
  }
  19.11357339% {
    top: -775px;
  }
  19.62759001% {
    top: -775px;
  }
  19.66759001% {
    top: -800px;
  }
  19.90459832% {
    top: -800px;
  }
  19.94459832% {
    top: -825px;
  }
  20.45861494% {
    top: -825px;
  }
  20.49861494% {
    top: -850px;
  }
  21.01263156% {
    top: -850px;
  }
  21.05263156% {
    top: -875px;
  }
  21.56664818% {
    top: -875px;
  }
  21.60664818% {
    top: -900px;
  }
  22.39767311% {
    top: -900px;
  }
  22.43767311% {
    top: -925px;
  }
  23.22869804% {
    top: -925px;
  }
  23.26869804% {
    top: -950px;
  }
  24.05972297% {
    top: -950px;
  }
  24.09972297% {
    top: -975px;
  }
  24.8907479% {
    top: -975px;
  }
  24.9307479% {
    top: -1000px;
  }
  25.72177283% {
    top: -1000px;
  }
  25.76177283% {
    top: -1025px;
  }
  26.82980607% {
    top: -1025px;
  }
  26.86980607% {
    top: -1050px;
  }
  27.38382269% {
    top: -1050px;
  }
  27.42382269% {
    top: -1075px;
  }
  27.93783931% {
    top: -1075px;
  }
  27.97783931% {
    top: -1100px;
  }
  28.49185593% {
    top: -1100px;
  }
  28.53185593% {
    top: -1125px;
  }
  29.32288086% {
    top: -1125px;
  }
  29.36288086% {
    top: -1150px;
  }
  29.87689748% {
    top: -1150px;
  }
  29.91689748% {
    top: -1175px;
  }
  30.15390579% {
    top: -1175px;
  }
  30.19390579% {
    top: -1200px;
  }
  30.98493072% {
    top: -1200px;
  }
  31.02493072% {
    top: -1225px;
  }
  32.09296396% {
    top: -1225px;
  }
  32.13296396% {
    top: -1250px;
  }
  32.92398889% {
    top: -1250px;
  }
  32.96398889% {
    top: -1275px;
  }
  34.03202213% {
    top: -1275px;
  }
  34.07202213% {
    top: -1300px;
  }
  34.58603875% {
    top: -1300px;
  }
  34.62603875% {
    top: -1325px;
  }
  35.41706368% {
    top: -1325px;
  }
  35.45706368% {
    top: -1350px;
  }
  35.69407199% {
    top: -1350px;
  }
  35.73407199% {
    top: -1375px;
  }
  36.80210523% {
    top: -1375px;
  }
  36.84210523% {
    top: -1400px;
  }
  37.63313016% {
    top: -1400px;
  }
  37.67313016% {
    top: -1425px;
  }
  37.91013847% {
    top: -1425px;
  }
  37.95013847% {
    top: -1450px;
  }
  38.46415509% {
    top: -1450px;
  }
  38.50415509% {
    top: -1475px;
  }
  38.7411634% {
    top: -1475px;
  }
  38.7811634% {
    top: -1500px;
  }
  39.29518002% {
    top: -1500px;
  }
  39.33518002% {
    top: -1525px;
  }
  40.12620495% {
    top: -1525px;
  }
  40.16620495% {
    top: -1550px;
  }
  40.68022157% {
    top: -1550px;
  }
  40.72022157% {
    top: -1575px;
  }
  41.23423819% {
    top: -1575px;
  }
  41.27423819% {
    top: -1600px;
  }
  41.5112465% {
    top: -1600px;
  }
  41.5512465% {
    top: -1625px;
  }
  42.06526312% {
    top: -1625px;
  }
  42.10526312% {
    top: -1650px;
  }
  42.34227143% {
    top: -1650px;
  }
  42.38227143% {
    top: -1675px;
  }
  42.89628805% {
    top: -1675px;
  }
  42.93628805% {
    top: -1700px;
  }
  43.45030467% {
    top: -1700px;
  }
  43.49030467% {
    top: -1725px;
  }
  44.00432129% {
    top: -1725px;
  }
  44.04432129% {
    top: -1750px;
  }
  44.55833791% {
    top: -1750px;
  }
  44.59833791% {
    top: -1775px;
  }
  45.66637115% {
    top: -1775px;
  }
  45.70637115% {
    top: -1800px;
  }
  46.49739608% {
    top: -1800px;
  }
  46.53739608% {
    top: -1825px;
  }
  47.0514127% {
    top: -1825px;
  }
  47.0914127% {
    top: -1850px;
  }
  48.15944594% {
    top: -1850px;
  }
  48.19944594% {
    top: -1875px;
  }
  49.26747918% {
    top: -1875px;
  }
  49.30747918% {
    top: -1900px;
  }
  50.09850411% {
    top: -1900px;
  }
  50.13850411% {
    top: -1925px;
  }
  50.65252073% {
    top: -1925px;
  }
  50.69252073% {
    top: -1950px;
  }
  51.48354566% {
    top: -1950px;
  }
  51.52354566% {
    top: -1975px;
  }
  52.03756228% {
    top: -1975px;
  }
  52.07756228% {
    top: -2000px;
  }
  52.86858721% {
    top: -2000px;
  }
  52.90858721% {
    top: -2025px;
  }
  53.69961214% {
    top: -2025px;
  }
  53.73961214% {
    top: -2050px;
  }
  54.53063707% {
    top: -2050px;
  }
  54.57063707% {
    top: -2075px;
  }
  55.361662% {
    top: -2075px;
  }
  55.401662% {
    top: -2100px;
  }
  55.63867031% {
    top: -2100px;
  }
  55.67867031% {
    top: -2125px;
  }
  55.91567862% {
    top: -2125px;
  }
  55.95567862% {
    top: -2150px;
  }
  56.46969524% {
    top: -2150px;
  }
  56.50969524% {
    top: -2175px;
  }
  57.02371186% {
    top: -2175px;
  }
  57.06371186% {
    top: -2200px;
  }
  57.30072017% {
    top: -2200px;
  }
  57.34072017% {
    top: -2225px;
  }
  58.1317451% {
    top: -2225px;
  }
  58.1717451% {
    top: -2250px;
  }
  58.68576172% {
    top: -2250px;
  }
  58.72576172% {
    top: -2275px;
  }
  59.23977834% {
    top: -2275px;
  }
  59.27977834% {
    top: -2300px;
  }
  59.51678665% {
    top: -2300px;
  }
  59.55678665% {
    top: -2325px;
  }
  60.07080327% {
    top: -2325px;
  }
  60.11080327% {
    top: -2350px;
  }
  60.9018282% {
    top: -2350px;
  }
  60.9418282% {
    top: -2375px;
  }
  61.17883651% {
    top: -2375px;
  }
  61.21883651% {
    top: -2400px;
  }
  62.00986144% {
    top: -2400px;
  }
  62.04986144% {
    top: -2425px;
  }
  62.28686975% {
    top: -2425px;
  }
  62.32686975% {
    top: -2450px;
  }
  62.84088637% {
    top: -2450px;
  }
  62.88088637% {
    top: -2475px;
  }
  63.6719113% {
    top: -2475px;
  }
  63.7119113% {
    top: -2500px;
  }
  64.50293623% {
    top: -2500px;
  }
  64.54293623% {
    top: -2525px;
  }
  65.61096947% {
    top: -2525px;
  }
  65.65096947% {
    top: -2550px;
  }
  66.16498609% {
    top: -2550px;
  }
  66.20498609% {
    top: -2575px;
  }
  66.71900271% {
    top: -2575px;
  }
  66.75900271% {
    top: -2600px;
  }
  67.27301933% {
    top: -2600px;
  }
  67.31301933% {
    top: -2625px;
  }
  68.10404426% {
    top: -2625px;
  }
  68.14404426% {
    top: -2650px;
  }
  68.65806088% {
    top: -2650px;
  }
  68.69806088% {
    top: -2675px;
  }
  69.2120775% {
    top: -2675px;
  }
  69.2520775% {
    top: -2700px;
  }
  69.76609412% {
    top: -2700px;
  }
  69.80609412% {
    top: -2725px;
  }
  70.32011074% {
    top: -2725px;
  }
  70.36011074% {
    top: -2750px;
  }
  70.87412736% {
    top: -2750px;
  }
  70.91412736% {
    top: -2775px;
  }
  71.70515229% {
    top: -2775px;
  }
  71.74515229% {
    top: -2800px;
  }
  72.53617722% {
    top: -2800px;
  }
  72.57617722% {
    top: -2825px;
  }
  72.81318553% {
    top: -2825px;
  }
  72.85318553% {
    top: -2850px;
  }
  73.36720215% {
    top: -2850px;
  }
  73.40720215% {
    top: -2875px;
  }
  73.92121877% {
    top: -2875px;
  }
  73.96121877% {
    top: -2900px;
  }
  74.47523539% {
    top: -2900px;
  }
  74.51523539% {
    top: -2925px;
  }
  74.7522437% {
    top: -2925px;
  }
  74.7922437% {
    top: -2950px;
  }
  75.30626032% {
    top: -2950px;
  }
  75.34626032% {
    top: -2975px;
  }
  75.58326863% {
    top: -2975px;
  }
  75.62326863% {
    top: -3000px;
  }
  76.13728525% {
    top: -3000px;
  }
  76.17728525% {
    top: -3025px;
  }
  76.69130187% {
    top: -3025px;
  }
  76.73130187% {
    top: -3050px;
  }
  76.96831018% {
    top: -3050px;
  }
  77.00831018% {
    top: -3075px;
  }
  77.5223268% {
    top: -3075px;
  }
  77.5623268% {
    top: -3100px;
  }
  78.07634342% {
    top: -3100px;
  }
  78.11634342% {
    top: -3125px;
  }
  78.35335173% {
    top: -3125px;
  }
  78.39335173% {
    top: -3150px;
  }
  78.90736835% {
    top: -3150px;
  }
  78.94736835% {
    top: -3175px;
  }
  79.73839328% {
    top: -3175px;
  }
  79.77839328% {
    top: -3200px;
  }
  80.2924099% {
    top: -3200px;
  }
  80.3324099% {
    top: -3225px;
  }
  80.56941821% {
    top: -3225px;
  }
  80.60941821% {
    top: -3250px;
  }
  81.12343483% {
    top: -3250px;
  }
  81.16343483% {
    top: -3275px;
  }
  81.40044314% {
    top: -3275px;
  }
  81.44044314% {
    top: -3300px;
  }
  81.95445976% {
    top: -3300px;
  }
  81.99445976% {
    top: -3325px;
  }
  82.50847638% {
    top: -3325px;
  }
  82.54847638% {
    top: -3350px;
  }
  82.78548469% {
    top: -3350px;
  }
  82.82548469% {
    top: -3375px;
  }
  83.33950131% {
    top: -3375px;
  }
  83.37950131% {
    top: -3400px;
  }
  83.89351793% {
    top: -3400px;
  }
  83.93351793% {
    top: -3425px;
  }
  84.17052624% {
    top: -3425px;
  }
  84.21052624% {
    top: -3450px;
  }
  85.00155117% {
    top: -3450px;
  }
  85.04155117% {
    top: -3475px;
  }
  85.55556779% {
    top: -3475px;
  }
  85.59556779% {
    top: -3500px;
  }
  86.10958441% {
    top: -3500px;
  }
  86.14958441% {
    top: -3525px;
  }
  86.94060934% {
    top: -3525px;
  }
  86.98060934% {
    top: -3550px;
  }
  87.49462596% {
    top: -3550px;
  }
  87.53462596% {
    top: -3575px;
  }
  88.04864258% {
    top: -3575px;
  }
  88.08864258% {
    top: -3600px;
  }
  88.32565089% {
    top: -3600px;
  }
  88.36565089% {
    top: -3625px;
  }
  88.87966751% {
    top: -3625px;
  }
  88.91966751% {
    top: -3650px;
  }
  89.43368413% {
    top: -3650px;
  }
  89.47368413% {
    top: -3675px;
  }
  90.26470906% {
    top: -3675px;
  }
  90.30470906% {
    top: -3700px;
  }
  91.09573399% {
    top: -3700px;
  }
  91.13573399% {
    top: -3725px;
  }
  91.92675892% {
    top: -3725px;
  }
  91.96675892% {
    top: -3750px;
  }
  92.75778385% {
    top: -3750px;
  }
  92.79778385% {
    top: -3775px;
  }
  93.31180047% {
    top: -3775px;
  }
  93.35180047% {
    top: -3800px;
  }
  93.86581709% {
    top: -3800px;
  }
  93.90581709% {
    top: -3825px;
  }
  94.41983371% {
    top: -3825px;
  }
  94.45983371% {
    top: -3850px;
  }
  95.25085864% {
    top: -3850px;
  }
  95.29085864% {
    top: -3875px;
  }
  96.08188357% {
    top: -3875px;
  }
  96.12188357% {
    top: -3900px;
  }
  96.63590019% {
    top: -3900px;
  }
  96.67590019% {
    top: -3925px;
  }
  97.18991681% {
    top: -3925px;
  }
  97.22991681% {
    top: -3950px;
  }
  97.74393343% {
    top: -3950px;
  }
  97.78393343% {
    top: -3975px;
  }
  98.57495836% {
    top: -3975px;
  }
  98.61495836% {
    top: -4000px;
  }
  99.95999991% {
    top: -4000px;
  }
  to {
    top: -4000px;
  }
}
</style>
