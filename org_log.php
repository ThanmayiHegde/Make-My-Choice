<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $_SESSION['id'] = $user;
    

    $s = "select * from org_sign where user = '$user' && pass='$pass'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        
        header('location:admin.php');
    }
    else{
        header('location:organisation.php');
    }
?>