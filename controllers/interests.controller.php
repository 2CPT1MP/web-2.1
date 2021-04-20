<?php if (!class_exists('InterestsController')):
require('../views/interests.view.php');

class InterestsController {
    public function showInterests(Interests $interests): string {
        return InterestsView::render($interests);
    }

    public function processRequest($request): string {
        if ($request->getMethod() === 'GET') {
            $student = new Student();
            return $this->showInterests($student->getInterests());
        }
        return "<p>Handler was not found</p>";
    }
}

endif;