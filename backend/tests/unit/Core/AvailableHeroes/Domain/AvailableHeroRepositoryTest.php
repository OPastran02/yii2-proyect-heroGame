<?php

declare(strict_types=1);

namespace backend\tests\unit\Core\AvailableHeroes\Domain;

use PHPUnit\Framework\TestCase;
use App\Core\AvailableHeroes\Domain\AvailableHero;
use App\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use App\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use App\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use App\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use App\Shared\Domain\ValueObjects\Avatar;
use App\Shared\Domain\ValueObjects\Boost;
use App\Shared\Domain\ValueObjects\DateTimeImmutableValueObject;
use App\Shared\Domain\ValueObjects\FkId;
use App\Shared\Domain\ValueObjects\Stats;
use api\Core\AvailableHeroes\Infrastructure\Persistence\AvailableHeroRepositoryACtiveRecord as AvailableHeroRepository;


class AvailableHeroRepositoryTest extends TestCase
{
    private AvailableHeroRepositoryTest $repository;

    protected function setUp(): void
    {
        parent::setUp();
        // Create an instance of the repository that you will use in each test
        $this->repository = new AvailableHeroRepository();
    }

    
    public function testGetById()
    {
        $id = AvailableHeroIdFaker::random();

        $availableHero = $this->repository->getById($id);
        $this->assertInstanceOf(AvailableHero::class, $availableHero);
        $this->assertEquals($id, $availableHero->getId());
    }


    public function testGetByRarity()
    {
        $rarityId = FkIdFaker::random();


        $availableHeroes = $this->repository->getByRarity($rarityId);
        $this->assertIsArray($availableHeroes);
    }

    public function testDelete()
    {
        // Create an AvailableHeroesId for the test
        $id = AvailableHeroIdFaker::random();

        // Call the method to be tested
        $this->repository->delete($id);
        $this->expectNotToPerformAssertions();
        $this->repository->save($availableHero);
        // You may want to add further assertions to check if the deletion was successful
    }

    public function testSave()
    {
        // Create an AvailableHero for the test
        $availableHero = AvailableHero::create(
            AvailableHeroIdFaker::random(),
            AvailableHeroNameFaker::random(),
            AvailableHeroDescriptionFaker::random(),
            AvailableHeroWorldFaker::random(),
            AvatarFaker::random(),
            AvatarFaker::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            DateTimeImmutableValueObject::random(),
            DateTimeImmutableValueObject::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
        );

        // Call the method to be tested
        $this->repository->save($availableHero);

            // Assertions
        $this->assertInstanceOf(AvailableHero::class, $availableHero);
        $this->assertNotEmpty($availableHero->getId());

        // Get the AvailableHero by ID from the repository
        $retrievedAvailableHero = $this->repository->getbyId($availableHero->getId());

        // More assertions
        $this->assertInstanceOf(AvailableHero::class, $retrievedAvailableHero);
        $this->assertEquals($availableHero->getId(), $retrievedAvailableHero->getId());
        // Add more assertions as needed to verify the saved AvailableHero
    }
}