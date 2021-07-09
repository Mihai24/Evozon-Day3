<?php


namespace Stack;

require_once __DIR__ . '/StackInterface.php';

class AdvancedStack implements StackInterface
{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push(...$values): void
    {
        foreach ($values as $value)
        {
            $this->stack[] = $value;
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

        $stackLastElement = end($this->stack);
        unset($this->stack[key($stackLastElement)]);

        return array_values($this->stack);
    }

    public function isEmpty(): bool
    {
        return count($this->stack) === 0;
    }
}