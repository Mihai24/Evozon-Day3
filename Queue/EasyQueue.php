<?php


namespace Queue;

require_once __DIR__ . '/QueueInterface.php';

class EasyQueue implements QueueInterface
{
    public array $queue;

    public function __construct()
    {
        $this->queue = array();
    }

    public function queue(int $value): void
    {
        array_push($this->queue, $value);
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

        array_shift($this->queue);
    }

    public function isEmpty(): bool
    {
        return empty($this->queue);
    }
}