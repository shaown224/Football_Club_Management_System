<?php
  include_once 'dbh.inc.php';
  $fullname=$_POST['fullname'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
  $pwdrepeat=$_POST['pwdrepeat'];
  if($pwd==$pwdrepeat){
    $sql="insert into users(user_fullname,user_username,user_password,user_email)
     values ('$fullname','$username','$pwd','$email');";
     mysqli_query($conn,$sql);
     header("Location: userlogin.php?userlogin=success");//Home Directory
  }
?>
