<?php

declare(strict_types=1);

namespace App\ApiPlatform\State\Provider;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Repository\CityRepository;

/**
 * @implements ProviderInterface<\App\Entity\City>
 */
class CityProvider implements ProviderInterface
{
    public function __construct(
        private readonly CityRepository $cityRepository,
    ) {
    }

    public function provide(Operation $operation, array $uriVariables = [], array $context = []): array
    {
        return $this->cityRepository->findAll();
    }
}
