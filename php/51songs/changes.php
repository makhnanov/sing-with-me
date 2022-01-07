<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [15, 17],  //  Come on, come on
    [19],  //  I see no changes, wake up in the morning, and I ask myself
    [22],  //  Is life worth living, should I blast myself?
    [24],  //  I'm tired of bein' poor, and even worse I'm black
    [26],  //  My stomach hurts, so I'm lookin' for a purse to snatch
    [28],  //  Cops give a damn about a negro
    [30],  //  Pull the trigger, kill a nigga, he's a hero
    [32],  //  Give the crack to the kids who the hell cares
    [34],  //  One less hungry mouth on the welfare
    [36],  //  First, ship 'em dope and let 'em deal the brothers
    [39],  //  Give 'em guns, step back, watch 'em kill each other
    [41],  //  It's time to fight back, that's what Huey said
    [43],  //  Two shots in the dark, now Huey's dead
    [46],  //  I got love for my brother, but we can never go nowhere
    [47],  //  Unless we share with each other
    [49],  //  We gotta start makin' changes
    [52],  //  Learn to see me as a brother instead of two distant strangers
    [53],  //  And that's how it's supposed to be
    [56],  //  How can the devil take a brother, if he's close to me?
    [58],  //  I'd love to go back to when we played as kids
    [0],  //  But things changed, and that's the way it is
    [3],  //  Come on, come on
    [5],  //  That's just the way it is
    [7, 10],  //  Things will never be the same
    [11, 14],  //  That's just the way it is
    [17],  //  Ooh, yeah
    [21],  //  Come on, come on
    [22],  //  That's just the way it is
    [27],  //  Things will never be the same
    [32],  //  That's just the way it is
    [34],  //  Aww, yeah
    [37],  //  I see no changes, all I see is racist faces
    [39],  //  Misplaced hate makes disgrace to races
    [41],  //  We under, I wonder what it takes to make this
    [43],  //  One better place, let's erase the wasted
    [46],  //  Take the evil out the people, they'll be acting right
    [48],  //  'Cause mo' black and white is smokin' crack tonight
    [50],  //  And only time we chill is when we kill each other
    [52],  //  It takes skill to be real, time to heal each other
    [54],  //  And although it seems heaven sent
    [56],  //  We ain't ready, to see a black President
    [58],  //  It ain't a secret, don't conceal the fact
    [0],  //  The penitentiary's packed, and it's filled with blacks
    [3],  //  But some things will never change
    [5],  //  Try to show another way but you stayin' in the dope game
    [7],  //  Now tell me, what's a mother to do?
    [9],  //  Bein' real don't appeal to the brother in you
    [11],  //  You gotta operate the easy way
    [14],  //  (I made a G today) But you made it in a sleazy way
    [16],  //  Sellin' crack to the kid (I gotta get paid)
    [18],  //  Well, hey, well, that's the way it is
    [20],  //  Come on, come on
    [22],  //  That's just the way it is
    [25, 27],  //  Things will never be the same
    [29, 32],  //  That's just the way it is
    [35],  //  Aww, yeah
    [38],  //  Come on, come on
    [40],  //  That's just the way it is
    [42, 45],  //  Things will never be the same
    [47, 50],  //  That's just the way it is
    [52],  //  Aww, yeah
    [53],  //  We gotta make a change
    [57],  //  It's time for us as a people to start makin' some changes
    [59],  //  Let's change the way we eat
    [1],  //  Let's change the way we live
    [4],  //  And let's change the way we treat each other
    [6],  //  You see, the old way wasn't working so it's on us to do
    [9],  //  What we gotta do, to survive
    [12],  //  And still I see no changes, can't a brother get a little peace?
    [14],  //  There's war in the streets and war in the Middle East
    [17],  //  Instead of war on poverty, they got a war on drugs
    [18],  //  So the police can bother me
    [21],  //  And I ain't never did a crime, I ain't have to do
    [23],  //  But now, I'm back with the facts givin' 'em back to you
    [25],  //  Don't let 'em jack you up, back you up
    [27],  //  Crack you up and pimps smack you up
    [29],  //  You gotta learn to hold ya own
    [31],  //  They get jealous when they see ya, with ya mobile phone
    [33],  //  But tell the cops, they can't touch this
    [36],  //  I don't trust this, when they try to rush, I bust this
    [38],  //  That's the sound of my tool, you say it ain't cool?
    [40],  //  But mama didn't raise no fool
    [43],  //  And as long as I stay black, I gotta stay strapped
    [45],  //  And I never get to lay back
    [47],  //  'Cause I always got to worry 'bout the pay backs
    [49],  //  Some buck that I roughed up way back
    [51],  //  Comin' back after all these years
    [53],  //  Rat-a-tat, tat, tat, tat, that's the way it is
    [55, 58],  //  That's just the way it is
    [0, 3],  //  Things will never be the same
    [4, 7],  //  That's just the way it is (Way it is)
    [9],  //  Aww, yeah
    [13, 15],  //  That's just the way it is
    [17, 20],  //  Things will never be the same
    [22,25],  //  That's just the way it is
    [27],  //  Aww, yeah
];

require_once __DIR__ . '/to_css.php';
