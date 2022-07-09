<?php

namespace Bvsk\DoctrineExtension\Contract;

/**
 * @see http://microformats.org/wiki/adr
 */
interface Addressable
{

    public function getPostOfficeBox(): ?string;

    public function setPostOfficeBox(string $postOfficeBox): Addressable;

    public function getStreetAddress(): ?string;

    public function setStreetAddress(string $streetAddress): Addressable;

    public function getExtendedAddress(): ?string;

    public function setExtendedAddress(string $extendedAddress): Addressable;

    public function getLocality(): ?string;

    public function setLocality(string $locality): Addressable;

    public function getRegion(): ?string;

    public function setRegion(string $region): Addressable;

    public function getPostalCode(): ?string;

    public function setPostalCode(string $postalCode): Addressable;

    public function getCountryCode(): ?string;

    public function setCountryCode(string $countryCode): Addressable;
}
