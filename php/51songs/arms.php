<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [10, 13], //  Oh-oh (ooh, ooh)
    [16], //  (Lil Pump, Maluma, baby)
    [18], //  Mally, Mally Mall
    [20], //  Arms around you
    [22], //  Te amo mami, let me hold you
    [26], //  Wrap me arms right around you, girl, oh yeah
    [29], //  Good lovin' got all around you
    [31], //  To make sure no one could harm you
    [35], //  Dale, mami, let me have you, ooyy
    [38], //  Yeah, she drivin' me crazy (Yeah)
    [40], //  I take drugs on the daily (Ooh)
    [43], //  Pull out the 'Rari or the Mercedes (Which one?)
    [46], //  Yeah, she got my heart racing, racing (Yeah)
    [47], //  Foreign cars, foreign hoes
    [48], //  Yeah, we got a lot of those (Ooh)
    [50], //  10 bands on my Gucci coat (Ooh)
    [51], //  Ten hoes in the studio (Huh)
    [52], //  Guess I'm gonna miss you though (Yuh)
    [53], //  But I got a lot of dope (Brr)
    [54], //  Spanish bitch, she love the coke (Brrt)
    [55], //  Put my dick straight down her throat
    [57], //  I know that your baby daddy broke (Broke)
    [59], //  Take your wife backstage at a festival
    [2], //  Penthouse, fifty-fourth flo', let's go (Let's go)
    [4], //  And my hotel came with a stripper pole
    [5], //  Arms around you
    [8], //  Te amo mami, let me hold you
    [12], //  Wrap me arms right around you, girl, oh yeah (Oh)
    [14], //  Good lovin' got all around you
    [17], //  To make sure no one could harm you
    [20], //  Dale, mami, let me have you, oh yeah
    [23, 25], //  If you ever get to feel my touch
    [28], //  Then you might never get enough
    [31], //  Yes, I know you feel the ambiance (Ambiance, hey)
    [32, 34], //  Love you like I'll never see you again
    [37], //  Only real cause I'm not for pretend (No)
    [40], //  Reaching out with your arms extended (Yeah, yeah)
    [43], //  My love, is emergency
    [46], //  And I can sense the urgency (Ya-aah)
    [48], //  Come, let me, woah-oh-ooh
    [53], //  Your body is just for me (for me)
    [55], //  It was like sorcery
    [58], //  She left me like an alcoholic (Woah-oh-ooh)
    [0], //  Arms around you
    [2], //  Te amo mami, let me hold you
    [7], //  Wrap me arms right around you, girl, oh yeah (Oh)
    [9], //  Good lovin' got all around you
    [12], //  To make sure no one could harm you
    [15], //  Dale, mami, let me have you, oh yeah
    [16], //  Yeah, Maluma baby (Dice)
    [21], //  Ey, mamá (Mamá), te espera un party en mi cama (Cama)
    [23], //  Me encanta la forma en que me hablas (Hablas)
    [25], //  Invita a tu amiga la buena
    [27], //  Pa' que fumemos como fumamos en La Habana
    [29], //  Siempre andamos positivos
    [31], //  Esa es la forma en que vivo, activo
    [33], //  Que se joda quien no esté en lo mismo
    [35], //  Yo disfruto mientras siga vivo
    [38], //  Di que sí que no te cuesta
    [42], //  Si conmigo estás vestida de Chanel (Oh, yeah)
    [44], //  Hasta los pies (Oh, yeah)
    [46], //  Si tú te pones pa'l problema
    [50], //  Yo me pongo como se tiene que ser
    [54], //  De una vez, bebé, bebé (Maluma, baby)
    [55], //  Arms around you
    [57], //  Te amo mami, let me hold you
    [2], //  Wrap me arms right around you, girl, oh yeah (Oh-ooh)
    [4], //  Good lovin' got all around you
    [7], //  To make sure no one could harm you
    [11], //  Dale, mami, let me have you (Have you), oh yeah
];

require_once __DIR__ . '/to_css.php';
