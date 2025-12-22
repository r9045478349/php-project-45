<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];
const MIN_NUMBER = 1;
const MAX_NUMBER = 50;

function calculate(int $num1, int $num2, string $operator): int
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            throw new \Exception(sprintf('Unknown operator: %s', $operator));
    }
}

function generateRound(): array
{
    $num1 = rand(MIN_NUMBER, MAX_NUMBER);
    $num2 = rand(MIN_NUMBER, MAX_NUMBER);
    $operator = OPERATORS[array_rand(OPERATORS)];

    $question = sprintf('%s %s %s', $num1, $operator, $num2);
    $correctAnswer = (string) calculate($num1, $num2, $operator);

    return [$question, $correctAnswer];
}

function runCalcGame(): void
{
    runGame(DESCRIPTION, 'BrainGames\\Games\\Calc\\generateRound');
}
