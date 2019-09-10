<?php 
    define("DB_HOST",     "127.0.0.1"); 
    define("DB_USER",     "root");
    define("DB_PASSWORD", "NxX3c7THgw4YXKU");
    define("DB_DATABASE", "dmrc");

    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    if (!$link) {
        die('ERROR: Could not connect. '.mysqli_connect_error());
    }
?>