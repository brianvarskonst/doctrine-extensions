<?php

namespace Bvsk\DoctrineExtension\Contract;

use DateTimeImmutable;

interface SoftDeletable
{
    public function setDeletedAt(DateTimeImmutable $deletedAt): self;

    public function getDeletedAt(): ?DateTimeImmutable;

    public function isDeleted(): bool;
}
