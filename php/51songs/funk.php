<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [0, 1],  //  Doh
    [3],  //  Doh doh doh, doh doh doh
    [4],  //  Doh doh
    [8],  //  Doh doh doh, doh doh doh
    [9],  //  Doh doh
    [12],  //  Doh doh doh, doh doh doh
    [13],  //  Doh doh
    [16],  //  Aaaaaow!
    [18],  //  This hit, that ice cold
    [20],  //  Michelle Pfeiffer, that white gold
    [22],  //  This one, for them hood girls
    [24],  //  Them good girls, straight masterpieces
    [26],  //  Stylin', wildin'
    [28],  //  Livin' it up in the city
    [31],  //  Got Chucks on with Saint Laurent
    [33],  //  Gotta kiss myself, I'm so pretty
    [34],  //  I'm too hot (hot damn)
    [37],  //  Called a police and a fireman
    [39],  //  I'm too hot (hot damn)
    [41],  //  Make a dragon wanna retire, man
    [43],  //  I'm too hot (hot damn)
    [45],  //  Say my name, you know who I am
    [47],  //  I'm too hot (hot damn)
    [49],  //  Am I bad 'bout that money?
    [50],  //  Break it down
    [52],  //  Girls hit your hallelujah (wooh)
    [54],  //  Girls hit your hallelujah (wooh)
    [56],  //  Girls hit your hallelujah (wooh)
    [58],  //  'Cause Uptown Funk gon' give it to you (wooh)
    [0],  //  'Cause Uptown Funk gon' give it to you
    [2],  //  'Cause Uptown Funk gon' give it to you
    [4],  //  Saturday night, and we in the spot
    [6],  //  Don't believe me, just watch, come on!
    [12, 14],  //  Don't believe me, just watch
    [21, 23],  //  Don't believe me, just watch
    [25],  //  Don't believe me, just watch
    [27],  //  Don't believe me, just watch
    [29],  //  Don't believe me, just watch
    [31],  //  Hey, hey, hey, oh!
    [32],  //  Stop
    [33],  //  Wait a minute
    [35],  //  Fill my cup, put some liquor in it
    [37],  //  Take a sip, sign a check
    [39],  //  Julio, get the stretch
    [43],  //  Ride to Harlem, Hollywood, Jackson, Mississippi
    [46],  //  If we show up, we gon' show out
    [48],  //  Smoother than a fresh jar of Skippy
    [50],  //  I'm too hot (hot damn)
    [52],  //  Called a police and a fireman
    [54],  //  I'm too hot (hot damn)
    [56],  //  Make a dragon wanna retire, man
    [58],  //  I'm too hot (hot damn, hot damn)
    [0],  //  Bitch, say my name, you know who I am
    [2],  //  I'm too hot (hot damn)
    [4],  //  Am I bad 'bout that money?
    [5],  //  Break it down
    [7],  //  Girls hit your hallelujah (wooh)
    [9],  //  Girls hit your hallelujah (wooh)
    [11],  //  Girls hit your hallelujah (wooh)
    [13],  //  'Cause Uptown Funk gon' give it to you (wooh)
    [15],  //  'Cause Uptown Funk gon' give it to you
    [17],  //  'Cause Uptown Funk gon' give it to you
    [19],  //  Saturday night, and we in the spot
    [21],  //  Don't believe me, just watch, come on!
    [28, 30],  //  Don't believe me, just watch
    [36, 38],  //  Don't believe me, just watch
    [40],  //  Don't believe me, just watch
    [42],  //  Don't believe me, just watch
    [44],  //  Don't believe me, just watch
    [46],  //  Hey, hey, hey, oh!
    [50, 51],  //  Before we leave
    [53, 55],  //  I'mma tell y'all a lil' something
    [57],  //  Uptown Funk you up
    [58],  //  Uptown Funk you up
    [1],  //  Uptown Funk you up
    [3],  //  Uptown Funk you up
    [5],  //  I said Uptown Funk you up
    [7],  //  Uptown Funk you up
    [9],  //  Uptown Funk you up
    [11],  //  Uptown Funk you up
    [13],  //  Come on, dance, jump on it
    [15],  //  If you sexy than flaunt it
    [17],  //  If you freaky then own it
    [19],  //  Don't brag about it, come show me
    [22],  //  Come on, dance, jump on it
    [24],  //  If you sexy than flaunt it
    [26],  //  Well, it's Saturday night, and we in the spot
    [28],  //  Don't believe me, just watch, come on!
    [35, 36],  //  Don't believe me, just watch
    [43, 45],  //  Don't believe me, just watch
    [47],  //  Don't believe me, just watch
    [49],  //  Don't believe me, just watch
    [51],  //  Don't believe me, just watch
    [53],  //  Hey, hey, hey, oh!
    [55],  //  Uptown Funk you up
    [58],  //  Uptown Funk you up (say what?)
    [59],  //  Uptown Funk you up
    [1],  //  Uptown Funk you up
    [4],  //  Uptown Funk you up
    [6],  //  Uptown Funk you up (say what?)
    [8],  //  Uptown Funk you up
    [10],  //  Uptown Funk you up
    [12],  //  Uptown Funk you up
    [14],  //  Uptown Funk you up (say what?)
    [16],  //  Uptown Funk you up
    [18],  //  Uptown Funk you up
    [20],  //  Uptown Funk you up
    [22],  //  Uptown Funk you up (say what?)
    [24],  //  Uptown Funk you up
];

require_once __DIR__ . '/to_css.php';
