<?php

namespace Yann\Classes;

/**
 * Class Officer
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Yann\Classes
 */
class Officer extends Stormtrooper
{
    protected $rank = 1;

    /**
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

}
