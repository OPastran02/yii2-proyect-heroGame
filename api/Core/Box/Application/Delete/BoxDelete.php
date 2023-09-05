<?php

declare(strict_types=1);

namespace api\Core\Box\Application\Delete;

use api\Core\Box\Domain\Box;
use api\Core\Box\Domain\Repository\IBoxRepository;
use api\Core\Box\Domain\Exceptions\BoxNotFound;

use api\Shared\Domain\ValueObject\FkId;

final class BoxDelete
{ 
    private IBoxRepository $repository;
    private int $id;

    public function __construct(IBoxRepository $repository,$id){
        $this->repository = $repository;
        $this->id=$id;
    }

    public function __invoke(): void
    {
        $box = $this->repository->getbyId($this->id);
        if (!$box) throw new BoxNotFound($this->id);
        $this->repository->delete($this->id); 
    }
}