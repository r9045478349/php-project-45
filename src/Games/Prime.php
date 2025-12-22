<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN_NUMBER = 2;
const MAX_NUMBER = 100;

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function generateRound(): array
{
    $number = rand(MIN_NUMBER, MAX_NUMBER);

    $question = (string) $number;
    $correctAnswer = isPrime($number) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function runPrimeGame(): void
{
    runGame(DESCRIPTION, 'BrainGames\\Games\\Prime\\generateRound');
}
