
<?php
session_start();
$con = mysqli_connect('username','userame','');
mysqli_select_db($con,'feedback');
$user = $_SESSION['id1'];


$sql = "create trigger delete_feedback
        after delete
        on pubfeed where pubfeed.counts > 4 for each row select * from pubfeed";
        
$r = mysqli_query($con, $sql);


$s = "select * from pubfeed where user = '$user'";
$result = mysqli_query($con, $s);

header('location:admin_public.php');



    
?>