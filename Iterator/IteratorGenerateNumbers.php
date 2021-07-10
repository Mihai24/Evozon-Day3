<?php

function generateNumbers(int $numbers): iterable
{
    $lastNumber = 0;

    for ($i = 0; $i < $numbers; $i++) {
        if ($lastNumber == 0)
        {
            $lastNumber = mt_rand(0, 1000);
        }
        yield $lastNumber;
        $lastNumber = generate($lastNumber + 1);
    }
}

function generate(int $lastNumber): int
{
    $currentNumber = mt_rand($lastNumber + 1, 1000);

    while (($currentNumber - $lastNumber) > 10)
    {
        $currentNumber = mt_rand($lastNumber, 1000);
    }

    return $currentNumber;
}

function showIterableNumbers(iterable $iterable): void
{
    foreach ($iterable as $value)
    {
        echo $value . PHP_EOL;
    }
}

showIterableNumbers(generateNumbers(4));