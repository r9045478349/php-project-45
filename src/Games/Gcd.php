<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function generateRound(): array
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    
    $question = "{$num1} {$num2}";
    
    $correctAnswer = (string) gcd($num1, $num2);
    
    return [$question, $correctAnswer];
}

function run(): void
{
    runGame(DESCRIPTION, __NAMESPACE__ . '\\generateRound');
}
