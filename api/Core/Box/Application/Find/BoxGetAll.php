<?php

declare(strict_types=1);

namespace api\Core\Box\Application\Find;

use api\Core\Box\Domain\Boxes;
use api\Core\Box\Domain\Repository\IBoxrepository;
use api\Core\Box\Domain\Exceptions\BoxNotFound;

final class BoxGetAll
{
    private IBoxrepository $repository;

    public function __construct(IBoxrepository $repository){
        $this->repository = $repository;
    }

    public function __invoke(): boxes
    {
        $boxes = $this->repository->getAll();
        if (empty($boxes)) throw new BoxNotFound();
        
        return $boxes;
    }
}