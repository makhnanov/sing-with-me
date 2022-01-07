<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [11, 14],  //  Oh, I miss the misery
    [27, 31],  //  I've been a mess since you stayed
    [32, 37],  //  I've been a wreck since you changed
    [38, 40],  //  Don't let me get in your way
    [41, 44],  //  I miss the lies and the pain
    [47],  //  The fights that keep us awake
    [49, 50],  //  I'm telling you
    [51],  //  I miss the bad things
    [53],  //  The way you hate me
    [54],  //  I miss the screaming
    [55],  //  The way that you blame me
    [57],  //  Miss the phone calls
    [58],  //  When it's your fault
    [0],  //  I miss the late nights
    [1],  //  Don't miss you at all
    [5],  //  I like the kick in the face
    [7],  //  And the things you do to me
    [10],  //  I love the way that it hurts
    [13],  //  I don't miss you, I miss the misery
    [19, 23],  //  I've tried but I just can't take it
    [24, 31],  //  I'd rather fight than just fake it ('cause I like it rough)
    [34],  //  You know that I've had enough
    [36],  //  I dare ya to call my bluff
    [40],  //  Can't take too much of a good thing
    [42],  //  I'm telling you
    [44],  //  I miss the bad things
    [45],  //  The way you hate me
    [46],  //  I miss the screaming
    [48],  //  The way that you blame me
    [50],  //  Miss the phone calls
    [51],  //  When it's your fault
    [52],  //  I miss the late nights
    [54],  //  Don't miss you at all
    [58],  //  I like the kick in the face
    [0],  //  And the things you do to me
    [4],  //  I love the way that it hurts
    [6],  //  I don't miss you, I miss the misery
    [9],  //  Just know that I'll make you hurt
    [12],  //  (I miss the lies and the pain what you did to me)
    [15],  //  When you tell me you'll make it worse
    [17],  //  (I'd rather fight all night than watch the TV)
    [21],  //  I hate that feeling inside
    [23],  //  You tell me how hard you'll try
    [28],  //  But when we're at our worst
    [29],  //  I miss the misery
    [31],  //  I miss the bad things
    [32],  //  The way you hate me
    [33],  //  I miss the screaming
    [35],  //  The way that you blame me
    [38],  //  I miss the rough sex
    [39],  //  Leaves me a mess
    [42],  //  I miss the feeling of pains in my chest
    [44],  //  Miss the phone calls
    [45],  //  When it's your fault
    [47],  //  I miss the late nights
    [48],  //  Don't miss you at all
    [53],  //  I like the kick in the face
    [54],  //  And the things you do to me
    [58],  //  I love the way that it hurts
    [0],  //  I don't miss you, I miss the misery
    [3],  //  I don't miss you, I miss the misery
    [10, 12],  //  I don't miss you, I miss the misery
];

require_once __DIR__ . '/to_css.php';
