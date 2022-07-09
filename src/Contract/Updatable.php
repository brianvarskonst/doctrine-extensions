<?php

namespace Bvsk\DoctrineExtension\Contract;

use DateTimeInterface;

interface Updatable
{
    public function getUpdatedAt(): DateTimeInterface;
}
