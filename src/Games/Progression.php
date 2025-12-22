<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';
const MIN_LENGTH = 5;
const MAX_LENGTH = 10;

function generateProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function generateRound(): array
{
    $length = rand(MIN_LENGTH, MAX_LENGTH);

    $start = rand(1, 50);

    $step = rand(2, 10);

    $progression = generateProgression($start, $step, $length);

    $hiddenIndex = rand(0, $length - 1);

    $correctAnswer = (string) $progression[$hiddenIndex];

    $progression[$hiddenIndex] = '..';

    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}

function run(): void
{
    runGame(DESCRIPTION, __NAMESPACE__ . '\\generateRound');
}
