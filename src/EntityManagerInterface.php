<?php

namespace Stwarog\Uow;

interface EntityManagerInterface extends DebugAble
{
    public function persist(EntityInterface $entity): void;

    public function remove(EntityInterface $entity): void;

    public function flush(): void;
}
