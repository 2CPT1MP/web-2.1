<?php
if (!class_exists('IndexView')):

class IndexView {
    public static function render() {
        return <<<INDEX
            <form action="/person" method="post">
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name"><br>
                <label for="age">Age:</label><br>
                <input type="number" name="age" id="age"><br>
                <input type="submit" value="submit">
            </form>
            <form action="/vehicle" method="post">
                <label for="name">Model:</label><br>
                <input type="text" name="model" id="model"><br>
                <input type="submit" value="submit">
            </form>
    INDEX;
    }
}
endif;