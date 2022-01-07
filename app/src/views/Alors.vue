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
        video_id: 'VHoT4N43jK8',
        loop:1,
        origin: 'http://localhost:3000',
        autoplay: '0',
        showinfo: 0,
        rel: 0
      },
      isMusicListen: false,
      textBlock: '\n' +
          'Alors on\n' +
          'Alors on\n' +
          'Alors on\n' +
          'Qui dit étude dit travail\n' +
          'Qui dit taf te dit les thunes\n' +
          'Qui dit argent dit dépenses\n' +
          'Qui dit crédit dit créance\n' +
          'Qui dit dette te dit huissier\n' +
          'Et lui dit assis dans la merde\n' +
          'Qui dit Amour dit les gosses\n' +
          'Dit toujours et dit divorce\n' +
          'Qui dit proches te dit deuils\n' +
          'Car les problèmes ne viennent pas seuls\n' +
          'Qui dit crise te dit monde\n' +
          'Dit famine, dit tiers-monde\n' +
          'Qui dit fatigue dit réveil\n' +
          'Encore sourd de la veille\n' +
          'Alors on sort pour oublier tous les problèmes\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Et là tu te dis que c\'est fini car pire que ça ce serait la mort\n' +
          'Quand tu crois enfin que tu t\'en sors, quand y en a plus et ben y en a encore\n' +
          'Est-ce la zik ou les problèmes?\n' +
          'Les problèmes ou bien la musique\n' +
          'Ça te prend les tripes, ça te prend la tête\n' +
          'Et puis tu pries pour que ça s\'arrête\n' +
          'Mais c\'est ton corps, c\'est pas le ciel\n' +
          'Alors tu te bouches plus les oreilles\n' +
          'Et là tu cries encore plus fort\n' +
          'Et ça persiste\n' +
          'Alors on chante\n' +
          'Lalalalalala\n' +
          'Lalalalalala\n' +
          'Alors on chante\n' +
          'Lalalalalala\n' +
          'Lalalalalala\n' +
          'Alors on chante\n' +
          'Alors on chante\n' +
          'Et puis seulement quand c\'est fini\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Alors on danse\n' +
          'Et ben y en a encore\n' +
          'Et ben y en a encore\n' +
          'Et ben y en a encore\n' +
          'Et ben y en a encore\n' +
          'Et ben y en a encore'
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
  top: -1450px;
  animation: move 218s linear alternate;
}
@keyframes move {
  from {
    top: 0;
  }
  10.51045872% {
    top: 0;
  }
  10.55045872% {
    top: -25px;
  }
  12.34532111% {
    top: -25px;
  }
  12.38532111% {
    top: -50px;
  }
  14.1801835% {
    top: -50px;
  }
  14.2201835% {
    top: -75px;
  }
  15.09761469% {
    top: -75px;
  }
  15.13761469% {
    top: -100px;
  }
  16.01504588% {
    top: -100px;
  }
  16.05504588% {
    top: -125px;
  }
  16.93247707% {
    top: -125px;
  }
  16.97247707% {
    top: -150px;
  }
  17.84990826% {
    top: -150px;
  }
  17.88990826% {
    top: -175px;
  }
  18.76733945% {
    top: -175px;
  }
  18.80733945% {
    top: -200px;
  }
  19.68477064% {
    top: -200px;
  }
  19.72477064% {
    top: -225px;
  }
  20.14348624% {
    top: -225px;
  }
  20.18348624% {
    top: -250px;
  }
  21.51963303% {
    top: -250px;
  }
  21.55963303% {
    top: -275px;
  }
  22.43706422% {
    top: -275px;
  }
  22.47706422% {
    top: -300px;
  }
  23.35449541% {
    top: -300px;
  }
  23.39449541% {
    top: -325px;
  }
  24.2719266% {
    top: -325px;
  }
  24.3119266% {
    top: -350px;
  }
  25.18935779% {
    top: -350px;
  }
  25.22935779% {
    top: -375px;
  }
  26.10678898% {
    top: -375px;
  }
  26.14678898% {
    top: -400px;
  }
  27.02422017% {
    top: -400px;
  }
  27.06422017% {
    top: -425px;
  }
  28.40036696% {
    top: -425px;
  }
  28.44036696% {
    top: -450px;
  }
  29.31779815% {
    top: -450px;
  }
  29.35779815% {
    top: -475px;
  }
  31.15266054% {
    top: -475px;
  }
  31.19266054% {
    top: -500px;
  }
  32.98752293% {
    top: -500px;
  }
  33.02752293% {
    top: -525px;
  }
  34.82238532% {
    top: -525px;
  }
  34.86238532% {
    top: -550px;
  }
  36.65724771% {
    top: -550px;
  }
  36.69724771% {
    top: -575px;
  }
  38.4921101% {
    top: -575px;
  }
  38.5321101% {
    top: -600px;
  }
  40.32697249% {
    top: -600px;
  }
  40.36697249% {
    top: -625px;
  }
  42.16183488% {
    top: -625px;
  }
  42.20183488% {
    top: -650px;
  }
  43.99669727% {
    top: -650px;
  }
  44.03669727% {
    top: -675px;
  }
  45.83155966% {
    top: -675px;
  }
  45.87155966% {
    top: -700px;
  }
  47.66642205% {
    top: -700px;
  }
  47.70642205% {
    top: -725px;
  }
  48.58385324% {
    top: -725px;
  }
  48.62385324% {
    top: -750px;
  }
  49.50128443% {
    top: -750px;
  }
  49.54128443% {
    top: -775px;
  }
  50.41871562% {
    top: -775px;
  }
  50.45871562% {
    top: -800px;
  }
  51.33614681% {
    top: -800px;
  }
  51.37614681% {
    top: -825px;
  }
  52.253578% {
    top: -825px;
  }
  52.293578% {
    top: -850px;
  }
  53.17100919% {
    top: -850px;
  }
  53.21100919% {
    top: -875px;
  }
  54.08844038% {
    top: -875px;
  }
  54.12844038% {
    top: -900px;
  }
  54.54715598% {
    top: -900px;
  }
  54.58715598% {
    top: -925px;
  }
  55.00587158% {
    top: -925px;
  }
  55.04587158% {
    top: -950px;
  }
  56.38201837% {
    top: -950px;
  }
  56.42201837% {
    top: -975px;
  }
  58.67559635% {
    top: -975px;
  }
  58.71559635% {
    top: -1000px;
  }
  59.13431195% {
    top: -1000px;
  }
  59.17431195% {
    top: -1025px;
  }
  60.51045874% {
    top: -1025px;
  }
  60.55045874% {
    top: -1050px;
  }
  62.34532113% {
    top: -1050px;
  }
  62.38532113% {
    top: -1075px;
  }
  62.80403673% {
    top: -1075px;
  }
  62.84403673% {
    top: -1100px;
  }
  66.4737615% {
    top: -1100px;
  }
  66.5137615% {
    top: -1125px;
  }
  69.22605508% {
    top: -1125px;
  }
  69.26605508% {
    top: -1150px;
  }
  70.14348627% {
    top: -1150px;
  }
  70.18348627% {
    top: -1175px;
  }
  72.43706425% {
    top: -1175px;
  }
  72.47706425% {
    top: -1200px;
  }
  74.27192664% {
    top: -1200px;
  }
  74.31192664% {
    top: -1225px;
  }
  76.10678903% {
    top: -1225px;
  }
  76.14678903% {
    top: -1250px;
  }
  77.94165142% {
    top: -1250px;
  }
  77.98165142% {
    top: -1275px;
  }
  79.77651381% {
    top: -1275px;
  }
  79.81651381% {
    top: -1300px;
  }
  81.6113762% {
    top: -1300px;
  }
  81.6513762% {
    top: -1325px;
  }
  83.44623859% {
    top: -1325px;
  }
  83.48623859% {
    top: -1350px;
  }
  85.28110098% {
    top: -1350px;
  }
  85.32110098% {
    top: -1375px;
  }
  88.95082575% {
    top: -1375px;
  }
  88.99082575% {
    top: -1400px;
  }
  92.62055052% {
    top: -1400px;
  }
  92.66055052% {
    top: -1425px;
  }
  96.74899089% {
    top: -1425px;
  }
  96.78899089% {
    top: -1450px;
  }
  99.96000006% {
    top: -1450px;
  }
  to {
    top: -1450px;
  }
}
</style>
