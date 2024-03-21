<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0 mx-5" >WT</h3>
        <nav class="nav nav-pills flex-column flex-sm-row ms-5">
            <a class="flex-sm-fill text-sm-center nav-link" href="#">الرئيسية</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="./processes/logout.php">تسجيل الخروج</a>
            <a class="flex-sm-fill text-sm-center nav-link  ms-5 active" aria-current="page" href="templates/add-user.php"><!--?= htmlspecialchars($user["name"]) ?--><i class="fa-solid fa-circle-plus"></i></a>
            <a class="flex-sm-fill text-sm-center nav-link  ms-5 active" aria-current="page" href="#"><?= htmlspecialchars($user["name"]) ?> <i class="fa-solid fa-user"></i></a>
        </nav>
    </div>
</header>