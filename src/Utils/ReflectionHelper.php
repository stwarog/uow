<?php


namespace Stwarog\Uow\Utils;


use ReflectionClass;

class ReflectionHelper
{
    /**
     * @param        $object
     * @param string $property
     *
     * @return mixed
     */
    public static function getValue($object, string $property)
    {
        $reflection = new ReflectionClass($object);
        if ($reflection->hasProperty($property) === false) {
            return null;
        }

        $p = $reflection->getProperty($property);
        $p->setAccessible(true);

        return $p->getValue($object);
    }
}