<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;
const MIN_START = 1;
const MAX_START = 50;
const MIN_STEP = 2;
const MAX_STEP = 10;

function generateProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $step * $i;
    }
    return $progression;
}

function generateRound(): array
{
    $start = rand(MIN_START, MAX_START);
    $step = rand(MIN_STEP, MAX_STEP);
    $length = PROGRESSION_LENGTH;

    $progression = generateProgression($start, $step, $length);
    $hiddenIndex = rand(0, $length - 1);

    $correctAnswer = (string) $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';

    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}

function runProgressionGame(): void
{
    runGame(DESCRIPTION, 'BrainGames\\Games\\Progression\\generateRound');
}
