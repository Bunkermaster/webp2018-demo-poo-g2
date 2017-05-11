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
    private $uuid;

    /**
     * Patrol constructor.
     */
    public function __construct()
    {
        $this->uuid = uniqid();
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param null $uuid
     * @return array|SaluerInterface
     * @throws \Exception
     */
    public function getCollection($uuid = null)
    {
        if(is_null($uuid)){

            return $this->collection;
        } elseif(isset($this->collection[$uuid])) {

            return $this->collection[$uuid];
        } else {
            throw new \Exception('La personne désignée n\'existe pas');
        }
    }

    /**
     * @param SaluerInterface $trooper
     * @return $this
     * @internal param array $collection
     */
    public function addToCollection(SaluerInterface $trooper)
    {
        $this->collection[$trooper->getUuid()] = $trooper;

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

    public function saluer()
    {
        foreach($this->collection as $trooper){
            /** @var SaluerInterface $trooper */
            $trooper->saluer($this);
        }
    }

}