<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Ulid;

trait UlidIdentifiableTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: 'ulid',unique: true)]
    #[ORM\CustomIdGenerator(class: 'doctrine.ulid_generator')]
    private ?Ulid $id;

    public function getId(): ?Ulid
    {
        return $this->id;
    }
}
