<?php 
require __DIR__.'/../vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory)
			->withServiceAccount('secret/serviceaccount.json')
			->withDatabaseUri('https://emechanic-d81b3.firebaseio.com');