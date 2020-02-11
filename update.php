
<?php
include "header.php";
include "dbcon.php";
session_start();

/*if(isset($_SESSION['uid']))

{


  
}
else {

  header('location:login.php');
} */

$id=$_GET['id'];
$qry="select * from student where id='".$id."'";
  $result=mysqli_query($conn,$qry);
 $data=mysqli_fetch_assoc($result);

?>


  <a href="logout.php" class="btn btn-info btn-rounded" >logout </a>

<!-- Default form register -->
<form class="text-center border border-light p-5" action="update_data.php" method="POST" enctype="multipart/form-data">

   
<form class="text-center border border-light p-5" action="" method="POST" enctype="multipart/form-data">
    <h1 class="bg-info">Update</h1><br>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" class="form-control"  name="name" value=<?php echo $data['name'];?> required >
        </div>

    </div>

    
    <input type="text" class="form-control mb-4" name="email" value=<?php echo $data['email']; ?> required>
   
    <input type="text" class="form-control mb-4"  name="class" value=<?php echo $data['class'];?> required>
 
    <input type="date" class="form-control mb-4"  name="age" value="<?php echo $data['dob'];?>" required>

    <!-- Phone number -->
    <input type="text" class="form-control mb-4"  name="phone_number" value=<?php echo $data['phn_no'];?> required>
       
 <!-- E-mail -->
    <input type="file" class="form-control mb-4"  name="photo" value=<?php echo $data['image'];?>required>

 
 Gender:   <input type="radio" name="gender" value="m"
 <?php 
if($data['gender']=='m')

 echo "checked";
 ?>>male
      <input type="radio" name="gender" value="f"
      <?php 
        if($data['gender']=='f')
      echo "checked";
      ?>>female<br>

   status:<select name="status">
  <option value="">select anyone</option>      
<option value="0" 

<?php
if($data['status']=='0')
{
  echo "selected";
}
 ?>
>Pending

</option>
<option value="1" 
<?php
 if($data['status']=='1')
{

  echo "selected";
}?> >Approved



</option>

</select><br>

    
    <input type="hidden" name="id" value=<?php echo $data['id']; ?>><br>
    <button class="btn btn-info btn-rounded" type="submit" name="submit">Update</button>
</form>



