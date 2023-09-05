<?php   

declare(strict_types=1);

namespace api\Core\Box\Application\Update;

use api\Core\Box\Domain\Repository\IBoxRepository;
use api\core\Box\Domain\ValueObjects\BoxBooster;
use api\core\Box\Domain\ValueObjects\BoxDescription;
use api\core\Box\Domain\ValueObjects\BoxName;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\Bus\Event\EventBus;
use api\Core\Box\Domain\Box;
use common\models\boxratio as BoxModel;

use DateTime;

final class BoxUpdate
{
    private IBoxRepository $repository;
    private Box $box;

    public function __construct(IBoxRepository $repository,Box $box){
        $this->repository = $repository;
        $this->box = $box;
    }

    public function __invoke(){
        $this->repository->update($this->box);
    }
}