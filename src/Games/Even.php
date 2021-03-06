<?php

namespace Brain\Games\Even;

use function Brain\Engine\newGame;

use const Brain\Engine\ROUNDS_COUNT;

const DESCRIPTION_GAME = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function check(int $number): string
{
    return isEven($number) ? 'yes' : 'no';
}

function game(): void
{
    $gameData = [];

    for ($game = 0; $game < ROUNDS_COUNT; $game++) {
        $randomNumber = rand(0, 100);

        $gameData[$randomNumber] = check($randomNumber);
    }

    newGame($gameData, DESCRIPTION_GAME);
}
