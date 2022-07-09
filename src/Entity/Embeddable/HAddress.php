<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Embeddable;

use Bvsk\DoctrineExtension\Entity\Traits\HAddressTrait;
use Doctrine\ORM\Mapping as ORM;
use Bvsk\DoctrineExtension\Contract\HAddressable;

/**
 * @ORM\Embeddable
 */
class HAddress extends Address implements HAddressable
{
    use HAddressTrait;
}
