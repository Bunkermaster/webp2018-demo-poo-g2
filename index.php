<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 11/05/2017
 * Time: 15:34
 */
require_once "vendor/autoload.php";
use \Yann\Classes\{Patrol, Stormtrooper};

$patrol = new Patrol();
$patrol->addToCollection(new Stormtrooper('TK-TKTANOHEOHE'));
$patrol->addToCollection(new Stormtrooper('TK-1001'));
$patrol->addToCollection(new Stormtrooper('TK-METRO'));
$patrol->addToCollection(new Stormtrooper('TK-T'));
$patrol->addToCollection(new Stormtrooper('TK-POUTPASKP'));
var_dump($patrol->getCollection());
