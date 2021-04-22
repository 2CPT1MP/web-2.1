<?php if (!class_exists('InterestsView')):
require('header.view.php');
require('../models/interests.model/interests.model.php');

class InterestsView {
    public static function render(Interests $interests): string {
        $html = HeaderView::render('Интересы');
        $html .= '<section class="card">';

        foreach ($interests->getInterests() as $category) {
            $html .= "<h3>{$category->getTitle()}</h3><ul>";
            foreach ($category->getListItems() as $listItem) {
                $html .= "<li>{$listItem}</li>";
            }
            $html .= '</ul>';
        }

        return $html .= '</section>';
    }
}

endif;