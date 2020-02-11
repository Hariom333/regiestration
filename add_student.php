
<?php
include "header.php";
/*session_start();
if(isset($_SESSION['uid']))

{


	
}
else {

	header('location:login.php');
} */
?>

<form class="text-center border border-light p-5" action="" method="POST" enctype="multipart/form-data">
    <h1 class="bg-info">Regiestration</h1><br>

   <input type="text" class="form-control" placeholder="Full name" name="name" autocomplete="off"><br> 
   <input type="email" class="form-control mb-4" placeholder="E-mail" name="email" autocomplete="off">
   <input type="password" class="form-control mb-4" placeholder="password" name="password" autocomplete="off">
   <input type="text" class="form-control" placeholder="class" name="class" autocomplete="off"><br>
   <input type="date" class="form-control mb-4" placeholder="age" name="age" autocomplete="off">
   <input type="text" class="form-control mb-4" placeholder="Phone number" name="phone_number" autocomplete="off">
   <input type="file" class="form-control mb-4" placeholder="Photo" name="photo" autocomplete="off">
Gender: <input type="radio" name="gender" value="m">male
        <input type="radio" name="gender" value="f">female<br><br>

   <input type="hidden" class="form-control mb-4" placeholder="status" name="status" autocomplete="off">
   <button class="btn btn-info btn-rounded" type="submit" name="submit">Submit</button>
</form>
<?php
include "dbcon.php";

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$class=$_POST['class'];
$dob=$_POST['age'];
$phn_no=$_POST['phone_number'];

$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];

move_uploaded_file($tmp_name, "../image/$image");

$gender=$_POST['gender'];

$qry="insert into student(name,email,Password,class,dob,phn_no,image,gender,status) values ('".$name."','".$email."','".$password."','".$class."','".$dob."','".$phn_no."','".$image."','".$gender."',0)";

$result=mysqli_query($conn,$qry);
if($result)
{



 header('location:../index.php');
?>

<?php


}

}




?>