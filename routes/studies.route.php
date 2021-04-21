<?php if (!class_exists('StudiesRouter')):
require('../controllers/studies.controller.php');

class StudiesRouter extends RootRouter {
    public function __construct() {
        $this->addController('/', new StudiesController());
    }
}

endif;