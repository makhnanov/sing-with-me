<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
    [28, 29],  //  Ay
    [30],  //  Fonsi
    [31],  //  DY
    [34],  //  Oh-oh
    [37],  //  Oh no, oh no (oh)
    [38],  //  Hey yeah
    [40],  //  Diridiri, dirididi Daddy
    [41],  //  Go
    [46],  //  Sí, sabes que ya llevo un rato mirándote
    [50],  //  Tengo que bailar contigo hoy (DY)
    [57],  //  Vi que tu mirada ya estaba llamándome
    [1],  //  Muéstrame el camino que yo voy
    [2],  //  Oh
    [6],  //  Tú, tú eres el imán y yo soy el metal
    [8],  //  Me voy acercando y voy armando el plan
    [12],  //  Solo con pensarlo se acelera el pulso
    [13],  //  Oh yeah
    [17],  //  Ya, ya me está gustando más de lo normal
    [19],  //  Todos mis sentidos van pidiendo más
    [23],  //  Esto hay que tomarlo sin ningún apuro
    [25],  //  Despacito
    [28],  //  Quiero respirar tu cuello despacito
    [31],  //  Deja que te diga cosas al oído
    [34],  //  Para que te acuerdes si no estás conmigo
    [36],  //  Despacito
    [39],  //  Quiero desnudarte a besos despacito
    [41],  //  Firmar las paredes de tu laberinto
    [45],  //  Y hacer de tu cuerpo todo un manuscrito (sube, sube, sube)
    [46],  //  (Sube, sube) Oh
    [48],  //  Quiero ver bailar tu pelo
    [50],  //  Quiero ser tu ritmo (eh-oh) (uh-oh, uh-oh)
    [52],  //  Que le enseñes a mi boca (eh-oh) (uh-oh, uh-oh)
    [57],  //  Tus lugares favoritos (eh-oh) (favoritos, favoritos baby)
    [59],  //  Déjame sobrepasar
    [1],  //  Tus zonas de peligro (eh-oh) (uh-oh, uh-oh)
    [3],  //  Hasta provocar tus gritos (uh-oh, uh-oh)
    [6],  //  Y que olvides tu apellido (diridiri, dirididi Daddy)
    [8],  //  Yo sé que estás pensándolo (yeh)
    [10],  //  Llevo tiempo intentándolo (yeh)
    [12],  //  Mami, esto es dando y dándolo
    [15],  //  Sabes que tu corazón conmigo te hace bam bam
    [18],  //  Sabe que esa beba 'tá buscando de mi bam bam
    [20],  //  Ven prueba de mi boca para ver cómo te sabe (eh-eh)
    [23],  //  Quiero, quiero, quiero ver cuánto amor a ti te cabe
    [26],  //  Yo no tengo prisa, yo me quiero dar el viaje
    [29],  //  Empezamo' lento, después salvaje
    [31],  //  Pasito a pasito, suave suavecito
    [34],  //  Nos vamos pegando poquito a poquito
    [37],  //  Cuando tú me besas con esa destreza
    [39],  //  Veo que eres malicia con delicadeza
    [42],  //  Pasito a pasito, suave suavecito
    [45],  //  Nos vamos pegando, poquito a poquito (oh oh)
    [47],  //  Y es que esa belleza es un rompecabezas (oh no)
    [50],  //  Pero pa montarlo aquí tengo la pieza (slow, oh yeah)
    [53],  //  Despacito (yeh, go)
    [56],  //  Quiero respirar tu cuello despacito (yeh)
    [58],  //  Deja que te diga cosas al oído (yeh)
    [1],  //  Para que te acuerdes si no estás conmigo
    [4],  //  Despacito
    [6],  //  Quiero desnudarte a besos despacito (yeh)
    [9],  //  Firmar las paredes de tu laberinto
    [13],  //  Y hacer de tu cuerpo todo un manuscrito (sube, sube, sube)
    [14],  //  (Sube, sube) Oh
    [16],  //  Quiero ver bailar tu pelo
    [18],  //  Quiero ser tu ritmo (eh-oh) (uh-oh, uh-oh)
    [20],  //  Que le enseñes a mi boca (eh-oh) (uh-oh, uh-oh)
    [24],  //  Tus lugares favoritos (eh-oh) (favoritos, favoritos baby)
    [26],  //  Déjame sobrepasar
    [28],  //  Tus zonas de peligro (eh-oh) (uh-oh, uh-oh)
    [31],  //  Hasta provocar tus gritos (uh-oh, uh-oh)
    [34],  //  Y que olvides tu apellido (eh-oh)
    [36],  //  Despacito
    [39],  //  Vamo' a hacerlo en una playa en Puerto Rico
    [41],  //  Hasta que las olas griten "Ay, bendito"
    [44],  //  Para que mi sello se quede contigo (báilalo)
    [48],  //  Pasito a pasito, suave suavecito (hey yeah, yeah)
    [51],  //  Nos vamos pegando, poquito a poquito (oh no)
    [52],  //  Que le enseñes a mi boca (eh-oh) (uh-oh, uh-oh)
    [55],  //  Tus lugares favoritos (eh-oh) (favoritos, favoritos baby)
    [59],  //  Pasito a pasito, suave suavecito
    [2],  //  Nos vamos pegando, poquito a poquito (eh-oh)
    [3],  //  Hasta provocar tus gritos (eh-oh) (Fonsi)
    [6],  //  Y que olvides tu apellido (DY)
    [8],  //  Despacito
];

require_once __DIR__ . '/to_css.php';
