<?php
  include_once 'dbh.inc.php';
  
  if(isset($_POST['name'])){
    
    $uname    = $_POST['name'];
    $password = $_POST['password'];
    
    $sql="select * from users where user_username='".$uname."'AND user_password='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        header("Location: userhome.php?userlogin=success");
       
    }
    else{
        echo " You Have Entered Incorrect Password";
      
    }
  }
?>
