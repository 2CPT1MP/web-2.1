<?php if (!class_exists('IndexController')):
require('../views/index.view.php');

class IndexController {
    public function getIndex(): string {
        return IndexView::render();
    }

    public function processRequest($request): string {
        if ($request->getMethod() === 'GET')
            return $this->getIndex();
        return "<p>Handler was not found</p>";
    }
}

endif;