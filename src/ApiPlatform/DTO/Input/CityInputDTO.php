<?php

declare(strict_types=1);

namespace App\ApiPlatform\DTO\Input;

use Symfony\Component\Validator\Constraints as Assert;

class CityInputDTO
{
    #[Assert\NotBlank]
    #[Assert\Length(max: 100)]
    public string $name;

    #[Assert\Length(max: 20)]
    public ?string $type = 'city';

    #[Assert\NotBlank]
    public string $lat;

    #[Assert\NotBlank]
    public string $lng;

    #[Assert\NotBlank]
    #[Assert\Length(max: 20)]
    public string $continent;

    #[Assert\NotBlank]
    #[Assert\Length(max: 50)]
    public string $country;

    #[Assert\NotBlank]
    #[Assert\Length(exactly: 2)]
    public string $countryCode;

    #[Assert\Length(max: 100)]
    public ?string $adminName = null;

    public ?int $population = null;

    public ?string $radiusKm = null;
}
