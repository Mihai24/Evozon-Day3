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

        $stackLastValue = sizeof($this->stack) - 1;
        unset($this->stack[$stackLastValue]);

        return array_values($this->stack);
    }

    public function isEmpty(): bool
    {
        return count($this->stack) === 0;
    }
}