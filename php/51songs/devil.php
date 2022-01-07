<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [14, 16], //  Oh my God, Ronny
    [18], //  Ayy, somebody grab him some clippers (zzzzt)
    [19], //  His fuckin' beard is weird
    [23], //  Tough talk from a rapper payin' millions for security a year
    [26], //  "I think my dad's gone crazy, " yeah, Hailie, you right
    [29], //  Dad's always mad cooped up in the studio, yellin' at the mic
    [31], //  You're sober and bored, huh? (I know)
    [33], //  About to be 46 years old, dog
    [34], //  Talkin' 'bout "I'ma call up Trick Trick"
    [36], //  Man, you sound like a bitch, bitch
    [37], //  Man up and handle your shit (ugh)
    [39], //  Mad about somethin' I said in 2012
    [42], //  Took you six years and a surprise album just to come with a diss
    [45], //  Homie, we get it, we know that you're the greatest rapper alive
    [48], //  Fuckin' dweeb, all you do is read the dictionary and stay inside
    [50], //  Fuck Rap God, I'm the Rap Devil
    [51], //  Comin' bare-faced with a black shovel
    [53], //  Like the Armageddon when the smoke settle
    [55], //  His body next to this instrumental, I'm sayin'
    [58], //  I'm sick of them sweatsuits and them corny hats, let's talk about it
    [1], //  I'm sick of you bein' rich and you still mad, let's talk about it
    [4], //  Both of us single dads from the Midwest, we can talk about it
    [6], //  Or we could get gully, I'll size up your body
    [7], //  And put some white chalk around it
    [10], //  Let's talk about the fact you actually blackballed a rapper
    [11], //  That's twice as young as you (let's talk about it)
    [12], //  Let's call Sway
    [14], //  Ask why I can't go on Shade 45 because of you (brrt)
    [15], //  Let's ask Interscope
    [17], //  How you had Paul Rosenberg tryin' to shelf me (huh?)
    [19], //  Still can't cover up the fact
    [20], //  Your last four albums is as bad as your selfie
    [22], //  Now tell me, what do you stand for? (what?)
    [24], //  I know you can't stand yourself (no)
    [26], //  Tryin' to be the old you so bad, you Stan yourself (ha)
    [28], //  Let's leave all the beefin' to 50 (please)
    [30], //  Em, you're pushin' 50
    [32], //  Why you claimin' that I'ma call Puff?
    [33], //  When you the one that called Diddy (facts)
    [35], //  Then you went and called Jimmy (facts)
    [36], //  They conference called me in the morning (what?)
    [38], //  They told me you mad about a tweet
    [40], //  You wanted me to say sorry (what?)
    [41], //  I swear to God, I ain't believe him (nah)
    [42], //  Please say it ain't so (no)
    [46], //  The big bad bully of the rap game can't take a fuckin' joke
    [48], //  Oh you want some fuckin' smoke (what?)
    [49], //  But not literally, you'll choke
    [51], //  Yeah, I'll acknowledge you're the GOAT
    [52], //  But I'm The Gunner, bitch, I got you in the scope (brra)
    [54], //  Don't have a heart attack now (no)
    [56], //  Somebody help your mans up (help)
    [59], //  Knees weak of old age, the real Slim Shady can't stand up
    [2], //  I'm sick of them sweatsuits and them corny hats, let's talk about it
    [5], //  I'm sick of you bein' rich and you still mad, let's talk about it
    [8], //  Both of us single dads from the Midwest, we can talk about it
    [10], //  Or we could get gully, I'll size up your body
    [11], //  And put some white chalk around it
    [13], //  Hello Marshall, my name's Colson
    [15], //  You should go back to Recovery
    [16], //  I know your ego is hurtin'
    [18], //  Just knowin' that all of your fans discovered me (hi)
    [20], //  He like, "Damn, he a younger me
    [21], //  Except he dresses better and I'm ugly
    [22], //  Always making fun of me."
    [24], //  Stop all the thuggery, Marshall, you livin' in luxury (damn)
    [26], //  Look what you done to me
    [27], //  Dropped an album just because of me
    [28], //  Damn, you in love with me!
    [29], //  You got money but I'm hungry
    [31], //  I like the diss but you won't say them lyrics out in front of me
    [32], //  Shout out to every rapper that's up under me
    [34], //  Know that I'll never do you like this fuckery
    [36], //  Still bitter after everyone loves you
    [37], //  Pull that wedgie out your dungarees (hey)
    [40], //  I gotta respect the OGs and I know most of 'em personally (ayy)
    [42], //  But you're just a bully actin' like a baby
    [43], //  So I gotta read you a nursery (nursery)
    [45], //  I'm the ghost of the future
    [47], //  And you're just Ebenezer Scrooge (facts)
    [48], //  I said on Flex anyone could get it
    [50], //  I ain't know it would be you
    [53], //  I'm sick of them sweatsuits and them corny hats, let's talk about it
    [56], //  I'm sick of you bein' rich and you still mad, let's talk about it
    [59], //  Both of us single dads from the Midwest, we can talk about it
    [1], //  Or we could get gully, I'll size up your body
    [3], //  And put some white chalk around it
    [6], //  Ayy, ridin' shotty 'cause I gotta roll this dope
    [9], //  It's a fast road when your idols become your rivals, yeah
    [14], //  Never hesitate to say it to your face, I'm a asshole
    [15], //  Bitch-ass motherfucker (Oh my God, Ronny)
    [17], //  We know you get nervous, Rabbit
    [19], //  I see Momma's spaghetti all over your sweater
    [20], //  I wish you would lose yourself on the records
    [22], //  That you made a decade ago, they were better
    [23], //  Accordin' to them, you're a national treasure
    [25], //  To me, you're as soft as a feather
    [27], //  The type to be scared to ask Rihanna for her number
    [28], //  Just hold her umbrella-ella-ella
    [31], //  "I'm not afraid, " okay Oscar the Grouch, chill on the couch (fuck)
    [33], //  You got an Oscar, damn
    [35], //  Can anyone else get some food in their mouth? (For real)
    [38], //  They made a movie about you, you're in everybody's top ten
    [39], //  You're not getting better with time
    [41], //  It's fine, Eminem, put down the pen
    [42], //  Or write an apology
    [44], //  Over the simple fact you had to diss to acknowledge me
    [45], //  I am the prodigy
    [48], //  How could I even look up to you? You ain't as tall as me
    [51], //  5'8" and I'm 6'4", seven punches hold your head still
    [54], //  Last time you saw 8 Mile was at home on a treadmill
    [55], //  You were named after a candy
    [57], //  I was named after a gangster (brr)
    [59], //  And don't be a sucker and take my verse
    [0], //  Off of Yelawolf's album, thank you (thank you)
    [2], //  I just wanna feed my daughter
    [3], //  You tryna stop the money to support her
    [5], //  You the one always talkin' 'bout the action
    [7], //  Text me the addy, I'm pullin' up scrappin'
    [8], //  And I'm by my fuckin' self, what's happenin'?
    [10], //  EST captain, salute me or shoot me
    [11], //  That's what he's gonna have to do to me
    [13], //  When he realizes there ain't shit he could do to me
    [16], //  Everybody always hated me, this isn't anything new to me
    [18], //  Yeah, there's a difference between us
    [20], //  I got all of my shit without Dre producin' me (ayy)
    [21], //  I know you're not used to me
    [23], //  Usually one of your disses should ruin me
    [24], //  But bitch I'm from Cleveland
    [26], //  Everybody quiet this evenin', I'm readin' the eulogy (shh)
    [28], //  Dropped an album called Kamikaze
    [29], //  So that means he killed him
    [31], //  Already fucked one rapper's girl this week
    [33], //  Don't make me call Kim
    [35], //  I'm sick of them sweatsuits and them corny hats, let's talk about it
    [39], //  I'm sick of you bein' rich and you still mad, let's talk about it
    [42], //  Both of us single dads from the Midwest, we can talk about it
    [44], //  Or we could get gully, I'll size up your body
    [45], //  And put some white chalk around it
];

require_once __DIR__ . '/to_css.php';
