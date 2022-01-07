<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [42, 46],  //  Thumbing through the pages of my fantasies
    [48, 53],  //  Pushing all the mercy down, down, down
    [54, 58],  //  I wanna see you try to take a swing at me
    [0, 5],  //  Come on, gonna put you on the ground, ground, ground
    [7, 9],  //  Why are you trying to make fun of me?
    [13],  //  You think it's funny? What the fuck you think it's doing to me?
    [15],  //  You take your turn lashing out at me
    [19],  //  I want you crying with your dirty ass in front of me
    [26],  //  All of my hate cannot be found (hate cannot be found)
    [29],  //  I will not be drowned (I will not be drowned)
    [31],  //  By your thoughtless scheming
    [37],  //  So you can try to tear me down (try to tear me down)
    [40],  //  Beat me to the ground (beat me to the ground)
    [44],  //  I will see you screaming
    [48],  //  Thumbing through the pages of my fantasies
    [50, 56],  //  I'm above you, smiling at you, drown, drown, drown
    [0],  //  I wanna kill and rape you the way you raped me
    [8],  //  And I'll pull the trigger and you're down, down, down
    [12],  //  Why are you trying to make fun of me?
    [15],  //  You think it's funny? What the fuck you think it's doing to me?
    [18],  //  You take your turn lashing out at me
    [21],  //  I want you crying with your dirty ass in front of me
    [26],  //  All of my hate cannot be found (hate cannot be found)
    [29],  //  I will not be drowned (I will not be drowned)
    [33],  //  By your thoughtless scheming
    [40],  //  So you can try to tear me down (try to tear me down)
    [42],  //  Beat me to the ground (beat me to the ground)
    [47],  //  I will see you screaming
    [50, 1],  //  All my friends are gone, they died (gonna take you down!)
    [11],  //  They all screamed and cried (gonna take you down!)
    [14],  //  I've got my body, got my body back against the wall!
    [17],  //  I've got my body, got my body back against the wall!
    [20],  //  I've got my body, got my body back against the wall!
    [23],  //  I've got my body, got my body back against the wall!
    [27],  //  I've got my body, got my body back against the wall!
    [30],  //  I've got my body, got my body back against the wall!
    [33],  //  I've got my body, got my body back against the wall!
    [36],  //  I've got my body, got my body back against the wall!
    [42, 48],  //  All of my hate cannot be found (hate cannot be found)
    [50],  //  I will not be drowned (I will not be drowned)
    [54],  //  By your thoughtless scheming
    [1],  //  So you can try to tear me down (try to tear me down)
    [3],  //  Beat me to the ground (beat me to the ground)
    [7],  //  I will see you screaming
    [14],  //  All of my hate cannot be found (hate cannot be found)
    [16],  //  I will not be drowned (I will not be drowned)
    [20],  //  By your thoughtless scheming
    [26],  //  So you can try to tear me down (try to tear me down)
    [29],  //  Beat me to the ground (beat me to the ground)
    [32],  //  I will see you screaming
];

require_once __DIR__ . '/to_css.php';
