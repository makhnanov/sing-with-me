<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [25, 29],  //  I want you by my side
    [33],  //  So that I never feel alone again
    [37],  //  They've always been so kind
    [41],  //  But now they've brought you away from here
    [46],  //  I hope they didn't get your mind
    [50],  //  Your heart is too strong anyway
    [54],  //  We need to fetch back the time
    [57],  //  They have stolen from us
    [3, 4],  //  And I want you
    [6],  //  We can bring it on the floor
    [9],  //  You've never danced like this before
    [11],  //  We don't talk about it
    [15],  //  Dancin' on do the boogie all night long
    [19],  //  Stoned in paradise, shouldn't talk about it
    [21],  //  And I want you
    [23],  //  We can bring it on the floor
    [26],  //  You've never danced like this before
    [28],  //  We don't talk about it
    [32],  //  Dancin' on do the boogie all night long
    [36],  //  Stoned in paradise, shouldn't talk about it
    [38],  //  Shouldn't talk about it
    [58, 1],  //  Coldest winter for me
    [6],  //  No sun is shining anymore
    [10],  //  The only thing I feel is pain
    [14],  //  Caused by absence of you
    [18],  //  Suspense is controlling my mind
    [22],  //  I cannot find the way out of here
    [27],  //  I want you by my side
    [31],  //  So that I never feel alone again
    [35, 36],  //  And I want you
    [39],  //  We can bring it on the floor
    [42],  //  You've never danced like this before
    [44],  //  We don't talk about it
    [47],  //  Dancin' on do the boogie all night long
    [52],  //  Stoned in paradise, shouldn't talk about it
    [53],  //  And I want you
    [56],  //  We can bring it on the floor
    [59],  //  You've never danced like this before
    [0],  //  We don't talk about it
    [4],  //  Dancin' on do the boogie all night long
    [9],  //  Stoned in paradise, shouldn't talk about it
    [11],  //  Shouldn't talk about it
    [30, 31],  //  And I want you
    [33],  //  We can bring it on the floor
    [36],  //  You've never danced like this before
    [38],  //  We don't talk about it
    [42],  //  Dancin' on do the boogie all night long
    [46],  //  Stoned in paradise, shouldn't talk about it
    [48],  //  And I want you
    [50],  //  We can bring it on the floor
    [53],  //  You've never danced like this before
    [55],  //  We don't talk about it
    [59],  //  Dancin' on do the boogie all night long
    [4],  //  Stoned in paradise, shouldn't talk about it
    [6],  //  Shouldn't talk about it
];

require_once __DIR__ . '/to_css.php';
