<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(string $description, callable $generateRound): void
{
    line('Welcome to the Brain Game!');
    line($description);
    line();

    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    line();

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        [$question, $correctAnswer] = $generateRound();

        line("Question: %s", $question);
        $userAnswer = prompt('Your answer');

        if ($userAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
    }

    line("Congratulations, %s!", $userName);
}
