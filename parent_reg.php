<?php
    session_start();
    header('location:parent.php');
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'feedback');
    $fname = $_POST['name1'];
    $lname = $_POST['name2'];
    $std_id = $_POST['user1'];
    $user = $_POST['user2'];
    $password = $_POST['pass'];
    $gender = $_POST['gen'];
    $q = $_POST['qq'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $name = $_POST['st'];
    

    $s = "select * from parent where std_id = '$std_id'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        echo "Username exist";
    }

    else{
        $reg = " insert into parent(std_id,user,F_Name,L_Name,password,Gender,Qualification,phone,age,stdname) values('$std_id','$user','$fname','$lname','$password','$gender','$q','$phone','$age','$name')";
        mysqli_query($con,$reg);
        echo "Successfully Registered!!";
    }
?>