<?php if (!class_exists('Article')):

class Article {
    private string $heading, $text;

    public function __construct(string $heading, string $text) {
        $this->heading = $heading;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getHeading(): string
    {
        return $this->heading;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}

endif;