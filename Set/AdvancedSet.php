<?php


namespace Set;

require_once __DIR__ . '/SetInterface.php';

class AdvancedSet implements SetInterface
{
    private array $set;

    public function __construct()
    {
        $this->set = [];
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

        $this->set[] = $value;
    }

    public function checkIfValueExists(int $value): bool
    {
        foreach ($this->set as $setElement)
        {
            if ($setElement == $value)
            {
                return true;
            }
        }

        return false;
    }
}