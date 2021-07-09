<?php


namespace Set;

require_once __DIR__ . '/SetInterface.php';

class EasySet implements SetInterface
{
    public array $set;

    public function __construct()
    {
        $this->set = array();
    }

    public function addValueToSet(...$values): void
    {
        // TODO: Implement addValueToSet() method.
    }

    public function checkIfValueExists(...$values): bool
    {
        // TODO: Implement checkIfValueExists() method.
    }
}