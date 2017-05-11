<?php

namespace Yann\Classes;

/**
 * Class Patrol
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Yann\Classes
 */
class Patrol
{
    private $collection;

    /**
     * @param null $uuid
     * @return array|Stormtrooper
     * @throws \Exception
     */
    public function getCollection($uuid = null)
    {
        if(is_null($uuid)){

            return $this->collection;
        } elseif(isset($this->collection[$uuid])) {

            return $this->collection[$uuid];
        } else {
            throw new \Exception('Stormtrooper désigné n\'existe pas');
        }
    }

    /**
     * @param Stormtrooper $stormtrooper
     * @return $this
     * @internal param array $collection
     */
    public function addToCollection(Stormtrooper $stormtrooper)
    {
        $this->collection[$stormtrooper->getUuid()] = $stormtrooper;

        return $this;
    }

    /**
     * @param string $uuid
     * @return bool
     */
    public function removeFromCollection($uuid)
    {
        if(isset($this->collection[$uuid])) {
            unset($this->collection[$uuid]);

            return true;
        } else {

            return false;
        }
    }
}