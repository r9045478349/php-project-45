<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

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
    $num1 = rand(MIN_NUMBER, MAX_NUMBER);
    $num2 = rand(MIN_NUMBER, MAX_NUMBER);

    $question = sprintf('%s %s', $num1, $num2);
    $correctAnswer = (string) gcd($num1, $num2);

    return [$question, $correctAnswer];
}

function runGcdGame(): void
{
    runGame(DESCRIPTION, 'BrainGames\\Games\\Gcd\\generateRound');
}
