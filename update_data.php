<?php
include 'dbcon.php';

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$class=$_POST['class'];
$dob=$_POST['age'];
$phn_no=$_POST['phone_number'];

$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($tmp_name, "../image/$image");

$gender=$_POST['gender'];

$status=$_POST['status'];

$status=('approved') ? "1" : "0";


$qry=" update student set name='".$name."' ,email='".$email."' ,class='".$class."' ,dob='".$dob."' ,phn_no='".$phn_no."' ,image='".$image."' ,gender='".$gender."', status='".$status."' where id='".$id."' ";


$result=mysqli_query($conn,$qry);

if($result)
{
?>
<script>
alert("update successfull");
<?php  
header('location:dashboard.php');

?>

</script>
<?php

}


?>