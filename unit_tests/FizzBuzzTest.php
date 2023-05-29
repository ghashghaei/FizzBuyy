<?php

require_once 'src/index.php';
require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testPrintNumbers()
    {
        $fizzBuzz = new FizzBuzz();

        ob_start();
        $fizzBuzz->printNumbers();
        $output = ob_get_clean();

        $expectedOutput = "1" . PHP_EOL . "2" . PHP_EOL . "Fizz" . PHP_EOL . "4" . PHP_EOL . "Buzz" . PHP_EOL . "Fizz" . PHP_EOL . "7" . PHP_EOL . "8" . PHP_EOL . "Fizz" . PHP_EOL . "Buzz" . PHP_EOL . "11" . PHP_EOL . "Fizz" . PHP_EOL . "13" . PHP_EOL . "14" . PHP_EOL . "FizzBuzz" . PHP_EOL . "16" . PHP_EOL . "17" . PHP_EOL . "Fizz" . PHP_EOL . "19" . PHP_EOL . "Buzz" . PHP_EOL;

        $this->assertEquals($expectedOutput, $output);

        echo $expectedOutput;
    }
}