<?php
    session_start();

    $mysqli = require __DIR__ . "/database/database.php";
    
    $sql = "SELECT * FROM user";
    
    $result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>الصفحة الرئيسية</title>
    <meta charset="UTF-8">

    <link href="../resourses/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/6c35af944a.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card mt-5 mx-5">
                <div class="card-header">
                    <h2 class="display-6 text-center">قائمة المستخدمين</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-primary text-white">
                            <td>رقم المستخدم</td>
                            <td>الاسم</td>
                            <td>البريد الالكتروني</td>
                            <td>تعديل</td>
                            <td>حذف</td>
                        </tr>
                        <tr>
                            <?php
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><a href="./templates/add-user.php" class="btn btn-primary">Edit</a></td>
                                    <td><a href="processes/delete-user.php?user_id=<?php  echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('هل انت متأكد من حذف هذا المستخم؟')">Delete</a></td>
                        </tr>
                            <?php
                                }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>