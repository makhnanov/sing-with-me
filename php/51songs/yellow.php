<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [1, 2],  // Yeah Uh huh, you know what it is
    [3],  //  Black and yellow
    [4],  //  Black and yellow
    [5],  //  Black and yellow
    [6],  //  Black and yellow
    [8],  //  Yeah uh huh, you know what it is
    [9],  //  Black and yellow
    [10],  //  Black and yellow
    [11],  //  Black and yellow
    [12],  //  Black and yellow
    [15],  //  Yeah, uh huh, you know what it is (what it is)
    [18],  //  Everything I do, I do it big
    [20],  //  Yeah, uh huh, screamin' that's nothin'
    [23],  //  What I pulled off the lot, that's stuntin'
    [25],  //  Reppin' my town when you see me you know everything
    [26],  //  Black and yellow
    [27],  //  Black and yellow
    [28],  //  Black and yellow
    [29],  //  Black and yellow
    [31],  //  I put it down from my whip to my diamonds I'm in
    [32],  //  Black and yellow
    [33],  //  Black and yellow
    [34],  //  Black and yellow
    [35],  //  Black and yellow
    [38], // Big Snoop Dogg and Wiz Khalifa.
    [41],  //      See on the West Coast, I'm the big Chief-a.
    [45],  //      Grim reaper, maybe that bring me that, yellow lack
    [46],  //      Still a logo in the back.
    [49],  //      We banging out, that Taylor Gang.
    [52],  //      Dub to your face baby till ya say my name,
    [54],  //      Don't get your clique served,
    [57],  //      So much black and yellow, you would think I'm from Pittsburg.
    [58],  //      Intern, get yearn!
    [0],  // Yeah Uh huh, you know what it is
    [],  //  Black and yellow
    [],  //  Black and yellow
    [],  //  Black and yellow
    [],  //  Black and yellow
    [],  //  Yeah uh huh, you know what it is
    [],  //  Black and yellow
    [],  //  Black and yellow
    [],  //  Black and yellow
    [],  //  Black and yellow
    [],  //      
    [],  //      [Juicy J:]
    [],  //      I'ma bumblebee, lit up like a crima tree,
    [],  //      Drinking Hennessy black, I'm from Tennessy.
    [],  //      Juicy J make their way on their own
    [],  //      Two quarter mill for the Phantom, bitch, I own you!
    [],  //      And that go for every G that I'm fucking with,
    [],  //      Black and yellow bitches all around me, yeah,
    [],  //      I didin the hearse, gotta get that reimbursed
    [],  //      On the pills and that purple pint of Surp.
    [],  //      And I stay Louie down to the socks,
    [],  //      Range and watch, weed and Glock,
    [],  //      Fiends to pop.
    [],  //      My fans roll with them rubberband knots.
    [],  //      I'm getting old, but them rubber bands not n**ga!
    [],  //      
    [],  //      [Chorus]
    [],  //      
    [],  //      [T-Pain:]
    [],  //      Catch me in my Lamborghini!
    [],  //      (Black and yellow, black and yellow!)
    [],  //      I can rock it on the beat or accapella, accapella.
    [],  //      Sideways in the turning lane,
    [],  //      Fire flame, I be burning man!
    [],  //      Teddy Pain 'bout to hurt the game,
    [],  //      Took a break for a while I've been learning things.
    [],  //      I learned how to tell a n**ga "fuck you", then...
    [],  //      (Black and yellow, black and yellow!)
    [],  //      All I do is fucking win!
    [],  //      I told y'all, told y'all
    [],  //      And now I'm on,
    [],  //      You thought it was over,
    [],  //      You thought I was gone,
    [],  //      I'm going in, you don't have to let me, have to let me
    [],  //      Back from the dead like I'm Mackavelli, Mackavelli!
    [],  //      
    [],  //      [Chorus]
    [],  //      
    [],  //      [Wiz Khalifa:]
    [],  //      Black and yellow, all black and yellow.
    [],  //      See me now they treating me like I'm somebody special.
    [],  //      Smoking on that good, know that it's me as soon as they smell it.
    [],  //      You can chill, I'm the one who get it, not the one who sell it.
    [],  //      Grind everyday, I'm ballin. I can't help it
    [],  //      N**gas on that bullshit, my pockets full of Celtics.
    [],  //      And them n**gas hating on us give them best wishes.
    [],  //      In the club you ain't even on the guestlist, bitch.
    [],  //      Sound like you need to get your weight up.
    [],  //      Go to sleep rich and count another million when I wake up.
    [],  //      they wondering how I do my thang. Two words: Taylor Gang!
    [],  //      Remix G-shit!
    [],  //      The champagnes poured, n**ga the weeds lit.
    [],  //      Lil mama's clothes fallin like the leaves in the fall,
    [],  //      Ain't worry bout your friends so bring 'em all!
];

require_once __DIR__ . '/to_css.php';
