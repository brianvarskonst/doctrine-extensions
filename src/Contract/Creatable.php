<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Contract;

use DateTimeInterface;

interface Creatable
{
    public function getCreatedAt(): DateTimeInterface;
}
