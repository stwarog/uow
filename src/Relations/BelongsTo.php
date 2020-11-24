<?php


namespace Stwarog\Uow\Relations;


use Stwarog\Uow\EntityInterface;
use Stwarog\Uow\EntityManagerInterface;

class BelongsTo extends AbstractRelation implements InteractWithEntityManager, HasRelationFromToSchema
{
    public function handleRelations(EntityManagerInterface $entityManager, EntityInterface $entity): void
    {
        $relatedEntity = $this->getObject();
        if (empty($relatedEntity)) {
            return;
        }
        $entityManager->persist($relatedEntity);
        $entity->set($this->keyFrom(), $relatedEntity->get($this->keyTo()));
    }
}
