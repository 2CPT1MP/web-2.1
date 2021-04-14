<?php if (!class_exists('PersonRouter')):
require('../controllers/person.controller.php');

class PersonRouter extends RootRouter {
    public function __construct() {
        $this->addController('/', new PersonController());
    }
}

endif;