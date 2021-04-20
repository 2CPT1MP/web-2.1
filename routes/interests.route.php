<?php if (!class_exists('InterestsRouter')):
require('../controllers/interests.controller.php');

class InterestsRouter extends RootRouter {
    public function __construct() {
        $this->addController('/', new InterestsController());
    }
}

endif;