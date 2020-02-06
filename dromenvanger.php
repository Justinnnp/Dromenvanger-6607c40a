<?php

    $arr1 = array();

    echo "Hoeveel vrienden zal ik vragen om hun droom " .PHP_EOL;
    $droomVraag = readLine("");


    for ($i = 1; $i <= $droomVraag; $i ++) {
        echo "Wat is jouw naam?" .PHP_EOL;
        $naamVraag = readLine("");
        # array_push($arr1, $naamVraag);
        echo "Hoeveel dromen ga je opgeven ? " .PHP_EOL;
        $droomVriend = readLine("");

        $arrayDroom = array();

        for ($j = 1; $j <= $droomVriend; $j ++) {
            echo "Wat is jouw droom ? " .PHP_EOL;
            $droomAntwoord = readLine("");
            array_push($arrayDroom, $droomAntwoord);
        }
        $arr1[$naamVraag] = $arrayDroom;
    }
    foreach ($arr1 as $naam => $droom) {
        for($k = 0; $k < count($droom); $k ++) {
            echo $naam. " heeft als droom: ".$droom[$k] .PHP_EOL;
        }
    }
?>