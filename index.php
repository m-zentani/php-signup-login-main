<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/processes/database/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="ar" class="h-100" data-bs-theme="auto">
<head>
    <script src="../assets/js/color-modes.js"></script>
    <script src="https://kit.fontawesome.com/6c35af944a.js" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">

    <title>قسم تقنيات الأنترنت</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="resourses/css/cover.css" rel="stylesheet">
</head>
<body>
    
    <?php if (isset($user)): ?>
        <script>alert('مرحباً <?= htmlspecialchars($user["name"]) ?>')</script>

        <body class="d-flex h-100 text-center">
            <div class="cover-container d-flex w-250 h-100 p-2 mx-auto flex-column">
                <?php include 'templates/user-header.php' ?>
                
                <main class="px-3">
                    <img src="resourses/img/photo_2023-02-28_19-19-51.png" alt="..." height="150">
                    <?php include 'processes/users-list.php' ?>
                </main>
             
                <?php include 'templates/footer.php' ?>
            </div>
        </body>
    <?php else: ?>    
        
        <body class="d-flex h-100 text-center">
            <div class="cover-container d-flex w-250 h-100 p-2 mx-auto flex-column">
                <?php include 'templates/header.php' ?>
                
                <main class="px-3">
                    <img src="resourses/img/photo_2023-02-28_19-19-51.png" alt="..." height="150">
                    <h1>قسم تقنيات الانترنت</h1>
                    <p class="lead">يهتم قسم تقنيات الانترنت بتأهيل و إعداد جيل جديد من مصممي ومطوري البرمجيات والمواقع الالكترونية لاستخدام التقنيات الحديثة في البرمجة, تطوير تطبيقات الانترنت, وادارة مواقع الأنترنت. هذا كله ياتي لتلبية احتياجات المؤسسات الليبية المتزايدة في هذا المجال في هذه المرحلة من بناء ليبيا واحتياجات سوق العمل.</p>
                    <p class="lead">
                        <a href="./processes/login.php" class="btn btn-lg btn-primary bg-primary">تسجيل دخول</a>
                        <a href="./views/signup.html" class="btn btn-lg btn-outline-primary">انشاء حساب</a>
                    </p>
                </main>

                <?php include 'templates/footer.php' ?>
            </div>
        </body>
        <?php endif; ?>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>