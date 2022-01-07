<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [10, 13],  //  Despite the lies that you're making
    [15],  //  Your love is mine for the taking
    [16],  //  My love is
    [18],  //  Just waiting
    [20],  //  To turn your tears to roses
    [30, 33],  //  Despite the lies that you're making
    [36],  //  Your love is mine for the taking
    [37],  //  My love is
    [38],  //  Just waiting
    [41],  //  To turn your tears to roses
    [43],  //  I will be the one that's gonna hold you
    [46],  //  I will be the one that you run to
    [47],  //  My love is
    [51],  //  A burning, consuming fire
    [53, 54],  //  No
    [57],  //  You'll never be alone
    [1],  //  When darkness comes, I'll light the night with stars
    [3],  //  Hear the whispers in the dark
    [4],  //  No
    [6],  //  You'll never be alone
    [12],  //  When darkness comes, you know I'm never far
    [14],  //  Hear the whispers in the dark
    [24, 27],  //  You feel so lonely and ragged
    [29],  //  You lay here broken and naked
    [31],  //  My love is
    [32],  //  Just waiting
    [34],  //  To clothe you in crimson roses
    [37],  //  I will be the one that's gonna find you
    [39],  //  I will be the one that's gonna guide you
    [41],  //  My love is
    [45],  //  A burning, consuming fire
    [47, 48],  //  No
    [50],  //  You'll never be alone
    [55],  //  When darkness comes, I'll light the night with stars
    [57],  //  Hear the whispers in the dark
    [58],  //  No
    [0],  //  You'll never be alone
    [5],  //  When darkness comes, you know I'm never far
    [8],  //  Hear the whispers in the dark
    [38, 39],  //  No
    [42],  //  You'll never be alone
    [46],  //  When darkness comes, I'll light the night with stars
    [48],  //  Hear the whispers in the dark
    [49],  //  No
    [52],  //  You'll never be alone
    [56],  //  When darkness comes, you know I'm never far
    [59],  //  Hear the whispers in the dark
    [2],  //  Whispers in the dark
    [4],  //  Whispers in the dark
    [9],  //  Whispers in the dark
];

require_once __DIR__ . '/to_css.php';
