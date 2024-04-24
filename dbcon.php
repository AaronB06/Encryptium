<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount(__DIR__.'/vsamp-2e587-firebase-adminsdk-x5rct-162a293abb.json') //go to project settings -> service accs -> generate new key ata
    ->withDatabaseUri('https://vsamp-2e587-default-rtdb.asia-southeast1.firebasedatabase.app/')
    ; // eto yung sa mismong database 

$database = $factory->createDatabase();

?>
