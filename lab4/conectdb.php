<?php
//-------------PDO-----------   

// PDO: Suitable for developing applications that require flexibility and support for multiple databases.


$host = 'localhost';
$db = 'db1';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    // PDO::ATTR_ERRMODE: Sets the error handling mode to PDO::ERRMODE_EXCEPTION, 
    // meaning that any error will throw an exception.
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
    // PDO::ATTR_DEFAULT_FETCH_MODE`: Sets the default fetch mode to.
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
    echo "تم الاتصال بقاعدة البيانات بنجاح!";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


//----------------MySQLi--------------

// MySQLi: Suitable for simple applications that work only with MySQL.


// $host = 'localhost';
// $db = 'userdb';
// $user = 'root';
// $pass = '';


// $mysqli = new mysqli($host, $db, $user, $pass );

// // التحقق من الاتصال
// if ($mysqli->connect_error) {
//     die("فشل الاتصال: " . $mysqli->connect_error);
// }
// echo "تم الاتصال بقاعدة البيانات بنجاح!";






?>