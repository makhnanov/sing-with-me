<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [10, 12],  //  Do you recall, not long ago
    [14],  //  We would walk on the sidewalk?
    [17],  //  Innocent, remember?
    [20],  //  All we did was care for each other
    [21],  //  But the night was warm
    [24],  //  We were bold and young
    [26],  //  All around the wind blows
    [29],  //  We would only hold on to let go
    [31],  //  Blow a kiss, fire a gun
    [34],  //  We need someone to lean on
    [36],  //  Blow a kiss, fire a gun
    [39],  //  All we need is somebody to lean on
    [41],  //  Blow a kiss, fire a gun
    [44],  //  We need someone to lean on
    [46],  //  Blow a kiss, fire a gun
    [49],  //  All we need is somebody to lean on
    [9, 11],  //  What will we do when we get old?
    [13],  //  Will we walk down the same road?
    [16],  //  Will you be there by my side?
    [18],  //  Standing strong as the waves roll over
    [20],  //  When the nights are long
    [23],  //  Longing for you to come home
    [25],  //  All around the wind blows
    [28],  //  We would only hold on to let go
    [30],  //  Blow a kiss, fire a gun
    [33],  //  We need someone to lean on
    [35],  //  Blow a kiss, fire a gun
    [38],  //  All we need is somebody to lean on
    [40],  //  Blow a kiss, fire a gun
    [42],  //  We need someone to lean on
    [45],  //  Blow a kiss, fire a gun
    [47],  //  All we need is somebody to lean on
    [55, 57],  //  All we need is somebody to lean on
    [5, 7],  //  All we need is somebody to lean on
    [9],  //  Lean on, lean on, lean on, lean on...
    [32, 34],  //  Blow a kiss, fire a gun
    [36],  //  We need someone to lean on
    [39],  //  Blow a kiss, fire a gun
    [41],  //  All we need is somebody to lean on
    [44],  //  Blow a kiss, fire a gun
    [46],  //  We need someone to lean on
    [49],  //  Blow a kiss, fire a gun
    [51],  //  All we need is somebody to lean on
];

require_once __DIR__ . '/to_css.php';
