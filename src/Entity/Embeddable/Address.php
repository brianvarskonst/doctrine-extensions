<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Embeddable;

use Bvsk\DoctrineExtension\Entity\Traits\AddressTrait;
use Bvsk\DoctrineExtension\Contract\Addressable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class Address implements Addressable
{
    use AddressTrait;
}
