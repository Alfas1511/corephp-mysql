<?php
try {
    // host
    $host = 'localhost';

    //db
    $db = 'authentication-system';

    //username
    $user = 'root';

    //password
    $password = '';

    // database connection
    $conn = new PDO("mysql:host=$host;dbname=$db;", $user, $password);

    // if ($conn == true) {
    //     echo "Database connection successfull";
    // } else {
    //     echo "Database connection failed";
    // }
} catch (\Throwable $th) {
    echo "Connection error: $th";
}


?>