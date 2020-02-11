
<?php  
include "dbcon.php";

$id=$_GET['id'];

$qry="delete from student where id='".$id."'";
$result=mysqli_query($conn,$qry);

header('location:dashboard.php');





?>