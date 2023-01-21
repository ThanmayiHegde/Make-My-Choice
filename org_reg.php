<?php
    session_start();
    header('location:organisation.php');
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $name = $_POST['name'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $repeat_pass = $_POST['repeat_pass'];
    $email = $_POST['email'];
    $date_time = getdate();

    $s = "select * from org_sign where user = '$user'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        echo "Username exist";
    }
    else{
        $reg = " insert into org_sign(user,pass,repeat_pass,email,name,timings) values('$user','$pass','$repeat_pass','$email','$name','$date_time')";
        mysqli_query($con,$reg);
        echo "Successfully Registered!!";
    }
?>