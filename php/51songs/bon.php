<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';
//vxc1ufJxPGM
$timing = [
    [0,1],  //    Un jom Era
    [5, 8],  //    Un jom Era, and I'm coming for the light
    [9, 11],  //    All or nothing
    [14, 17],  //    Now or never
    [20, 22],  //    Coming straight from the KO
    [25],  //    And my heart knows the way, oh
    [27],  //    Never get in my way, oh
    [30],  //    Sun e bon sun e bon sun e bon sun e bonbon
    [33],  //    Bonbon, I know what you want
    [36],  //    Bonbon, bet you wanna taste it
    [38],  //    Bonbon, bet you wanna taste it
    [40],  //    I know what you want, want, want
    [43],  //    Bonbon, can you get it done, done?
    [46],  //    Bonbon, bet you wanna taste it
    [48],  //    Bonbon, my sip will get you wasted
    [51],  //    I know what you want, want, want
    [0, 1],  //    Nice to, nice to meet ya
    [3],  //    Mister, I'ma teach ya
    [5],  //    King but you met your first Queen, ya
    [6],  //    Nice to, nice to meet ya
    [8],  //    Mister, I'ma teach ya
    [11],  //    King but you met your first Queen, ya
    [22, 25],  //    Sunday night, I put a light in my blunt right
    [26, 28],  //    In my blunt right
    [31, 34],  //    Spending dough til we all go broke that is our M.O
    [37],  //    Let it go if you wanna ride
    [39],  //    Gonna be alright
    [41, 43],  //    Bounce to the rhythm while we pour some more
    [46],  //    Cause my time has come and I'm bossin'
    [48],  //    Them wanna, wanna flex with us
    [51],  //    Cause we higher than the limit, high and mellow
    [53],  //    Ooh, all the lines we crossin'
    [56],  //    Ooh, the drama we be causin'
    [58],  //    So sick like we got that flu
    [1],  //    I'ma switch it up, my hair turn blue
    [10, 12],  //    Nice to, nice to meet ya
    [14],  //    Mister, I'ma teach ya
    [16],  //    King, but you met your first Queen, ya
    [17],  //    Nice to, nice to meet ya
    [19],  //    Mister, I'ma teach ya
    [23],  //    King, but you met your first Queen, ya
    [32, 34],  //    I'ma let you out here if you cross the seas
    [37],  //    If you wanna melt, you gotta heat the freeze
    [39],  //    Nothing's sweet like my honey
    [42],  //    That you'll have to lick, before you can taste
];

require_once __DIR__ . '/to_css.php';
