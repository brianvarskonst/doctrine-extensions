<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Entity\Traits;

use Bvsk\DoctrineExtension\Contract\Addressable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait AddressTrait
{
    #[ORM\Column(name: 'post_office_box',type: Types::STRING, length: 100, nullable: true)]
    protected ?string $postOfficeBox = null;

    #[ORM\Column(name: 'street_address',type: Types::STRING, length: 100, nullable: true)]
    protected ?string $streetAddress = null;

    #[ORM\Column(name: 'extended_address',type: Types::STRING, length: 100, nullable: true)]
    protected ?string $extendedAddress = null;

    #[ORM\Column(name: 'locality',type: Types::STRING, length: 100, nullable: true)]
    protected ?string $locality = null;

    #[ORM\Column(name: 'region', type: Types::STRING, length: 100, nullable: true)]
    protected ?string $region = null;

    #[ORM\Column(name: 'postal_code',type: Types::STRING, length: 10, nullable: true)]
    protected ?string $postalCode = null;

    #[ORM\Column(name: 'country_code',type: Types::STRING, length: 2, nullable: true)]
    protected ?string $countryCode = null;

    public function getPostOfficeBox(): ?string
    {
        return $this->postOfficeBox;
    }

    public function setPostOfficeBox(string $postOfficeBox): Addressable
    {
        $this->postOfficeBox = $postOfficeBox;

        return $this;
    }

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(string $streetAddress): Addressable
    {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    public function getExtendedAddress(): ?string
    {
        return $this->extendedAddress;
    }

    public function setExtendedAddress(string $extendedAddress): Addressable
    {
        $this->extendedAddress = $extendedAddress;

        return $this;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function setLocality(string $locality): Addressable
    {
        $this->locality = $locality;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): Addressable
    {
        $this->region = $region;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): Addressable
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): Addressable
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}
