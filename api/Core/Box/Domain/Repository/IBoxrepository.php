<?php   

namespace api\Core\Box\Domain\Repository;

use api\Core\Box\Domain\Boxes;

interface IBoxRepository
{
    public function getAll(): Boxes;
}