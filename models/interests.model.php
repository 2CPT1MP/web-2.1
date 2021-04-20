<?php if (!class_exists('Interests')):
require('interests-category.model.php');

class Interests {
    private array $interests = [];

    public function createCategory(string $categoryName) {
        $this->interests[$categoryName] = new InterestsCategory($categoryName);
    }

    public function addItemToCategory(string $categoryName, string $item) {
        $this->interests[$categoryName]->addListItem($item);
    }

    public function getInterests(): array {
        return $this->interests;
    }
}

endif;