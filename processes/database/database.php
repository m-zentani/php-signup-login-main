<?php

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli($host,
                     $username,
                     $password,
                     $dbname);

//فحص ان وجد خظأ في الاتصال يعرض نوع الخطأ       
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;