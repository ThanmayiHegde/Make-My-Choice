<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $emp_id = $_POST['user1'];
    $password = $_POST['pass'];
    
    

    $s = "select * from faculty where emp_id = '$emp_id' && password='$password'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        header('location:faculty_feed.php');;
    }
    else{
        header('location:faculty.php');
    }
?>