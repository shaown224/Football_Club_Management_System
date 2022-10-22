<?php
  include_once 'dbh.inc.php';

  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
  $pwd=$_POST['password'];
  $last_activity=$_POST['last_activity'];
  $sql ="SELECT * FROM admin WHERE admin_name='$name' and admin_password='$pwd'";
  $data = mysqli_query($conn,$sql);
  $result= mysqli_fetch_array($data);
  $cnt= mysqli_num_rows($data);

  if($cnt == 0)
  {
    echo "invalid";
  }
  else
  {
    mysqli_query($conn,$sql);
    echo "Login Successful";
    header("Location: adminhome.php?adminlogin=success");
  
  }

  }
  ?>
