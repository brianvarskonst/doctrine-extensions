<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

trait ToStringIdentifiableTrait
{
    public function __toString(): string
    {
        return (string)($this->getId());
    }
}
