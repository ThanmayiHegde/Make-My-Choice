<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $name1 = $_POST['name1'];
    //name2 = $_POST['name2'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $employ = $_POST['emp'];
    $gender = $_POST['gen'];
    
    $s = "select * from public where password='$pass' and user = '$user'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        header('location:public_log.php');
    }
    else{
        $reg = " insert into public(user,password,F_Name,Employment,Gender) values('$user','$pass','$name1','$employ','$gender')";
        mysqli_query($con,$reg);
        header('location:public_log.php');
    }
?>
