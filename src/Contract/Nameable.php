<?php

namespace Bvsk\DoctrineExtension\Contract;

interface Nameable
{
    public function getName(): ?string;

    public function setName(string $name): void;
}
