<?php

require "../vendor/autoload.php";

use Defr\Ares;

$ares = new Ares();

$record = $ares->findByIdentificationNumber(73263753);

echo sprintf(
    '%s, %s, %s, %s, I� %s, DI� %s',
    $record->getCompanyName(),
    $record->getStreet(),
    $record->getZip(),
    $record->getTown(),
    $record->getCompanyId(),
    $record->getTaxId()
);