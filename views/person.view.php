<?php if (!class_exists('PersonView')):

class PersonView {
    public static function render($name, $age): string {
        return <<<PERSON
            <h1>$name</h1>
            <h1>$age</h1>
        PERSON;
    }
}

endif;