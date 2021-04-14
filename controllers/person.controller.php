<?php if (!class_exists('PersonController')):
require('../views/person.view.php');

class PersonController {
    public function showPerson($name, $age): string {
        return PersonView::render($name, $age);
    }

    public function processRequest($request): string {
        if ($request->getMethod() === 'POST') {
            $reqBody = $request->getBody();
            return $this->showPerson($reqBody["name"], $reqBody["age"]);
        }
        return "<p>Handler was not found</p>";
    }
}

endif;