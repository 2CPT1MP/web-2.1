<?php if (!class_exists('HeaderView')):

class HeaderView {
    public static function render(string $title): string {
        $html = <<<HTML
            <head>
                <meta charset="utf-8">
                <title>{$title}</title>
                <link rel="stylesheet" href="styles/style.css" type="text/css">
                <script src="scripts/jquery.js"></script>
                <script src="scripts/navigation.js"></script>
                <script src="scripts/current_time.js"></script>
                <script src="scripts/history_tracking.js"></script>
            </head>
            <body>
            <header class="dark-background">
                <h1 class="site-title">Личный сайт</h1>
                <p id="header-date" class="dark-background"> </p>
            </header>
            <nav class="flex-row-container">
        HTML;

        if ($title === 'Главная')
            $html .= '<div>
                        <img id="index" src="icons/index-checked.png" alt="">
                        <a href="/" class="active">Главная</a>
                      </div>';
        else
            $html .= '<div>
                        <img id="index" src="icons/index.png" alt="">
                        <a href="/">Главная</a>
                      </div>';

        if ($title === 'Обо мне')
            $html .= '<div>
                          <img id="about" src="icons/about-checked.png" alt="">
                          <a href="/bio" class="active">Обо мне</a>
                      </div>';
        else
            $html .= '<div>
                          <img id="about" src="icons/about.png" alt="">
                          <a href="/bio">Обо мне</a>
                      </div>';

        if ($title === 'Интересы')
            $html .= '<div class="subNav">
                      <img id="interests" src="icons/interests-checked.png" alt="">
                      <div class="links">
                        <a href="pages/interests.html" class="active">Интересы</a>
                        <div id="sublist">
                            <a href="pages/interests.html#hobbies">Занятия</a>
                            <a href="pages/interests.html#music">Книги</a>
                            <a href="pages/interests.html#books">Музыка</a>
                        </div>
                      </div>
                      </div>';
        else
            $html .= '<div class="subNav">
                      <img id="interests" src="icons/interests.png" alt="">
                      <div class="links">
                        <a href="pages/interests.html">Интересы</a>
                        <div id="sublist">
                            <a href="pages/interests.html#hobbies">Занятия</a>
                            <a href="pages/interests.html#music">Книги</a>
                            <a href="pages/interests.html#books">Музыка</a>
                        </div>
                      </div>
                      </div>';

        if ($title === 'Учеба')
            $html .= '<div>
                        <img id="studies" src="icons/studies-checked.png" alt="">
                        <a href="pages/studies.html" class="active">Учёба</a>
                      </div>';
        else
            $html .= '<div>
                        <img id="studies" src="icons/studies.png" alt="">
                        <a href="pages/studies.html">Учёба</a>
                      </div>';

        if ($title === 'Альбом')
            $html .= '<div>
                        <img id="photos" src="icons/photos-checked.png" alt="">
                        <a href="pages/photos.html" class="active">Альбом</a>
                      </div>';
        else
            $html .= '<div>
                        <img id="photos" src="icons/photos.png" alt="">
                        <a href="pages/photos.html">Альбом</a>
                      </div>';

        if ($title === 'Контакт')
            $html .=  '<div>
                         <img id="contact" src="icons/contact-checked.png" alt="">
                         <a href="pages/contact.html" class="active">Контакт</a>
                       </div>';
        else
            $html .=  '<div>
                         <img id="contact" src="icons/contact.png" alt="">
                         <a href="pages/contact.html">Контакт</a>
                       </div>';

        if ($title === 'Тест')
            $html .=  '<div>
                          <img id="test" src="icons/test-checked.png" alt="">
                          <a href="pages/test.html" class="active">Тест</a>
                       </div>';
        else
            $html .=  '<div>
                         <img id="test" src="icons/test.png" alt="">
                         <a href="pages/test.html">Тест</a>
                       </div>';

        return $html .= '</nav>';
    }
}

endif;