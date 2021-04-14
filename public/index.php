<?php

require('../modules/request.php');
require('../routes/index.php');
require('../routes/person.php');
require('../routes/vehicle.php');
require('../controllers/index.controller.php');

$request = new Request();
$rootRouter = new RootRouter();

$rootRouter->addRouter("/person", new PersonRouter());
$rootRouter->addRouter("/vehicle", new VehicleRouter());
$rootRouter->addController('/', new IndexController());

$res = $rootRouter->processRequest($request);
echo $res;

echo "method: " .json_encode($request->getMethod()) ."<br>";
echo "path: ". json_encode($request->getPath()) ."<br>";
echo "params: ".json_encode($request->getParams()) ."<br>";
echo "body: ".json_encode($request->getBody()) ."<br>";


