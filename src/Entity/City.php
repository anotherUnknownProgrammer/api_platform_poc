<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\CityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblCity')]
#[ORM\Entity(repositoryClass: CityRepository::class)]
class City
{
    /**
     * @var int|null
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'intCityId', type: Types::INTEGER, nullable: false)]
    private ?int $id = null;

    /**
     * @var string
     */
    #[ORM\Column(name: 'strName', type: Types::STRING, length: 100, nullable: false)]
    private string $name;

    /**
     * @var string
     */
    #[ORM\Column(name: 'strType', type: Types::STRING, length: 20, nullable: false, options: ['default' => 'city'])]
    private string $type = 'city';

    /**
     * @var string
     */
    #[ORM\Column(name: 'decLat', type: Types::DECIMAL, precision: 10, scale: 6, nullable: false)]
    private string $lat;

    /**
     * @var string
     */
    #[ORM\Column(name: 'decLng', type: Types::DECIMAL, precision: 10, scale: 6, nullable: false)]
    private string $lng;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'coordinates', type: Types::STRING, nullable: false, columnDefinition: "POINT NOT NULL")]
    private ?string $coordinates = null;

    /**
     * @var string
     */
    #[ORM\Column(name: 'strContinent', type: Types::STRING, length: 20, nullable: false)]
    private string $continent;

    /**
     * @var string
     */
    #[ORM\Column(name: 'strCountry', type: Types::STRING, length: 50, nullable: false)]
    private string $country;

    /**
     * @var string
     */
    #[ORM\Column(name: 'strCountryCode', type: Types::STRING, length: 2, nullable: false)]
    private string $countryCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'strAdminName', type: Types::STRING, length: 100, nullable: true)]
    private ?string $adminName = null;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'intPopulation', type: Types::INTEGER, nullable: true)]
    private ?int $population = null;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'decRadiusKm', type: Types::DECIMAL, precision: 6, scale: 2, nullable: true)]
    private ?string $radiusKm = null;

    /**
     * @var \DateTimeImmutable|null
     */
    #[ORM\Column(name: 'dtmCreatedAt', type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $type
     *
     * @return void
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getLat(): string
    {
        return $this->lat;
    }

    /**
     * @param string $lat
     *
     * @return void
     */
    public function setLat(string $lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @param string $lng
     *
     * @return void
     */
    public function setLng(string $lng): void
    {
        $this->lng = $lng;
    }

    /**
     * @return string
     */
    public function getLng(): string
    {
        return $this->lng;
    }

    /**
     * @param string $continent
     *
     * @return void
     */
    public function setContinent(string $continent): void
    {
        $this->continent = $continent;
    }

    /**
     * @return string
     */
    public function getContinent(): string
    {
        return $this->continent;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return void
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     *
     * @return void
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string|null
     */
    public function getAdminName(): ?string
    {
        return $this->adminName;
    }

    /**
     * @param string|null $adminName
     *
     * @return void
     */
    public function setAdminName(?string $adminName): void
    {
        $this->adminName = $adminName;
    }

    /**
     * @return int|null
     */
    public function getPopulation(): ?int
    {
        return $this->population;
    }

    /**
     * @param int|null $population
     *
     * @return void
     */
    public function setPopulation(?int $population): void
    {
        $this->population = $population;
    }

    /**
     * @return string|null
     */
    public function getRadiusKm(): ?string
    {
        return $this->radiusKm;
    }

    /**
     * @param string|null $radiusKm
     *
     * @return void
     */
    public function setRadiusKm(?string $radiusKm): void
    {
        $this->radiusKm = $radiusKm;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeImmutable|null $createdAt
     *
     * @return void
     */
    public function setCreatedAt(?\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
