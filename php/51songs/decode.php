<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [12, 15],  //  How can I decide what's right?
    [18],  //  When you're clouding up my mind
    [21],  //  I can't win your losing fight
    [23],  //  All the time
    [26],  //  Nor could I ever own what's mine
    [30],  //  When you're always taking sides
    [32],  //  But you won't take away my pride
    [38],  //  No, not this time
    [46],  //  Not this time
    [49],  //  How did we get here
    [57],  //  When I used to know you so well?
    [59, 1],  //  How did we get here?
    [10],  //  Well, I think I know
    [17, 20],  //  The truth is hiding in your eyes
    [22],  //  And it's hanging on your tongue
    [25],  //  Just boiling in my blood
    [27],  //  But you think that I can't see
    [31],  //  What kind of man that you are
    [34],  //  If you're a man at all
    [37],  //  Well, I will figure this one out
    [44],  //  On my own (I'm screaming, I love you so)
    [51],  //  On my own (but my thoughts you can't decode)
    [54],  //  How did we get here?
    [0],  //  When I used to know you so well?
    [5],  //  Yeah, hw did we get here?
    [14],  //  Well, I think I know
    [36,42],  //  Do you see what we've done?
    [48],  //  We're gonna make such fools of ourselves
    [53],  //  Do you see what we've done?
    [1],  //  We're gonna make such fools of ourselves
    [6, 13],  //  Yeah, yeah
    [15],  //  How did we get here
    [23],  //  When I used to know you so well? Yeah
    [27],  //  How did we get here
    [43],  //  When I used to know you so well?
    [44],  //  I think I know, I think I know
    [48, 54],  //  There is something I see in you
    [2],  //  It might kill me, I want it to be true
];

require_once __DIR__ . '/to_css.php';
