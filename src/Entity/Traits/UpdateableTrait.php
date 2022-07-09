<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

use DateTime;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait UpdateableTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    protected DateTimeInterface $updatedAt;

    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }

    #[ORM\PrePersist]
    public function prePersistUpdatedAt(): void
    {
        if (!isset($this->updatedAt)) {
            $this->updatedAt = new DateTime('now');
        }
    }

    #[ORM\PreUpdate]
    public function preUpdateUpdatedAt(): void
    {
        $this->updatedAt = new DateTime('now');
    }
}
