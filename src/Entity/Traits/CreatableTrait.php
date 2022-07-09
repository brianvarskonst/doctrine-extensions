<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

use DateTimeImmutable;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait CreatableTrait
{
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    protected DateTimeInterface $createdAt;

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    #[ORM\PrePersist]
    public function prePersistCreatedAt(): void
    {
        if (!isset($this->createdAt)) {
            $this->createdAt = new DateTimeImmutable('now');
        }
    }
}
