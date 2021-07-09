<?php


namespace Set;


interface SetInterface
{
    public function addValueToSet(...$values): void;

    public function checkIfValueExists(...$values): bool;

//    public function setIntersection();
//
//    public function setUnion();
}