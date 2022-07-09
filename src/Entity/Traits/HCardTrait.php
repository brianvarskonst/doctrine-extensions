<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

use Bvsk\DoctrineExtension\Contract\HCardable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait HCardTrait
{
    use HAddressTrait;

    #[ORM\Column(type: Types::STRING, length: 100, nullable: true)]
    protected ?string $name = null;

    #[ORM\Column(type: Types::STRING, length: 100, nullable: true)]
    protected ?string $surname = null;

    #[ORM\Column(type: Types::STRING, length: 20, nullable: true)]
    protected ?string $tel = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): HCardable
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): HCardable
    {
        $this->surname = $surname;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): HCardable
    {
        $this->tel = $tel;

        return $this;
    }
}
