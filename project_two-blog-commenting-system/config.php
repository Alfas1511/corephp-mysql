<?php
try {
    // host
    $host = 'localhost';

    //db
    $db = 'blog-commenting-system';

    //username
    $user = 'root';

    //password
    $password = '123456';

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
