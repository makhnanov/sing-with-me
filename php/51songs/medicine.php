<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [25, 27],  //  Somebody mixed my medicine
    [31, 34],  //  Somebody mixed my medicine
    [37, 38],  //  You hurt where you sleep
    [40],  //  And you sleep where you lie,
    [42],  //  Now you're in deep and
    [44],  //  Now you're gonna cry,
    [45],  //  You got a woman to the left
    [47],  //  And a boy to the right,
    [50],  //  Start to sweat, so hold me tight
    [53],  //  Somebody mixed my medicine
    [55, 57],  //  I don't know what I'm on,
    [29],  //  Somebody mixed my medicine
    [3],  //  But baby it's all gone,
    [6],  //  Somebody mixed my medicine
    [9],  //  Somebody's in my head again
    [15],  //  Somebody mixed my medicine again, again
    [17],  //  I'll drink what you leak
    [19],  //  And I'll smoke what you sigh
    [20],  //  Straight across the room
    [22],  //  With a look in your eye
    [24],  //  I got a man to the left
    [25],  //  And a girl to the right,
    [28],  //  Start to sweat, so hold me tight
    [31],  //  Somebody mixed my medicine
    [32, 35],  //  I don't know what I'm on,
    [38],  //  Somebody mixed my medicine
    [40, 41],  //  But baby it's all gone,
    [44],  //  Somebody mixed my medicine
    [47],  //  Somebody's in my head again
    [53],  //  Somebody mixed my medicine again, again
    [55],  //  There's a tiger in the room
    [57],  //  And a baby in the closet,
    [59],  //  Pour another drink mom,
    [1],  //  I don't even want it
    [3],  //  Then I turn around and think I see
    [4],  //  Someone that looks like you
    [7, 9],  //  You hurt where you sleep
    [10],  //  You sleep where you lie,
    [12],  //  Now you're in deep and
    [13],  //  Now you're gonna cry,
    [15],  //  You got a woman to the left
    [17],  //  And a boy to the right,
    [20],  //  Start to sweat, so hold me tight
    [23],  //  Somebody mixed my medicine
    [26],  //  I don't know what I'm on,
    [29],  //  Somebody mixed my medicine
    [32],  //  But baby it's all gone,
    [36],  //  Somebody mixed my medicine
    [39],  //  Somebody's in my head again
    [42],  //  Somebody mixed my medicine
    [46],  //  Again, again, again...
    [48, 53],  //  Again, again, again...
    [55, 59],  //  Again, again, again...
    [5, 8],  //  Somebody mixed my medicine
    [11, 14],  //  Somebody mixed my medicine
    [18, 21],  //  Somebody mixed my medicine
];

require_once __DIR__ . '/to_css.php';
