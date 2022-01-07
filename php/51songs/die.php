<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [30, 33],  //  Take me I'm alive
    [35],  //  Never was a girl with a wicked mind
    [40],  //  But everything looks better when the sun goes down
    [42],  //  I had everything
    [45],  //  Opportunities for eternity
    [49],  //  And I could belong to the night
    [52],  //  Then your eyes
    [56],  //  I can see in your eyes
    [57],  //  Your eyes
    [1],  //  You make me wanna die
    [3],  //  I'll never be good enough
    [6],  //  You make me wanna die
    [11],  //  And everything you love will burn up in the light
    [17],  //  And every time I look inside your eyes
    [21],  //  You make me wanna die
    [29, 32],  //  Taste me drink my soul
    [34],  //  Show me all the things that I shouldn't know
    [39],  //  When there's a blue moon on the rise
    [42],  //  I had everything
    [44],  //  Opportunities for eternity
    [49],  //  And I could belong to the night
    [52],  //  Then your eyes
    [56],  //  I can see in your eyes
    [57],  //  Your eyes
    [0],  //  Everything in your eyes
    [3],  //  Your eyes
    [5],  //  You make me wanna die
    [8],  //  I'll never be good enough
    [10],  //  You make me wanna die
    [15],  //  And everything you love will burn up in the light
    [23],  //  And every time I look inside your eyes
    [25],  //  You make me wanna die
    [35, 40],  //  I would die for you my love
    [43],  //  My love
    [45, 50],  //  I would lie for you my love
    [55],  //  My love (You make me wanna die)
    [0],  //  I would steal for you my love
    [5],  //  My love (You make me wanna die)
    [12],  //  And I would die for you my love, my love
    [15],  //  We'll burn up in the light
    [20],  //  And every time I look inside your eyes
    [25],  //  I'm burning in the light, look inside your eyes
    [30],  //  I'm burning in the light, look inside your eyes
    [32, 34],  //  You make me wanna die
];

require_once __DIR__ . '/to_css.php';
