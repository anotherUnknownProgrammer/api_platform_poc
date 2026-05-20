<?php

declare(strict_types=1);

namespace App\ApiPlatform\State\Processor;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\ApiPlatform\DTO\Input\CityInputDTO;
use App\Entity\City;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @implements ProcessorInterface<CityInputDTO, City>
 */
class CityProcessor implements ProcessorInterface
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    /**
     * @param CityInputDTO $data
     */
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []): City
    {
        $connection = $this->entityManager->getConnection();

        $connection->executeStatement(
            "INSERT INTO tblCity (strName, strType, decLat, decLng, coordinates, strContinent, strCountry, strCountryCode, strAdminName, intPopulation, decRadiusKm)
             VALUES (:name, :type, :lat, :lng, ST_GeomFromText(CONCAT('POINT(', :lng2, ' ', :lat2, ')')), :continent, :country, :countryCode, :adminName, :population, :radiusKm)",
            [
                'name' => $data->name,
                'type' => $data->type ?? 'city',
                'lat' => $data->lat,
                'lng' => $data->lng,
                'lng2' => $data->lng,
                'lat2' => $data->lat,
                'continent' => $data->continent,
                'country' => $data->country,
                'countryCode' => $data->countryCode,
                'adminName' => $data->adminName,
                'population' => $data->population,
                'radiusKm' => $data->radiusKm,
            ]
        );

        $id = (int) $connection->lastInsertId();

        return $this->entityManager->find(City::class, $id);
    }
}
