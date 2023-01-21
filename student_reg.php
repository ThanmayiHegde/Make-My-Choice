<?php
    session_start();
    //header('location:student.php');
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $fname = $_POST['name1'];
    $lname = $_POST['name2'];
    $std_id = $_POST['user1'];
    $user = $_POST['user2'];
    $password = $_POST['pass'];
    $gender = $_POST['gen'];
    $grade = $_POST['grade'];
    $DOJ = $_POST['doj'];
    $batch = $_POST['bat'];
    $department= $_POST['dep'];
    $email = $_POST['email'];
    

    $s = "select * from student where std_id = '$std_id'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        header('location:student.php');
    }
    else{
        $reg = " insert into student(std_id,user,F_Name,L_Name,password,Gender,Grade,DOJ,Batch,Department,email) values('$std_id','$user','$fname','$lname','$password','$gender','$grade','$DOJ','$batch','$department','$email')";
        mysqli_query($con,$reg);
        header('location:student.php');
    }
?>