<!-- allows to connect to the database -->
<?php
    require 'createdb.class.php';
    $database = new CreateDb();

    $con = $database->con(); # Open a new connection to the database

    if(!$con) { # if connection is unsuccessful
        die($con); # display error
    }
?>