<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait CurrencyAwareTrait
{
    #[ORM\Column(type: Types::STRING, length: 3, nullable: true, options: ['fixed' => true, 'default' => 'EUR'])]
    protected ?string $currency = null;

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
