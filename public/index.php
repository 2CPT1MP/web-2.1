<?php
require('../modules/request.php');
require('../routes/index.route.php');
require('../routes/bio.route.php');
require('../routes/interests.route.php');
require('../routes/studies.route.php');
require('../routes/photos.route.php');
require('../controllers/index.controller.php');

$request = new Request();
$rootRouter = new RootRouter();

$rootRouter->addRouter("/bio", new BioRouter());
$rootRouter->addRouter("/interests", new InterestsRouter());
$rootRouter->addRouter("/studies", new StudiesRouter());
$rootRouter->addRouter("/photos", new PhotosRouter());
$rootRouter->addController('/', new IndexController());

$res = $rootRouter->processRequest($request);
echo $res;

/*
echo "method: " .json_encode($request->getMethod()) ."<br>";
echo "path: ". json_encode($request->getPath()) ."<br>";
echo "params: ".json_encode($request->getParams()) ."<br>";
echo "body: ".json_encode($request->getBody()) ."<br>";

*/
