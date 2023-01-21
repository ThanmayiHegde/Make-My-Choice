<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $fname = $_POST['name1'];
    $lname = $_POST['name2'];
    $id = $_POST['user1'];
    $user = $_POST['user2'];
    $gender = $_POST['gen'];
    $grade = $_POST['grade'];
    $d = $_POST['doj'];
    $y = $_POST['yoj'];
    $phone = $_POST['bat'];
    $q= $_POST['qq'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    

    $s = "select * from faculty where emp_id = '$id'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        header('location:faculty.php');
    }
    else{
        $reg = " insert into faculty(emp_id,user,F_Name,L_Name,Gender,Qualification,Grade_Taught,DOJ,YOE,phone,email,password) values('$id','$user','$fname','$lname','$gender','$q','$grade','$d','$y','$phone','$email','$password')";
        mysqli_query($con,$reg);
      
        header('location:faculty.php');
        
    }
?>