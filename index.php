<html>
<head>
<?php 
include "header.php";


?>
</head>
<body>
	<div class="container">
       <img src="image/fish.jpg" class="mx-auto d-block" style="width:80%"> 

       <h2 style="color:blue;">Welcome to Management System </h2>
       <b> dear user,</b>
       <p> A student information system, student management system, </p>
      
       <p> The Indian education system is quite an old education system that still exists. It has produced so many genius minds that are making India proud all over the world. However, while it is one of the oldest systems, it is still not that developed when compared to others, which are in fact newer. This is so as the other countries have gone through growth and advancement, but the Indian education system is still stuck in old age. It faces a lot of problems that need to be sorted to let it reach its full potential.</p>
       <p>Our Indian education system faces a lot of problems that do not let it prosper and help other children succeed in life. The biggest problem which it has to face is the poor grading system. It judges the intelligence of a student on the basis of academics which is in the form of exam papers. That is very unfair to students who are good in their overall performance but not that good at specific subjects.

Moreover, they only strive to get good marks not paying attention to understanding what is taught. In other words, this encourages getting good marks through mugging up and not actually grasping the concept efficiently.

Furthermore, we see how the Indian education system focuses on theory more. Only a little percentage is given for practical. This makes them run after the bookish knowledge and not actually applying it to the real world. This practice makes them perplexed when they go out in the real world due to lack of practical knowledge.

Most importantly, the Indian education system does not emphasize enough on the importance of sports and arts. Students are always asked to study all the time where they get no time for other activities like sports and arts.</p>
       <p> is a management information system for education establishments to manage student data.</p><br><br><br><br>
      <h1>Your information</h1><br>  
  <h6>Please fill your information carefully!!</h6><br>          
 <form action="" method="post">
        Name   <input type="text"  name="name"   value=""    placeholder="Name" autocomplete="off">
        E-mail <input type="text"  name="email"  value=""    placeholder="email" autocomplete="off">
            
              <input type="submit" name="submit" value="Search" class="btn btn-success">
    </form>
      
      
    </tbody>
  </table>


<?php
  include "admin/dbcon.php";   

   if(isset($_POST['submit']))
   {

      $name=$_POST['name'];
      $email=$_POST['email'];
    $qry="select * from student where name='".$name."' AND email='".$email."'";

   $result=mysqli_query($conn,$qry);
   $row=mysqli_num_rows($result);  
   if($row==1)
 {
 $data=mysqli_fetch_assoc($result);
?>

<table border>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Class</th>
<th>DOB</th>
<th>Phn_no</th>
<th>Image</th>
<th>Gender</th>
<th>status</th>
</tr>

<tr>
<td><?php echo $data['id'];?> </td>	
<td><?php echo $data['name'];?> </td>
<td><?php echo $data['email'];?> </td>
<td><?php echo $data['class'];?> </td>
<td><?php echo $data['dob'];?> </td>
<td><?php echo $data['phn_no'];?> </td>
<td><?php echo "<img src='image/".$data['image']."'' width='50' height='50'/>"?></td>
<td><?php echo $data['gender'];?> </td>
<td> <?php

print ($data['status']>='approved') ? "pass" : "Fail";
?> </td>

else 
{
  echo 2;
}
?>
</td>
</tr>

<?php
}
else {


	echo "failed";
}

}
?>

</table>
</div>
</body>
</html>