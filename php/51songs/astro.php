<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [17, 18],  //  Astro-naut
    [27, 29],  //  What you know about rollin' down in the deep?
    [33],  //  When your brain goes numb, you can call that mental freeze
    [37],  //  When these people talk too much, put that shit in slow motion, yeah
    [40],  //  I feel like an astronaut in the ocean, ayy
    [43],  //  What you know about rollin' down in the deep?
    [46],  //  When your brain goes numb, you can call that mental freeze
    [49],  //  When these people talk too much, put that shit in slow motion, yeah
    [52],  //  I feel like an astronaut in the ocean
    [53],  //  She say that I'm cool (damn straight)
    [55],  //  I'm like "yeah, that's true" (that's true)
    [57],  //  I believe in G-O-D (ayy)
    [59],  //  Don't believe in T-H-O-T
    [0],  //  She keep playing me dumb (play me)
    [2],  //  I'ma play her for fun (uh-huh)
    [3],  //  Y'all don't really know my mental
    [5],  //  Lemme give you the picture like stencil
    [6],  //  Falling out, in a drought
    [8],  //  No flow, rain wasn't pouring down (pouring down)
    [10],  //  See, that pain was all around
    [11],  //  See, my mode was kinda lounged
    [13],  //  Didn't know which-which way to turn
    [14],  //  Flow was cool but I still felt burnt
    [16],  //  Energy up, you can feel my surge
    [18],  //  I'ma kill everything like this purge (ayy)
    [21],  //  Let's just get this straight for a second, I'ma work
    [24],  //  Even if I don't get paid for progression, I'ma get it (get it)
    [27],  //  Everything that I do is electric
    [30],  //  I'ma keep it in a motion, keep it moving like kinetic, ayy (yeah, yeah, yeah, yeah)
    [32],  //  Put this shit in a frame, better know I don't blame
    [34],  //  Everything that I say, man I seen you deflate
    [35],  //  Let me elevate, this ain't a prank
    [37],  //  Have you walkin' on a plank, la-la-la-la-la, like
    [39],  //  Both hands together, God, let me pray (now let me pray)
    [43],  //  Uh, I've been going right, right around, call that relay (Masked Wolf)
    [44],  //  Pass the baton, back and I'm on
    [46],  //  Swimming in the pool, Kendrick Lamar, uh
    [48],  //  Want a piece of this, a piece of mine, my peace a sign
    [49],  //  Can you please read between the lines?
    [51],  //  My rhyme's inclined to break your spine
    [53],  //  They say that I'm so fine
    [54],  //  You could never match my grind
    [56],  //  Please do not, not waste my time
    [59],  //  What you know about rollin' down in the deep?
    [3],  //  When your brain goes numb, you can call that mental freeze
    [6],  //  When these people talk too much, put that shit in slow motion, yeah
    [9],  //  I feel like an astronaut in the ocean, ayy
    [12],  //  What you know about rollin' down in the deep?
    [15],  //  When your brain goes numb, you can call that mental freeze
    [19],  //  When these people talk too much, put that shit in slow motion, yeah
    [22],  //  I feel like an astronaut in the ocean
];

require_once __DIR__ . '/to_css.php';
