<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [7, 10],  //  I just need to get it off my chest
    [12],  //  Yeah, more than you know
    [14],  //  Yeah, more than you know
    [18],  //  You should know that baby you're the best
    [20],  //  Yeah, more than you know
    [22],  //  Yeah, more than you know
    [23, 27],  //  I saw it coming, from miles away
    [31],  //  I better speak up if I got something to say
    [35],  //  'Cause it ain't over, until she sings
    [39, 43],  //  You had your reasons, you had a few
    [47],  //  But you knew that I would go anywhere for you
    [51],  //  'Cause it ain't over, until she sings
    [53, 57],  //  I just need to get it off my chest
    [59],  //  Yeah, more than you know
    [1],  //  Yeah, more than you know
    [5],  //  You should know that baby you're the best
    [7],  //  Yeah, more than you know
    [9],  //  Yeah, more than you know
    [10],  //  I just...
    [17, 18],  //  I just...
    [26, 29],  //  Your good intentions are sweet and pure
    [34],  //  But they can never tame a fire like yours
    [37],  //  No it ain't over, until she sings
    [41, 45],  //  Right where you wanted, down on my knees
    [49],  //  You got me begging, pretty baby set me free
    [53],  //  'Cause it ain't over, until she sings
    [57, 1],  //  Come a little closer, let me taste your smile
    [4],  //  Until the morning lights
    [5, 9],  //  Ain't no going back the way you look tonight
    [11],  //  I see it in your eyes
    [12, 15],  //  I just need to get it off my chest
    [17],  //  Yeah, more than you know
    [19],  //  Yeah, more than you know
    [23],  //  You should know that baby you're the best
    [25],  //  Yeah, more than you know
    [27],  //  Yeah, more than you know
    [28],  //  Yeah, more than you know
    [30],  //  Yeah, more than you know
    [32],  //  Yeah, more than you know
    [34],  //  Yeah, more than you know
    [36],  //  Yeah, more than you know
    [38],  //  Yeah, more than you know
    [40],  //  Yeah, more than you know
    [42],  //  Yeah, more than you know
    [44],  //  I just...
    [59, 2],  //  I just need to get it off my chest
    [4],  //  Yeah, more than you know
    [6],  //  Yeah, more than you know
    [10],  //  You should know that baby you're the best
    [11],  //  Yeah, more than you know
    [13],  //  Yeah, more than you know
    [43, 45],  //      Baby, I'm a renegade
    [47, 49],  //      Baby, you're a firestorm
    [51, 53],  //      Move your body close to mine
    [55, 57],  //      We can dance until the dawn
    [59, 1],  //      I can see we're getting late
    [2, 6],  //      The way you, the way you, the way you look tonight
    [9],  //      And I could lose a year of sleep
    [15],  //      The way you, the way you, the way you look tonight
    [31, 33],  //      Shoot me straight into my heart
    [35, 37],  //      We don't have to take it slow
    [39, 41],  //      Love me like we're out of time
    [43, 45],  //      Easy come and easy go
    [47, 49],  //      Cut me deep into the bone
    [51, 53],  //      You're my perfect getaway
    [55, 57],  //      I am right where I belong
    [59,1],  //      We got more than words can say
    [3, 5],  //      Baby, I'm a renegade
    [7, 10],  //      Baby, you're a firestorm
    [11, 14],  //      Move your body close to mine
    [15, 18],  //      We can dance until the dawn
    [22],  //      I can see we're getting late
    [27],  //      The way you, the way you, the way you look tonight
    [30],  //      And I could lose a year of sleep
    [35],  //      The way you, the way you, the way you look tonight
    [40, 43],  //      The way you, the way you, the way you look tonight [2x]
    [46, 51],  //      The way you, the way you, the way you look tonight [2x]
    [19, 21] // How do you feel right now
];

require_once __DIR__ . '/to_css.php';
