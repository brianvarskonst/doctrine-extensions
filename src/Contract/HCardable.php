<?php

namespace Bvsk\DoctrineExtension\Contract;

/**
 * @see http://microformats.org/wiki/h-card
 */
interface HCardable extends HAddressable, Nameable
{
    public function getSurname(): ?string;

    public function setSurname(string $surname): void;

    public function getTel(): ?string;

    public function setTel(string $tel): void;
}
