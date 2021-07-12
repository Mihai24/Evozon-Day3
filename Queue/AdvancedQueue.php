<?php


namespace Queue;

require_once __DIR__ . '/QueueInterface.php';

class AdvancedQueue implements QueueInterface
{
    public array $fifo;

    public function __construct()
    {
        $this->fifo = [];
    }

    public function queue($value): void
    {
        $this->fifo[] = $value;
    }

    /**
     * @throws \Exception
     */
    public function dequeue()
    {
        if ($this->isEmpty())
        {
            throw new \Exception('The array is empty');
        }

        $arrayFirstElement = array_key_first($this->fifo);
        unset($this->fifo[$arrayFirstElement]);

        return $arrayFirstElement;
    }

    public function isEmpty(): bool
    {
        return count($this->fifo) === 0;
    }
}