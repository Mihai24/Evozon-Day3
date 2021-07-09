<?php


namespace Set;


interface SetInterface
{
    public function addValueToSet(int $value): void;

    public function checkIfValueExists(int $value): bool;

//    public function setIntersection();
//
//    public function setUnion();
}