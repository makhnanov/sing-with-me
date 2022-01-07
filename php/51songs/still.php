<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [26, 30],  //  Still Snoop Dogg and D-R-E
    [31],  //  Guess who's back?
    [34, 36],  //  Still, doing that shit Andre?
    [39],  //  (Oh for sho', check me out)
    [41, 44],  //  It's still Dre Day nigga, AK nigga
    [46],  //  Though I've grown a lot, can't keep it home a lot
    [49],  //  'Cause when I frequent the spots that I'm known to rock
    [51],  //  You hear the bass from the truck when I'm on the block
    [54],  //  Ladies they pay homage, but haters say Dre fell off
    [57],  //  How nigga? My last album was The Chronic (Nigga)
    [59],  //  They want to know if he still got it
    [0],  //  They say rap's changed
    [2],  //  They wanna know how I feel about it
    [4],  //  (If you ain't up on thangs)
    [6],  //  Dr. Dre is the name
    [7],  //  I'm ahead of my game
    [8],  //  Still puffing my leafs
    [11],  //  Still fuck with the beats, still not loving police
    [14],  //  Still rock my khakis with a cuff and a crease
    [17],  //  Still got love for the streets, reppin' 213 (For life)
    [19],  //  Still the beats bang, still doing my thang
    [22],  //  Since I left ain't too much changed, still
    [25],  //  I'm representing for them gangstas all across the world
    [27],  //  (Still) Hitting them corners in them low-lows, girl
    [30],  //  Still taking my time to perfect the beat
    [33],  //  And I still got love for the streets, it's the D-R-E
    [35],  //  I'm representing for them gangstas all across the world
    [37],  //  (Still) Hitting them corners in them low-lows, girl
    [38],  //  Still taking my time to perfect the beat
    [42],  //  And I still got love for the streets, it's the D-R-E
    [45],  //  Since the last time you heard from me, I lost some friends
    [48],  //  Well, hell, me and Snoop, we dippin' again
    [50],  //  Kept my ear to the streets, signed Eminem
    [53],  //  He's triple platinum, doing 50 a week
    [55],  //  Still, I stay close to the heat
    [58],  //  And even when I was close to defeat, I rose to my feet
    [1],  //  My life's like a soundtrack I wrote to the beat
    [3],  //  Treat rap like Cali' weed, I smoke 'til I sleep
    [6],  //  Wake up in the a.m., compose a beat
    [9],  //  I bring the fire 'til you're soaking in your seat
    [11],  //  It's not a fluke, it's been tried, I'm the truth
    [14],  //  Since "Turn Out the Lights" from the World Class Wreckin Cru
    [16],  //  I'm still at it, after-mathematics
    [19],  //  In the home of drive-bys and ak-matics
    [22],  //  Swap meets, sticky green, and bad traffic
    [24],  //  I dip through, then I give you (Still) D-R-E
    [26],  //  I'm representing for them gangstas all across the world
    [29],  //  (Still) Hitting them corners in them low-lows, girl
    [31],  //  Still taking my time to perfect the beat
    [34],  //  And I still got love for the streets, it's the D-R-E
    [36],  //  I'm representing for them gangstas all across the world
    [39],  //  (Still) Hitting them corners in them low-lows, girl
    [42],  //  Still taking my time to perfect the beat
    [45],  //  And I still got love for the streets, it's the D-R-E
    [47],  //  It ain't nothing but more hot shit
    [49],  //  Another classic CD for y'all to vibe with
    [52],  //  Whether you're cooling on the corner with your fly bitch (Biatch)
    [54],  //  Laid back in the shack, play this track
    [57],  //  I'm representing for the gangstas all across the world
    [0],  //  Still (Hittin' them corners in them low-lows, girl)
    [2],  //  I'll break your neck, damn near put your face in your lap
    [5],  //  Niggas try to be the king but the ace is back
    [7],  //  So if you ain't up on thangs
    [10],  //  Dr. Dre be the name still running the game
    [12],  //  Still, got it wrapped like a mummy
    [15],  //  Still ain't tripping, love to see young blacks get money
    [18],  //  Spend time out the hood, take they moms out the hood
    [20],  //  Hit my boys off with jobs, no more living hard
    [23],  //  Barbeques every day, driving fancy cars
    [25],  //  Still gon' get mine regardless
    [28],  //  I'm representing for them gangstas all across the world
    [30],  //  (Still) Hitting them corners in them low-lows, girl
    [33],  //  Still taking my time to perfect the beat
    [36],  //  And I still got love for the streets, it's the D-R-E
    [38],  //  I'm representing for them gangstas all across the world
    [41],  //  (Still) Hitting them corners in them low-lows, girl
    [43],  //  Still taking my time to perfect the beat
    [46],  //  And I still got love for the streets, it's the D-R-E
    [48],  //  I'm representing for them gangstas all across the world
    [51],  //  (Still) Hitting them corners in them low-lows, girl
    [53],  //  Still taking my time to perfect the beat
    [57],  //  And I still got love for the streets, it's the D-R-E
    [59],  //  Right back up in your motherfuckin' ass
    [3],  //  Nine-five plus four pennies, add that shit up
    [6],  //  D.R.E. right back up on top of thangs
    [8],  //  Smoke some wit' your Dogg
    [11],  //  No stress, no seeds, no stems, no sticks!
    [14],  //  Some of that real sticky-icky-icky
    [17],  //  Ooh wee! Put it in the air!
    [23],  //  Well, you's a fool, D-R, ha-ha
];

require_once __DIR__ . '/to_css.php';
