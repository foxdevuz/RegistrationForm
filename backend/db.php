<?php
    define('host', 'localhost');
    define('db_username', ''); // your database username
    define('db_password', ''); // your database password
    define('db_name',''); // your database name

    $conn = mysqli_connect(host,db_username,db_password,db_name);

    function real_string($text){
        // function for escape codes that coming from input
        global $conn;
        return mysqli_real_escape_string($conn, $text);
    }
?>
