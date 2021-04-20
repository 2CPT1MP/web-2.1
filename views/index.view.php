<?php if (!class_exists('IndexView')):

class IndexView {
    public static function render($student): string {
        return <<<INDEX
            <!DOCTYPE HTML>
            <html lang="ru">
                <head>
                    <meta charset="utf-8">
                    <title>Главная страница</title>
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
                        <div>
                            <img id="index" src="icons/index-checked.png" alt="">
                            <a href="index.html" class="active">Главная</a>
                        </div>
                        <div>
                            <img id="about" src="icons/about.png" alt="">
                            <a href="pages/about.html">Обо&nbsp;мне</a>
                        </div>
                        <div class="subNav">
                            <img id='interests' src="icons/interests.png" alt="">
                            <div class="links">
                                <a href="pages/interests.html">Интересы</a>
                                <div id="sublist">
                                    <a href="pages/interests.html#hobbies">Занятия</a>
                                    <a href="pages/interests.html#music">Книги</a>
                                    <a href="pages/interests.html#books">Музыка</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img id='studies' src="icons/studies.png" alt="">
                            <a href="pages/studies.html">Учёба</a>
                        </div>
                        <div>
                            <img id="photos" src="icons/photos.png" alt="">
                            <a href="pages/photos.html">Альбом</a>
                        </div>
                        <div>
                            <img id='contact' src="icons/contact.png" alt="">
                            <a href="pages/contact.html">Контакт</a>
                        </div>
                        <div>
                            <img id='test' src="icons/test.png" alt="">
                            <a href="pages/test.html">Тест</a>
                        </div>
                    </nav>
                    <main>
                        <article class="card">
                            <img src="img/Steam.jpg" class="profile-pic" id="pic" width="300px" alt="">
                            <h2 class="first-heading">{$student->getName()}</h2>
                            <table>
                                <tr>
                                    <td class="th">Группа</td>
                                    <td>{$student->getGroup()}</td>
                                </tr>
                                <tr>
                                    <td class="th">Номер работы</td>
                                    <td>Лабораторная работа {$student->getLabNum()}</td>
                                </tr>
                                <tr>
                                    <td class="th">Название работы</td>
                                    <td>{$student->getLabTitle()}</td>
                                </tr>
                            </table>
                            <a href="pages/history.html">Просмотр истории посещений</a>
                        </article>
                    </main>
                    <footer class="main-footer dark-background">
                        <p> Copyright &copy;2020 </p>
                    </footer>
                </body>
            </html>
        INDEX;
    }
}

endif;