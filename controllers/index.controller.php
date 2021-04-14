<?php
if (!class_exists('IndexController')):

require('../views/index.php');

class IndexController {

    public function getIndex() {
        return IndexView::render();
    }

    public function processRequest($request) {
        if ($request->getMethod() === 'GET')
            return $this->getIndex();
    }
}
endif;