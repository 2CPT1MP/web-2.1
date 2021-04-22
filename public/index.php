<?php
require('../modules/request.php');

require('../routes/index.route.php');
require('../routes/contact.route.php');
require('../routes/test.route.php');

require('../controllers/index.controller.php');
require('../controllers/history.controller.php');
require('../controllers/bio.controller.php');
require('../controllers/interests.controller.php');
require('../controllers/studies.controller.php');
require('../controllers/photos.controller.php');
require('../controllers/test-verifier.controller.php');

$request = new Request();
$rootRouter = new RootRouter();

$rootRouter->addRouter("/contact", new ContactRouter());
$rootRouter->addRouter("/test", new TestRouter());

$rootRouter->addController('/', new IndexController());
$rootRouter->addController("/bio", new BioController());
$rootRouter->addController("/interests", new InterestsController());
$rootRouter->addController("/studies", new StudiesController());
$rootRouter->addController("/photos", new PhotosController());
$rootRouter->addController('/history', new HistoryController());

$res = $rootRouter->processRequest($request);
echo $res;