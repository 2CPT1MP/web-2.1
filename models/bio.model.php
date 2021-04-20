<?php if (!class_exists('Bio')):
require('article.model.php');

class Bio {
    private array $articles = [];

    public function addArticle(string $title, string $text) {
        $this->articles[] = new Article($title, $text);
    }

    public function getArticles() {
        return $this->articles;
    }
}

endif;