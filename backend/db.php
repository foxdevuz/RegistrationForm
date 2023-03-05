<?php
    define('host', 'localhost');
    define('db_username', 'abdullajonov');
    define('db_password', '0880');
    define('db_name','RegisartionFormDB');

    $conn = mysqli_connect(host,db_username,db_password,db_name);

    function real_string($text){
        // function for escape codes that coming from input
        global $conn;
        return mysqli_real_escape_string($conn, $text);
    }
?>
