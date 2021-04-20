<?php if (!class_exists('BioRouter')):
require('../controllers/bio.controller.php');

class BioRouter extends RootRouter {
    public function __construct() {
        $this->addController('/', new BioController());
    }
}

endif;