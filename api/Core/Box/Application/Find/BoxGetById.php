<?php

declare(strict_types=1);

namespace api\Core\Box\Application\Find;

use api\Core\Box\Domain\Box;
use api\Core\Box\Domain\Repository\IBoxRepository;
use api\Core\Box\Domain\Exceptions\BoxNotFound;

use api\Shared\Domain\ValueObject\FkId;

final class BoxGetById
{
    private IBoxRepository $repository;
    private int $id;

    public function __construct(IBoxRepository $repository, int $id)
    {
        $this->repository = $repository;
        $this->id = $id;
    }

    public function __invoke(): Box
    {
        $box = $this->repository->getbyId($this->id);
        if (!$box) throw new BoxNotFound($this->id);

        return $box;
    }
}