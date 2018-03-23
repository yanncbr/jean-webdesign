<?php

/**
 * Debug la valeur d'une variable
 * @param type $var Variable à débugger
 * @param bool $die Est-ce-que le code doit s'arreter
 * @author Thomas Le Texier
 */
function debug($var, bool $die = true) {
    echo"<pre>";
    print_r($var);
    echo"</pre>";

    if ($die == true) {
        die;
    }
}

function getHeader(string $title, string $description, array $stylesheets = []) {
    require_once 'layout/header.php';
}

function getFooter() {
    require_once 'layout/footer.php';
}

function getMenu() {
    require_once 'layout/menu.php';
}
