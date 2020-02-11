<?php
session_start();
/* if(isset($_SESSION['uid']))
{

  header('location:dashboard.php');
}  */

?>

<html>
<head>
<?php
include "header.php";

?>
</head>
<body>
   <div class="container">
    <div class="card">
      <div class="card-body px-lg-5 pt-0">
    <form action="" method="POST" class="center">
     
     
      <div class="md-form">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
    </div>
    
    <div class="md-form">
      <label for="email">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>

 <div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>

  </form>
</div>

    </div>
    </div>
    <?php
    include "dbcon.php";
       
          if(isset($_POST['login']))
  
  {
     $id=$_GET['id'];
     $email=$_POST['email'];
     $password=md5($_POST['password']);
     

     $query="select * from student where email='".$email."' AND Password='".$password."' ";
      
    $run=mysqli_query($conn,$query);
    $row=mysqli_num_rows($run);
  
       if($row>0)  
       {

     $data=mysqli_fetch_assoc($run);
     $id=$data['id']; 
     $_SESSION['uid']=$id; 
     header('location:show.php');

       }
  
  else {

    echo "not correct error";
  }  
  }

/* if(isset($_SESSION['uid']))
{
header('location:show.php');

} */
else{


}
    ?>
</body>
</html>