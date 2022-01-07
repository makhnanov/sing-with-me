<?php

function normalize(array $timing)
{
    $previous = new \stdClass();
    $timing = array_values($timing);
    foreach ($timing as $key => $fromTo) {

        $fromTo = array_values($fromTo);
        $count = count($fromTo);

        if ($key && $count === 1) {
            $fromTo[1] = $fromTo[0];
            $fromTo[0] = $previous->to;
            ++$count;
        }

        if ($count !== 2) {
            var_dump($fromTo);
            var_dump($key);
            throw new \InvalidArgumentException();
        }

        $allInOne = [...$allInOne ?? [], ...$fromTo];

        list($previous->from, $previous->to) = $fromTo;
    }

    if (!isset($allInOne)) {
        throw new \InvalidArgumentException();
    }

    $currentMinute = 0;
    $lastTimeCode = null;
    foreach ($allInOne as $multiKey => $item) {
        if (!isset($lastTimeCode)) {
            $lastTimeCode = $item;
        }
        if ($lastTimeCode > $item) {
            ++$currentMinute;
        }
        $lastTimeCode = $item;
        $minuteMultiplier[$multiKey] = $currentMinute;
    }
//var_dump($minuteMultiplier);
//    die();
    foreach ($allInOne as $multiKey => &$item) {
        $item = $minuteMultiplier[$multiKey] * 60 + $item;
    }
    return array_chunk($allInOne, 2);
}
