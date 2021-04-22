<?php if (!class_exists('ContactRouter')):
require('../controllers/contact.controller.php');

class ContactRouter extends RootRouter {
    public function __construct() {
        $this->addController('/', new ContactController());
    }
}

endif;