<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [16, 18],  //  I wish I found some better sounds
    [19],  //  No one's ever heard
    [20],  //  I wish I had a better voice
    [21],  //  That sang some better words
    [23],  //  I wish I found some chords
    [24],  //  In an order that is new
    [26],  //  I wish I didn't have to rhyme
    [27],  //  Every time I sang
    [29],  //  I was told when I get older
    [30],  //  All my fears would shrink
    [31],  //  But now I'm insecure
    [32],  //  And I care what people think
    [36],  //  My name's Blurryface and I care what you think
    [38, 42],  //  My name's Blurryface and I care what you think
    [56, 58],  //  Wish we could turn back time
    [2],  //  To the good old days
    [4],  //  When our momma sang us to sleep
    [7],  //  But now we're stressed out
    [9],  //  Wish we could turn back time
    [13],  //  To the good old days
    [16],  //  When our momma sang us to sleep
    [18],  //  But now we're stressed out
    [22, 24],  //  We're stressed out
    [29, 30.5],  //  Sometimes a certain smell will
    [32],  //  Take me back to when I was young
    [34],  //  How come I'm never able to identify
    [35],  //  Where it's coming from?
    [36],  //  I'd make a candle out of it
    [37],  //  If I ever found it
    [39],  //  Try to sell it, never sell out of it
    [40],  //  I'd probably only sell one
    [43],  //  It'd be to my brother, cause we have the same nose
    [44],  //  Same clothes, home grown
    [46],  //  The stone's throw from a creek we used to roam
    [47],  //  But it would remind us of when
    [48],  //  Nothing really mattered
    [50],  //  Out of student loans and tree house homes
    [51],  //  We all would take the latter
    [56],  //  My name's Blurryface and I care what you think
    [58, 2],  //  My name's Blurryface and I care what you think
    [5, 7],  //  Wish we could turn back time
    [11],  //  To the good old days
    [14],  //  When our momma sang us to sleep
    [16],  //  But now we're stressed out
    [18],  //  Wish we could turn back time
    [22],  //  To the good old days
    [25],  //  When our momma sang us to sleep
    [27],  //  But now we're stressed out
    [28],  //  Used to play pretend
    [29],  //  Give each other different names
    [32],  //  We would build a rocket ship and then we'd fly it far away
    [33],  //  Used to dream of outer space
    [35],  //  But now they're laughing at our face singing
    [38],  //  "Wake up, you need to make money", yeah
    [39],  //  Used to play pretend
    [41],  //  Give each other different names
    [42],  //  We would build a rocket ship
    [43],  //  And then we'd fly it far away
    [45],  //  Used to dream of outer space
    [47],  //  But now they're laughing at our face singing
    [49],  //  "Wake up, you need to make money", yeah
    [52],  //  Wish we could turn back time
    [53, 56],  //  To the good old days
    [59],  //  When our momma sang us to sleep
    [1],  //  But now we're stressed out
    [4],  //  Wish we could turn back time
    [7],  //  To the good old days
    [10],  //  When our momma sang us to sleep
    [12],  //  But now we're stressed out
    [15],  //  We used to play pretend, used to play pretend, money
    [17],  //  We used to play pretend, wake up you need the money
    [20],  //  Used to play pretend, used to play pretend, money
    [23],  //  We used to play pretend, wake up you need the money
    [24],  //  Used to play pretend
    [26],  //  Give each other different names
    [27],  //  We would build a rocket ship
    [29],  //  And then we'd fly it far away
    [30],  //  Used to dream of outer space
    [32],  //  But now they're laughing at our face saying
    [34],  //  "Wake up, you need to make money", yeah
];

require_once __DIR__ . '/to_css.php';
