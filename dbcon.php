<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
            ->withServiceAccount('gowisata-4e15f-firebase-adminsdk-5wbxm-5e96903377.json')
            ->withDatabaseUri('https://gowisata-4e15f-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();
$storage = $factory->createStorage();

?>