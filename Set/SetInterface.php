<?php


namespace Set;


interface SetInterface
{
    public function addValueToSet(int $value): void;

    public function checkIfValueExists(int $value): bool;

    public function setIntersection(SetInterface $set): SetInterface;

    public function setReUnion(SetInterface $set): SetInterface;
}