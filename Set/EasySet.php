<?php


namespace Set;

require_once __DIR__ . '/SetInterface.php';

class EasySet implements SetInterface
{
    private array $set;

    public function __construct()
    {
        $this->set = array();
    }

    /**
     * @throws \Exception
     */
    public function addValueToSet(int $value): void
    {
        if ($this->checkIfValueExists($value))
        {
            throw new \Exception(
                sprintf('Value %d exists in array', $value)
            );
        }

        array_push($this->set, $value);
    }

    public function checkIfValueExists(int $value): bool
    {
        return in_array($value, $this->set);
    }
}