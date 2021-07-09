<?php


namespace Queue;


interface QueueInterface
{
    public function queue(int $value): void;

    public function dequeue();

    public function isEmpty(): bool;
}