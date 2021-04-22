<?php if (!class_exists('TestRouter')):
require('../controllers/test.controller.php');

class TestRouter extends RootRouter {
    public function __construct() {
        $this->addController('/', new TestController());
        $this->addController('/verify', new TestVerifierController());
    }
}

endif;