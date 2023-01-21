<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $user = $_POST['name1'];
    
    $_SESSION['id1'] = $user;
    header('location:student_year_count.php');
    
?>