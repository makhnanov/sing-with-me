<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [2, 5],  //  So much for my happy ending
    [8],  //  Oh, oh
    [11],  //  So much for my happy ending
    [16],  //  Oh, oh, oh, oh
    [19],  //  Let's talk this over
    [21],  //  It's not like we're dead
    [24],  //  Was it something I did?
    [27],  //  Was it something you said?
    [30],  //  Don't leave me hanging
    [33],  //  In a city so dead
    [39],  //  Held up so high on such a breakable thread (breakable thread)
    [45],  //  You were all the things I thought I knew
    [50],  //  And I thought we could be
    [56],  //  You were everything, everything that I wanted (that I wanted)
    [2],  //  We were meant to be, supposed to be, but we lost it (we lost it)
    [8],  //  And all of the memories, so close to me, just fade away
    [11],  //  All this time you were pretending
    [14],  //  So much for my happy ending
    [17],  //  Oh, oh
    [20],  //  So much for my happy ending
    [23],  //  Oh, oh
    [27],  //  You've got your dumb friends
    [29],  //  I know what they say (know what they say)
    [32],  //  They tell you I'm difficult
    [35],  //  But so are they (but so are they)
    [38],  //  But they don't know me
    [40],  //  Do they even know you? (even know you)
    [44],  //  All the things you hide from me
    [46],  //  All the shit that you do (all the shit that you do)
    [53],  //  You were all the things I thought I knew
    [58],  //  And I thought we could be
    [4],  //  You were everything, everything that I wanted (that I wanted)
    [10],  //  We were meant to be, supposed to be, but we lost it (we lost it)
    [16],  //  And all of the memories, so close to me, just fade away
    [18],  //  All this time you were pretending
    [22],  //  So much for my happy ending
    [25],  //  It's nice to know that you were there
    [28],  //  Thanks for acting like you cared
    [33],  //  And making me feel like I was the only one
    [37],  //  It's nice to know we had it all
    [40],  //  Thanks for watching as I fall
    [44],  //  And letting me know we were done
    [49],  //  He was everything, everything that I wanted
    [55],  //  We were meant to be, supposed to be, but we lost it
    [1],  //  And all of the memories, so close to me just fade away
    [4],  //  All this time you were pretending
    [6],  //  So much for my happy ending
    [12],  //  You were everything, everything that I wanted (that I wanted)
    [17],  //  We were meant to be, supposed to be, but we lost it
    [24],  //  And all of the memories, so close to me, just fade away
    [26],  //  All this time you were pretending
    [30],  //  So much for my happy ending
    [32],  //  Oh, oh
    [36],  //  So much for my happy ending
    [38],  //  Oh, oh
    [42],  //  So much for my happy ending
    [49],  //  Oh, oh, oh, oh
];

require_once __DIR__ . '/to_css.php';
