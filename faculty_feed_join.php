
<?php
session_start();
$con = mysqli_connect('username','password','');
mysqli_select_db($con,'feedback');


$user = $_POST['users'];
$user1 = $_POST['users1'];
$name = $_POST['name'];
$i1 = $_POST['i1'];
$i2 = $_POST['i2'];
$i3 = $_POST['i3'];
$i4 = $_POST['i4'];
$i5 = $_POST['i5'];
$i6 = $_POST['i6'];
$i7 = $_POST['i7'];
$i8 = $_POST['i8'];
$i9 = $_POST['i9'];
$c = $_POST['co'];

$s = "select * from ffeed where emp_id = '$user'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num > 1 or $num ==1 ){
    
    $reg1 = " update ffeed set count = '$c',happy='$i1' , about_college='$i2', about_curr='$i3',workload = '$i4',remunerisation = '$i5', recommend='$i6' , preference='$i7' ,HOD = '$i8', suggestions='$i9' where emp_id = '$user'";
    mysqli_query($con,$reg1);
    header('location:faculty.php');
}
else{
    $reg = " insert into ffeed(emp_id,user,name,count,happy,about_college,about_curr,workload,remunerisation,recommend,preference,HOD,suggestions) values('$user','$user1','$name',1,'$i1','$i2','$i3','$i4','$i5','$i6','$i7','$i8','$i9')";
    mysqli_query($con,$reg);
    header('location:faculty.php');
}


    
?>
