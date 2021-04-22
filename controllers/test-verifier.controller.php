<?php if (!class_exists('TestVerifierController')):
require('../modules/form-validators/examinee.validator.php');

class TestVerifierController {

    public function processRequest($request): string {
        if ($request->getMethod() === 'POST') {
            $validator = new ExamineeValidator($request->getBody());
            return $validator->validate()[1];
        }
        return "<p>Handler was not found</p>";
    }
}

endif;