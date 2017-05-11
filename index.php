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
$metro = new Stormtrooper('TK-METRO');
$patrol->addToCollection($metro);
$patrol->addToCollection(new Stormtrooper('TK-T'));
$patrol->addToCollection(new Stormtrooper('TK-POUTPASKP'));
//dump($patrol);
$patrol->saluer();
echo "NEW GUY!!!!!!!".PHP_EOL;
$patrol->addToCollection(new Stormtrooper('TK-BRONTIS'));
$patrol->saluer();
echo "KILL METRO!!!!!!!".PHP_EOL;
$patrol->removeFromCollection($metro->getUuid());
unset($metro);
dump($patrol);