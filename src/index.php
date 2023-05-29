<?php

class FizzBuzz
{
    public function printNumbers($length = 20)
    {
        for ($i = 1; $i <= $length; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                echo "FizzBuzz" . PHP_EOL;
            } elseif ($i % 3 === 0) {
                echo "Fizz" . PHP_EOL;
            } elseif ($i % 5 === 0) {
                echo "Buzz" . PHP_EOL;
            } else {
                echo $i . PHP_EOL;
            }
        }
    }
}

$fizzBuzz = new FizzBuzz();
$fizzBuzz->printNumbers(100);