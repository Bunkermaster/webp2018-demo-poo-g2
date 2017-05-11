<?php

namespace Yann\Classes;

/**
 * Class Stormtrooper
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Yann\Classes
 */
class Stormtrooper
{
    private $name;
    private $uuid;
    private $quiEstPolite = [];

    /**
     * Stormtrooper constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->uuid = uniqid();
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param Patrol $patrol
     */
    public function saluer(Patrol $patrol)
    {
        foreach ($patrol->getCollection() as $uuid => $trooper) {
            /** @var Stormtrooper $trooper */
            if ($this->uuid != $uuid && !isset($this->quiEstPolite[$patrol->getUuid()][$trooper->getUuid()])) {
                $this->quiEstPolite[$patrol->getUuid()][$trooper->getUuid()] = true;
                echo $this->getName()." : Hi ".$trooper->getName().PHP_EOL;
            }
        }
    }

    public function __destruct()
    {
        echo $this->name  . " : Arrghhhh mamannnnnnnn... X_x".PHP_EOL;
    }
}
