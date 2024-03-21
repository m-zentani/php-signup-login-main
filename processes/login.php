<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        // مقارنة كلمة المرور المدخلة بالموجودة
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: ../index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>تسجيل دخول</title>
    <meta charset="UTF-8">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <link href="../resourses/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/6c35af944a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <a href="../index.php"><img src="../resourses/img/photo_2023-02-28_19-19-51.jpg" alt="logo"></a>
            <form id="registrationForm" method="post">
                <h1 id="title">تسجيل دخول</h1>
                <?php if ($is_invalid): ?>
                    <em>يرجى التأكد من صحة البيانات المدخلة</em>
                <?php endif; ?>
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="البريد الالكتروني"
                        value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                        <div class="error"></div>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="كلمة المرور">
                        <div class="error"></div>
                    </div>
                    <p>نسيت كلمة المرور <a href="#">اضغط هنا!</a></p>
                </div>
                <div class="btn-field">
                    <button type="button" id="signinBtn"><a href="../views/signup.html">انشاء حساب</a></button>
                    <button type="submit" id="signupBtn" class="colored-btn">تسجيل دخول</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>








