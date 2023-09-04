<?php

declare(strict_types=1);

namespace api\Core\Box\Application\Delete;

use api\Core\Box\Domain\Box;
use api\Core\Box\Domain\Repository\IBoxesRepository;
use api\Core\Box\Domain\Exceptions\BoxesNotFound;

use api\Shared\Domain\ValueObject\FkId;

final class BoxesDelete
{ 
    private IBoxesRepository $repository;
    private int $id;

    public function __construct(IBoxesRepository $repository,$id){
        $this->repository = $repository;
        $this->id=$id;
    }

    public function __invoke(): void
    {
        $box = $this->repository->getbyId($this->id);
        if (!$box) throw new BoxesNotFound($this->id);
        $this->repository->delete($this->id); 
    }
}