<header>
<?php 
    session_start();

    if(isset($_SESSION['taiKhoan'])){
        $isLoggedIn = true;
    } else {
        $isLoggedIn = false;
    }

    if(isset($_POST[logout])){
        unset($_SESSION['taiKhoan']);
        header("Location: login.php");
    }
?>

<div style="background-color: green;">
                <h2 style="color: White;">This is header</h2>
                
                <?php 
                if($isLoggedIn):
                ?>
                <form action="" method = "POST">
                    <button type = "submit" name = "Logout">Đăng xuất</button>
                </form>
                
                <?php 
                else:
                ?>
                <button onclick = "location.href='login.php';">Đăng nhập</button>

                <?php endif; ?>
              
            </div>
</header>