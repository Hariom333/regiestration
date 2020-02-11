
<?php
session_start();
include "header.php";
include 'dbcon.php';

/*
if(isset($_SESSION['uid']))

{
	
}
else{

  header('location:admin_login.php');
}  */


?>


<?php

$qry="select * from student";

$result=mysqli_query($conn,$qry);


?>

<div class="container">
      <button onclick="location.href='add_student.php'" class="btn btn-info">ADD Now</button>   
    <a href="logout.php" class="btn btn-info btn-rounded" >logout </a>
  <h2>Student Record</h2>
   
  <table class="table table-light table-striped">
    
      <tr class="bg-secondary text-white">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Class</th>
        <th>D.O.B</th>
        <th>Ph no.</th>
        <th>Image</th>
        <th>Gender</th>
        <th>Edit</th>
        <th>Delete</th>
         <th>status</th> 
      </tr>
    
<?php
while($data=mysqli_fetch_assoc($result))
 {
?>
<tr> 
          <td><?php echo $data['id'] ?> </td>
          <td><?php echo $data['name'] ?> </td>
          <td><?php echo $data['email'] ?> </td> 
          <td><?php echo $data['class'] ?></td>
          <td><?php echo $data['dob'] ?></td>
          <td><?php echo $data['phn_no']?> </td>            
          <td><?php echo "<img src='../image/".$data['image']."' width='50' height='50'/>" ?> </td> 
           <td><?php echo ($data['gender']=='m')?'male':'female' ?> </td>
          
          <td> <a href='update.php?id=<?php echo $data['id']?>'>EDIT</a></td>
          <td> <a href='delete.php?id=<?php echo $data['id']?>' onclick="return confirm('Do you want Delete?')" > Delete </a></td>
          <td><?php echo ($data['status']=='1')?'approved':'pending' ?> </td>
      </tr>
<?php
 }





?>     

  </table>
</div>
