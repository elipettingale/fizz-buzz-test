# FizzBuzz Test

## Description
A simple function to print a sequence of numbers, but replacing any multiple of 3 with "Fizz" and any multiple of 5 with "Buzz". The following function has a number of optional parameters which will allow alterations to the process.

## Usage
Can be used in the following ways:
1) Run "php app\index.php" to start the function demo
2) Run "phpunit" to test the function

## Function

```
generate_fizz_buzz(
    
    // The number you wish to print up to
    $input = 2000, 
    
    // The minimum number allowed
    $min_range = 1,
    
    // The maximum number allowed
    $max_range = 2000,
    
    // Used to add or remove custom generation rules
    $generation_rules = array ( 
        3 => "Fizz",    
        5 => "Buzz"
    )
    
);
```
