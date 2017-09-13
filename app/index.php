<?php

require 'functions.php';

$min_range = 1;
$max_range = 2000;

$generation_rules = array (
    3 => "Fizz",
    5 => "Buzz",
);

if (PHP_OS == 'WINNT') {
    echo "Please enter a value between $min_range and $max_range: ";
    $input = stream_get_line(STDIN, 1024, PHP_EOL);
} else {
    $input = readline("Please enter a value between $min_range and $max_range: ");
}

echo generate_fizz_buzz($input, $min_range, $max_range, $generation_rules);
