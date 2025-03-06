<?php
require_once '../connect_db.php';

// echo $_GET["username"];
?>

<span style="font-family: sans-serif;">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Quản lý tài khoản | LBK</title>
        <link rel="stylesheet" href="style.css" />
        <!-- Font Awesome Cdn Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    </head>

    <body>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#" class="logo">
                            <img src="/logo.jpg" alt="">
                            <span class="nav-item">LBK</span>
                        </a></li>
                    <li><a href="#">
                            <i class="fas fa-home"></i>
                            <span class="nav-item">Trang chính</span>
                        </a></li>
                    <li><a href="">
                            <i class="fas fa-user"></i>
                            <span class="nav-item">Profile</span>
                        </a></li>
                    <li><a href="">
                            <i class="fas fa-wallet"></i>
                            <span class="nav-item">Wallet</span>
                        </a></li>
                    <li><a href="">
                            <i class="fas fa-chart-bar"></i>
                            <span class="nav-item">Analytics</span>
                        </a></li>
                    <li><a href="">
                            <i class="fas fa-tasks"></i>
                            <span class="nav-item">Tasks</span>
                        </a></li>
                    <li><a href="">
                            <i class="fas fa-cog"></i>
                            <span class="nav-item">Settings</span>
                        </a></li>
                    <li><a href="">
                            <i class="fas fa-question-circle"></i>
                            <span class="nav-item">Help</span>
                        </a></li>
                    <li><a href="./logout.php" class="logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-item">Đăng xuất</span>
                        </a></li>
                </ul>
            </nav>

            <section class="main">
                <div class="main-top">
                    <h1>Quản lý tài khoản quản trị viên</h1>

                </div>
                <div class="main-skills">
                    <div class="card">
                        <?php  
                        
                            $query = "SELECT * FROM adminlogin";
                            $result = mysqli_query($conn, $query);
                            

                        ?>
                        <!-- <i class="fas fa-laptop-code"></i> -->
                        <!-- <h3>Web developemt</h3> -->
                        <!-- <p>Join Over 1 million Students.</p> -->
                        <!-- <button>Get Started</button> -->
                        <table>
                            <thead>
                                <tr>
                                    <th width="150px">ID</th>
                                    <th width="200px">Tài khoản</th>
                                    <th width="200px">Mật khẩu</th>
                                    <th width="200px">Hành động</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($row = mysqli_fetch_assoc($result)) {

                                    
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['password']; ?></td>

                                    <td>
                                        <form action="">
                                            <button>Sửa</button>
                                        </form>
                                        <form action="">
                                            <button>Xoá</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="main-top">
                    <h1>Quản lý tài khoản nhân viên</h1>

                </div>
                <div class="main-skills">
                    <div class="card">
                        <!-- <i class="fas fa-laptop-code"></i> -->
                        <!-- <h3>Web developemt</h3> -->
                        <!-- <p>Join Over 1 million Students.</p> -->
                        <!-- <button>Get Started</button> -->
                    </div>
                </div>


            </section>
        </div>
    </body>

    </html>
</span>