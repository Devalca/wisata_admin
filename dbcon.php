<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
            ->withServiceAccount('wisata-c7bfd-firebase-adminsdk-274z8-2cd336583d.json')
            ->withDatabaseUri('https://wisata-c7bfd-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();
$storage = $factory->createStorage();

?>