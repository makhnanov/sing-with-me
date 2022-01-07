<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [17, 20], // Superstar, where you from? How's it going?
    [23], // I know you got a clue what you're doing
    [26], // You can play brand new to all the other chicks out here
    [30], // But I know what you are, what you are, baby
    [34], // Look at you gettin' more than just a re-up
    [37], // Baby, you got all the puppets with their strings up
    [40], // Fakin' like a good one but I call 'em like I see 'em
    [44], // I know what you are, what you are, baby
    [48], // Womanizer, woman-womanizer, you're a womanizer
    [51], // Oh, womanizer, oh, you're a womanizer, baby
    [54], // You, you-you are, you, you-you are
    [57], // Womanizer, womanizer, womanizer
    [0], // Boy don't try to front, I-I
    [1], // Know just, just, what you are, are-are
    [3], // Boy don't try to front, I-I
    [5], // Know just, just, what you are, are-are
    [7], // You got me goin'
    [9], // You're oh so charmin'
    [10], // But I can't do it
    [12], // You womanizer
    [14], // Boy don't try to front, I-I
    [15], // Know just, just, what you are, are-are
    [17], // Boy don't try to front, I-I
    [19], // Know just, just, what you are, are-are
    [21], // You say I'm crazy
    [22], // I got your crazy
    [24], // You're nothing but a
    [26], // Womanizer
    [29], // Daddy-O, you got the swagger of a champion
    [32], // Too bad for you, you just can't find the right companion
    [35], // I guess when you have one too many, makes it hard, it could be easy
    [39], // Who you are, that's just who you are, baby
    [43], // Lollipop, must mistake me you're the sucker
    [46], // To think that I would be a victim, not another
    [48], // Say it, play it, how you want it
    [53], // But no way I'm never gonna fall for you, never you, baby
    [57], // Womanizer, woman-womanizer, you're a womanizer
    [0], // Oh, womanizer, oh, you're a womanizer, baby
    [3], // You, you-you are, you, you-you are
    [6], // Womanizer, womanizer, womanizer
    [9], // Boy don't try to front, I-I
    [11], // Know just, just, what you are, are-are
    [12], // Boy don't try to front, I-I
    [14], // Know just, just, what you are, are-are
    [16], // You got me goin'
    [18], // You're oh so charmin'
    [19], // But I can't do it
    [21], // You womanizer
    [23], // Boy don't try to front, I-I
    [24], // Know just, just, what you are, are-are
    [26], // Boy don't try to front, I-I
    [28], // Know just, just, what you are, are-are
    [30], // You say I'm crazy
    [32], // I got your crazy
    [33], // You're nothing but a
    [35], // Womanizer
    [40], // Maybe if we both lived in a different world, yeah
    [42, 46], // It would be all good and maybe I could be your girl
    [48], // But I can't, 'cause we don't, you!
    [52], // Womanizer, woman-womanizer, you're a womanizer
    [56], // Oh, womanizer, oh, you're a womanizer, baby
    [58], // You, you-you are, you, you-you are
    [2], // Womanizer, womanizer, womanizer
    [4], // Boy don't try to front, I-I
    [6], // Know just, just, what you are, are-are
    [7], // Boy don't try to front, I-I
    [9], // Know just, just, what you are, are-are
    [11], // You got me goin'
    [13], // You're oh so charmin'
    [15], // But I can't do it
    [16], // You womanizer
    [18], // Boy don't try to front, I-I
    [20], // Know just, just, what you are, are-are
    [21], // Boy don't try to front, I-I
    [23], // Know just, just, what you are, are-are
    [25], // You say I'm crazy
    [27], // I got your crazy
    [28], // You're nothing but a
    [30], // Womanizer
    [32], // Boy don't try to front, I-I
    [33], // Know just, just, what you are, are-are
    [35], // Boy don't try to front, I-I
    [37], // Know just, just, what you are, are-are
    [40], // Womanizer, woman-womanizer, you're a womanizer
    [44], // Oh, womanizer, oh, you're a womanizer, baby
];

require_once __DIR__ . '/to_css.php';
