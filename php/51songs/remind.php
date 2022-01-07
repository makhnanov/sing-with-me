<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [3, 4],  //  Never made it as a wise man
    [5, 8],  //  I couldn't cut it as a poor man stealing
    [10],  //  Tired of living like a blind man
    [13],  //  I'm sick of sight without a sense of feeling
    [17],  //  And this is how you remind me
    [19, 25],  //  This is how you remind me of what I really am
    [30],  //  This is how you remind me of what I really am
    [33],  //  It's not like you to say sorry
    [36],  //  I was waiting on a different story
    [39],  //  This time I'm mistaken
    [41],  //  For handing you a heart worth breaking
    [44],  //  And I've been wrong, I've been down
    [47],  //  Into the bottom of every bottle
    [50],  //  These five words in my head
    [53],  //  Scream ,"Are we having fun yet?"
    [58],  //  Yeah, yeah, yeah, no no
    [4],  //  Yeah, yeah, yeah, no no
    [6],  //  It's not like you didn't know that
    [9],  //  I said I love you and I swear I still do
    [12],  //  And it must have been so bad
    [15],  //  Cause living with him must have damn near killed you
    [20],  //  And this is how you remind me me of what I really am
    [26],  //  This is how you remind me of what I really am
    [29],  //  It's not like you to say sorry
    [32],  //  I was waiting on a different story
    [34],  //  This time I'm mistaken
    [37],  //  For handing you a heart worth breaking
    [40],  //  And I've been wrong, I've been down,
    [43],  //  Been to the bottom of every bottle
    [46],  //  These five words in my head
    [48],  //  Scream "Are we having fun yet?"
    [54],  //  Yeah, yeah, yeah, no, no
    [59],  //  Yeah, yeah, yeah, no, no
    [5],  //  Yeah, yeah, yeah, no, no
    [11],  //  Yeah, yeah, yeah, no, no
    [22, 24],  //  Never made it as a wise man
    [27],  //  I couldn't cut it as a poor man stealing
    [31],  //  And this is how you remind me
    [33, 37],  //  This is how you remind me
    [39, 44],  //  This is how you remind me of what I really am
    [50],  //  This is how you remind me of what I really am
    [53],  //  It's not like you to say sorry
    [55],  //  I was waiting on a different story
    [58],  //  This time I'm mistaken
    [1],  //  For handing you a heart worth breaking
    [4],  //  And I've been wrong, I've been down,
    [7],  //  Been to the bottom of every bottle
    [9],  //  These five words in my head
    [12],  //  Scream "Are we having fun yet?"
    [18],  //  Yeah, yeah "Are we having fun yet?" [3x]
    [24],  //  Yeah, yeah "Are we having fun yet?" [3x]
    [29],  //  Yeah, yeah "Are we having fun yet?" [3x]
    [33, 35],  //  Yeah, yeah
    [37, 38],  //  No, no
];

require_once __DIR__ . '/to_css.php';
