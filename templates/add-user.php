<!DOCTYPE html>
<html>
<head>
    <title>اضافة حساب جديد</title>
    <meta charset="UTF-8">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <link href="../resourses/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/6c35af944a.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
</head>
<body>
<div class="container">
        <div class="form-box">
            <a href="../index.php"><img src="../resourses/img/photo_2023-02-28_19-19-51.jpg" alt="logo"></a>
            <form id="registrationForm" action="../processes/process-add-user.php" method="post" novalidate>
                <h1 id="title">اضافة حساب جديد</h1>
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="nameField" name="name" placeholder="الاسم">
                        <div class="error"></div>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="البريد الالكتروني">
                        <div class="error"></div>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="كلمة المرور">
                        <div class="error"></div>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="conf-password" name="password_confirmation" placeholder="تأكيد كلمة المرور">
                        <div class="error"></div>
                    </div>
                </div>
                <div class="btn-field">
                    <button type="submit" id="signupBtn" class="colored-btn">انشاء حساب</button>
                    <button type="button" id="signinBtn"><a href="../index.php">رجوع</a></button>
                </div>
            </form>
        </div>
    </div>