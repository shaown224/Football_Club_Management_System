<?php
  include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crate and login</title>

    <style>
      .homeedit {
  text-align: center;
  border: 1px solid black;
  border-redius: 40px;
  background: rgba(26, 8, 1, 0.4);
}
.c1{
  background-color:#0092db;
  width: 500;
  margin: auto;
  border-radius: 15px;
  margin-top: 40px;
}
      
    </style>
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>

  <div class= "homeedit"><a href="index.php"><h1>Main Home</h1></a></div>
    <div class="formcontent">
    <form  action="signup.inc.php" method="post"><br>
      Full Name: <input type="text" name="fullname" placeholder="Full Name"><br>
      Username: <input type="text" name="username" placeholder="Username"><br>
      E-mail: <input type="text" name="email" placeholder="E-mail"><br>
      Password: <input type="password" name="pwd" placeholder="Password"><br>
      Confirm Password: <input type="password" name="pwdrepeat" placeholder="Confirm Password"><br>
      <div  class="c1"><button type ="submit" name="submit">Sign up</button></div>
    </form></div>
      <div>
      <form  action="userlogin.php" method="post"><br>
      <div  style="width: 500px;margin-left:37%;"><button type ="submit" name="submit">ALREADY HAVE ACCOUNT?</button></div>
      </form></div>
  </body>
</html>
