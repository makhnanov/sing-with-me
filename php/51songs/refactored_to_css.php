\<?php

/**
 *
 * from {
 * top: 0;
 * }
 * 6.97674405% {
 * top: 0;
 * }
 * 7% {
 * top: -25px;
 * }
 * 7.93023254% {
 * top: -25px;
 * }
 * 8% {
 * top: -50px;
 * }
 * to {
 * top: -1150px;
 * }
 */

require_once __DIR__ . '/normalizer.php';

isset($timing, $textFileName) or die('Wrong execution.');

$normalized = normalize($timing);

//foreach ($normalized as list($f, $t)) {
//    echo $f . ' ' . $t . PHP_EOL;
//}

$total = count($normalized);
$end = ($total - 1) * 25;

//echo $total . PHP_EOL;

const MOVE_PERCENTAGE = 0.04;

$latestLine = $normalized[max(array_keys($normalized))];
$latestSecond = $latestLine[1] ?? $latestLine[0];


ob_start();
foreach ($normalized as $key => list($from, $to)) {


    if (!isset($prevTo)) {
        $prevTo = $to;
    }

    if (!$key) {
        $firstRow = rtrim(round($to * 100 / $latestSecond - MOVE_PERCENTAGE, 8), '.0');
        $prevTop = 0;
        $prevPercentage = $firstRow;
        echo <<<CSS
$firstRow% {
  top: 0;
}

CSS;
        continue;
    }

    $currentPercent = $prevPercentage + MOVE_PERCENTAGE;
    $currentTop = $prevTop + 25;
    echo <<<CSS
$currentPercent% {
top: -{$currentTop}px;
}

CSS;

    $diff = $from > $prevTo
        ? ($from - $prevTo) * 100 / $latestSecond
        : 0;

    $prevTo = $to;

    $currentPercent = $diff + $currentPercent - MOVE_PERCENTAGE + (
        ($to - $from) * 100 / $latestSecond
    );

    $currentPercent = rtrim(round($currentPercent, 8), '.0');

    echo <<<CSS
$currentPercent% {
  top: -{$currentTop}px;
}

CSS;

    $prevPercentage = $currentPercent;
    $prevTop = $currentTop;
}

echo <<<CSS
  to {
    top: -{$end}px;
  }
}
</style>
CSS;

$ob = ob_get_clean();

$file = fopen(__DIR__ . '/' . $textFileName, 'w+');
fwrite($file, $ob);
fclose($file);
