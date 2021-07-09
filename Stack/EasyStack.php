<?php


namespace Stack;

require_once __DIR__ . '/StackInterface.php';

class EasyStack implements StackInterface
{
    public array $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function push(...$values): void
    {
        foreach ($values as $value) {
            array_push($this->stack, $value);
        }
    }

    /**
     * @throws \Exception
     */
    public function pop()
    {
        if ($this->isEmpty())
        {
            throw new \Exception('The stack is empty.');
        }

        return array_pop($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}