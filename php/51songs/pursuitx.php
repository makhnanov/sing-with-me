<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
[15, 17], // Crush a bit, little bit
[19], // Roll it up, take a hit
[21], // Feeling lit, feeling right
[22], // Two AM, summer night
[23], // I don't care
[24], // Hand on the wheel
[26], // Driving drunk I'm doing my thang
[28], // Rolling the Midwest side and out
[30], // Living my life, getting our dreams
[32], // I'ma do just what I want
[34], // Looking ahead no turning back
[36], // People told me slow my roll
[37], // I'm screaming out, "Fuck that"
[39], // I'm screaming out, "Fuck that"
[41], // I'm screaming out, "Fuck that"
[15, 19], // Tell me what you know about dreamin', dreamin'
[22], // You don't really know about nothin', nothin'
[26], // Tell me what you know about them night terrors every night
[30], // Five AM cold sweats, waking up to the sky
[45, 49], // I'm on the pursuit of happiness and I know
[52], // Everything that shine ain't always gonna be gold, hey
[0], // I'll be fine once I get it, yeah, I'll be good
[3], // I'm on the pursuit of happiness and I know
[8], // Everything that shine ain't always gonna be gold, hey
[12], // I'll be fine once I get it
[4, 7], // Tell me what you know about dreams, dreams
[11], // Tell me what you know about night terrors, nothin'
[15], // You don't really care about the trials of tomorrow
[18], // Rather lay awake in the bed full of sorrow
[48, 52], // I'm on the pursuit of happiness and I know
[57], // Everything that shine ain't always gonna be gold, hey
[3], // I'll be fine once I get it, yeah, I'll be good
[7], // I'm on the pursuit of happiness and I know
[11], // Everything that shine ain't always gonna be gold, hey
[18], // I'll be fine once I get it, yeah, I'll be good
[21], // I'm on the pursuit of happiness
[25], // I know everything that shine ain't always gold
[34], // I'll be fine once I get it, I'll be good
[37], // I'm on the pursuit of happiness and I know
[41], // Everything that shine ain't always gonna be gold, hey
[48], // I'll be fine once I get it, yeah, I'll be good
];

require_once __DIR__ . '/to_css.php';
