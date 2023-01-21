<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $name = $_POST['user'];
    $fname = $_POST['name'];
    $pass = $_POST['pass'];
    
    

    $s = "select * from public where user = '$name' and F_Name = '$fname' and  password='$pass'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        header('location:public_feed.php');;
    }
    else{
        
        header('location:public.php');
    }
?>