<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait GloballyUniqueIdentifiableTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'UUID')]
    #[ORM\Column(type: Types::GUID)]
    protected string $id;

    public function getId(): string
    {
        return $this->id;
    }
}
