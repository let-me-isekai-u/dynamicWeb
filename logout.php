<?php 
session_start();

    session_destroy();
?>
<p>logout thanh cong</p>

<?php 
    header("Location: login.php")
?>