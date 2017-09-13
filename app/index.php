<?php

require 'functions.php';

$min_range = 1;
$max_range = 2000;

$generation_rules = array (
    3 => "Fizz",
    5 => "Buzz",
);

$input = readline("Please enter a value between $min_range and $max_range: ");
echo generate_fizz_buzz($input, $min_range, $max_range, $generation_rules);
