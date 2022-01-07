<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [22, 23],  //  I feel my wings
    [28],  //  Have broken in your hands
    [32, 38],  //  I feel the words unspoken inside
    [39, 41],  //  When they pull you under
    [48],  //  And I will give you anything you want, oh
    [51],  //  You were all I wanted
    [57],  //  And all my dreams are fallen down
    [2, 4],  //  Crawlin' around
    [10],  //  Somebody save me
    [14],  //  Let your warm hands break right through
    [20],  //  Somebody save me
    [30],  //  I don't care how you do it, just stay, stay
    [36],  //  C'mon, I've been waiting for you
    [47, 53],  //  I see the world has folded in your heart
    [57, 2],  //  I feel the waves crash down inside
    [4, 6],  //  And they pull me under
    [13],  //  And I would give you anything you want, oh
    [16],  //  You were all I wanted
    [22],  //  And all my dreams have fallen down
    [27, 29],  //  Crawlin' around
    [35],  //  Somebody save me
    [39],  //  Let your warm hands break right through
    [44],  //  Somebody save me
    [46, 54],  //  I don't care how you do it, just stay, stay
    [1],  //  C'mon, I've been waiting for you
    [12, 17],  //  And all my dreams are on the ground
    [22, 24],  //  Crawlin' around
    [30],  //  Somebody save me
    [34],  //  Let your warm hands break right through
    [39],  //  Somebody save me
    [49],  //  I don't care how you do it, just stay (Stay with me)
    [55],  //  I made this whole world shine for you
    [59],  //  Just stay, stay
    [6],  //  C'mon, I'm still waiting for you
];

require_once __DIR__ . '/to_css.php';
