<?php


namespace Stack;


interface StackInterface
{
    public function push(...$values): void;

    public function pop();

    public function isEmpty(): bool;
}