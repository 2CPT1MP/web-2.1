<?php

function render($name, $age) {
    return <<<PERSON
        <h1>$name</h1>
        <h1>$age</h1>
    PERSON;

}