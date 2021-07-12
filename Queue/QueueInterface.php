<?php


namespace Queue;


interface QueueInterface
{
    public function queue($value): void;

    public function dequeue();

    public function isEmpty(): bool;
}