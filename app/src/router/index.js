import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Main.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  // {
  //   path: '/new-music-home',
  //   name: 'New Music Home',
  //   component: () => import('../views/NewMusicHome.vue')
  // },
  // {
  //   path: '/heroes',
  //   name: 'Heroes 3',
  //   component: () => import('../views/Heroes.vue')
  // },
  {
    path: '/features',
    name: 'Next Features List',
    component: () => import('../views/Features.vue')
  },
  {
    path: '/brightside',
    name: 'Lil Peep - Brightside',
    component: () => import('../views/Brightside.vue')
  },
  {
    path: '/all-the-right-moves',
    name: 'OneRepublic - All The Right Moves',
    component: () => import('../views/AllTheRightMoves.vue')
  },
  {
    path: '/ayo',
    name: '50 Cent - Ayo Technology ft. Justin Timberlake',
    component: () => import('../views/AyoTechnology.vue')
  },
  {
    path: '/waiting',
    name: 'Linkin Park - Waiting For The End',
    component: () => import('../views/WaitingTheEnd.vue')
  },
  {
    path: '/god',
    name: 'Eminem - Rap God',
    component: () => import('../views/God.vue')
  },
  {
    path: '/apologize',
    name: 'Timbaland - Apologize ft. OneRepublic',
    component: () => import('../views/Apologize.vue')
  },
  {
    path: '/faint',
    name: 'Linkin Park - Faint',
    component: () => import('../views/Faint.vue')
  },
  {
    path: '/crush',
    name: 'Tessa Violet - Crush',
    component: () => import('../views/Crush.vue')
  },
  {
    path: '/lie',
    name: 'Tokio Hotel x VIZE - White Lies',
    component: () => import('../views/Lie.vue')
  },
  {
    path: '/numb',
    name: 'Linkin Park - Numb',
    component: () => import('../views/Numb.vue')
  },
  {
    path: '/stand',
    name: 'Nickelback - When We Stand Together',
    component: () => import('../views/Stand.vue')
  },
  {
    path: '/meds',
    name: 'Placebo - Meds',
    component: () => import('../views/Meds.vue')
  },
  {
    path: '/thune',
    name: 'Angèle - La Thune',
    component: () => import('../views/Thune.vue')
  },
  {
    path: '/alors',
    name: 'Stromae - Alors On Danse',
    component: () => import('../views/Alors.vue')
  },
  {
    path: '/pursuit',
    name: 'Kid Cudi - Pursuit Of Happiness ft. MGMT',
    component: () => import('../views/Pursuit.vue')
  },
  {
    path: '/pursuitx',
    name: 'Kid Cudi - Pursuit of Happiness (Steve Aoki Remix) - Project X',
    component: () => import('../views/Pursuitx.vue')
  },
  {
    path: '/womanizer',
    name: 'Britney Spears - Womanizer',
    component: () => import('../views/Womanizer.vue')
  },
  {
    path: '/heads',
    name: 'Yeah Yeah Yeahs - Heads Will Roll',
    component: () => import('../views/Heads.vue')
  },
  {
    path: '/arms',
    name: 'XXXTENTACION & Lil Pump - Arms Around You feat. Maluma & Swae Lee',
    component: () => import('../views/Arms.vue')
  },
  {
    path: '/devil',
    name: 'Machine Gun Kelly - Rap Devil',
    component: () => import('../views/Devil.vue')
  },
  {
    path: '/started',
    name: 'Pitbull - Get It Started ft. Shakira',
    component: () => import('../views/Started.vue')
  },
  {
    path: '/g6',
    name: 'Far East Movement ft. The Cataracs, DEV - Like A G6',
    component: () => import('../views/Gsix.vue')
  },
  {
    path: '/aerials',
    name: 'System Of A Down - Aerials',
    component: () => import('../views/Aerials.vue')
  },
  {
    path: '/albatrauz',
    name: 'AronChupa - I\'m an Albatraoz',
    component: () => import('../views/Albatrauz.vue')
  },
  {
    path: '/awake',
    name: 'Skillet - Awake and Alive',
    component: () => import('../views/Awake.vue')
  },
  {
    path: '/around',
    name: 'Flyleaf - All Around Me',
    component: () => import('../views/Around.vue')
  },
  {
    path: '/bonbon',
    name: 'Era Istrefi - Bonbon (English)',
    component: () => import('../views/Bonbon.vue')
  },
  {
    path: '/bring',
    name: 'Evanescence - Bring Me To Life',
    component: () => import('../views/Bring.vue')
  },
  {
    path: '/changes',
    name: '2Pac - Changes ft. Talent',
    component: () => import('../views/Changes.vue')
  },
  {
    path: '/decode',
    name: 'Paramore - Decode',
    component: () => import('../views/Decode.vue')
  },
  {
    path: '/despacito',
    name: 'Luis Fonsi - Despacito ft. Daddy Yankee',
    component: () => import('../views/Despacito.vue')
  },
  {
    path: '/die',
    name: 'The Pretty Reckless - Make Me Wanna Die\n',
    component: () => import('../views/Die.vue')
  },
  {
    path: '/ending',
    name: 'Avril Lavigne - My Happy Ending',
    component: () => import('../views/Ending.vue')
  },
  {
    path: '/girls',
    name: 'Maroon 5 - Girls Like You ft. Cardi B',
    component: () => import('../views/Girls.vue')
  },
  {
    path: '/funk',
    name: 'Mark Ronson - Uptown Funk ft. Bruno Mars',
    component: () => import('../views/Funk.vue')
  },
  {
    path: '/hate',
    name: 'Three Days Grace - I Hate Everything About You',
    component: () => import('../views/Hate.vue')
  },
  {
    path: '/hero',
    name: 'Skillet - Hero',
    component: () => import('../views/Hero.vue')
  },
  {
    path: '/kids',
    name: 'The Offspring - The Kids Aren\'t Alright',
    component: () => import('../views/Kids.vue')
  },
  {
    path: '/late',
    name: 'Three Days Grace - Never Too Late',
    component: () => import('../views/Late.vue')
  },
  {
    path: '/lazer',
    name: 'Major Lazer & DJ Snake - Lean On (feat. MØ)',
    component: () => import('../views/Lazer.vue')
  },
  {
    path: '/medicine',
    name: 'The Pretty Reckless - My Medicine',
    component: () => import('../views/Medicine.vue')
  },
  {
    path: '/misery',
    name: 'Halestorm - I Miss The Misery',
    component: () => import('../views/Misery.vue')
  },
  {
    path: '/morethanyouknow',
    name: 'Axwell Λ Ingrosso - More Than You Know & Renegade',
    component: () => import('../views/More.vue')
  },
  {
    path: '/paramonster',
    name: 'Paramore - Monster',
    component: () => import('../views/Paramonster.vue')
  },
  {
    path: '/saveme',
    name: 'Remy Zero - Save Me',
    component: () => import('../views/Remind.vue')
  },
  {
    path: '/dre',
    name: 'Dr. Dre ft. Snoop Dogg - Still D.R.E.',
    component: () => import('../views/Dre.vue')
  },
  {
    path: '/stolen',
    name: 'Milky Chance - Stolen Dance',
    component: () => import('../views/Stolen.vue')
  },
  {
    path: '/stressed',
    name: 'Twenty One Pilots - Stressed Out',
    component: () => import('../views/Stressed.vue')
  },
  {
    path: '/throughtless',
    name: 'Korn - Thoughtless',
    component: () => import('../views/Throughtless.vue')
  },
  {
    path: '/know-trouble',
    name: 'Taylor Swift - I Knew You Were Trouble',
    component: () => import('../views/KnowTrouble.vue')
  },
  {
    path: '/whispers',
    name: 'Skillet - Whispers In The Dark',
    component: () => import('../views/Whispers.vue')
  },
  {
    path: '/astro',
    name: 'Masked Wolf - Astronaut In The Ocean',
    component: () => import('../views/Astro.vue')
  },
  // {
  //   path: '/',
  //   name: '',
  //   component: () => import('../views/.vue')
  // },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
