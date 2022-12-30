<?php
    $conn = new mysqli('127.0.0.1', 'james', 'Akweter1.', 'projects');

    if(! $conn ){
        die("Connection to the database failed");
    }
?>
