<?php

namespace Bvsk\DoctrineExtension\Contract;

interface Slugable
{
    public function getSlug(): ?string;

    public function setSlug(string $slug): Slugable;
}
