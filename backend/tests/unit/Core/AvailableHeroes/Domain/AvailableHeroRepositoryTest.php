<?php

declare(strict_types=1);

namespace backend\tests\unit\Core\AvailableHeroes\Domain;

use PHPUnit\Framework\TestCase;
use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use api\Shared\Domain\ValueObject\Avatar;
use api\Shared\Domain\ValueObject\Boost;
use api\Shared\Domain\ValueObject\DateTimeImmutableValueObject;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\ValueObject\Stats;
use backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroIdFaker;
use backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescriptionFaker;
use backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroNameFaker;
use backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorldFaker;
use backend\tests\unit\Core\Shared\Domain\FkIdFaker;
use backend\tests\unit\Core\Shared\Domain\AvatarFaker;
use backend\tests\unit\Core\Shared\Domain\BoostFaker;
use backend\tests\unit\Core\Shared\Domain\StatsFaker;
use api\Core\AvailableHeroes\Infrastructure\Persistence\AvailableHeroRepositoryACtiveRecord as AvailableHeroRepository;


class AvailableHeroRepositoryTest extends TestCase
{
    private AvailableHeroRepository $repository;

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