<?php
    require_once './connect_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập quản trị viên | LBK</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="design">
            <div class="pill-1 rotate-45"></div>
            <div class="pill-2 rotate-45"></div>
            <div class="pill-3 rotate-45"></div>
            <div class="pill-4 rotate-45"></div>
        </div>
        <div class="login">
            <form action="./login.php" method="post">
                <h3 class="title">Quản trị viên</h3>
                <div class="text-input">
                    <i class="ri-user-fill"></i>
                    <input type="text" id="username" name="username" placeholder="Tài khoản" required>
                </div>
                <div class="text-input">
                    <i class="ri-lock-fill"></i>
                    <input type="password" id="password" name="password" placeholder="Mật khẩu" required>
                </div>
                <button class="login-btn">Đăng nhập</button>
            </form>
            
        </div>
    </div>
</body>

</html>