<?php if (!class_exists('ContactRouter')):
require('../controllers/contact.controller.php');
require('../controllers/contact-verifier.controller.php');

class ContactRouter extends RootRouter {
    public function __construct() {
        $this->addController('/', new ContactController());
        $this->addController('/verify', new ContactVerifierController());
    }
}

endif;