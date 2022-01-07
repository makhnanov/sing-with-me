<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [13, 16],  //  This world will never be
    [19],  //  What I expected
    [23],  //  And if I don't belong
    [25],  //  Who would have guessed it
    [29],  //  I will not leave alone
    [33],  //  Everything that I own
    [36],  //  To make you feel like it's not too late
    [38],  //  It's never too late
    [39, 42],  //  Even if I say
    [45],  //  It'll be alright
    [48],  //  Still I hear you say
    [51],  //  You want to end your life
    [54],  //  Now and again we try
    [57],  //  To just stay alive
    [59],  //  Maybe we'll turn it around
    [2],  //  'Cause it's not too late
    [4],  //  It's never too late
    [8],  //  No one will ever see
    [11],  //  This side reflected
    [14],  //  And if there's something wrong
    [17],  //  Who would have guessed it
    [21],  //  And I have left alone
    [23],  //  Everything that I own
    [25],  //  To make you feel like
    [27],  //  It's not too late
    [30],  //  It's never too late
    [33],  //  Even if I say
    [36],  //  It'll be alright
    [38],  //  Still I hear you say
    [42],  //  You want to end your life
    [45],  //  Now and again we try
    [49],  //  To just stay alive
    [51],  //  Maybe we'll turn it around
    [53],  //  'Cause it's not too late
    [55],  //  It's never too late
    [58],  //  The world we knew
    [1],  //  Won't come back
    [4],  //  The time we've lost
    [7],  //  Can't get back
    [10],  //  The life we had
    [18],  //  Won't be ours again
    [21, 24],  //  This world will never be
    [27],  //  What I expected
    [32],  //  And if I don't belong
    [34, 37],  //  Even if I say
    [41],  //  It'll be alright
    [43],  //  Still I hear you say
    [47],  //  You want to end your life
    [49],  //  Now and again we try
    [53],  //  To just stay alive
    [54],  //  Maybe we'll turn it around
    [57],  //  'Cause it's not too late
    [59],  //  It's never too late
    [1],  //  Maybe we'll turn it around
    [3],  //  'Cause it's not too late
    [8],  //  It's never too late (It's never too late)
    [10],  //  It's not too late
    [12],  //  It's never too late
];

require_once __DIR__ . '/to_css.php';
