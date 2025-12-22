<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    if ($number == 2) {
        return true;
    }

    if ($number % 2 == 0) {
        return false;
    }

    $limit = (int) sqrt($number);
    for ($i = 3; $i <= $limit; $i += 2) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function generateRound(): array
{

    $number = rand(2, 100);

    $question = (string) $number;

    $correctAnswer = isPrime($number) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function run(): void
{
    runGame(DESCRIPTION, __NAMESPACE__ . '\\generateRound');
}
