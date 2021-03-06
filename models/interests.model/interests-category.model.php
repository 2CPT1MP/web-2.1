<?php if (!class_exists('InterestsCategory')):

class InterestsCategory {
    private string $title;
    private array $listItems;

    public function __construct(string $title) {
        $this->title = $title;
    }

    public function addListItem(string $listItem) {
        $this->listItems[] = $listItem;
    }

    public function getListItems(): array {
        return $this->listItems;
    }

    public function getTitle(): string {
        return $this->title;
    }
}

endif;