<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $std_id = $_POST['user1'];
    $password = $_POST['pass'];
    
    

    $s = "select * from student where std_id = '$std_id' && password='$password'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        header('location:student_feed.php');
    }
    else{
        header('location:student.php');
    }
?>