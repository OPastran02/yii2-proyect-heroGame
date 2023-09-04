<?php

declare(strict_types=1);

namespace api\Core\Box\Application\Find;

use api\Core\Box\Domain\Box;
use api\Core\Box\Domain\Repository\IBoxRepository;
use api\Core\Box\Domain\Exceptions\BoxesNotFound;

use api\Shared\Domain\ValueObject\FkId;

final class BoxesGetById
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
        if (!$box) throw new BoxesNotFound($this->id);

        return $box;
    }
}