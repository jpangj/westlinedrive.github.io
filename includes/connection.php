<?php
// CONNECT TO DATABASE ON HOST
    $server     = "localhost";
    $username   = "wld_admin";
    $password   = "westlinedrive22";
    $db         = "wld_email";

    // CREATE A CONNECTION TO THE DB
    $conn = mysqli_connect($server, $username, $password, $db);

    // CHECK CONNECTIONS
    if( !$conn ) {
        die( "Connections failed: " . mysqli_connect_error() );
    }
?>