<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Embeddable;

use Bvsk\DoctrineExtension\Contract\HCardable;
use Bvsk\DoctrineExtension\Entity\Traits\HCardTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class HCard extends HAddress implements HCardable
{
    use HCardTrait;
}
