<html>
    <body>
   <form action="" method ="post">

    Nhap Can nang <input type = "" name = "Weight"> 
    Nhap Chieu cao <input type = "" name = "Height"> 
    <input type = "submit" value = "Submit"> 
    </form>
        <?php
           if(!isset($_POST["Weight"])) { return"";}
           if(!isset($_POST["Height"])) { return"";}
          
            $weight = $_POST["Weight"];
            $height = $_POST["Height"];
            if($height < 0 && $weight < 0){
                echo "nhập nghiêm túc đi fen, don't try my parient";
            }
            $bmi = $weight/($height*$height);
           
            if($bmi > 0 && $bmi <18.5){
                echo "Bạn đang gặp phải tình trạng thiếu cân, vì thế nên áp dụng các phương pháp ăn uống và luyện tập để tăng trọng lượng cơ thể.";
            }elseif($bmi >= 18.5 && $bmi <25){
                echo "Bạn đang sở hữu cân nặng khỏe mạnh, cần duy trì quá trình ăn uống và sinh hoạt như thường ngày.";
            }elseif($bmi >= 25 && $bmi <30){
                echo " Bạn đang trong tình trạng thừa cân, cần áp dụng thực đơn ăn kiêng hợp lý cùng việc luyện tập khoa học để lấy lại vóc dáng chuẩn nhất.";
            }elseif($bmi >= 30){
                echo "Bạn đang bị béo phì và tình trạng này có thể khiến bạn gặp rất nhiều vấn đề về sức khỏe cũng như trong sinh hoạt.";
            }
        ?>
    </body>
</html>