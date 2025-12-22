<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function calculate($num1, $num2, $operator)
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            throw new \Exception("Unknown operator: {$operator}");
    }
}

function generateRound()
{
    $num1 = rand(1, 50);
    $num2 = rand(1, 50);
    $operator = OPERATORS[array_rand(OPERATORS)];

    $question = sprintf("%s %s %s", $num1, $operator, $num2);
    $correctAnswer = (string) calculate($num1, $num2, $operator);

    return [$question, $correctAnswer];
}

function runCalcGame()
{
    runGame(DESCRIPTION, 'BrainGames\Games\Calc\generateRound');
}
