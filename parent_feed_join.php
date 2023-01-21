
<?php
session_start();
$con = mysqli_connect('username','password','');
mysqli_select_db($con,'feedback');


$user2 = $_POST['users2'];
$user3 = $_POST['users3'];
$user4 = $_POST['users4'];
$name = $_POST['name'];
$i1 = $_POST['i1'];
$i2 = $_POST['i2'];
$i3 = $_POST['i3'];
$i4 = $_POST['i4'];
$i5 = $_POST['i5'];
$i6 = $_POST['i6'];
$c = $_POST['co'];

$s = "select * from pfeed where std_id = '$user2' and user='$user3'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num > 1 or $num ==1 ){
    
    $reg1 = " update pfeed set counts = '$c',happy='$i1' , about_college='$i2', about_faculty='$i3' , rate='$i4' , progress='$i5' , suggestions='$i6' where std_id = '$user2' and user = '$user3'";
    mysqli_query($con,$reg1);
    header('location:parent.php');
}
else{
    $reg = " insert into pfeed(name,std_id,user,happy,about_college,about_faculty,rate,progress,suggestions,counts,stdname) values('$name','$user2','$user3','$i1','$i2','$i3','$i4','$i5','$i6',1,'$user4')";
    mysqli_query($con,$reg);
    header('location:parent.php');
}


    
?>
