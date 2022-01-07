<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [10, 14], //  To these rappers I apologize, I know it ain't fair
    [17], //  Only ball I drop, New Year's Times Square
    [22], //  The world is mine, sixth sense, I see the seventh sense
    [24], //  Now baby, let's get started for life
    [30], //  Every time I look into your eyes
    [32, 37], //  I feel like I could stare in them for a lifetime
    [38, 40], //  We can get started for life (tonight)
    [44], //  For life (tonight) for life (tonight)
    [48], //  We can get started for life (tonight)
    [52], //  For life (tonight) for life (tonight)
    [54], //  We can get started
    [10, 13], //  Big news, Pitbull, Tom Cruise, Mumbai
    [17], //  A lit up their December night like the fourth of July, vanilla sky
    [20], //  Thriller in Manila, knocking them out like Pacquiao
    [24], //  No Ali, no Frasier, but for now it's off to Malaysia
    [28], //  Two passports, three cities, two countries, one day
    [32], //  Now that's worldwide, if you think it's a game, let's play, dale
    [37], //  Every time I look into your eyes
    [39, 44], //  I feel like I could stare in them for a lifetime
    [48], //  We can get started for life (tonight)
    [51], //  For life (tonight) for life (tonight)
    [52, 55], //  We can get started for life (tonight)
    [59], //  For life (tonight) for life (tonight)
    [1], //  We can get started
    [16, 18], //  I am what they thought I'd never become
    [20], //  I believe and became it
    [21], //  Now I'm here to claim it
    [24], //  I hustle anything you name it, name it
    [26], //  I went from eviction to food stamps
    [28], //  To baggin work, wet & damp
    [29], //  To a passport flooded with stamps
    [31], //  Now it's Volì everywhere I land
    [35], //  Two passports, three cities, two countries, one day
    [38], //  Now that's worldwide, if you think it's a game, let's play, dale
    [43], //  Cause if it feels right (you know it feels right)
    [46], //  We shouldn't waste anymore time
    [48], //  Let's get it started (let's get it started)
    [50], //  Don't think about it (let's get it started)
    [53], //  You know I'm gonna make it alright, alright (let's go)
    [57], //  Cause if it feels right
    [1], //  You know I made up my mind
    [3], //  Let's get it started (let's get it started)
    [5], //  Don't think about it (let's get it started)
    [10], //  I know that we can make it alight, alright
    [15], //  Every time I look into your eyes
    [17, 23], //  I feel like I could stare in them for a lifetime
    [26], //  We can get started for life (tonight)
    [31], //  For life (tonight) for life (tonight)
    [34], //  We can get started for life (tonight)
    [38], //  For life (tonight) for life (tonight)
    [40], //  We can get started
    [41], //  Don't stop if you can finish
];

require_once __DIR__ . '/to_css.php';
