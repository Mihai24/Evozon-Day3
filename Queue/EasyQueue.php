<?php


namespace Queue;

require_once __DIR__ . '/QueueInterface.php';

class EasyQueue implements QueueInterface
{
    public array $fifo;

    public function __construct()
    {
        $this->fifo = array();
    }

    public function queue(int $value): void
    {
        array_push($this->fifo, $value);
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

        array_shift($this->fifo);
    }

    public function isEmpty(): bool
    {
        return empty($this->fifo);
    }
}