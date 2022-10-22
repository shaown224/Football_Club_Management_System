<?php
  include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .homeedit {
  text-align: center;
  border: 1px solid black;
  border-redius: 40px;
  background: rgba(26, 8, 1, 0.4);
}
</style>
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>
  <div class= "homeedit"><a href="index.php"><h1>Main Home</h1></a></div>
  <div class="formcontent">  <form  action="userlogin.inc.php" method="post">
      <input type="text" name="name" placeholder="Username"><br/><br/>
      <input type="password" name="password" placeholder="Password">
      <div  class="c1"><button type ="submit" name="submit">Log in</button></div>
      <div> <a href="signup.php">Crate new account here?</a></div>
    </form> </div>
  </body>
</html>
