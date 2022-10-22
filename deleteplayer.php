<?php
  include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Player</title>
    <style>
    .heading {
            text-align: center;
            border: 1px solid black;
            background-color: rgba(26, 35, 88, 0.856);
            border-radius: 50px;
            margin: 10px;
        }
  </style>
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>
  <a href="adminhome.php"><h1 class = "heading">Admin Panel</h1></a>
    <div class="formcontent">
    <form  action="deleteplayer.inc.php" method="post">
      Delete Player data :<input type="text" name="name" placeholder="Player name">
      <div  class="c1"><button type ="submit" name="submit">Submit</button></div>
    </form></div>
  </body>
</html>
