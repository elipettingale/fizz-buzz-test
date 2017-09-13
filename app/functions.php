<?php

function generate_fizz_buzz(int $input) {

    $sequence = "";

    for ($i=1; $i<=$input; ++$i) {

        $step = "";

        if ($i % 3 == 0) {
            $step .= "Fizz";
        }

        if ($i % 5 == 0) {
            $step .= "Buzz";
        }

        if ($step == "") {
            $step = $i;
        }

        $sequence .= $step . ", ";

    }

    return $sequence;

}
