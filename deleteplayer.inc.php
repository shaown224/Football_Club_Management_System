<?php
  include_once 'dbh.inc.php';
  $name=$_POST['name'];
  $sql ="Delete from player where player_name= '$name';";
  $data = mysqli_query($conn,$sql);
  $result= mysqli_fetch_array($data);
  $pwdsv= $result[0];

  if($pwd==$pwdsv){
    echo "Delete Successful";
    header("Location: displayplayer.php?adminlogin=success");
  }
  else{
    echo "Incorrect Password";
  }
?>
