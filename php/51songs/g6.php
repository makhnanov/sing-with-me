<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [7, 10], //  Poppin bottles in the ice, like a blizzard
    [14], //  When we drink we do it right, gettin' slizzard
    [18], //  Sippin' sizzurp in my ride, in my ride, like a Three 6
    [22], //  Now I'm feelin' so fly like a G6
    [25], //  Like a G6, like a G6
    [30], //  Now, now, now, now, now, now I'm feelin' so fly like a G6
    [33], //  Like a G6, like a G6
    [37], //  Now, now, now, now, now, now I'm feelin' so fly like a G6
    [39], //  Give me that Mo-Moet-wet
    [41], //  Give me that Cry-Crystal-tal
    [45], //  Ladies love my style, at my table gettin' wild
    [48], //  Get them bottles poppin, we get that drip and that drop
    [52], //  Now give me 2 more bottles 'cause you know it don't stop
    [54], //  Hell yeah
    [56], //  Drink it up, drink-drink it up,
    [0], //  When sober girls around me, they be actin' like they drunk
    [4], //  They be actin' like they drunk, actin'-actin' like they drunk
    [8], //  Whe, when sober girls around me they be actin' like they drunk-unk-unk
    [12], //  Poppin' bottles in the ice, like a blizzard
    [15], //  When we drink we do it right gettin' slizzard
    [20], //  Sippin' sizzurp in my ride, in my ride, like a Three 6
    [23], //  Now I'm feelin' so fly like a G6
    [27], //  Like a G6, like a G6
    [31], //  Now, now, now, now, now, now I'm feelin' so fly like a G6
    [35], //  Like a G6, like a G6
    [39], //  Now, now, now, now, now, now I'm feelin' so fly like a G6
    [42], //  Sippin on, sippin on sizz, I'ma ma-make it fizz
    [46], //  Girl I keep it gangster, poppin' bottles at the crib, crib
    [50], //  This is how we live, every single night
    [54], //  Take that bottle to the head, and let me see you fly
    [55], //  Hell yeah
    [58], //  Drink it up, drink-drink it up
    [2], //  When sober girls around me, they be actin' like they drunk
    [5], //  They be actin' like they drunk, actin' like they drunk
    [9], //  Whe, when sober girls around me they be actin' like they dru-u-unk
    [13], //  Poppin' bottles in the ice, like a blizzard
    [17], //  When we drink we do it right gettin slizzard
    [21], //  Sippin' sizzurp in my ride, in my ride, like Three 6
    [25], //  Now I'm feelin' so fly like a G6
    [28], //  Like a G6, like a G6
    [32], //  Now, now, now, now, now, now I'm feelin' so fly like a G6
    [36], //  Like a G6, like a G6
    [40], //  Now, now, now, now, now, now I'm feelin' so fly like a G6
    [43], //  It's that 808 bump, make you put yo hands up
    [48], //  Make you put yo hands up, put yo, put yo hands up (You can't touch this)
    [51], //  It's that 808 bump, make you put yo hands up
    [55], //  Make you put yo hands up, put yo, put yo hands up
    [56], //  (You can't touch this)
    [59], //  Hell yeah, make you put yo hands up
    [3], //  Make you put yo hands up, put yo, put yo hands up (You can't touch this)
    [6], //  Hell yeah, make you put yo hands up
    [10], //  Make you put yo hands up, put yo, put yo hands up
    [14], //  Poppin' bottles in the ice, like a blizzard
    [18], //  When we drink we do it right gettin' slizzard
    [22], //  Sippin' sizzurp in my ride, in my ride, like Three 6
    [26], //  Now I'm feelin' so fly like a G6
    [30], //  Like a G6, like a G6
    [34], //  Now, now, now, now, now, now I'm feelin' so fly like a G6
    [37], //  Like a G6, like a G6
    [42], //  Now, now, now, now, now, now I'm feelin' so fly like a G6
];

require_once __DIR__ . '/to_css.php';
