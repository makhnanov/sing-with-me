<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [1, 2],  //  Mesdames et Messieurs
    [3],  //  S'il vous plaît
    [5],  //  Soyez prêts pour AronChupa et Albatraoz
    [7],  //  C'est parti
    [36, 40],  //  Let me tell you all a story about a mouse named Lorry
    [44],  //  Yeah, Lorry was a mouse in a big brown house
    [48],  //  She called herself the hoe, with the money money flow
    [51],  //  But fuck that little mouse 'cause I'm an albatraoz
    [52],  //  Wooh!
    [57, 59],  //  I'm an albatraoz
    [4, 6],  //  I'm an albatraoz
    [10],  //  Yeah, Lorry said she was a mouse, smoked that cheesn' like a baoz
    [14],  //  Monilie money money hoe, chinka chinka chingka-flow
    [18],  //  Lorry was a witch, yeah, a sneaky little bitch
    [21],  //  So fuck that little mouse 'cause I'm an albatraoz
    [22],  //  Wooh!
    [27],  //  I'm, I'm
    [29],  //  I'm an albatraoz
];

require_once __DIR__ . '/to_css.php';
