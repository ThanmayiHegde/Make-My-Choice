
<?php
session_start();
$con = mysqli_connect('username','password','');
mysqli_select_db($con,'feedback');


$user = $_POST['users'];
$user1 = $_POST['users1'];
$i1 = $_POST['i1'];
$i2 = $_POST['i2'];
$i3 = $_POST['i3'];
$i4 = $_POST['i4'];
$i5 = $_POST['i5'];
$i6 = $_POST['i6'];
$i7 = $_POST['i7'];
$c = $_POST['co'];

$s = "select * from sfeed where std_id = '$user'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num > 1 or $num ==1 ){
    
    $reg1 = " update sfeed set count = '$c',happy='$i1' , about_college='$i2', about_faculty='$i3',best_faculty = '$i7', recommend='$i4' , preference='$i5' , suggestions='$i6' where std_id = '$user' and user = '$user1'";
    mysqli_query($con,$reg1);
    header('location:student.php');
}
else{
    $reg = " insert into sfeed(std_id,user,count,happy,about_college,about_faculty,best_faculty,recommend,preference,suggestions) values('$user','$user1',1,'$i1','$i2','$i3','$i7','$i4','$i5','$i6')";
    mysqli_query($con,$reg);
    header('location:student.php');
}


    
?>
