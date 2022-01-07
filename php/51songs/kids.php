<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [39, 40],  //  When we were young, the future was so bright
    [41],  //  Woah-oh
    [42],  //  The old neighborhood was so alive
    [43],  //  Woah-oh
    [45],  //  And every kid on the whole damn street
    [46],  //  Woah-oh
    [48],  //  Was gonna make it big and not be beat
    [50],  //  Now the neighborhood's cracked and torn
    [51],  //  Woah-oh
    [53],  //  The kids are grown up, but their lives are worn
    [54],  //  Woah-oh
    [56],  //  How can one little street swallow so many lives?
    [59],  //  Chances thrown
    [2],  //  Nothing's free
    [6],  //  Longing for used to be
    [11],  //  Still it's hard, hard to see
    [14],  //  Fragile lives
    [17],  //  Shattered dreams (Go!)
    [36, 38],  //  Jamie had a chance, well she really did
    [39],  //  Woah-oh
    [40],  //  Instead she dropped out and had a couple of kids
    [41],  //  Woah-oh
    [43],  //  Mark still lives at home 'cause he's got no job
    [44],  //  Woah-oh
    [46],  //  He just plays guitar and smokes a lot of pot
    [48],  //  Jay commited suicide
    [49],  //  Woah-oh
    [50],  //  Brandon OD'd and died
    [51],  //  Woah-oh
    [53],  //  What the hell is going on?
    [54],  //  The cruelest dream, reality
    [57],  //  Chances thrown
    [59],  //  Nothing's free
    [4],  //  Longing for used to be
    [9],  //  Still it's hard, hard to see
    [11],  //  Fragile lives
    [15],  //  Shattered dreams (Go!)
    [33, 35],  //  Chances thrown
    [38],  //  Nothing's free
    [43],  //  Longing for (what) used to be
    [47],  //  Still it's hard, hard to see
    [50],  //  Fragile lives
    [53],  //  Shattered dreams
];

require_once __DIR__ . '/to_css.php';
