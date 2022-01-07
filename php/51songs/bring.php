<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [16, 25],  //  How can you see into my eyes like open doors
    [27, 32],  //  Leading you down into my core
    [36],  //  Where I’ve become so numb
    [48],  //  Without a soul my spirit sleeping somewhere cold
    [58],  //  Until you find it there and lead it back home
    [3, 4],  //  (Wake me up)
    [5],  //  Wake me up inside
    [6],  //  (I can’t wake up)
    [8],  //  Wake me up inside
    [9],  //  (Save me)
    [13],  //  Call my name and save me from the dark
    [14],  //  (Wake me up)
    [15],  //  Bid my blood to run
    [16],  //  (I can’t wake up)
    [18],  //  Before I come undone
    [19],  //  (Save me)
    [24],  //  Save me from the nothing I’ve become
    [27, 33],  //  Now that I know what I’m without
    [36],  //  You can’t just leave me
    [43],  //  Breathe into me and make me real
    [48],  //  Bring me to life
    [50, 51],  //  (Wake me up)
    [52],  //  Wake me up inside
    [53],  //  (I can’t wake up)
    [55],  //  Wake me up inside
    [56],  //  (Save me)
    [0],  //  Call my name and save me from the dark
    [1],  //  (Wake me up)
    [2],  //  Bid my blood to run
    [3],  //  (I can’t wake up)
    [5],  //  Before I come undone
    [6],  //  (Save me)
    [11],  //  Save me from the nothing I’ve become
    [30, 36],  //  Frozen inside without your touch
    [40],  //  Without your love darling
    [46],  //  Only you are the life among
    [50],  //  The dead
    [53],  //  All this time I can’t believe I couldn’t see
    [55],  //  Kept in the dark but you were there in front of me
    [58],  //  I’ve been sleeping a thousand years it seems
    [0],  //  Got to open my eyes to everything
    [3],  //  Without a thought without a voice without a soul
    [5],  //  Don’t let me die here
    [6],  //  There must be something more
    [11],  //  Bring me to life
    [12],  //  (Wake me up)
    [13],  //  Wake me up inside
    [14],  //  (I can’t wake up)
    [15],  //  Wake me up inside
    [16],  //  (Save me)
    [21],  //  Call my name and save me from the dark
    [22],  //  (Wake me up)
    [23],  //  Bid my blood to run
    [24],  //  (I can’t wake up)
    [26],  //  Before I come undone
    [27],  //  (Save me)
    [32],  //  Save me from the nothing I’ve become
    [37],  //  (Bring me to life)
    [41],  //  I’ve been living a lie, there’s nothing inside
    [55],  //  (Bring me to life)
];

require_once __DIR__ . '/to_css.php';
