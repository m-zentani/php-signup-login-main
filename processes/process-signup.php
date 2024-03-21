<?php

if (empty($_POST["name"])) {
    die("الاسم مطلوب");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("يجب ان يكون بريد الكتروني صالح");
}

if (strlen($_POST["password"]) < 8) {
    die("يجب ان لا تقل كلمة المرور عن 8 خانات");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("يجب ان تحتوي كلمة المرور على حرف");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("يجب ان تحتوي كلمة المرور على رقم");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("كلمات المرور غير متطابقة");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database/database.php";

$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

// عرض  رسالة خطأ تحتوي على تفاصيل الخطأ في الاستعلام
if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

// ربط قيم المتغيرات بالاستعلام
$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: ../views/signup-success.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
?>