<?php if (!class_exists('Bio')):

class Bio {
    private array $articles = [];

    public function addArticle(string $title, string $text) {
        $this->articles[] = new Article($title, $text);
    }
}

endif;