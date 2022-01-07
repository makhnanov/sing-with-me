<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [16, 19],  //  My hands are searching for You
    [22],  //  My arms are outstretched towards You
    [26],  //  I feel You on my fingertips
    [31],  //  My tongue dances behind my lips for You
    [35, 39],  //  There's fire risin' through my being
    [45],  //  Burning, I'm not used to seeing You
    [48, 54],  //  I'm alive, I'm alive
    [55, 59],  //  I can feel You all around me
    [2],  //  Thickening the air I'm breathing
    [5],  //  Holding on to what I'm feeling
    [9],  //  Savoring this heart that's healing
    [12, 14],  //  My hands float up above me
    [18],  //  And You whisper, You love me
    [25],  //  And I begin to fade into our secret place
    [27],  //  The music makes me sway
    [33],  //  The angels singing, say, "We are alone with You"
    [38],  //  I am alone and they are too with You
    [41, 46],  //  I'm alive, I'm alive
    [48, 51],  //  I can feel You all around me
    [54],  //  Thickening the air I'm breathing
    [58],  //  Holding on to what I'm feeling
    [1],  //  Savoring this heart that's healing
    [4],  //  I can feel You all around me
    [7],  //  Thickening the air I'm breathing
    [11],  //  Holding on to what I'm feeling
    [14],  //  Savoring this heart that's healing
    [16, 20],  //  And so I cry
    [23, 26],  //  The light is white
    [30, 34],  //  And I see You...
    [39, 46],  //  I'm alive (I'm alive), I'm alive (I'm alive)
    [50],  //  I'm alive...
    [53],  //  I can feel You all around me
    [56],  //  Thickening the air I'm breathing
    [59],  //  Holding on to what I'm feeling
    [3],  //  Savoring this heart that's healing
    [4],  //  Take my hand, I give it to You
    [6],  //  Now You own me, all I am
    [7],  //  You said, You would never leave me
    [10],  //  I believe You, I believe
    [13],  //  I can feel You all around me
    [16],  //  Thickening the air I'm breathing
    [19],  //  Holding on to what I'm feeling
    [23],  //  Savoring this heart that's healed
];

require_once __DIR__ . '/to_css.php';
