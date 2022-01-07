<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [15, 16], // Off with your head
    [19, 20], // Dance 'til you're dead
    [22, 23], // Heads will roll
    [25], // Heads will roll
    [27], // Heads will roll
    [29], // On the floor
    [32], // Glitter on the west streets
    [33, 35], // Silver over everything
    [37, 38], // The river's all wet
    [41], // You're all chrome
    [44, 46], // Dripping with alchemy
    [47, 49], // Shiver stop shivering
    [53], // The glitter's all wet
    [55], // You're all chrome
    [58, 0], // The men cry out, the girls cry out
    [2], // The men cry out, the girls cry out
    [4], // The men cry out, oh no

    [6, 7], // The men cry out,  the girls cry out
    [9], // The men cry out,  the girls cry out
    [12], // The men cry out, oh no
    [27, 29], // Off off with your head
    [31, 33], // Dance dance 'til you're dead dead
    [35, 36], // Heads will roll
    [37, 38], // Heads will roll
    [39, 40], // Heads will roll
    [41], // On the floor
    [43, 46], // Looking glass
    [49], // Take the past
    [53], // Shut your eyes
    [56], // Realize
    [0], // Realize
    [26, 28], // Glitter on the west streets
    [29, 32], // Silver over everything
    [34, 36], // The glitter's all wet
    [37], // You're all chrome
    [40, 41], // You're all chrome
    [58, 0], // Off off off with your head
    [1, 4], // Dance dance dance 'til you're dead
];

require_once __DIR__ . '/to_css.php';
