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
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\ValueObject\Stats;
use api\Shared\Domain\ValueObject\UUID;
use backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroIdFaker;
use backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescriptionFaker;
use backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroNameFaker;
use backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorldFaker;
use backend\tests\unit\Core\Shared\Domain\ValueObject\FkIdFaker;
use backend\tests\unit\Core\Shared\Domain\ValueObject\AvatarFaker;
use backend\tests\unit\Core\Shared\Domain\ValueObject\BoostFaker;
use backend\tests\unit\Core\Shared\Domain\ValueObject\StatsFaker;
use api\Core\AvailableHeroes\Infrastructure\Persistence\AvailableHeroRepositoryACtiveRecord as AvailableHeroRepository;
use api\Core\AvailableHeroes\Infrastructure\Controllers\AvailableHeroController;
use api\Core\AvailableHeroes\Infrastructure\Persistence\AvailableHeroMapper;    

use DateTime;


class AvailableHeroRepositoryTest extends TestCase
{
    private AvailableHeroController $controller;

    protected function setUp(): void
    {
        parent::setUp();
        $this->controller = new AvailableHeroController();
    }

    
    public function testGetById()
    {

        $availableHero = $this->controller->getById(1);
        $this->assertInstanceOf(AvailableHero::class, $availableHero);
        $this->assertEquals($id, $availableHero->id());
    }


    public function testGetByRarity()
    {
        $rarityValue = mt_rand(1, 99);
        $availableHeroes = $this->controller->getByRarity($rarityValue);
        $this->assertIsObject($availableHeroes);
        foreach ($availableHeroes as $availableHero) {
            $this->assertInstanceOf(AvailableHero::class, $availableHero);
        }
    }

    public function testDelete()
    {
        $availableHero = $this->controller->getById(1);
        $this->assertNotNull($availableHero, 'The AvailableHero does not exist.');
        $this->controller->delete(1);
    }

    public function testSave()
    {
        $availableHero = AvailableHero::create(
            new AvailableHeroId(2),
            AvailableHeroNameFaker::random(),
            AvailableHeroDescriptionFaker::random(),
            AvailableHeroWorldFaker::random(),
            AvatarFaker::random(),
            AvatarFaker::random(),//
            FkIdFaker::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),//
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),//
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),//
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),//
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),//
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),//
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),//
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),//
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),//
            true,
            new DateTime(),
            new DateTime(),
            new UUID('6cb5f86e-c021-409e-afcc-82ec6a548dfc'),
            new UUID('6cb5f86e-c021-409e-afcc-82ec6a548dfc')
        );

        $availableHeroModel = AvailableHeroMapper::toModel($availableHero);
        $this->controller->save($availableHeroModel);

            // Assertions
        $this->assertInstanceOf(AvailableHero::class, $availableHero);
        $this->assertNotEmpty($availableHero->id());
        // Get the AvailableHero by ID from the repository
        $retrievedAvailableHero = $this->controller->getbyId(2);

        // More assertions
        $this->assertInstanceOf(AvailableHero::class, $retrievedAvailableHero);
        $this->assertEquals($availableHero->id(), $retrievedAvailableHero->id());
        // Add more assertions as needed to verify the saved AvailableHero
    }
}