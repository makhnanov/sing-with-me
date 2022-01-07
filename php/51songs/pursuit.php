<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [11, 13], // Crush a bit, little bit
    [15], // Roll it up, take a hit
    [17], // Feeling lit, feeling right
    [19], // Two AM, summer night
    [20], // I don't care
    [21], // Hand on the wheel
    [23], // Driving drunk I'm doing my thang
    [25], // Rolling the Midwest side and out
    [27], // Living my life, getting our dreams
    [29], // People told me slow my roll
    [32], // I'm screaming out, "Fuck that"
    [34], // I'ma do just what I want
    [36], // Looking ahead no turning back
    [38], // If I fall if I die
    [40], // Know I lived it to the fullest
    [42], // If I fall if I die
    [44], // Know I lived and missed some bullets
    [48], // I'm on the pursuit of happiness and I know
    [53], // Everything that shine ain't always gonna be gold, hey
    [1], // I'll be fine once I get it, yeah, I'll be good
    [5], // I'm on the pursuit of happiness and I know
    [10], // Everything that shine ain't always gonna be gold, hey
    [17], // I'll be fine once I get it, yeah, I'll be good
    [22], // Tell me what you know about dreamin', dreamin'
    [26], // You don't really know about nothin', nothin'
    [30], // Tell me what you know about them night terrors every night
    [34], // Five AM cold sweats, waking up to the sky
    [38], // Tell me what you know about dreams, dreams
    [42], // Tell me what you know about night terrors, nothin'
    [46], // You don't really care about the trials of tomorrow
    [51], // Rather lay awake in the bed full of sorrow
    [55], // I'm on the pursuit of happiness and I know
    [0], // Everything that shine ain't always gonna be gold, hey
    [7], // I'll be fine once I get it, yeah, I'll be good
    [12], // I'm on the pursuit of happiness and I know
    [17], // Everything that shine ain't always gonna be gold, hey
    [24], // I'll be fine once I get it, yeah, I'll be good
    [27], // I'm on the pursuit of happiness
    [29, 33], // I know everything that shine ain't always gold
    [34, 41], // I'll be fine once I get it, I'll be good
    [14, 18], // I'm on the pursuit of happiness and I know
    [23], // Everything that shine ain't always gonna be gold, hey
    [31], // I'll be fine once I get it, yeah, I'll be good
    [35], // I'm on the pursuit of happiness and I know
    [40], // Everything that shine ain't always gonna be gold, hey
    [47], // I'll be fine once I get it, yeah, I'll be good
    [51], // Pursuit of happiness
    [53, 1], // Yeah, I'm gon' get it, I'll be, good
    [3,4], // Ugh
    [8,9], // Oh man
    [10, 12], // Oh alright, oh
    [13, 15], // Room's spinning, room's spinning
    [17, 21], // Pat, Zuli, wait, oh fuck
    [24, 26], // Oh my God
    [29], // Why did I drink so much and smoke so much? Ugh
    [36, 37], // Oh fuck
];

require_once __DIR__ . '/to_css.php';
