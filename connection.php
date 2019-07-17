<?php 
    define("DB_HOST",     "localhost"); 
    define("DB_USER",     "id10023015_dmrcproject");
    define("DB_PASSWORD", "dmrcproject@2019");
    define("DB_DATABASE", "id10023015_dmrc");

    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    if (!$link) {
        die('ERROR: Could not connect. '.mysqli_connect_error());
    }
?>