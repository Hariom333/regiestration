<?php 
session_start();

$id= $_SESSION['uid'];
include "header.php";
include "dbcon.php";



$qry="select * from student where id='".$_SESSION['uid']."'";
 $result=mysqli_query($conn,$qry);
;

?>
 <table class="table table-light table-striped ">
 	<tr>
 		<th>id </th>
 		<th>name </th>
 		<th>email </th>
 		<th> class</th>
 		<th>dob </th>
 		<th>phn_no </th>
 		<th>image </th>
 		<th>gender </th>
 		<th>status</th>
	</tr>

<?php
while($data=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $data['id'];?> </td>
<td><?php echo $data['name'];?> </td>
<td><?php echo $data['email'];?> </td>
<td><?php echo $data['class'];?> </td>
<td><?php echo $data['dob'];?> </td>
<td><?php echo $data['phn_no'];?> </td>
<td><?php echo "<img src='../image/".$data['image']."' width='100' height='100'/>" ?> </td>
<td><?php echo $data['gender'];?> </td>
<td><?php echo $data['status'];?> </td>
</tr>
</table>
<?php 
}
?>
   <a href="logout.php" class="btn btn-info btn-rounded" >logout </a>

