<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $std_id = $_POST['user1'];
    $user = $_POST['user2'];
    $password = $_POST['pass'];
    
    

    $s = "select * from parent where std_id = '$std_id' && user = '$user' && password = '$password'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        header('location:parent_feed.php');
    }
    else{
        header('location:parent.php');
    }
?>