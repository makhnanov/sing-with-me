<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [30, 31],  //  I think - I think when it's all over,
    [34],  //  It just comes back in flashes, you know?
    [36, 37],  //  It's like a kaleidoscope of memories.
    [43],  //  It just all comes back. But he never does.
    [48, 49],  //  I think part of me knew the second I saw him
    [50],  //  that this would happen.
    [54, 57],  //  It's not really anything he said or anything he did,
    [1],  //  It was the feeling that came along with it.
    [3, 5],  //  And the crazy thing is
    [8],  //  I don't know if I'm ever gonna feel that way again.
    [10, 11],  //  But I don't know if I should.
    [19, 24],  //  I knew his world moved too fast and burned too bright.
    [24, 26],  //  But I just thought,
    [30, 32],  //  how can the devil be pulling you toward someone
    [37],  //  who looks so much like an angel when he smiles at you?
    [44, 47],  //  Maybe he knew that when he saw me.
    [52, 53],  //  I guess I just lost my balance.
    [56, 59],  //  I think that the worst part of it all wasn't losing him.
    [1, 2],  //  It was losing me.
    [6, 9],  //  Once upon a time a few mistakes ago
    [12],  //  I was in your sights, you got me alone
    [16],  //  You found me, you found me, you found me
    [18, 21],  //  I guess you didn't care, and I guess I liked that
    [24],  //  And when I fell hard you took a step back
    [29],  //  Without me, without me, without me
    [32, 38],  //  And he's long gone when he's next to me
    [42],  //  And I realize the blame is on me
    [47],  //  'Cause I knew you were trouble when you walked in
    [49],  //  So shame on me now
    [53],  //  Flew me to places I'd never been
    [56],  //  'Til you put me down, oh
    [59],  //  I knew you were trouble when you walked in
    [2],  //  So shame on me now
    [6],  //  Flew me to places I'd never been
    [9],  //  Now I'm lying on the cold hard ground
    [15],  //  Oh, oh, trouble, trouble, trouble
    [20],  //  Oh, oh, trouble, trouble, trouble
    [23],  //  No apologies. He'll never see you cry,
    [27],  //  Pretends he doesn't know that he's the reason why
    [31],  //  You're drowning, you're drowning, you're drowning
    [36],  //  Now I heard you moved on from whispers on the street
    [39],  //  A new notch in your belt is all I'll ever be
    [44],  //  And now I see, now I see, now I see
    [47, 52],  //  He was long gone when he met me
    [58],  //  And I realize the joke is on me, yeah!
    [2],  //  I knew you were trouble when you walked in
    [4],  //  So shame on me now
    [8],  //  Flew me to places I'd never been
    [11],  //  'Til you put me down, oh
    [14],  //  I knew you were trouble when you walked in
    [17],  //  So shame on me now
    [21],  //  Flew me to places I'd never been
    [24],  //  Now I'm lying on the cold hard ground
    [29],  //  Oh, oh, trouble, trouble, trouble
    [35],  //  Oh, oh, trouble, trouble, trouble
    [40],  //  And the saddest fear comes creeping in
    [49],  //  That you never loved me or her, or anyone, or anything, yeah
    [54],  //  I knew you were trouble when you walked in
    [56],  //  So shame on me now
    [0],  //  Flew me to places I'd never been
    [2],  //  'Til you put me down, oh
    [5],  //  I knew you were trouble when you walked in
    [6],  //  (you were right there, you were right there)
    [8],  //  So shame on me now
    [12],  //  Flew me to places I'd never been
    [15],  //  Now I'm lying on the cold hard ground
    [20],  //  Oh, oh, trouble, trouble, trouble
    [27],  //  Oh, oh, trouble, trouble, trouble
    [31],  //  I knew you were trouble when you walked in
    [33],  //  Trouble, trouble, trouble
    [37],  //  I knew you were trouble when you walked in
    [39],  //  Trouble, trouble, trouble
    [42, 43],  //  I don't know if you know who you are
    [26],  //  until you lose who you are.
];

require_once __DIR__ . '/to_css.php';
