<?php

namespace Bvsk\DoctrineExtension\Contract;

interface CurrencyAware
{
    public function getCurrency(): ?string;

    public function setCurrency(?string $currency): self;
}
