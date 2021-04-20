<?php if (!class_exists('Article')):

class Article {
    private string $heading, $text;

    public function __construct(string $heading, string $text) {
        $this->heading = $heading;
        $this->text = $text;
    }
}

endif;