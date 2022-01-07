<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [20, 23],  //  I’m at war with the world and they
    [26],  //  Try to pull me into the dark
    [28],  //  I struggle to find my faith
    [32],  //  As I’m slippin’ from your arms
    [35],  //  It’s getting harder to stay awake
    [38],  //  And my strength is fading fast
    [42],  //  You breathe into me at last
    [44],  //  I’m awake I’m alive
    [49],  //  Now I know what I believe inside
    [51],  //  Now it’s my time
    [55],  //  I’ll do what I want ’cause this is my life
    [58],  //  here, right now
    [1],  //  I’ll stand my ground and never back down
    [4],  //  I know what I believe inside
    [7],  //  I’m awake and I’m alive
    [20, 23],  //  I’m at war with the world cause I
    [26],  //  Ain’t never gonna sell my soul
    [28],  //  I’ve already made up my mind
    [32],  //  No matter what I can’t be bought or sold
    [35],  //  When my faith is getting weak
    [38],  //  And I feel like giving in
    [42],  //  You breathe into me again
    [45],  //  I’m awake I’m alive
    [49],  //  Now I know what I believe inside
    [51],  //  Now it’s my time
    [55],  //  I’ll do what I want ’cause this is my life
    [58],  //  here, right now
    [1],  //  I’ll stand my ground and never back down
    [4],  //  I know what I believe inside
    [7],  //  I’m awake and I’m alive
    [12],  //  Waking up waking up waking up waking up
    [18],  //  Waking up waking up waking up waking up
    [20],  //  In the dark
    [23],  //  I can feel you in my sleep
    [29],  //  In your arms I feel you breathe into me
    [34],  //  Forever hold this heart that I will give to you
    [37],  //  Forever I will live for you
    [51, 54],  //  I’m awake I’m alive
    [58],  //  Now I know what I believe inside
    [0],  //  Now it’s my time
    [4],  //  I’ll do what I want ’cause this is my life
    [7],  //  here, right now
    [10],  //  I’ll stand my ground and never back down
    [13],  //  I know what I believe inside
    [16],  //  I’m awake and I’m alive
    [21],  //  Waking up waking up waking up waking up
    [28],  //  Waking up waking up waking up waking up
];

require_once __DIR__ . '/to_css.php';
