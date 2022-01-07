<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
  [41, 43], // Tout le monde il veut seulement la thune
  [44, 47], // Et seulement ça, ça les fait bander
  [48, 50], // Tout le monde il veut seulement la fame
  [54], // Et seulement ça, ça les fait bouger
  [57], // Bouger leur culs le temps d'un verre
  [0], // Photo sur Insta', c'est obligé
  [3], // Sinon, au fond, à quoi ça sert?
  [7], // Si c'est même pas pour leur montrer
  [10], // Et puis à quoi bon?
  [14], // T'es tellement seul derrière ton écran
  [17], // Tu penses à c'que vont penser les gens
  [22], // Mais tu les laisses tous indifférents, oh, oh
  [34, 36], // Peut-être, je devrais m'éloigner
  [40], // Loin du game, loin du danger
  [43], // Mais j'avoue, j'aime bien jouer
  [47], // Si c'est de moi dont on va parler
  [51], // Où j'oublie tout et je m'en vais
  [53], // Moi, je m'en vais marcher
  [57], // Naïve comme jamais
  [0], // Loin des regards amers
  [3], // À quoi bon?
  [7], // T'es tellement seul derrière ton écran
  [10], // Tu penses à c'que vont penser les gens
  [13], // Mais tu les laisses tous indifférents
  [17], // Et puis à quoi bon?
  [20], // T'es tellement seul avec ton argent
  [23], // Tu sais même pas pourquoi t'es tout l'temps
  [27], // Avec des michtos sans sentiments
  [29], // Au fond, j'avoue que même moi
  [33], // Je fais partie de ces gens-là
  [36], // Rassurée quand les gens, ils m'aiment
  [40], // Et si c'est très superficiel
  [42], // Tout le monde, il veut seulement la thune
  [44], // (tout le monde il veut seulement la thune)
  [46], // Et seulement ça, ça les fait bander
  [47], // (tout le monde il veut seulement la thune)
  [49], // Tout le monde, il veut seulement la fame
  [50], // (tout le monde il veut seulement la fame)
  [52], // Et seulement ça, ça les fait bouger
  [53], // (tout le monde il veut seulement la fame)
  [56], // Et puis à quoi bon?
  [57], // (tout le monde, il veut seulement la thune)
  [0], // T'es tellement seul derrière ton écran
  [1], // (tout le monde, il veut seulement la thune)
  [2], // Tu penses à ce que vont penser les gens
  [4], // (tout le monde, il veut seulement la fame)
  [6], // Mais tu les laisses tous indifférents
  [7], // (tout le monde, il veut seulement la fame)
  [11, 13], // À quoi bon?
  [21, 24], // À quoi bon?
  [26], // À quoi bon?
];

require_once __DIR__ . '/to_css.php';
