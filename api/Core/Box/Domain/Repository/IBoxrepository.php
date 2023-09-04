<?php   

namespace api\Core\Box\Domain\Repository;

use api\Core\Box\Domain\Boxes;
use api\Core\Box\Domain\Box;


interface IBoxRepository
{
    public function getbyId(int $id): ?Box;
    
    public function getAll(): Boxes;

    public function delete(int $id): void;  

    public function save(Box $availableHeroes): ?int;

    public function update(Box $availableHeroes): ?int;
}