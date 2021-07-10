<?php


namespace Set;

use Set\SetInterface;
require_once __DIR__ . '/SetInterface.php';

class EasySet implements SetInterface
{
    private array $values;

    public function __construct()
    {
        $this->values = array();
    }

    /**
     * @throws \Exception
     */
    public function addValueToSet(int $value): void
    {
        if ($this->checkIfValueExists($value))
        {
            throw new \Exception(
                sprintf('Value %d exists in set', $value)
            );
        }

        array_push($this->values, $value);
    }

    public function checkIfValueExists(int $value): bool
    {
        return in_array($value, $this->values);
    }

    public function setIntersection(SetInterface $set): EasySet
    {
        $intersect = new EasySet();
        $elements = array_intersect($this->values, $set->values);

        foreach ($elements as $element)
        {
            $intersect->addValueToSet($element);
        }

        return $intersect;

    }

    public function setReUnion(SetInterface $set): EasySet
    {
        $reunion = new EasySet();
        $elements = array_unique(array_merge($this->values, $set->values));

        foreach ($elements as $element)
        {
            $reunion->addValueToSet($element);
        }

        return $reunion;
    }
}