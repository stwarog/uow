<?php

declare(strict_types=1);

namespace Stwarog\Uow\IdGenerators;

use Stwarog\Uow\DBConnectionInterface;
use Stwarog\Uow\EntityInterface;

interface IdGenerationStrategyInterface
{
    public function handle(EntityInterface $entity, DBConnectionInterface $db): void;
}
