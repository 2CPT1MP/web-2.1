<?php if (!class_exists('HistoryController')):
require('../views/history.view.php');

class HistoryController {
    public function showHistory(): string {
        return HistoryView::render();
    }

    public function processRequest($request): string {
        if ($request->getMethod() === 'GET') {
            return $this->showHistory();
        }
        return "<p>Handler was not found</p>";
    }
}

endif;