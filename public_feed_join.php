<?php
session_start();
$con = mysqli_connect('username','password','');
mysqli_select_db($con,'feedback');


$user = $_POST['name'];

$user1 = $_POST['users'];
$i1 = $_POST['i1'];
$i2 = $_POST['i2'];
$i3 = $_POST['i3'];
$i4 = $_POST['i4'];
$i5 = $_POST['i5'];
$i6 = $_POST['i6'];
$i7 = $_POST['i7'];
$c = $_POST['co'];

$s = "select * from pubfeed where name = '$user' and user = '$user1'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num > 1 or $num ==1 ){
    
    $reg1 = " update pubfeed set counts = '$c',awareness='$i1' , about_college='$i2', infrastructure='$i3',rate = '$i4', recommend='$i5' , like_us='$i6' , suggestions='$i7' where name = '$user' and user = '$user1'";
    mysqli_query($con,$reg1);
    header('location:public.php');
}
else{
    $reg = " insert into pubfeed(name,user,awareness,about_college,infrastructure,rate,recommend,like_us,suggestions,counts) values('$user','$user1','$i1','$i2','$i3','$i4','$i5','$i6','$i7',1)";
    mysqli_query($con,$reg);
    header('location:public.php');
}


    
?>
