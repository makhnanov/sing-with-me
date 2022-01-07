<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [23, 25],  //  I'm just a step away
    [27],  //  I'm just a breath away
    [28],  //  Losin' my faith today
    [30],  //  (Fallin' off the edge today)
    [32],  //  I am just a man
    [33],  //  Not superhuman
    [35],  //  (I'm not superhuman)
    [37],  //  Someone save me from the hate
    [39],  //  It's just another war
    [40, 42],  //  Just another family torn
    [43],  //  (Falling from my faith today)
    [46],  //  Just a step from the edge
    [47, 50],  //  Just another day in the world we live
    [54],  //  I need a hero to save me now
    [57],  //  I need a hero (save me now)
    [0],  //  I need a hero to save my life
    [4],  //  A hero'll save me (just in time)
    [6],  //  I've gotta fight today
    [7],  //  To live another day
    [9],  //  Speakin' my mind today
    [11],  //  (My voice will be heard today)
    [13],  //  I've gotta make a stand
    [14],  //  But I am just a man
    [16],  //  (I'm not superhuman)
    [18],  //  My voice will be heard today
    [20],  //  It's just another war
    [21, 23],  //  Just another family torn
    [24],  //  (My voice will be heard today)
    [27],  //  It's just another kill
    [30],  //  The countdown begins to destroy ourselves
    [34],  //  I need a hero to save me now
    [37],  //  I need a hero (save me now)
    [41],  //  I need a hero to save my life
    [44],  //  A hero'll save me (just in time)
    [48],  //  I need a hero to save my life
    [51],  //  I need a hero just in time
    [55],  //  Save me just in time
    [58],  //  Save me just in time
    [0],  //  Who's gonna fight for what's right
    [2],  //  Who's gonna help us survive
    [3],  //  We're in the fight of our lives
    [5],  //  (And we're not ready to die)
    [7],  //  Who's gonna fight for the weak
    [8],  //  Who's gonna make 'em believe
    [11],  //  I've got a hero (I've got a hero)
    [12],  //  Livin' in me
    [13],  //  I'm gonna fight for what's right
    [15],  //  Today I'm speaking my mind
    [17],  //  And if it kills me tonight
    [19],  //  (I will be ready to die)
    [21],  //  A hero's not afraid to give his life
    [25],  //  A hero's gonna save me just in time
    [28, 32],  //  I need a hero to save me now
    [25],  //  I need a hero (save me now)
    [38],  //  I need a hero to save my life
    [42],  //  A hero'll save me (just in time)
    [43],  //  I need a hero
    [44],  //  Who's gonna fight for what's right
    [46],  //  Who's gonna help us survive
    [48,49],  //  I need a hero
    [51],  //  Who's gonna fight for the weak
    [52],  //  Who's gonna make 'em believe
    [54],  //  I need a hero
    [56, 58],  //  I need a hero
    [0, 4],  //  A hero's gonna save me just in time
];

require_once __DIR__ . '/to_css.php';
