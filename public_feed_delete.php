
<?php
session_start();
$con = mysqli_connect('username','password','');
mysqli_select_db($con,'feedback');
$user = $_POST['name1'];
$user1 = $_POST['name2'];

$_SESSION['id'] = $user1;

$sql = "delete from pubfeed where pubfeed.user = $user1 and pubfeed.name = $user";       
$result = mysqli_query($con, $sql);



header('location:public_after_delete.php');



    
?>