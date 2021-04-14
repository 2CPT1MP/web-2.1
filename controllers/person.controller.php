<?php
if (!class_exists('PersonController')):

    require('../views/person.php');

    class PersonController {

        public function showPerson($name, $age) {
            return PersonView::render($name, $age);
        }

        public function processRequest($request) {
            if ($request->getMethod() === 'POST') {
                $reqBody = $request->getBody();
                return $this->showPerson($reqBody["name"], $reqBody["age"]);
            }
        }
    }
endif;