<?php
  include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>
  <div class="formcontent">  <form  action="adminlogin.inc.php" method="post">
      <input type="text" name="name" placeholder="Username"><br/><br/>
      <input type="password" name="password" placeholder="Password">
      <div  class="c1"><button type ="submit" name="submit">Log in</button></div>
    </form> </div>
  </body>
</html>


