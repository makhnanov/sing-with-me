<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [
  [22, 23], //  Alors on
  [26, 27], //  Alors on
  [30, 31], //  Alors on
  [33], //  Qui dit étude dit travail
  [35], //  Qui dit taf te dit les thunes
  [37], //  Qui dit argent dit dépenses
  [39], //  Qui dit crédit dit créance
  [41], //  Qui dit dette te dit huissier
  [43], //  Et lui dit assis dans la merde
  [44], //  Qui dit Amour dit les gosses
  [47], //  Dit toujours et dit divorce
  [49], //  Qui dit proches te dit deuils
  [51], //  Car les problèmes ne viennent pas seuls
  [53], //  Qui dit crise te dit monde
  [55], //  Dit famine, dit tiers-monde
  [57], //  Qui dit fatigue dit réveil
  [59], //  Encore sourd de la veille
  [2], //  Alors on sort pour oublier tous les problèmes
  [4], //  Alors on danse
  [6, 8], //  Alors on danse
  [10, 12], //  Alors on danse
  [14, 16], //  Alors on danse
  [18, 20], //  Alors on danse
  [22, 24], //  Alors on danse
  [26, 28], //  Alors on danse
  [31, 32], //  Alors on danse
  [35, 36], //  Alors on danse
  [40], //  Et là tu te dis que c'est fini car pire que ça ce serait la mort
  [44], //  Quand tu crois enfin que tu t'en sors, quand y en a plus et ben y en a encore
  [46], //  Est-ce la zik ou les problèmes?
  [48], //  Les problèmes ou bien la musique
  [50], //  Ça te prend les tripes, ça te prend la tête
  [52], //  Et puis tu pries pour que ça s'arrête
  [54], //  Mais c'est ton corps, c'est pas le ciel
  [56], //  Alors tu te bouches plus les oreilles
  [58], //  Et là tu cries encore plus fort
  [59], //  Et ça persiste
  [0], //  Alors on chante
  [3], //  Lalalalalala
  [4, 8], //  Lalalalalala
  [9], //  Alors on chante
  [12], //  Lalalalalala
  [16], //  Lalalalalala
  [17], //  Alors on chante
  [24, 25], //  Alors on chante
  [29, 31], //  Et puis seulement quand c'est fini
  [33], //  Alors on danse
  [36, 38], //  Alors on danse
  [40, 42], //  Alors on danse
  [44, 46], //  Alors on danse
  [48, 50], //  Alors on danse
  [52, 54], //  Alors on danse
  [56, 58], //  Alors on danse
  [0, 2], //  Alors on danse
  [4, 6], //  Et ben y en a encore
  [12, 14], //  Et ben y en a encore
  [20, 22], //  Et ben y en a encore
  [29, 31], //  Et ben y en a encore
  [36, 38], //  Et ben y en a encore
];

require_once __DIR__ . '/to_css.php';
