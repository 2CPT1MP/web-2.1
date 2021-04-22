<?php if (!class_exists('ContactController')):
require('../views/contact.view.php');

class ContactController {
    public function showContact(): string {
        return ContactView::render();
    }

    public function processRequest($request): string {
        if ($request->getMethod() === 'GET') {
            $student = new Student();
            return $this->showContact();
        }
        return "<p>Handler was not found</p>";
    }
}

endif;