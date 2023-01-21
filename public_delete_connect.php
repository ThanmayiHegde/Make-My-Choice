<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $user = $_SESSION['id'];
    $name = $_POST['name1'];
    
    $_SESSION['id1'] = $name;
    
    header('location:public_delete.php');
    
?>