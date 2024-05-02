<html>
        <form action="" method="POST">
        Tài khoản: <input type="text" name="taiKhoan" required>
        Mật khẩu : <input type="text" name="matKhau" required> <br>
        <input type = "submit" value = "Login"> 

        </form>

        <?php 
        if(!isset($_POST["taiKhoan"])) { return"";}
        if(!isset($_POST["matKhau"])) { return"";}
        $taiKhoan = $_POST["taiKhoan"];
        $matKhau = $_POST["matKhau"];
        
        if($taiKhoan == "abc" && $matKhau == "123") {
           $_SESSION["taiKhoan"] = $taiKhoan;
        } 
    
        ?>
        
    </html>
