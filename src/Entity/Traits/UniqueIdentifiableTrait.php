<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

use Symfony\Component\Uid\Uuid;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait UniqueIdentifiableTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: Types::INTEGER, length: 36, options: ['fixed' => true])]
    protected string $id;

    public function getId(): string
    {
        return $this->id;
    }

    #[ORM\PrePersist]
    public function prePersistId(): void
    {
        $this->id = Uuid::v1()->toRfc4122();
    }
}
