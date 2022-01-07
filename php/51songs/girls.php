<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [7, 9],  //   Spent 24 hours
    [12],  //   I need more hours with you
    [15, 17],  //   You spent the weekend
    [20],  //   Getting even, ooh
    [23, 25],  //   We spent the late nights
    [28],  //   Making things right between us
    [31, 32],  //   But now it's all good, babe
    [36],  //   Roll that backwood, babe, and play me close
    [38, 40],  //   'Cause girls like you
    [42],  //   Run 'round with guys like me
    [44],  //   'Til sundown when I come through
    [46],  //   I need a girl like you, yeah, yeah
    [48],  //   Girls like you
    [50],  //   Love fun, and yeah, me too
    [52],  //   What I want when I come through
    [54],  //   I need a girl like you, yeah, yeah
    [55, 59],  //   Yeah, yeah, yeah, yeah, yeah, yeah
    [2],  //   I need a girl like you, yeah, yeah
    [3, 6],  //   Yeah yeah yeah, yeah, yeah, yeah
    [9],  //   I need a girl like you
    [11],  //   I spent last night
    [14],  //   On the last flight to you (Ay)
    [18],  //   Took a whole day up
    [21],  //   Tryna get way up, ooh
    [24, 26],  //   We spent the daylight
    [29],  //   Tryna make things right between us
    [32, 34],  //   And now it's all good, babe
    [39],  //   Roll that backwood, babe, and play me close (Yeah)
    [40, 41],  //   'Cause girls like you
    [43],  //   Run 'round with guys like me
    [45],  //   'Til sundown when I come through
    [48],  //   I need a girl like you, yeah, yeah
    [49],  //   Girls like you
    [51],  //   Love fun, and yeah, me too
    [53],  //   What I want when I come through
    [56],  //   I need a girl like you, yeah, yeah
    [0],  //   Yeah, yeah, yeah, yeah, yeah, yeah
    [3],  //   I need a girl like you, yeah, yeah
    [8],  //   Yeah, yeah, yeah, yeah, yeah, yeah
    [11],  //   I need a girl like you, yeah, yeah
    [16, 19],  //   I need a girl like you, yeah, yeah
    [24, 26],  //   I need a girl like you
    [30],  //   Maybe it's six forty-five, maybe I'm barely alive
    [33],  //   Maybe you've taken my shit for the last time, yeah
    [38],  //   Maybe I know that I'm drunk, maybe I know you're the one
    [41],  //   Maybe I'm thinking it's better if you drive
    [45],  //   Girls like you
    [47],  //   Run 'round with guys like me
    [49],  //   'Til sundown when I come through
    [51],  //   I need a girl like you, yeah
    [53, 55],  //   Not too long ago, I was dancing for dollars (Eeoow)
    [57],  //   Know it's really real if I let you meet my mama (Eeoow)
    [59],  //   You don't want a girl like me, I'm too crazy
    [1],  //   But every other girl you meet is fugazy (Okurrrt)
    [3],  //   I'm sure them other girls were nice enough
    [4],  //   But you need someone to spice it up
    [6],  //   So who you gonna call? Cardi, Cardi
    [8],  //   Come and rev it up like a Harley, Harley
    [10],  //   Why is the best fruit always forbidden? (Huh?)
    [12],  //   I'm coming to you now doin' 20 over the limit (Wooh)
    [14],  //   The red light, red light stop, stop (Skrrt)
    [16],  //   I don't play when it comes to my heart, let's get it though
    [18],  //   I don't really want a white horse and a carriage (Carriage)
    [20],  //   I'm thinkin' more a white Porsches and carats
    [22],  //   I need you right here 'cause every time you're far
    [24],  //   I play with this kitty like you play wit' your guitar, ah
    [25],  //   'Cause girls like you
    [27],  //   Run 'round with guys like me
    [29],  //   'Til sundown when I come through
    [31],  //   I need a girl like you, yeah, yeah
    [33],  //   Girls like you
    [35],  //   Love fun, and yeah, me too
    [37],  //   What I want when I come through
    [39],  //   I need a girl like you, yeah, yeah
];

require_once __DIR__ . '/to_css.php';
