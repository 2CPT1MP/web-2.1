<?php
if (!class_exists('IndexController')):
require('../views/index.view.php');
require('../models/student.model.php');

class IndexController {
    public function getIndex(): string {
        $student = new Student();
        return IndexView::render($student);
    }

    public function processRequest($request): string {
        if ($request->getMethod() === 'GET')
            return $this->getIndex();
        return "<p>Handler was not found</p>";
    }
}

endif;