<?php
    define('DB_HOST','localhost');
    define('DB_USER','brad');
    define('DB_PASS','*****');
    define('DB_NAME','php_dev');
// Create connection 

$conn = new mysqli(DB_HOST , DB_USER , DB_PASS , DB_NAME);


//CHECK CONNECTION 

if($conn -> connect_error){
    die('connection Failed' . $conn->connect_error);
}


