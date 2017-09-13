<?php

function generate_fizz_buzz(int $input) {

    $validation = array(
        'options' => array(
            'min_range' => 1,
            'max_range' => 2000,
        )
    );

    if (filter_var($input, FILTER_VALIDATE_INT, $validation) != True) {
        return "Invalid Input: Input must be an integer between "
            . $validation['options']['min_range']
            .  " and "
            . $validation['options']['max_range'];
    }

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
