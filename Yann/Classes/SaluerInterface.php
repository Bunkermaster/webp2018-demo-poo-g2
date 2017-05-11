<?php

namespace Yann\Classes;

/**
 * Class SaluerInterface
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Yann\Classes
 */
interface SaluerInterface
{
    public function getUuid();
    public function getName();
    public function saluer(Patrol $patrol);
    public function getRank();
}
