<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait NameableTrait
{
    #[ORM\Column(type: Types::STRING)]
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
