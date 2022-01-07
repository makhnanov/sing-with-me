<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [41, 43],  //  Life is a waterfall
    [45],  //  We're one in the river
    [48],  //  And one again after the fall
    [52, 53],  //  Swimming through the void
    [55],  //  We hear the word
    [57],  //  We lose ourselves
    [59],  //  But we find it all?
    [5, 8],  //  'Cause we are the ones that want to play
    [9],  //  Always want to go
    [11],  //  But you never want to stay
    [17, 20],  //  And we are the ones that want to choose
    [21],  //  Always want to play
    [25],  //  But you never want to lose
    [35, 41],  //  Aerials in the sky
    [43],  //  When you lose small mind
    [46],  //  You free your life
    [50],  //  Life is a waterfall
    [51],  //  We drink from the river
    [54],  //  Then we turn around and put up our walls
    [59, 0],  //  Swimming through the void
    [2],  //  We hear the word
    [3],  //  We lose ourselves
    [6],  //  But we find it all?
    [11, 14],  //  'Cause we are the ones that want to play
    [15],  //  Always want to go
    [18],  //  But you never want to stay
    [23, 26],  //  And we are the ones that want to choose
    [27],  //  Always want to play
    [32],  //  But you never want to lose
    [46, 52],  //  Aerials in the sky
    [55],  //  When you lose small mind
    [58],  //  You free your life
    [4],  //  Aerials so up high
    [7],  //  When you free your eyes
    [9],  //  Eternal prize
    [15],  //  Aerials in the sky
    [18],  //  When you lose small mind
    [21],  //  You free your life
    [27],  //  Aerials so up high
    [30],  //  When you free your eyes
    [33],  //  Eternal prize
];

require_once __DIR__ . '/to_css.php';
