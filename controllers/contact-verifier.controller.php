<?php if (!class_exists('ContactVerifierController')):
require('../modules/form-validators/contact.validator.php');

class ContactVerifierController {

    public function processRequest($request): string {
        if ($request->getMethod() === 'POST') {
            $validator = new ContactValidator($request->getBody());
            return $validator->validate()[1];
        }
        return "<p>Handler was not found</p>";
    }
}

endif;