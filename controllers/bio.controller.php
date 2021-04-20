<?php if (!class_exists('BioController')):
require('../views/bio.view.php');

class BioController {
    public function showBio(Bio $bio): string {
        return BioView::render($bio);
    }

    public function processRequest($request): string {
        if ($request->getMethod() === 'GET') {
            $student = new Student();
            return $this->showBio($student->getBio());
        }
        return "<p>Handler was not found</p>";
    }
}

endif;