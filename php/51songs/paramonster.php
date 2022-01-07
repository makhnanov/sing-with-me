<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [13, 18],  //  You were my conscience, so solid, now you're like water
    [24],  //  We started drowning, not like we'd sink any further
    [30],  //  But I let my heart go, it's somewhere down at the bottom
    [36],  //  But I'll get a new one and come back for the hope that you've stolen
    [39, 44],  //  I'll stop the whole world, I'll stop the whole world
    [49],  //  From turning into a monster and eating us alive
    [55],  //  Don't you ever wonder how we survive?
    [0],  //  Well now that your gone, the world is ours
    [11, 17],  //  I'm only human, I've got a skeleton in me
    [22],  //  But I'm not the villain, despite what you're always preaching
    [28],  //  Call me a traitor, I'm just collecting your victims
    [34],  //  They're getting stronger, I hear them calling
    [37, 42],  //  I'll stop the whole world, I'll stop the whole world
    [47],  //  From turning into a monster and eating us alive
    [53],  //  Don't you ever wonder how we survive?
    [58],  //  Well now that your gone, the world is ours
    [9, 12],  //  Well you find your strength in solutions
    [14],  //  But I liked the tension
    [18],  //  And not always knowing the answers
    [24],  //  But you're gonna lose it, you're gonna lose it
    [29, 35],  //  I'll stop the whole world, I'll stop the whole world
    [39],  //  From turning into a monster, and eating us alive
    [46],  //  Don't you ever wonder how we survive?
    [49],  //  Well now that your gone, the world
    [55],  //  I'll stop the whole world, I'll stop the whole world
    [0],  //  From turning into a monster, eating us alive
    [6],  //  Don't you ever wonder how we survive?
    [12],  //  Now that your gone, the world is ours
];

require_once __DIR__ . '/to_css.php';
