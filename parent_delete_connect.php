<?php
    session_start();
    
    $con = mysqli_connect('username','password','');
    mysqli_select_db($con,'feedback');
    $user1 = $_POST['name1'];
    
    $_SESSION['id1'] = $user1;

    $user = $_SESSION['id'];
    header('location:parent_delete.php');
    
?>