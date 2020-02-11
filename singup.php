
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
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
    </div>

 <div>
    <button type="submit" class="btn btn-primary" name="singup">SingUp</button>

  
  </form>

      <?php
    include "dbcon.php";
       
          if(isset($_POST['singup']))
  
  {
     $name=$_POST['email'];
     $password=$_POST['password'];
     $encrptpassword=md5($password);

     $query="insert into user (name,password) values('".$name."','".$encrptpassword."')";
   
     $run=mysqli_query($conn,$query);
   
if($run)
{
  header('location:login.php'); 
}


else {

  echo "enter valid information";

}   


}

    ?>
</body>
</html>