<?php   

declare(strict_types=1);

namespace api\Core\Box\Application\Create;

use api\Core\Box\Domain\Repository\IBoxesRepository;
use api\core\Box\Domain\ValueObjects\BoxBooster;
use api\core\Box\Domain\ValueObjects\BoxDescription;
use api\core\Box\Domain\ValueObjects\BoxName;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\Bus\Event\EventBus;
use api\Core\Box\Domain\Box;
use common\models\boxratio as BoxModel;

use DateTime;

final class BoxesSave
{
    private IBoxesRepository $repository;
    private Box $availableHero;

    public function __construct(IBoxesRepository $repository,Box $availableHero){
        $this->repository = $repository;
        $this->availableHero = $availableHero;
    }

    public function __invoke(){
        $this->repository->save($this->availableHero);
    }
}