<?php

require 'functions.php';

$min_input = 1;
$max_input = 2000;

$generation_rules = array (
    3 => "Fizz",
    5 => "Buzz",
);

$input = readline("Please enter a value between $min_input and $max_input: ");
echo generate_fizz_buzz($input, $min_input, $max_input, $generation_rules);
