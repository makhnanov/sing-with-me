<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [4, 10],  //  Every time we lie awake
    [11, 15],  //  After every hit we take
    [16, 20],  //  Every feeling that I get
    [21, 25],  //  But I haven't missed you yet
    [27, 31],  //  Every roommate kept awake
    [36],  //  By every sigh and scream we make
    [37, 42],  //  All the feelings that I get
    [43, 47],  //  But I still don't miss you yet
    [48, 54],  //  Only when I stop to think about it
    [58, 3],  //  I hate everything about you
    [8],  //  Why do I love you
    [14],  //  I hate everything about you
    [19],  //  Why do I love you
    [31, 36],  //  Every time we lie awake
    [41],  //  After every hit we take
    [46],  //  Every feeling that I get
    [47, 52],  //  But I haven't missed you yet
    [59],  //  Only when I stop to think about it
    [2, 8],  //  I hate everything about you
    [13],  //  Why do I love you
    [18],  //  I hate everything about you
    [23],  //  Why do I love you
    [30],  //  Only when I stop to think
    [34],  //  About you, I know
    [40],  //  Only when you stop to think
    [45],  //  About me, do you know
    [51, 56],  //  I hate everything about you
    [1],  //  Why do I love you
    [7],  //  You hate everything about me
    [12],  //  Why do you love me
    [14],  //  I hate
    [17],  //  You hate
    [20],  //  I hate
    [23],  //  You love me
    [28],  //  I hate everything about you
    [33],  //  Why do I love you
];

require_once __DIR__ . '/to_css.php';
